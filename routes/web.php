<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user', [UserController::class, 'index']);

Route::controller(AuthController::class)->group(function (){
    Route::get('register', 'register')->name('register');
});

Route::controller(AuthController::class)->group(function (){
    Route::get('login', 'login')->name('login');
});
