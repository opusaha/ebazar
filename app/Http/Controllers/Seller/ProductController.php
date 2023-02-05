<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', null)->get();
        $products = Product::where('seller_id', Auth::guard('seller')->user()->id)->latest()->paginate(20);
        return view('seller.product.index', compact('products', 'categories'));
    }
    public function create()
    {
        return view('seller.product.add');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_price' => 'required',
            'price' => 'required',
            'tag' => 'required',
            'category' => 'required|integer',
            'sku' => 'required',
            'quantity' => 'required|integer',
            'name' => 'required',
            'details' => 'required',
            'image_one' => 'required|file',
            'image_two' => 'nullable|file',
            'image_three' => 'nullable|file',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $product = new Product();
            $product->seller_id = Auth::guard('seller')->user()->id;
            $product->old_price = $request->old_price;
            $product->price = $request->price;
            $product->status = $request->status;
            $product->tag = $request->tag;
            $product->category = $request->category;
            $product->sku = $request->sku;
            $product->quantity = $request->quantity;
            $product->name = $request->name;
            $product->details = $request->details;
            $product->image_one =  $this->saveFile($request, 'image_one');
            $product->image_two =  $this->saveFile($request, 'image_two');
            $product->image_three =  $this->saveFile($request, 'image_three');
            $product->save();
            return redirect()->route('seller.product.index');
        }
    }
    public function saveFile($request, $fieldName)
    {
        $file = $request->file($fieldName);
        $fileName = rand() . '.' . $file->getClientOriginalExtension();
        $dir = 'storage/';
        $imgUrl = $dir . $fileName;
        $file->move($dir, $fileName);
        return $imgUrl;
    }
    public function details($id = null)
    {
        $product = Product::findOrFail($id);
        return view('seller.product.details',compact('product'));
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('seller.product.edit', compact('id', 'product'));
    }
    public function update(Request $request, $id = null)
    {
        $validator = Validator::make($request->all(), [
            'old_price' => 'required',
            'price' => 'required',
            'tag' => 'required',
            'category' => 'required|integer',
            'sku' => 'required',
            'quantity' => 'required|integer',
            'name' => 'required',
            'details' => 'required',
            'image_one' => 'nullable|file',
            'image_two' => 'nullable|file',
            'image_three' => 'nullable|file',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $product = Product::findOrFail($id);
            $product->seller_id = Auth::guard('seller')->user()->id;
            $product->old_price = $request->old_price;
            $product->price = $request->price;
            $product->status = $request->status;
            $product->tag = $request->tag;
            $product->category = $request->category;
            $product->sku = $request->sku;
            $product->quantity = $request->quantity;
            $product->name = $request->name;
            $product->details = $request->details;
            if ($request->image_one) {
                $product->image_one =  $this->saveFile($request, 'image_one');
            }
            if ($request->image_two) {
                $product->image_two =  $this->saveFile($request, 'image_two');
            }
            if ($request->image_three) {
                $product->image_three =  $this->saveFile($request, 'image_three');
            }
            $product->save();
            return redirect()->route('seller.product.index');
        }
    }
    public function delete($id=null)
    {
        $product = Product::find($id);
        Storage::delete($product->image_path);
        $product->delete();
        return redirect()->route('seller.product.index');
    }
}
