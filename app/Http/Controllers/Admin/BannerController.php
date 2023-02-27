<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    public function saveFile($request, $fieldName)
    {
        $file = $request->file($fieldName);
        $fileName = rand() . '.' . $file->getClientOriginalExtension();
        $dir = 'storage/';
        $imgUrl = $dir . $fileName;
        $file->move($dir, $fileName);
        return $imgUrl;
    }
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('admin.banner.index',compact('banners'));
    }
    public function create()
    {
        return view('admin.banner.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'link' => 'required',
            'details' => 'required',
            'image' => 'required|file',
            'size' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $banner = new Banner();
            $banner->name = $request->name;
            $banner->link = $request->link;
            $banner->details = $request->details;
            $banner->size = $request->size;
            if ($request->hasFile('image')) {
                $banner->image =  $this->saveFile($request, 'image');
            }
            $banner->save();
            return redirect()->route('admin.banner.index');
        }
    }

    public function edit($id=null)
    {
        $banner = Banner::findOrfail($id);
        return view('admin.banner.edit',compact('banner'));
    }
    public function update(Request $request, $id=null)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'link' => 'required',
            'details' => 'required',
            'size' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $banner = Banner::findOrfail($id);
            $banner->name = $request->name;
            $banner->link = $request->link;
            $banner->details = $request->details;
            $banner->size = $request->size;
            if ($request->hasFile('image')) {
                $banner->image =  $this->saveFile($request, 'image');
            }
            $banner->save();
            return redirect()->route('admin.banner.index');
        }
    }
    public function delete($id = null)
    {
        Banner::findOrFail($id)->delete();
        return redirect()->route('admin.banner.index');
    }
}
