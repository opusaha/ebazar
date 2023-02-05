<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function postCart(Request $request)
    {
        if (Auth::check()) {
            $id = $request->input('product_id');
            $qty = $request->input('product_Qty');
            $cartInfo = Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->get();
            if (count($cartInfo) > 0) {
                $myItem = Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->first();
                $myItem->quantity = $myItem->quantity + $qty;
                $myItem->total_price = $myItem->quantity * $myItem->price;
                $myItem->save();
                return response()->json(['status' => Product::findOrFail($id)->name . ' is add to your cart']);
            } else {
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $id;
                $cart->quantity = $qty;
                $cart->price = Product::findOrFail($id)->price;
                $cart->total_price = $cart->quantity * $cart->price;
                $cart->save();
                return response()->json(['status' => Product::findOrFail($id)->name . ' is add to your cart']);
            }
        } else {
            return response()->json(['status' => 'Please login first']);
        }
    }
    public function cartDelete($id = null)
    {
        Cart::findOrFail($id)->delete();
        Session::flash('success', 'Product removed from cart successfully');
        return redirect()->route('home');
    }
}
