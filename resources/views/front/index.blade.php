<?php

$currentRoute = Route::currentRouteName();

if ($currentRoute == "user.products") {
    $title = "User";
    $heading = "User | " . $user->name . " | products";
    $footer = "No user product found";
} elseif ($currentRoute == "category.products") {
    $title = "Category";
    $heading = "Category | " . $category->name . " | products";
    $footer = "No category product found";
} elseif ($currentRoute == "brand.products") {
    $title = "Brand";
    $heading = "Brand | " . $brand->name . " | products";
    $footer = "No brand product found";
} elseif ($currentRoute == "condition.products") {
    $title = "Condition";
    $heading = "Condition | " . $condition->name . " | products";
    $footer = "No condition product found";
} elseif ($currentRoute == "android.products") {
    $title = "Android";
    $heading = "Android products";
    $footer = "No android product found";
} elseif ($currentRoute == "threeD.products") {
    $title = "3D";
    $heading = "3D products";
    $footer = "No 3D product found";
} else {
    $title = "All";
    $heading = "All products";
    $footer = "No products found";
}

?>

@extends("front.layout.front")

@section("title")
    {{ $title . " products" }}
@endsection

@section("content")

    @if(count($products))
        <h3 class="mb-4"> {{ $heading }} </h3>
        @include("front.productsTemplate")
    @else
        <h3 class="text-center"> {{ $footer }} </h3>
    @endif


@endsection