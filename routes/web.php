<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

// Route::middleware('guest')->group(function() {
// });

// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login', [LoginController::class, 'authenticate'])->name('auth');
// Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'store'])->name('register');
// Route::get('/products', [ProductController::class, 'indexUser'])->name('products.index');

// Route::middleware('auth')->group(function(){
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // });

Route::get('/', [PageController::class, 'landing'])->name('landing');
Route::get('/products', [ProductController::class, 'indexUser'])->name('products.index');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/create', [ProductController::class, 'create'])->name('create');
Route::post('/store', [ProductController::class, 'store'])->name('store');
Route::get('/users', [UserController::class, 'index'])->name('users');

// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/kelolaProduk', [ProductController::class, 'index'])->name('kelolaProduk');
