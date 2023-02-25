<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data = Page::latest()->get();
        return view('admin.page.index', compact('data'));
    }
    public function create()
    {
        return view('admin.page.create');
    }
    public function store(Request $request)
    {
        $page = new Page();
        $page->title = $request->title;
        $page->details = $request->details;
        $page->save();
        return redirect()->route('admin.page');
    }
    public function edit($id = null)
    {
        $page = Page::findOrFail($id);
        return view('admin.page.edit', compact('id','page'));
    }
    public function update(Request $request, $id = null)
    {
        $page = Page::findOrFail($id);
        $page->title = $request->title;
        $page->details = $request->details;
        $page->save();
        return redirect()->route('admin.page');
    }
    public function delete($id = null)
    {
        Page::findOrFail($id)->delete();
        return redirect()->route('admin.page');
    }
}
