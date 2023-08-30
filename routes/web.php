<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\ServiceController as FrontendServiceController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\NoviController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class, 'index']);
Route::get('/categories', [FrontendCategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [FrontendCategoryController::class, 'show'])->name('categories.show');
Route::get('/services', [FrontendServiceController::class, 'index'])->name('services.index');
Route::get('/reservation/res-form', [FrontendReservationController::class, 'resForm'])->name('reservations.res.form');
Route::post('/reservation/res-form', [FrontendReservationController::class, 'storeresForm'])->name('reservations.store.res.form');
Route::get('/thankyou', [WelcomeController::class, 'thankyou'])->name('thankyou');
Route::get('/about', [NoviController::class, 'index'])->name('about.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/services', ServiceController::class);
    Route::resource('/reservations', ReservationController::class);
    Route::resource('/about', NoviController::class);
    
});

require __DIR__ . '/auth.php';
