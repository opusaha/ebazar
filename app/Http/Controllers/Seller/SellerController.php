<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Order_detail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    public function dashboard()
    {
        $endDate = Carbon::today();
        $startDate = $endDate->copy()->subDays(30);
        $totalOrderValue = 1;
        $orderDetails = Order_detail::where('seller_id',Auth::guard('seller')->id())->latest()->get();
        $newOrders = Order_detail::where('seller_id',Auth::guard('seller')->id())->whereBetween('created_at', [$startDate, $endDate])->get();
        $users = User::get();
        $newUsers = User::whereBetween('created_at', [$startDate, $endDate])->get();
        $showOrders = Order_detail::where('seller_id',Auth::guard('seller')->id())->latest()->take(8)->get();
        return view('vandor.dashboard',compact( 'totalOrderValue','orderDetails','newOrders','users','newUsers','showOrders'));
    }
    public function profile()
    {
        return view('seller.auth.profile');
    }
}
