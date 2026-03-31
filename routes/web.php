<?php
// Default Laravel Namespace and imports
use Illuminate\Support\Facades\Route;

// User Controllers
use App\Http\Controllers\PageController;

// Admin Controllers
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\CabsController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\BookingController;

// User Routes
Route::get('/', [PageController::class, 'Home'])->name('home');
Route::get('/cabs', [PageController::class, 'Cabs'])->name('cabs');
Route::get('/services', [PageController::class, 'Services'])->name('services');
Route::get('/booking', [PageController::class, 'Booking'])->name('booking');
Route::get('/about', [PageController::class, 'About'])->name('about');
Route::get('/contact', [PageController::class, 'Contact'])->name('contact');
Route::post('/booking-submit', [PageController::class, 'BookingSubmit'])->name('booking.submit');

// Admin Before login Routes
Route::prefix('admin')->middleware('beforeLoginAdmin')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('Admin.login');
    Route::post('/login', [LoginController::class, 'login'])->name('Admin.login.submit');
});

// Admin After login Routes
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', [DashBoardController::class, 'index'])->name('Admin.dashboard');
    Route::get('/logout', [DashBoardController::class, 'AdminLogout'])->name('Admin.logout');

    Route::prefix('cabs')->group(function () {
        Route::get('/', [CabsController::class, 'index'])->name('Admin.cabs.index');
        Route::get('/add', [CabsController::class, 'addCab'])->name('Admin.cabs.add');
        Route::post('/store', [CabsController::class, 'storeCab'])->name('Admin.cabs.store');
        Route::get('/edit/{id}', [CabsController::class, 'editCab'])->name('Admin.cabs.edit');
        Route::post('/update/{id}', [CabsController::class, 'updateCab'])->name('Admin.cabs.update');
        Route::get('/delete/{id}', [CabsController::class, 'deleteCab'])->name('Admin.cabs.delete'); 
        Route::get('/status/{id}', [CabsController::class, 'statusCab'])->name('Admin.cabs.status');   
    });

    Route::prefix('service')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('Admin.service.index');
        Route::get('/add', [ServiceController::class, 'addService'])->name('Admin.service.add');
        Route::post('/store', [ServiceController::class, 'storeService'])->name('Admin.service.store');
        Route::get('/edit/{id}', [ServiceController::class, 'editService'])->name('Admin.service.edit');
        Route::post('/update/{id}', [ServiceController::class, 'updateService'])->name('Admin.service.update');
        Route::get('/delete/{id}', [ServiceController::class, 'deleteService'])->name('Admin.service.delete'); 
        Route::get('/status/{id}', [ServiceController::class, 'statusService'])->name('Admin.service.status');   
    });

    Route::prefix('gallery')->group(function () {
        Route::get('/', [GalleryController::class, 'index'])->name('Admin.gallery.index');
        Route::post('/store', [GalleryController::class, 'storeGallery'])->name('Admin.gallery.store');
        Route::get('/delete/{id}', [GalleryController::class, 'deleteGallery'])->name('Admin.gallery.delete'); 
        Route::get('/status/{id}', [GalleryController::class, 'statusGallery'])->name('Admin.gallery.status');   
    });

    Route::prefix('settings')->group(function () {
        Route::get('/', [SettingsController::class, 'index'])->name('Admin.settings');
        Route::post('/store', [SettingsController::class, 'storeSettings'])->name('Admin.settings.store');
    });
    Route::get('booking-enquiry', [BookingController::class, 'index'])->name('Admin.booking.index');
});
