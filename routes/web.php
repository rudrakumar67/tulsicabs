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
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login.submit');
});

// Admin After login Routes
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', [DashBoardController::class, 'index'])->name('admin.dashboard');
    Route::get('/logout', [DashBoardController::class, 'AdminLogout'])->name('admin.logout');

    Route::prefix('cabs')->group(function () {
        Route::get('/', [CabsController::class, 'index'])->name('admin.cabs.index');
        Route::get('/add', [CabsController::class, 'addCab'])->name('admin.cabs.add');
        Route::post('/store', [CabsController::class, 'storeCab'])->name('admin.cabs.store');
        Route::get('/edit/{id}', [CabsController::class, 'editCab'])->name('admin.cabs.edit');
        Route::post('/update/{id}', [CabsController::class, 'updateCab'])->name('admin.cabs.update');
        Route::get('/delete/{id}', [CabsController::class, 'deleteCab'])->name('admin.cabs.delete'); 
        Route::get('/status/{id}', [CabsController::class, 'statusCab'])->name('admin.cabs.status');   
    });

    Route::prefix('service')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('admin.service.index');
        Route::get('/add', [ServiceController::class, 'addService'])->name('admin.service.add');
        Route::post('/store', [ServiceController::class, 'storeService'])->name('admin.service.store');
        Route::get('/edit/{id}', [ServiceController::class, 'editService'])->name('admin.service.edit');
        Route::post('/update/{id}', [ServiceController::class, 'updateService'])->name('admin.service.update');
        Route::get('/delete/{id}', [ServiceController::class, 'deleteService'])->name('admin.service.delete'); 
        Route::get('/status/{id}', [ServiceController::class, 'statusService'])->name('admin.service.status');   
    });

    Route::prefix('gallery')->group(function () {
        Route::get('/', [GalleryController::class, 'index'])->name('admin.gallery.index');
        Route::post('/store', [GalleryController::class, 'storeGallery'])->name('admin.gallery.store');
        Route::get('/delete/{id}', [GalleryController::class, 'deleteGallery'])->name('admin.gallery.delete'); 
        Route::get('/status/{id}', [GalleryController::class, 'statusGallery'])->name('admin.gallery.status');   
    });

    Route::prefix('settings')->group(function () {
        Route::get('/', [SettingsController::class, 'index'])->name('admin.settings');
        Route::post('/store', [SettingsController::class, 'storeSettings'])->name('admin.settings.store');
    });
    Route::get('booking-enquiry', [BookingController::class, 'index'])->name('admin.booking.index');
});
