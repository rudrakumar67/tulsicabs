<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DashBoardController extends Controller
{
    public function index() {
        return view('Admin.Dashboard');
    }

    public function AdminLogout() {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
