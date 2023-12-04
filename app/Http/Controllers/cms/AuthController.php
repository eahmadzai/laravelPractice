<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function registerPage()
    {
        return view('cms.auth.register');
    }
    public function loginPage()
    {
        return view('cms.auth.login');
    }
    public function register(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'required|mimes:jpg,png',
            'password' => 'required'
        ]);
        $icon_path = request()->file('image')->store('public/cms/slider');
        $data['image'] = basename($icon_path);
        $data['password'] = Hash::make($request->password);
        $succes = Admin::create($data);
        if ($succes) {
            return redirect()->route('adminLoginPage')->with('success', 'Account Registered Successfully');
        }
    }
    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',

        ]);
        $admin = Admin::where('name', $request->name)->first();
        if ($admin) {

            if (Hash::check($request->password, $admin->password)) {
                auth('admin')->login($admin);
                $request->session()->put('admin', $admin);
                return redirect()->route('adminIndex');
            } else {
                return redirect()->route('adminLoginPage')->with('error', 'Password worng');
            }
        } else {
            return redirect()->route('adminLoginPage')->with('nameEror', 'Name is wrong');
        }
    }
}
