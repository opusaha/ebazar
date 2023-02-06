<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishController extends Controller
{
    public function store(Request $request){
        $id = $request->input('product_id');
        if (Auth::check()) {
            $wishlists = Wishlist::where('user_id',Auth::id())->where('product_id',$id)->get();
            if(count($wishlists) > 0){
                return response()->json(['status' => Product::findOrFail($id)->name . ' is already available on your wishlist']);
            }else{
                $wishlist = new Wishlist();
                $wishlist->user_id = Auth::user()->id;
                $wishlist->product_id = $id;
                $wishlist->save();
                return response()->json(['status' => Product::findOrFail($id)->name . ' is added on your wishlist']);
            }
        }else{
            return response()->json(['status' => 'Please login first. To add '.Product::findOrFail($id)->name .' on your Wishlist.']);
        }
    }
}
