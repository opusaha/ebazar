<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function shop(){
        $products =Product::take(20)->get();
        return view('home.shop',compact('products'));
    }
    public function cart(){
        $products =Product::take(20)->get();
        return view('home.cart',compact('products'));
    }
}
