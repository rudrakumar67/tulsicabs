<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'Home'])->name('home');
Route::get('/cabs', [PageController::class, 'Cabs'])->name('cabs');
Route::get('/services', [PageController::class, 'Services'])->name('services');
Route::get('/booking', [PageController::class, 'Booking'])->name('booking');
Route::get('/about', [PageController::class, 'About'])->name('about');
Route::get('/contact', [PageController::class, 'Contact'])->name('contact');
Route::post('/booking-submit', [PageController::class, 'BookingSubmit'])->name('booking.submit');

