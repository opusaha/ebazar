<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WebSettingsController extends Controller
{
    public function index()
    {
        $setting = WebsiteSettings::first();
        return view('admin.web-settings.index', compact('setting'));
    }
    public function create()
    {
        return view('admin.web-settings.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'logo' => 'required|image|max:2048',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'linkedIn' => 'nullable|string|max:255',
            'app_one' => 'nullable|string|max:255',
            'app_two' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $setting = new WebsiteSettings();
        $setting->logo = $this->saveFile($request, 'logo');
        $setting->phone = $request->input('phone');
        $setting->email = $request->input('email');
        $setting->facebook = $request->input('facebook');
        $setting->twitter = $request->input('twitter');
        $setting->instagram = $request->input('instagram');
        $setting->linkedIn = $request->input('linkedIn');
        $setting->app_one = $request->input('app_one');
        $setting->app_two = $request->input('app_two');
        $setting->save();

        return redirect()->route('admin.webSettings.index')->with('success', 'Website settings saved successfully.');
    }

    public function edit($id = null)
    {
        $setting = WebsiteSettings::findOrfail($id);
        return view('admin.web-settings.edit', compact('setting'));
    }
    public function update(Request $request, $id = null)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'linkedIn' => 'nullable|string|max:255',
            'app_one' => 'nullable|string|max:255',
            'app_two' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $setting = WebsiteSettings::findOrFail($id);
        if($request->logo){
            $setting->logo = $this->saveFile($request, 'logo');
        }
        $setting->phone = $request->input('phone');
        $setting->email = $request->input('email');
        $setting->facebook = $request->input('facebook');
        $setting->twitter = $request->input('twitter');
        $setting->instagram = $request->input('instagram');
        $setting->linkedIn = $request->input('linkedIn');
        $setting->app_one = $request->input('app_one');
        $setting->app_two = $request->input('app_two');
        $setting->save();

        return redirect()->route('admin.webSettings.index')->with('success', 'Website settings update successfully.');
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
        if (file_exists(WebsiteSettings::findOrFail($id)->logo)) {
            unlink(WebsiteSettings::findOrFail($id)->logo);
        }
        WebsiteSettings::findOrFail($id)->delete();
        return redirect()->route('admin.webSettings.index');
    }
}
