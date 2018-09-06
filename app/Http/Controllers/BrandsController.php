<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Validator;

class BrandsController extends Controller
{

    protected $rules = [
        "name" => "required|max:255"
    ];

    public function index()
    {
        $brands = Brand::addedRelations()->paginate(5);
        return view("admin.brands.index", compact("brands"));
    }

    public function create()
    {
        return view("admin.brands.form");
    }

    public function store(Request $request)
    {
        $data = $request->validate($this->rules);
        $request->validate(["name" => "unique:brands"]);

        $data["slug"] = str_slug($data["name"]);

        Brand::create($data);

        return back()->withSuccess("Brand created successfully !");
    }

    public function edit(Brand $brand)
    {
        return view("admin.brands.form", compact("brand"));
    }

    public function update(Request $request, Brand $brand)
    {
        $data = $request->validate($this->rules);
        $request->validate(["name" => "unique:brands,name," . $brand->id]);

        $data["slug"] = str_slug($data["name"]);

        $brand->update($data);

        return redirect()->route("brands.index")
            ->withSuccess("Brand updated successfully !");
    }

    public function destroy(Brand $brand)
    {
        foreach ($brand->products as $product) {
            $product->deletePhoto();
        }

        $brand->delete();

        return back()->withSuccess("Brand and all associated products deleted successfully !");
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
                $brand = Brand::findOrFail($id);
                foreach ($brand->products as $product) {
                    $product->deletePhoto();
                }
                $brand->delete();
            }
            return ["status" => true];
        }

    }

    public function products(Brand $brand)
    {
        $products = $brand->products()->addedRelations()->latest()->paginate(5);
        return view("admin.brands.products", compact("products", "brand"));
    }

    public function comments(Brand $brand)
    {
        $comments = $brand->comments()->addedRelations()->latest()->paginate(5);
        return view("admin.brands.comments", compact("comments", "brand"));
    }


}
