<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MultiCategoryProductSection;
use App\Models\SingleCategoryProductSection;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MultiCategoryProductController extends Controller
{
    public function index()
    {
        $cats = Category::where('parent_id', null)->get();
        $lists = MultiCategoryProductSection::latest()->get();
        $singleCatProduct = SingleCategoryProductSection::latest()->get();
        return view('admin.website_product_section.index', compact('cats','lists', 'singleCatProduct'));
    }
    public function create()
    {
        $cats = Category::where('parent_id', null)->get();
        return view('admin.website_product_section.multiCreate', compact('cats'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'headings' => 'required|max:255',
            'category_one' => Rule::requiredIf(function () use ($request) {
                return empty($request->category_two) && empty($request->category_three) && empty($request->category_four);
            }),
            'category_two' => 'nullable',
            'category_three' => 'nullable',
            'category_four' => 'nullable',
        ], [
            'category_one.required' => 'At least one category is required',
        ]);

        // Create a new model instance
        $multiCategoryProductSection = new MultiCategoryProductSection();
        $multiCategoryProductSection->headings = $validatedData['headings'];
        $multiCategoryProductSection->category_one = $validatedData['category_one'];
        $multiCategoryProductSection->category_two = $validatedData['category_two'];
        $multiCategoryProductSection->category_three = $validatedData['category_three'];
        $multiCategoryProductSection->category_four = $validatedData['category_four'];

        // Save the new model instance
        $multiCategoryProductSection->save();

        return redirect()->route('admin.webSection')->with('success', 'Data saved successfully');
    }
    public function edit($id =null)
    {
        $cats = Category::where('parent_id', null)->get();
        $data = MultiCategoryProductSection::findOrFail($id);
        return view('admin.website_product_section.multiEdit', compact('cats','data'));
    }
    public function update(Request $request, $id=null)
    {
        $validatedData = $request->validate([
            'headings' => 'required|max:255',
            'category_one' => Rule::requiredIf(function () use ($request) {
                return empty($request->category_two) && empty($request->category_three) && empty($request->category_four);
            }),
            'category_two' => 'nullable',
            'category_three' => 'nullable',
            'category_four' => 'nullable',
        ], [
            'category_one.required' => 'At least one category is required',
        ]);

        // Create a new model instance
        $multiCategoryProductSection = MultiCategoryProductSection::findOrfail($id);
        $multiCategoryProductSection->headings = $validatedData['headings'];
        $multiCategoryProductSection->category_one = $validatedData['category_one'];
        $multiCategoryProductSection->category_two = $validatedData['category_two'];
        $multiCategoryProductSection->category_three = $validatedData['category_three'];
        $multiCategoryProductSection->category_four = $validatedData['category_four'];

        // Save the new model instance
        $multiCategoryProductSection->save();

        return redirect()->route('admin.webSection')->with('success', 'Data saved successfully');
    }
    public function delete($id=null)
    {
        MultiCategoryProductSection::findOrfail($id)->delete();
        return redirect()->route('admin.webSection')->with('success', 'Data delete successfully');
    }
}
