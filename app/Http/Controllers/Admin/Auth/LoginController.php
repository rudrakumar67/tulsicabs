<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('Admin.Auth.Login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials, true)) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with('error', 'Invalid credentials');
    }
    
}
