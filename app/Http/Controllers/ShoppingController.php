<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use Mail;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{

    public function add(Product $product)
    {
        $qty = request("qty") ? request("qty") : 1;

        $cartItem = Cart::add([
            "id"    => $product->id,
            "name"  => $product->name,
            "price" => $product->price,
            "qty"   => $qty
        ]);

        Cart::associate($cartItem->rowId, 'App\Product');

        return redirect()->route("cart.show")->withSuccess("Product added successfully !");
    }

    public function remove($rowId)
    {
        Cart::remove($rowId);
        return back()->withSuccess("Product removed successfully !");
    }

    public function increase($rowId, $qty)
    {
        Cart::update($rowId, $qty + 1);
        return back()->withSuccess("Quantity increased successfully");
    }

    public function decrease($rowId, $qty)
    {
        Cart::update($rowId, $qty - 1);
        return back()->withSuccess("Quantity decreased successfully");
    }

    public function showCart()
    {
        $products = Cart::content();
        return view("front.cart", compact("products"));
    }

    public function checkout()
    {
        $products = Cart::content();
        if (!$products->count()) {
            return back()->withInfo("You must add some products in cart first !");
        }
        return view("front.checkout", compact("products"));
    }

    public function pay(Request $request)
    {
//        foreach (Cart::content() as $content) {
//            $product = Product::find($content->id);
//            $product->quantity = $product->quantity - $content->qty;
//            $product->update();
//        }

        Stripe::setApiKey("sk_test_C952oQEZWsF7KSE3mCQ7L1kh");

        $token = $request->stripeToken;
        $email = $request->stripeEmail;

        Charge::create(array(
            "amount"      => Cart::total() * 100,
            "currency"    => "usd",
            "description" => "Buy some products",
            "source"      => $token
        ));

        Mail::to($email)->send(new \App\Mail\PurchaseMail);

        Cart::destroy();
        return redirect()->home()->withSuccess("Purchase successful. Wait for our email");
    }


}
