<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('admin.category.index',compact('categories'));
    }
    public function create()
    {
        $categories = Category::where('parent_id',null)->get();
        return view('admin.category.create',compact('categories'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $category = new Category();
            $category->name = $request->name;
            $category->parent_id = $request->parent_id;

            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $filename = time() . '.' . $logo->getClientOriginalExtension();
                $path = $logo->storeAs('public/logos', $filename);
                $category->logo = $path;
            }
            $category->save();
            return redirect()->route('admin.category.index');
        }
    }
    public function edit($id=null)
    {
        $category = Category::findOrFail($id);
        $categories = Category::where('parent_id',null)->get();
        return view('admin.category.edit',compact('id','category','categories'));
    }
    public function update(Request $request, $id=null)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $category = Category::findOrFail($id);
            $category->name = $request->name;
            $category->parent_id = $request->parent_id;

            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $filename = time() . '.' . $logo->getClientOriginalExtension();
                $path = $logo->storeAs('public/logos', $filename);
                $category->logo = $path;
            }
            $category->save();
            return redirect()->route('admin.category.index');
        }
    }
    public function delete($id=null)
    {
        Category::findOrFail($id)->delete();
        return redirect()->route('admin.category.index');
    }
}
