<?php

use App\Http\Controllers\Confirm1Controller;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HistoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReturnedController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Models\Payment;

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

Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::get('/products/detail/{id}', [ProductController::class, 'indexdetailProducts'])->name('detailProduct');

Route::get('/products/detail/{product}/transaction', [TransactionController::class, 'indexTransaction'])->name('transaction.index');
Route::post('/products/detail/{product}/transaction', [TransactionController::class, 'storeTransaction'])->name('transaction.store');

Route::get('/profil/returns', [ReturnedController::class, 'indexListreturn'])->name('returns.list');
Route::get('/profil/returns/detail-return', [ReturnedController::class, 'indexreturn'])->name('returns.index');
Route::post('/profil/returns/detail-return)', [ReturnedController::class, 'storereturned'])->name('returns.store');




Route::get('/confirm-rent', [Confirm1Controller::class, 'indexConfirm1'])->name('confirm-rent');
Route::post('/confirm-rent/{payment}', [Confirm1Controller::class, 'edit'])->name('confirm-rent.edit');

Route::get('/profile', [UserController::class, 'indexprofile'])->name('profile');
Route::get('/profile/edit/{id}', [UserController::class, 'indexeditprofile'])->name('indexedit');
Route::post('/profile/edit/{id}', [UserController::class, 'update'])->name('update');

Route::get('/profile/orders', [OrderController::class, 'indexorder'])->name('indexorder');


Route::post('/products/{product}/add-to-favorites', [FavoriteController::class, 'addToFavorites'])->name('favorites.add');
Route::post('/products/{favorite}/remove-from-favorites', [FavoriteController::class, 'removeFromFavorites'])->name('favorites.remove');

Route::get('/profile/favorite', [FavoriteController::class, 'viewFavorites'])->name('favorites.view');

Route::get('/profile/historys', [HistoryController::class, 'indexhistorys'])->name('indexhistorys');

Route::get('/detailreturned', function (){
    return view('users/detailReturned');
});





