<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Auth;
use Validator;
use App\Admin;

class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin', ['except'=>['logout']]);
    }
    public function showLoginForm(){
        return view('Backend.admin-login');
    }
    
    public function login(Request $request){
       
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        if (Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('admin.dashboard'));
        }
        
        
        return redirect()->back()->withInput($request->only('email','remember'));
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        return redirect('/admin/')->with('flash_message_success','Logged out successfully');
    }
}
