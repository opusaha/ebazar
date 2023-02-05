<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function shop(){
        $products =Product::take(20)->get();
        return view('home.shop',compact('products'));
    }
    public function cart(){
        $carts =Cart::where('user_id',Auth::id())->get();
        return view('home.cart',compact('carts'));
    }
}
