<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SellerAuthController extends Controller
{
    public function register()
    {
        return view('vandor.login');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:sellers',
            'password' => 'required|min:8',
            'shop' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $seller = new Seller();
            $seller->name = $request->name;
            $seller->email = $request->email;
            $seller->password = Hash::make($request->password);
            $seller->shop = $request->shop;
            $seller->save();
            Session::flash('success', 'Successfully store done!');
            return redirect()->route('seller.dashboard');
        }
    }

    public function signIn()
    {
        return view('vandor.login');
    }
    public function login(Request $request)
    {
        if (Auth::guard('seller')->attempt($request->only('email', 'password'))) {
            Session::flash('success', 'Login Succcess!');
            return redirect()->route('seller.dashboard');
        }
        Session::flash('success', 'Authentication Error!');
        return back();
    }
    public function logout()
    {
        Auth::guard('seller')->logout();
        Session::flash('success', 'Logout Succcess!');
        return redirect('/');
    }
    public function forgot()
    {
        return view('seller.auth.forget');
    }
    public function settings(){
        return view ('vandor.settings');
    }
    public function update(Request $request , $id = null){
        $seller = Seller::findOrFail($id);
        if($request->logo){
            $seller->logo =  $this->saveFile($request, 'logo');
        }
        if($request->shop){
            $seller->shop = $request->shop;
        }
        if($request->phone){
            $seller->phone = $request->phone;
        }
        if($request->address){
            $seller->address = $request->address;
        }
        if($request->type){
            $seller->business_type = $request->type;
        }
        if($request->about_us){
            $seller->about_us = $request->about_us;
        }
        $seller->save();
        return redirect()->route('seller.settings');
    }
    public function saveFile($request, $fieldName)
    {
        $file = $request->file($fieldName);
        $fileName = rand() . '.' . $file->getClientOriginalExtension();
        $dir = 'storage/';
        $imgUrl = $dir . $fileName;
        $file->move($dir, $fileName);
        return $imgUrl;
    }
}
