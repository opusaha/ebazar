<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class AdminAuthController extends Controller
{
    public function register()
    {
        return view('admin.login');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $admin = new Admin();
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = Hash::make($request->password);
            $admin->save();
            auth()->guard('admin')->login($admin);
            Session::flash('success', 'Successfully store done!');
            return redirect()->route('admin.dashboard');
        }
    }

    public function signIn()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            toast('Success Login', 'success');
            return redirect()->route('admin.dashboard');
        }
        toast('Auth Failed', 'error');
        return back();
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        Session::flash('success', 'Logout Succcess!');
        return redirect()->route('admin.signin');
    }
    public function forgot()
    {
        return view('admin.auth.forget');
    }
    public function settings(){
        return view ('admin.settings');
    }
    public function update(Request $request , $id = null){
        $admin = Admin::findOrFail($id);
        if($request->logo){
            $admin->logo =  $this->saveFile($request, 'logo');
        }
        if($request->shop){
            $admin->shop = $request->shop;
        }
        if($request->phone){
            $admin->phone = $request->phone;
        }
        if($request->address){
            $admin->address = $request->address;
        }
        if($request->type){
            $admin->business_type = $request->type;
        }
        if($request->about_us){
            $admin->about_us = $request->about_us;
        }
        $admin->save();
        return redirect()->route('admin.settings');
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
