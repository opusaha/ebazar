<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HelpCategory;
use Illuminate\Http\Request;

class HelpCategoryController extends Controller
{
    public function index()
    {
        $categories = HelpCategory::latest()->get();
        return view('admin.helpCat.index',compact('categories'));
    }
    public function create()
    {
        return view('admin.helpCat.create');
    }
    public function store(Request $request)
    {
        $cat = new HelpCategory();
        $cat->name = $request->name;
        $cat->save();
        return redirect()->route('admin.faqcat');
    }
    public function edit($id=null)
    {
        $category = HelpCategory::findOrFail($id);
        return view('admin.helpCat.edit',compact('category'));
    }
    public function update(Request $request, $id=null)
    {
        $cat = HelpCategory::findOrFail($id);
        $cat->name = $request->name;
        $cat->save();
        return redirect()->route('admin.faqcat');
    }
    public function delete($id=null){
        HelpCategory::findOrFail($id)->delete();
        return redirect()->route('admin.faqcat');
    }
}
