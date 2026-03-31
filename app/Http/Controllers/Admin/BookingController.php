<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookingEnquiry;

class BookingController extends Controller
{
    public function index() {
        $bookings = BookingEnquiry::orderBy('id', 'desc')->paginate(10);
        return view('Admin.Bookings.Index', compact('bookings'));
    }
}
