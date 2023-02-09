<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        return view('home.dashboard');
    }
    public function address()
    {
        return view('home.address');
    }
    public function orders()
    {
        return view('home.orders');
    }
    public function wishlist()
    {
        $wishlist = Wishlist::where('user_id',Auth::id())->get();
        return view('home.wishlist',compact('wishlist'));
    }
    public function invoice()
    {
        return view('home.invoice');
    }
}
