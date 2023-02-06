<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeAuthController extends Controller
{
    public function register()
    {
        return view('home.register');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            Auth::login($user);
            Session::flash('success', 'Register Success!');
            return redirect()->back();
        }
    }
    public function login()
    {
        return view('home.login');
    }
    public function userLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember'))) {
            Session::flash('success', 'Login Success!');
            return redirect()->back();
        }
    }
    public function logout()
    {
        Auth::logout();
        Session::flash('success', 'Logout Success!');
        return redirect()->back();
    }
}
