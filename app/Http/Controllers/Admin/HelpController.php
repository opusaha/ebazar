<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Help;
use App\Models\HelpCategory;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index()
    {
        $data = Help::latest()->get();
        return view('admin.faq.index', compact('data'));
    }
    public function create()
    {
        $category = HelpCategory::get();
        return view('admin.faq.create',compact('category'));
    }
    public function store(Request $request)
    {
        $faq = new Help();
        $faq->help_category_id = $request->help_category_id;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect()->route('admin.help');
    }
    public function edit($id = null)
    {
        $category = HelpCategory::get();
        $data = Help::findOrFail($id);
        return view('admin.faq.edit', compact('category','data','id'));
    }
    public function update(Request $request, $id = null)
    {
        $faq = Help::findOrFail($id);
        $faq->help_category_id = $request->help_category_id;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect()->route('admin.help');
    }
    public function delete($id = null)
    {
        Help::findOrFail($id)->delete();
        return redirect()->route('admin.help');
    }
}
