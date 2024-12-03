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
Route::get('/products', [ProductController::class, 'indexProducts'])->name('indexProducts');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('indexRegister');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/listProducts', [ProductController::class, 'indexProducts'])->name('listProducts');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::delete('/products/delete/{id}', [ProductController::class, 'delete'])->name('products.delete');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/edit/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/confirmationRent', [PageController::class, 'confirmRent'])->name('confirmRent');
Route::get('/confirmationReturn', [PageController::class, 'confirmReturn'])->name('confirmReturn');


Route::get('/profile', function() {
    return view ('users/profile');
});

Route::get('/editprofile', function(){
    return view ('users/detailprofile');
});

Route::get('/pesanan', function(){
    return view ('users/listOrder');
});

Route::get('/detailproduk', function(){
    return view ('users/detailProduct');
});
