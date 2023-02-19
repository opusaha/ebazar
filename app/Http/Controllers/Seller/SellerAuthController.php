<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SellerAuthController extends Controller
{
    public function register()
    {
        return view('vandor.login');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:sellers',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $seller = new Seller();
            $seller->name = $request->name;
            $seller->email = $request->email;
            $seller->password = Hash::make($request->password);
            $seller->save();
            Session::flash('success', 'Successfully store done!');
            auth()->guard('seller')->login($seller);
            return redirect()->route('seller.dashboard');
        }
    }

    public function signIn()
    {
        return view('vandor.login');
    }
    public function login(Request $request)
    {
        if (Auth::guard('seller')->attempt($request->only('email', 'password'))) {
            Session::flash('success', 'Login Succcess!');
            return redirect()->route('seller.dashboard');
        }
        Session::flash('success', 'Authentication Error!');
        return back();
    }
    public function logout()
    {
        Auth::guard('seller')->logout();
        Session::flash('success', 'Logout Succcess!');
        return redirect()->route('seller.signin');
    }
    public function forgot()
    {
        return view('seller.auth.forget');
    }
    public function settings()
    {
        return view('vandor.settings');
    }
    public function update(Request $request, $id = null)
    {
        $seller = Seller::findOrFail($id);
        if ($request->logo) {
            $seller->logo =  $this->saveFile($request, 'logo');
        }
        if ($request->shop) {
            $seller->shop = $request->shop;
        }
        if ($request->phone) {
            $seller->phone = $request->phone;
        }
        if ($request->address) {
            $seller->address = $request->address;
        }
        if ($request->type) {
            $seller->business_type = $request->type;
        }
        if ($request->about_us) {
            $seller->about_us = $request->about_us;
        }
        $seller->save();
        return redirect()->route('seller.settings');
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
    public function updatePassword(Request $request, $id =null)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $seller = Seller::findOrFail($id);

        if (!Hash::check($request->current_password, $seller->password)) {
            // Current password is incorrect
            return redirect()->back()->with('error', 'The current password is incorrect.');
        }
        if($request->new_password == $request->confirm_password){
            $seller->password = Hash::make($request->new_password);
            $seller->save();
            return redirect()->back()->with('success', 'Your password has been changed.');
        }else{
            return redirect()->back()->with('error', 'The current password and confirm password are not matched.');
        }
    }
    public function updateStatus(Request $request, $id = null)
    {
        $seller = Seller::findOrFail($id);
        if (!$seller) {
            return redirect()->back()->with('error', 'Account not found');
        }
        if (!Hash::check($request->password, $seller->password)) {
            return redirect()->back()->with('error', 'Invalid password.');
        }
        $seller->status = $seller->status == 'deactive' ? 'approved' : 'deactive';
        $seller->save();

        return redirect()->route('seller.settings')->with('success', 'Account status updated successfully.');
    }
}
