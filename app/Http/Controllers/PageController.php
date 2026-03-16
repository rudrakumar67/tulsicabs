<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Home() {
        return view('home');
    }
    public function Cabs() {
        return view('cabs');
    }
    public function Services() {
        return view('services');
    }
    public function About() {
        return view('about');
    }
    public function Contact() {
        return view('contact');
    }
    public function Booking() {
        return view('booking');
    }
    public function BookingSubmit(Request $request) {
        // Validate and process the booking data here
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'pickup_location' => 'required|string|max:255',
            'dropoff_location' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        // Process the booking data (e.g., save to database, send email, etc.)
        // ...

        return redirect()->route('home')->with('success', 'Booking submitted successfully!');
    }

}
