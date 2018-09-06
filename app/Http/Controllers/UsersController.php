<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    protected $rules = [
        "name"     => "required|max:255",
        "email"    => "required|email|max:255",
        "facebook" => "max:255",
        "youtube"  => "max:255",
        "about"    => "max:1000",
    ];

    public function __construct()
    {
        $this->middleware("admin", ["except" => ["profile", "profileUpdate", "products", "comments"]]);
    }

    public function index()
    {
        $users = User::addedRelations()->paginate(5);
        return view("admin.users.index", compact("users"));
    }

    public function create()
    {
        return view("admin.users.create");
    }

    public function store(Request $request)
    {
        $data = $request->validate($this->rules);
        $request->validate(["email" => "unique:users", "name" => "unique:users"]);

        $data["slug"] = str_slug($data["name"]);
        $data['password'] = bcrypt("123123");

        User::create($data);

        return back()->withSuccess("User created successfully !");
    }

    public function profile()
    {
        $user = auth()->user();
        return view("admin.users.profile", compact("user"));
    }

    public function profileUpdate(Request $request)
    {
        $user = auth()->user();

        $data = $request->validate($this->rules);
        $request->validate([
            "email" => "unique:users,email," . $user->id,
            "name"  => "unique:users,name," . $user->id
        ]);

        $data = checkForPassword($data);
        $data["slug"] = str_slug($data["name"]);
        $user->checkForPhoto($request, "update");

        $user->update($data);

        return back()->withSuccess("Profile settings updated successfully !");
    }

    public function destroy(User $user)
    {
        if ($user->id == 1 || auth()->id() == $user->id) {
            return back()->withError("Access denied !");
        }

        foreach ($user->products as $product) {
            $product->deletePhoto();
        }

        $user->deletePhoto();
        $user->delete();

        return back()->withSuccess("User and all associated products deleted successfully");
    }


    // Additional methods
    public function makeAdmin(User $user)
    {
        $user->is_admin = 1;
        $user->save();

        return back()->withSuccess("Admin permissions added successfully !");
    }

    public function removeAdmin(User $user)
    {
        if (auth()->id() != $user->id && $user->id != 1) {
            $user->is_admin = 0;
            $user->save();
        } else {
            return back()->withError("Access denied !");
        }

        return back()->withSuccess("Admin permissions removed successfully !");
    }

    public function products(User $user)
    {
        $products = $user->products()->addedRelations()->latest()->paginate(5);
        return view("admin.users.products", compact("products", "user"));
    }

    public function comments(User $user)
    {
        $comments = $user->comments()->addedRelations()->latest()->paginate(5);
        return view("admin.users.comments", compact("comments", "user"));
    }


}
