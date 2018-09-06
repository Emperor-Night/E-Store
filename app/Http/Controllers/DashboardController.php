<?php

namespace App\Http\Controllers;

use App\Category;
use App\Brand;
use App\Condition;
use App\Product;
use App\Photo;
use App\Comment;
use App\User;

class DashboardController extends Controller
{

    public function index()
    {
        $totalCategories = Category::count();
        $totalBrands = Brand::count();
        $totalConditions = Condition::count();
        $totalProducts = Product::count();
        $totalPhotos = Photo::count();
        $totalComments = Comment::count();
        $totalUsers = User::count();

        return view("admin.welcome",
            compact(
                "totalCategories", "totalBrands", "totalConditions", "totalProducts",
                "totalPhotos", "totalComments", "totalUsers"
            ));
    }


}
