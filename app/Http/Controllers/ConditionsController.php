<?php

namespace App\Http\Controllers;

use App\Condition;
use Illuminate\Http\Request;
use Validator;

class ConditionsController extends Controller
{

    protected $rules = [
        "name" => "required|max:255"
    ];

    public function index()
    {
        $conditions = Condition::addedRelations()->paginate(5);
        return view("admin.conditions.index", compact("conditions"));
    }

    public function create()
    {
        return view("admin.conditions.form");
    }

    public function store(Request $request)
    {
        $data = $request->validate($this->rules);
        $request->validate(["name" => "unique:conditions"]);

        $data["slug"] = str_slug($data["name"]);

        Condition::create($data);

        return back()->withSuccess("Condition created successfully !");
    }

    public function edit(Condition $condition)
    {
        return view("admin.conditions.form", compact("condition"));
    }

    public function update(Request $request, Condition $condition)
    {
        $data = $request->validate($this->rules);
        $request->validate(["name" => "unique:conditions,name," . $condition->id]);

        $data["slug"] = str_slug($data["name"]);

        $condition->update($data);

        return redirect()->route("conditions.index")
            ->withSuccess("Condition updated successfully !");
    }

    public function destroy(Condition $condition)
    {
        foreach ($condition->products as $product) {
            $product->deletePhoto();
        }

        $condition->delete();

        return back()->withSuccess("Condition and all associated products deleted successfully !");
    }


    // Additional methods
    public function bulkDestroy(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "ids" => "required"
        ]);

        if ($validator->fails()) {
            return ["response" => $validator->messages(), "status" => false];
        } else {
            foreach ($request->ids as $id) {
                $condition = Condition::findOrFail($id);
                foreach ($condition->products as $product) {
                    $product->deletePhoto();
                }
                $condition->delete();
            }
            return ["status" => true];
        }

    }

    public function products(Condition $condition)
    {
        $products = $condition->products()->addedRelations()->latest()->paginate(5);
        return view("admin.conditions.products", compact("products", "condition"));
    }

    public function comments(Condition $condition)
    {
        $comments = $condition->comments()->addedRelations()->latest()->paginate(5);
        return view("admin.conditions.comments", compact("comments", "condition"));
    }


}
