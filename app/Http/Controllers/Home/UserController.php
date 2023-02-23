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
        $products =Product::latest()->paginate();
        return view('home.shop',compact('products'));
    }
    public function singleProduct($slug=null, $id=null){
        $product = Product::findOrFail($id);
        return view('home.singleProduct',compact('product'));
    }
    public function cart(){
        $carts =Cart::where('user_id',Auth::id())->get();
        return view('home.cart',compact('carts'));
    }
}
