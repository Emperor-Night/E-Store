<?php

Route::match(['GET', 'POST'], '/', "FrontEndController@index")->name("home");
Route::get('/product/{product}', "FrontEndController@singleProduct")->name("product.single");

Route::match(['GET', 'POST'], '/user/{user}/products', "FrontEndController@userProducts")->name("user.products");
Route::match(['GET', 'POST'], '/category/{category}/products', "FrontEndController@categoryProducts")->name("category.products");
Route::match(['GET', 'POST'], '/brand/{brand}/products', "FrontEndController@brandProducts")->name("brand.products");
Route::match(['GET', 'POST'], '/condition/{condition}/products', "FrontEndController@conditionProducts")->name("condition.products");
Route::match(['GET', 'POST'], '/android/{bool}/products', "FrontEndController@androidProducts")->name("android.products");
Route::match(['GET', 'POST'], '/3D/{bool}/products', "FrontEndController@threeDProducts")->name("threeD.products");


Route::get('/cart', "ShoppingController@showCart")->name("cart.show");
Route::post('/cart/add/{product}', "ShoppingController@add")->name("cart.add");
Route::delete('/cart/remove/{rowId}', "ShoppingController@remove")->name("cart.remove");
Route::post('/cart/increase/{rowId}/{qty}', "ShoppingController@increase")->name("cart.increase");
Route::post('/cart/decrease/{rowId}/{qty}', "ShoppingController@decrease")->name("cart.decrease");
Route::get('/cart/checkout', "ShoppingController@checkout")->name("cart.checkout");
Route::post('/cart/checkout', "ShoppingController@pay")->name("cart.pay");


Auth::routes();


Route::group(["prefix" => "admin", "middleware" => "auth"], function () {

    Route::get('/dashboard', 'DashboardController@index')->name("dashboard");

    Route::get('/settings', "SettingsController@edit")->name("settings.edit");
    Route::patch('/settings', "SettingsController@update")->name("settings.update");

    Route::get('/users/profile', "UsersController@profile")->name("users.profile");
    Route::patch('/users/profile', "UsersController@profileUpdate")->name("users.profile.update");

    Route::patch('/users/{user}/makeAdmin', "UsersController@makeAdmin")->name("users.make.admin");
    Route::patch('/users/{user}/removeAdmin', "UsersController@removeAdmin")->name("users.remove.admin");

    Route::patch('/comments/{comment}/approve', "CommentsController@approveComment")->name("comments.approve");
    Route::patch('/comments/{comment}/unApprove', "CommentsController@unApproveComment")->name("comments.unApprove");

    Route::get("/photos", "PhotosController@index")->name("photos.index");
    Route::delete("/photos/{photo}", "PhotosController@destroy")->name("photos.destroy");


    Route::get('/users/{user}/comments', "UsersController@comments")->name("users.comments");
    Route::get('/category/{category}/comments', "CategoriesController@comments")->name("categories.comments");
    Route::get('/brand/{brand}/comments', "BrandsController@comments")->name("brands.comments");
    Route::get('/condition/{condition}/comments', "ConditionsController@comments")->name("conditions.comments");
    Route::get('/product/{product}/comments', "ProductsController@comments")->name("products.comments");


    Route::get("/users/{user}/products", "UsersController@products")->name("users.products");
    Route::get("/categories/{category}/products", "CategoriesController@products")->name("categories.products");
    Route::get("/brands/{brand}/products", "BrandsController@products")->name("brands.products");
    Route::get("/conditions/{condition}/products", "ConditionsController@products")->name("conditions.products");


    Route::delete("/categories/bulkDestroy", "CategoriesController@bulkDestroy")->name("categories.bulk.destroy");
    Route::delete("/brands/bulkDestroy", "BrandsController@bulkDestroy")->name("brands.bulk.destroy");
    Route::delete("/conditions/bulkDestroy", "ConditionsController@bulkDestroy")->name("conditions.bulk.destroy");
    Route::delete("/photos/bulkDestroy/photos", "PhotosController@bulkDestroy")->name("photos.bulk.destroy");
    Route::delete('/comments/bulkDestroy', "CommentsController@bulkDestroy")->name("comments.bulk.destroy");

    Route::post("/comments/{product}/store", "CommentsController@store")->name("comment.store");


    Route::resources([
        "products"   => "ProductsController",
        "categories" => "CategoriesController",
        "brands"     => "BrandsController",
        "conditions" => "ConditionsController",
        "users"      => "UsersController",
        "comments"   => "CommentsController"
    ]);


});
