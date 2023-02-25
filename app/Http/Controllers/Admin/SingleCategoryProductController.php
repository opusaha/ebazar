<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SingleCategoryProductSection;
use Illuminate\Http\Request;

class SingleCategoryProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|exists:categories,id',
        ]);

        // Create a new SingleCategoryProductSection instance
        $singleCategoryProductSection = new SingleCategoryProductSection();
        $singleCategoryProductSection->category = $request->input('category');
        $singleCategoryProductSection->save();
        return redirect()->route('admin.webSection')->with('success', 'Data save successfully');
    }
    public function update(Request $request,$id=null)
    {
        $request->validate([
            'category' => 'required|exists:categories,id',
        ]);

        // Create a new SingleCategoryProductSection instance
        $singleCategoryProductSection = SingleCategoryProductSection::findOrFail($id);
        $singleCategoryProductSection->category = $request->input('category');
        $singleCategoryProductSection->save();
        return redirect()->route('admin.webSection')->with('success', 'Data save successfully');
    }
    public function delete($id=null)
    {
        SingleCategoryProductSection::findOrFail($id)->delete();
        return redirect()->route('admin.webSection')->with('success', 'Data delete successfully');
    }
}
