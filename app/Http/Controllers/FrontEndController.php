<?php

namespace App\Http\Controllers;

use App\Category;
use App\Brand;
use App\Condition;
use App\Product;
use App\User;

class FrontEndController extends Controller
{

    public function index()
    {
        $products = Product::filter()->paginate(20);

        if (request()->ajax()) {
            return makeAjaxResults($products);
        }

        return view("front.index", compact("products"));
    }

    public function singleProduct(Product $product)
    {
        return view("front.singleProduct", compact("product"));
    }

    public function userProducts(User $user)
    {
        $products = $user->products()->filter()->paginate(20);

        if (request()->ajax()) {
            return makeAjaxResults($products);
        }

        return view("front.index", compact("user", "products"));
    }

    public function categoryProducts(Category $category)
    {
        $products = $category->products()->filter()->paginate(20);

        if (request()->ajax()) {
            return makeAjaxResults($products);
        }

        return view("front.index", compact("category", "products"));
    }

    public function brandProducts(Brand $brand)
    {
        $products = $brand->products()->filter()->paginate(20);

        if (request()->ajax()) {
            return makeAjaxResults($products);
        }

        return view("front.index", compact("brand", "products"));
    }

    public function conditionProducts(Condition $condition)
    {
        $products = $condition->products()->filter()->paginate(20);

        if (request()->ajax()) {
            return makeAjaxResults($products);
        }

        return view("front.index", compact("condition", "products"));
    }

    public function androidProducts($bool)
    {
        $number = convertBoolToNumber($bool);
        $products = Product::where("is_android", $number)->filter()->paginate(20);

        if (request()->ajax()) {
            return makeAjaxResults($products);
        }

        return view("front.index", compact("products"));
    }

    public function threeDProducts($bool)
    {
        $number = convertBoolToNumber($bool);
        $products = Product::where("is_threeD", $number)->filter()->paginate(20);

        if (request()->ajax()) {
            return makeAjaxResults($products);
        }

        return view("front.index", compact("products"));
    }


}
