<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Review;
use App\User;

//- проба залить 

class MainController extends Controller
{
    public function index()
    {

        /*$review = Review::find(1);                  
        dd( $review->user->name );*/

        /*$product = Product::find(1);
        $reviews = $product->reviews();
        dd( $reviews->count());*/        


        /*$category = Category::find(1);*/
        /*::find(1) -  Метод делает выборку из таблицы по id*/
        /*$products = $category->products;
        dd( $products->count() );*/

        /*$product = Product::find(1);
        dd( $product->category->name);*/

    	$categories = Category::with('products')->get();
    	$products = Product::with('category')->where('recommended', 1)->paginate(8);
        $reviews = Review::orderBy('created_at', 'DESC')->paginate(5);            
    	/*$products = Product::where('recommended', '=', 1);*/
    	/*dd($products);*/
    	return view('main.index', compact('categories', 'products', 'reviews'));
    }
    public function category(string $slug)
    {
    	$category = Category::firstWhere('slug', $slug);
    	$products = Product::where('category_id', $category->id)->paginate(8);
        /*$products = Product::where('category_id', $category->id)->simplePaginate(8);*/
    	return view('shop.category', compact('category', 'products'));
    }

    public function contacts()
    {

        $title = 'Contacts';        
        return view('main.contacts', compact('title'));  
    }  

    public function product(string $slug)
    {
        $product = Product::firstWhere('slug', $slug);
       /* dd($product);*/
        $productName = $product->name;
        $title = $productName; 
        $reviewsProduct = Review::orderBy('created_at', 'DESC')->where('product_id', $product->id)->get();       
        return view('shop.product', compact('title', 'product', 'reviewsProduct'));  
    }
    public function getReview(Request $request)
    {
        $review = new Review();
        $review->review = $request->comment;
        $review->user_id = $request->user;
        $review->product_id = $request->product;
        $review->save(); // save() сохраняет данные модели в базу данных
        return back();
        /*header('Location: ' . $ SERVER)*/        
    }

    function test()
    {
        # code...
    }
    
}


/*$products = Product::where('recommended', '=', 1)->where ('price', '>', 100)->where('category_id', 3); */
