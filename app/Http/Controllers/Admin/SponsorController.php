<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SponsorController extends Controller
{
    public function index()
    {
        $sponsors = Sponsor::latest()->get();
        return view('admin.sponsor.index',compact('sponsors'));
    }
    public function create()
    {
        return view('admin.sponsor.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'logo' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $sponsor = new Sponsor();
            $sponsor->name = $request->name;
            $sponsor->logo =  $this->saveFile($request, 'logo');
            $sponsor->save();
            return redirect()->route('admin.sponsor.index');
        }
    }

    public function edit($id=null)
    {
        $sponsor = Sponsor::findOrfail($id);
        return view('admin.sponsor.edit',compact('sponsor'));
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
            $sponsor = Sponsor::findOrFail($id);
            $sponsor->name = $request->name;

            if ($request->logo) {
                $sponsor->logo =  $this->saveFile($request, 'logo');
            }
            $sponsor->save();
            return redirect()->route('admin.sponsor.index');
        }
    }
    public function saveFile($request, $fieldName)
    {
        $file = $request->file($fieldName);
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $dir = 'storage/';
        $imgUrl = $dir . $fileName;
        $file->move($dir, $fileName);
        return $imgUrl;
    }
    public function delete($id = null)
    {
        if (file_exists(Sponsor::findOrFail($id)->logo)) {
            unlink(Sponsor::findOrFail($id)->logo);
        }
        Sponsor::findOrFail($id)->delete();
        return redirect()->route('admin.sponsor.index');
    }
}
