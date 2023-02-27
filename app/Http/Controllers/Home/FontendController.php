<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\MultiCategoryProductSection;
use App\Models\SingleCategoryProductSection;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function home()
    {
        $smallBanner = Banner::where('size', 'small')->get();
        $bigBanner = Banner::where('size', 'big')->latest()->first();
        $carousels = Carousel::latest()->get();
        $shopByCat = Category::where('parent_id', null)->inRandomOrder()->take(8)->get();
        $multiCatProductOne = MultiCategoryProductSection::latest()->first();
        $multiCatProductTwo = MultiCategoryProductSection::first();
        $singleCatProductOne = SingleCategoryProductSection::latest()->first();
        $singleCatProductTwo = SingleCategoryProductSection::first();
        $sponsors =Sponsor::get();
        return view('home.home', compact('carousels', 'shopByCat', 'smallBanner', 'multiCatProductOne',
        'multiCatProductTwo', 'singleCatProductOne', 'singleCatProductTwo', 'bigBanner','sponsors'));
    }
}
