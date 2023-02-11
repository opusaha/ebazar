<?php

namespace App\Http\Controllers;

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
        return view('seller.auth.register');
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
        return view('seller.auth.login');
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
}
