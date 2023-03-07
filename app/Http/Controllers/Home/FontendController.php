<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\MultiCategoryProductSection;
use App\Models\Product;
use App\Models\SingleCategoryProductSection;
use App\Models\SpecialDeals;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function home()
    {
        $specialProducts = SpecialDeals::where('is_active', 1)->inRandomOrder()->get();
        $smallBanner = Banner::where('size', 'small')->get();
        $bigBanner = Banner::where('size', 'big')->latest()->first();
        $carousels = Carousel::latest()->get();
        $shopByCat = Category::where('parent_id', null)->inRandomOrder()->take(8)->get();
        $multiCatProductOne = MultiCategoryProductSection::latest()->first();
        $multiCatProductTwo = MultiCategoryProductSection::first();
        $singleCatProductOne = SingleCategoryProductSection::latest()->first();
        $singleCatProductTwo = SingleCategoryProductSection::first();
        $sponsors = Sponsor::get();
        return view('home.home', compact(
            'carousels',
            'shopByCat',
            'smallBanner',
            'multiCatProductOne',
            'multiCatProductTwo',
            'singleCatProductOne',
            'singleCatProductTwo',
            'bigBanner',
            'sponsors',
            'specialProducts'
        ));
    }
    public function search(Request $request)
    {
        if($request->cat_id){
            $products = Product::where('category',$request->cat_id)->Where('name', 'like', '%' . $request->search . '%')->latest()->paginate(15);
        }else{
            $products = Product::Where('name', 'like', '%' . $request->search . '%')->latest()->paginate(15);
        }
        $title ="Search";
        return view('home.shop',compact('products','title'));
    }
    public function category($id=null)
    {
        $products = Product::where('category',$id)->latest()->paginate(20);
        $title = Category::findOrFail($id)->name;
        return view('home.shop',compact('products','title'));
    }
    public function allCategory()
    {
        $shopByCat = Category::where('parent_id',null)->get();
        return view('home.categories',compact('shopByCat'));
    }
}
