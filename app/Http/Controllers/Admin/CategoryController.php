<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
            $category->position = $request->position;
            $category->slug = Str::slug($request->name);
            if($request->parent_id){
                $category->parent_id = $request->parent_id;
            }
            if ($request->hasFile('logo')) {
                $category->logo =  $this->saveFile($request, 'logo');
            }
            $category->save();
            return redirect()->route('admin.category.index');
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
    public function edit($id=null)
    {
        $category = Category::findOrFail($id);
        $categories = Category::where('parent_id',null)->get();
        return view('admin.category.edit',compact('id','category','categories'));
    }
    public function update(Request $request, $id=null)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $category = Category::findOrFail($id);
            $category->name = $request->name;
            $category->position = $request->position;
            $category->slug = Str::slug($request->name);
            if($request->parent_id){
                $category->parent_id = $request->parent_id;
            }

            if ($request->hasFile('logo')) {
                $category->logo =  $this->saveFile($request, 'logo');
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
