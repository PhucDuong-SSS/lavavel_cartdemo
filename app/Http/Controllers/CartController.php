<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    public function addCart($productId)
    {
        $product  = Product::findorFail($productId);
        $oldCart = session('cart');
        $cart = new Cart($oldCart);
        $cart->addCart($product);
        session()->put('cart',$cart);
        return back()-> with('successAddCart','Add cart successfully');

    }
    public function showCart()
    {
        $carts = session('cart');
        return view('cart.show',compact('carts'));
    }
}
