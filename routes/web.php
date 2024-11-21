<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('landing');
});




Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/read', function () {
    return view('admin.read');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

// Route::get('/admin/read', [AdminController::class, 'read'])->name('admin.read');



