<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Services;
use App\Models\Cabs;
use App\Models\BookingEnquiry;

class PageController extends Controller
{
    public function Home() {
        $galleries = Gallery::where('status', 1)->get();
        $services = Services::where('status', 1)->get();
        $cabs = Cabs::where('status', 1)->get();
        return view('home', compact('galleries', 'services', 'cabs'));
    }
    public function Cabs() {
        $cabs = Cabs::where('status', 1)->get();
        return view('cabs', compact('cabs'));
    }
    public function Services() {
        $services = Services::where('status', 1)->get();
        return view('services', compact('services'));
    }
    public function About() {
        return view('about');
    }
    public function Contact() {
        return view('contact');
    }
    public function Booking() {
        $services = Services::where('status', 1)->get();
        $cabs = Cabs::where('status', 1)->get();
        return view('booking', compact('services', 'cabs'));
    }
    public function BookingSubmit(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric|min:10|max:10',
            'pickup_location' => 'required|string|max:255',
            'dropoff_location' => 'required|string|max:255',
            'service' => 'required|string|max:255',
            'cab' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $booking = new BookingEnquiry();
        $booking->name = $request->name;
        $booking->phone = $request->phone;
        $booking->pickup_location = $request->pickup_location;
        $booking->dropoff_location = $request->dropoff_location;
        $booking->service = $request->service;
        $booking->cab = $request->cab;
        $booking->date = $request->date;
        $booking->save();

        return redirect()->back()->with('success', 'Booking submitted successfully!');
    }

}
