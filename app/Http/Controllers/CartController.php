<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;
use App\Product;

class CartController extends Controller
{
    public function add(Request $request)
    {
    	//Добавление в сессию
    	/*\Session::put('cart', 'Hello!');*/
    	$product = Product::find($request->product_id);
    	$cart = new CartService();
    	$cart->add($product, $request->qty);
    	return view('shop._cart');
    }
}

