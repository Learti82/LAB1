<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TokenController;

// Route for the welcome page
Route::get('/', function () {
    return view('welcome');
});

// Route for the about page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Ensure that the auth routes are set up correctly
Auth::routes();

// Login route
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

// Logout route
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Route for the dashboard, with authentication middleware
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Home route for regular users
Route::get('/home', function () {
    return view('home'); // Home page view
})->middleware('auth')->name('home');

// Grouped routes with authentication middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('products', ProductController::class);

    Route::get('/generate-token/{userId}', [TokenController::class, 'generateToken']);
});

// Admin and user dashboards
Route::middleware('auth')->group(function () {
    Route::get('/admin-dashboard', function () {
        return view('admin.dashboard');
    })->middleware('role:admin');

    Route::get('/user-dashboard', function () {
        return view('user.dashboard');
    })->middleware('role:user');
});

// Include additional auth routes
require __DIR__.'/auth.php';
