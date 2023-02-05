<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('home.wishlist');
    }
    public function invoice()
    {
        return view('home.invoice');
    }
}
