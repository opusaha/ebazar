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
        $id = $request->input('product_id');
        if (Auth::check()) {
            $qty = $request->input('product_Qty');
            $cartInfo = Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->get();
            if (count($cartInfo) > 0) {
                $myItem = Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->first();
                $product = Product::findOrFail($id);
                if($product->special_price != null){
                    $price = $product->special_price;
                }else{
                    $price = $product->price;
                }
                $myItem->quantity = $myItem->quantity + $qty;
                $myItem->total_price = $myItem->quantity * $price;
                $myItem->save();
                return response()->json(['status' => Product::findOrFail($id)->name . ' is add to your cart']);
            } else {
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $id;
                $cart->quantity = $qty;
                $product = Product::findOrFail($id);
                if($product->special_price != null){
                    $cart->price = $product->special_price;
                }else{
                    $cart->price = $product->price;
                }
                $cart->total_price = $cart->quantity * $cart->price;
                $cart->save();
                return response()->json(['status' => Product::findOrFail($id)->name . ' is add to your cart']);
            }
        } else {
            return response()->json(['status' => 'Please login first. To add '.Product::findOrFail($id)->name .' on your Cart.']);
        }
    }
    public function delete(Request $request)
    {
        Cart::findOrFail($request->input('product_id'))->delete();
        return response()->json(['status' => 'Product removed from cart successfully']);
    }
    public function data()
    {
        $carts = Cart::where('user_id', Auth::id())->get();
        return response()->json(['carts' => $carts]);
    }
    public function show($id)
    {
        $product = Product::find($id);
        return response()->json([
            'product' => $product
        ]);
    }
    public function showSingle($slug=null, $id=null)
    {
        $product = Product::find($id);
        return response()->json([
            'product' => $product
        ]);
    }
    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return response()->json(['success' => true]);
    }
}
