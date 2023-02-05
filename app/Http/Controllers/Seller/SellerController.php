<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function dashboard()
    {
        return view('seller.welcome');
    }
    public function profile()
    {
        return view('seller.auth.profile');
    }
}
