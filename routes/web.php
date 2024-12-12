<?php

use App\Http\Controllers\Confirm1Controller;
use App\Http\Controllers\Confirm2Controller;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReturnedController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//user
Route::get('/', [PageController::class, 'landing'])->name('landing');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('indexRegister');
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('/products', [ProductController::class, 'indexProducts'])->name('products');
Route::get('/products/detail/{id}', [ProductController::class, 'indexdetailProducts'])->name('detailProduct');
Route::get('/products/detail/{product}/transaction', [TransactionController::class, 'indexTransaction'])->name('transaction.index');
Route::post('/products/detail/{product}/transaction', [TransactionController::class, 'storeTransaction'])->name('transaction.store');
Route::get('/profile', [UserController::class, 'indexprofile'])->name('profile');
Route::get('/profile/edit/{id}', [UserController::class, 'indexeditprofile'])->name('indexedit');
Route::post('/profile/edit/{id}', [UserController::class, 'update'])->name('update');
Route::get('/profile/orders', [OrderController::class, 'indexorder'])->name('indexorder');
Route::get('/profil/returns', [ReturnedController::class, 'indexListreturn'])->name('returns.list');
Route::get('/profil/returns/detail-return/{payment}', [ReturnedController::class, 'indexreturn'])->name('returns.index');
Route::post('/profil/returns/detail-return', [ReturnedController::class, 'storereturned'])->name('returns.store');
Route::post('/products/{product}/add-to-favorites', [FavoriteController::class, 'addToFavorites'])->name('favorites.add');
Route::post('/products/{favorite}/remove-from-favorites', [FavoriteController::class, 'removeFromFavorites'])->name('favorites.remove');
Route::get('/profile/favorite', [FavoriteController::class, 'viewFavorites'])->name('favorites.view');
Route::get('/profile/historys', [OrderController::class, 'indexhistorys'])->name('indexhistorys');
Route::post('/profile/logout', [LoginController::class, 'logout'])->name('logout');

//admin
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile-admin/edit/{id}', [UserController::class, 'profileAdmin'])->name('edit-profile-admin');
Route::post('/profile-admin/edit/{id}', [UserController::class, 'updateadmin'])->name('update-profile-admin');
Route::get('/manage-products', [ProductController::class, 'index'])->name('manage.products');
Route::post('/manage-products', [ProductController::class, 'index'])->name('product.search');
Route::get('/manage-products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/manage-products/store', [ProductController::class, 'store'])->name('products.store');
Route::delete('/manage-products/delete/{id}', [ProductController::class, 'delete'])->name('products.delete');
Route::get('/manage-products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/manage-products/edit/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/manage-users', [UserController::class, 'index'])->name('users');
Route::post('/manage-users', [UserController::class, 'index'])->name('user.search');
Route::get('/manage-users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::get('/manage=users/detail-user/{id}', [UserController::class, 'profileUser'])->name('users.detail');
Route::post('/manage=users/detail-user/{id}', [UserController::class, 'updateuser'])->name('users.detail');
Route::get('/manage-confirm-rent', [Confirm1Controller::class, 'indexConfirm1'])->name('confirm-rent');
Route::post('/manage-confirm-rent/{payment}', [Confirm1Controller::class, 'edit'])->name('confirm-rent.edit');
Route::get('/manage-confirm-rent/proof-rent/{payment}', [Confirm1Controller::class, 'indexdetail'])->name('index.proof.rent');
Route::get('/manage-confirm-return', [Confirm2Controller::class, 'indexConfirm2'])->name('confirm-return');
Route::post('/manage-confirm-return/{returned}', [Confirm2Controller::class, 'edit'])->name('confirm-return.edit');
Route::get('/manage-confirm-return/proof-return/{returned}', [Confirm2Controller::class, 'indexdetail'])->name('index.proof.return');










// Route::get('/detailproof', function (){
//     return view('admin/proofTransaction');
// });





