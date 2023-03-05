<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::where('status','reviewed')->latest()->paginate(10);
        return view('admin.review.index',compact('reviews'));
    }
    public function status($id=null)
    {
        $review = Review::findOrFail($id);
        $review->status = 'approved';
        $review->save();
        return redirect()->route('admin.reviews');
    }
}
