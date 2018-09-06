<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Product;
use Illuminate\Http\Request;
use Validator;

class CommentsController extends Controller
{

    protected $rules = [
        "comment" => "required"
    ];

    public function index()
    {
        $comments = Comment::addedRelations()->latest()->paginate(5);
        return view("admin.comments.index", compact("comments"));
    }

    public function store(Request $request, Product $product)
    {
        $data = $request->validate($this->rules);
        $data['body'] = $data["comment"];
        $data['user_id'] = auth()->id();
        $data['category_id'] = $product->category_id;
        $data['brand_id'] = $product->brand_id;
        $data['condition_id'] = $product->condition_id;

        $product->comments()->create($data);

        return back()->withSuccess("Comment created successfully ! Please wait to be approved !");
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back()->withSuccess("Comment deleted successfully !");
    }


    // Additional methods
    public function approveComment(Comment $comment)
    {
        $comment->status = 1;
        $comment->save();

        return back()->withSuccess("Comment approved successfully !");
    }

    public function unApproveComment(Comment $comment)
    {
        $comment->status = 0;
        $comment->save();

        return back()->withSuccess("Comment unapproved successfully !");
    }

    public function bulkDestroy(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "ids" => "required"
        ]);

        if ($validator->fails()) {
            return ["response" => $validator->messages(), "status" => false];
        } else {
            foreach ($request->ids as $id) {
                Comment::findOrFail($id)->delete();
            }
            return ["status" => true];
        }

    }


}
