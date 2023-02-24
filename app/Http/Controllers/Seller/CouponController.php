<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::where('seller_id', Auth::guard('seller')->user()->id)->latest()->get();
        return view('vandor.coupon.index', compact('coupons'));
    }
    public function create()
    {
        return view('vandor.coupon.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'code' => 'required|unique:coupons',
            'discount' => 'required|numeric|min:0',
            'minimum_purchase_amount' => 'nullable|numeric|min:0',
            'expiry_date' => 'required|date',
            'max_uses' => 'nullable|integer|min:0',
        ]);

        $coupon = new Coupon();
        $coupon->seller_id = Auth::guard('seller')->user()->id;
        $coupon->code = $request->code;
        $coupon->discount = $request->discount;
        $coupon->minimum_purchase_amount = $request->minimum_purchase_amount;
        $coupon->expiry_date = $request->expiry_date;
        $coupon->max_uses = $request->max_uses;
        $coupon->save();

        return redirect()->route('seller.coupon.index');
    }
    public function edit($id=null)
    {
        $coupon = Coupon::findOrfail($id);
        return view('vandor.coupon.edit',compact('coupon','id'));
    }
    public function update(Request $request, $id=null)
    {
        $request->validate([
            'code' => 'required|unique:coupons',
            'discount' => 'required|numeric|min:0',
            'minimum_purchase_amount' => 'nullable|numeric|min:0',
            'expiry_date' => 'required|date',
            'max_uses' => 'nullable|integer|min:0',
        ]);

        $coupon = Coupon::findOrFail($id);
        $coupon->seller_id = Auth::guard('seller')->user()->id;
        $coupon->code = $request->code;
        $coupon->discount = $request->discount;
        $coupon->minimum_purchase_amount = $request->minimum_purchase_amount;
        $coupon->expiry_date = $request->expiry_date;
        $coupon->max_uses = $request->max_uses;
        $coupon->save();

        return redirect()->route('seller.coupon.index');
    }
    public function delete($id=null)
    {
        Coupon::findOrFail($id)->delete();
        return redirect()->route('seller.coupon.index');
    }
}
