<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\SpecialDeals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SpecialDealController extends Controller
{
    public function specialProduct()
    {
        $products = SpecialDeals::where('seller_id', Auth::guard('seller')->user()->id)->latest()->paginate(10);
        return view('vandor.specialProduct.index', compact('products'));
    }
    public function create()
    {
        return view('vandor.specialProduct.create');
    }
    public function store(Request $request)
    {
        $product = new SpecialDeals();
        $product->seller_id = Auth::guard('seller')->user()->id;
        $product->product_id = $request->product_id;
        $product->price = $request->price;
        $product->start_time = $request->start_time;
        $product->end_time = $request->end_time;
        $product->save();
        return redirect()->route('seller.special.product');
    }
    public function edit($id = null)
    {
        return view('vandor.specialProduct.edit');
    }
    public function update(Request $request, $id = null)
    {
    }
    public function delete($id = null)
    {
        SpecialDeals::findOrFail($id)->delete();
        return redirect()->back();
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%$query%")
        ->where('seller_id',Auth::guard('seller')->user()->id)
        ->get();
        return response()->json($products);
    }
}
