<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Laravel\Ui\Presets\React;

class AdminLoginController extends Controller
{
    // Admin Login
 public function adminLogin(Request $request){
    if($request->isMethod('post')){
        $data = $request->all();
        // Validation
        $rules = [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ];
        $customMessage = [
            'email.required' => 'Email Address is required',
            'email.email' => 'Email Address is not valid email address',
            'email.max' => 'You are not allowed to enter more than 255 characters',
            'password.required' => 'Password is required',
        ];

        $this->validate($request, $rules, $customMessage);

        if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])){
            return redirect()->route('adminDashboard');
        } else {
            Session::flash('error_message', 'Invalid Username or Email');
            return redirect()->route('adminLogin');
        }

    }
        if(Auth::guard('admin')->check()){
            return redirect()->route('adminDashboard');
        } else {
            return view ('admin.login');
        }
}

    // Forgot Password
    public function forgotPassword(){
        return view('admin.forgotPassword');
    }

    // Admin Dashboard
    public function adminDashboard(){
        Session::put('admin_page', 'dashboard');
        return view('admin.dashboard');
    }

   // Admin Logout
    public function adminLogout(){
        Auth::guard('admin')->logout();
        Session::flash('success_message', 'Logout Successful');
        return redirect()->route('adminLogin');
}

    // Admin Profile
    public function profile(){
        $admin = Auth::guard('admin')->user();
        return view('admin.profile', compact('admin'));
    }

    // Update Profile
    public function profileUpdate(Request $request, $id){
        $data = $request->all();
        $validateData = $request->validate([
            'name' => 'required',
        ]);
        $admin_id = Auth::guard('admin')->user()->id;
        $admin = Admin::findOrFail($id);
        $admin->name = $data['name'];
        $admin->address = $data['address'];
        $admin->phone_number = $data['phone_number'];
        $admin->save();

        Session::flash('success_message', 'Admin Profile has been updated successfully');
        return redirect()->back();
    }

    // Change Password
    public function changePassword(){
        $admin = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        return view('admin.changePassword', compact('admin'));
    }

    // Check User Password
    public function checkUserPassword(Request  $request){
        $data = $request->all();
        $current_password = $data['current_password'];
        $user_id = Auth::guard('admin')->user()->id;
        $check_password = Admin::where('id', $user_id)->first();
        if(Hash::check($current_password, $check_password->password)){
            return "true"; die;
        } else {
            return "false"; die;
        }
    }

    // Update Password
    public function updatePassword(Request $request, $id){
        $validateData = $request->validate([
            'current_password' => 'required|max:255',
            'password' => 'min:6',
            'pass_confirmation' => 'required_with:password|same:password|min:6'
        ]);
        $admin = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        $current_admin_password = $admin->password;
        $data = $request->all();
        if(Hash::check($data['current_password'], $current_admin_password)){
            $admin->password = bcrypt($data['password']);
            $admin->save();
            Session::flash('success_message', 'Admin Password Has Been Updated Successfully');
            return redirect()->back();
        } else {
            Session::flash('error_message', 'Your Password does not match with our database');
            return redirect()->back();
        }
    }
}

