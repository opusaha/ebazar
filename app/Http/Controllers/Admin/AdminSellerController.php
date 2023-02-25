<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;

class AdminSellerController extends Controller
{
    public function index()
    {
        $sellers = Seller::latest()->paginate('15');
        return view('admin.seller.index', compact('sellers'));
    }
    public function update(Request $request, $id = null)
    {
        $seller = Seller::findOrfail($id);
        $seller->status = $request->status;
        $seller->save();
        return redirect()->route('admin.seller');
    }
    public function searchSeller(Request $request)
    {
        $sellers = Seller::where('name', 'like', '%' . $request->query('query') . '%')
            ->orWhere('email', 'like', '%' . $request->query('query') . '%')
            ->get();
        return response()->json($sellers);
    }
}
