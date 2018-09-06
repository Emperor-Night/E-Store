<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Validator;

class CategoriesController extends Controller
{

    protected $rules = [
        "name" => "required|max:255"
    ];

    public function index()
    {
        $categories = Category::addedRelations()->paginate(5);
        return view("admin.categories.index", compact("categories"));
    }

    public function create()
    {
        return view("admin.categories.form");
    }

    public function store(Request $request)
    {
        $data = $request->validate($this->rules);
        $request->validate(["name" => "unique:categories"]);

        $data["slug"] = str_slug($data["name"]);

        Category::create($data);

        return back()->withSuccess("Category created successfully !");
    }

    public function edit(Category $category)
    {
        return view("admin.categories.form", compact("category"));
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate($this->rules);
        $request->validate(["name" => "unique:categories,name," . $category->id]);

        $data["slug"] = str_slug($data["name"]);

        $category->update($data);

        return redirect()->route("categories.index")
            ->withSuccess("Category updated successfully !");
    }

    public function destroy(Category $category)
    {
        foreach ($category->products as $product) {
            $product->deletePhoto();
        }

        $category->delete();

        return back()->withSuccess("Category and all associated products deleted successfully !");
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
                $category = Category::findOrFail($id);
                foreach ($category->products as $product) {
                    $product->deletePhoto();
                }
                $category->delete();
            }
            return ["status" => true];
        }

    }

    public function products(Category $category)
    {
        $products = $category->products()->addedRelations()->latest()->paginate(5);
        return view("admin.categories.products", compact("products", "category"));
    }

    public function comments(Category $category)
    {
        $comments = $category->comments()->addedRelations()->latest()->paginate(5);
        return view("admin.categories.comments", compact("comments", "category"));
    }


}
