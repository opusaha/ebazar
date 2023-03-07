<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Seller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $orders = Order::latest()->get();
        $endDate = Carbon::today();
        $startDate = $endDate->copy()->subDays(30);
        $totalOrderValue = Order::whereBetween('created_at', [$startDate, $endDate])->sum('total_price');
        $totalOrderValue = floatval($totalOrderValue);
        $orderDetails = Order_detail::latest()->get();
        $newOrders = Order_detail::whereBetween('created_at', [$startDate, $endDate])->get();
        $users = User::get();
        $newUsers = User::whereBetween('created_at', [$startDate, $endDate])->get();
        $sellers = Seller::get();
        $newSellers = Seller::whereBetween('created_at', [$startDate, $endDate])->get();
        $showOrders = Order_detail::latest()->take(8)->get();
        return view('admin.dashboard', compact('orders', 'totalOrderValue','orderDetails','newOrders','users','newUsers','sellers','newSellers','showOrders'));
    }
}
