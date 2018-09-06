<?php

namespace App\Http\Controllers;

use App\Category;
use App\Brand;
use App\Condition;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected $rules = [
        "name"         => "required|max:255",
        "description"  => "required",
        "price"        => "required|integer",
        "quantity"     => "required|integer",
        "is_android"   => "required|boolean",
        "is_threeD"    => "required|boolean",
        "category_id"  => "required|integer",
        "brand_id"     => "required|integer",
        "condition_id" => "required|integer"
    ];

    public function index()
    {
        $products = Product::addedRelations()->latest()->paginate(5);
        return view("admin.products.index", compact("products"));
    }

    public function create()
    {
        $categories = Category::pluck("name", "id")->all();
        $brands = Brand::pluck("name", "id")->all();
        $conditions = Condition::pluck("name", "id")->all();

        if (!$categories) {
            return redirect()->route("categories.create")
                ->withInfo("Please create a category first!");
        }

        if (!$brands) {
            return redirect()->route("brands.create")
                ->withInfo("Please create a brand first!");
        }

        if (!$conditions) {
            return redirect()->route("conditions.create")
                ->withInfo("Please create a conditions first!");
        }

        return view("admin.products.form", compact("categories", "brands", "conditions"));
    }

    public function store(Request $request)
    {
        $data = $request->validate($this->rules);
        $request->validate(["name" => "unique:products"]);

        $data['slug'] = str_slug($data['name']);
        $data['user_id'] = auth()->id();

        $product = new Product($data);
        $product->checkForPhoto($request);
        $product->save();

        return back()->withSuccess("Product created successfully !");
    }

    public function edit(Product $product)
    {
        $categories = Category::pluck("name", "id")->all();
        $brands = Brand::pluck("name", "id")->all();
        $conditions = Condition::pluck("name", "id")->all();

        return view("admin.products.form", compact("product", "categories", "brands", "conditions"));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate($this->rules);
        $request->validate(["name" => "unique:products,name," . $product->id]);

        $data['slug'] = str_slug($data['name']);

        $product->checkForPhoto($request, "update");
        $product->update($data);

        return redirect()->route("products.index")
            ->withSuccess("Product updated successfully ");
    }

    public function destroy(Product $product)
    {
        $product->deletePhoto();
        $product->delete();

        return back()->withSuccess("Product deleted successfully !");
    }

    public function comments(Product $product)
    {
        $comments = $product->comments()->addedRelations()->latest()->paginate(5);
        return view("admin.products.comments", compact("comments", "product"));
    }


}
