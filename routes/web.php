<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Home\CartController;
use App\Http\Controllers\Home\HomeAuthController;
use App\Http\Controllers\Home\UserController;
use App\Http\Controllers\Home\UserDashboardController;
use App\Http\Controllers\Seller\ProductController;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\SellerAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.home');
})->name('home');
Route::get('/register',[HomeAuthController::class,'register'])->name('register');
Route::post('/save/register',[HomeAuthController::class,'store'])->name('register.store');
Route::get('/login',[HomeAuthController::class,'login'])->name('login');
Route::post('/user/login',[HomeAuthController::class,'userLogin'])->name('user.login');
route::get('/shop',[UserController::class,'shop'])->name('shop');
Route::get('/cart',[UserController::class,'cart'])->name('cart');
Route::post('cart/store',[CartController::class,'postCart'])->name('addToCart');
Route::group(['middleware' => 'auth'], function (){
    Route::get('/logout',[HomeAuthController::class,'logout'])->name('logout');
    Route::get('/account',[UserDashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/address',[UserDashboardController::class,'address'])->name('address');
    Route::get('/orders',[UserDashboardController::class,'orders'])->name('orders');
    Route::get('/wishlist',[UserDashboardController::class,'wishlist'])->name('wishlist');
    Route::get('/invoice',[UserDashboardController::class,'invoice'])->name('invoice');
    Route::get('cart/data',[CartController::class,'data']);
    Route::get('products/{id}',[CartController::class,'show']);
    Route::get('/cart/{id}',[CartController::class,'destroy']);
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
});


Route::prefix('seller')->name('seller.')->group(function () {
    Route::middleware(seller::class)->group(function () {
        Route::get('/dashboard', [SellerController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [SellerController::class, 'profile'])->name('profile');
        Route::get('/logout', [SellerAuthController::class, 'logout'])->name('logout');

        Route::get('/product', [ProductController::class, 'index'])->name('product.index');
        Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/product/details/{id}',[ProductController::class,'details'])->name('product.details');
        Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    });
    // auth

    Route::get('/sign-up', [SellerAuthController::class, 'register'])->name('register');
    Route::post('/add', [SellerAuthController::class, 'store'])->name('store');
    Route::get('/sign-in', [SellerAuthController::class, 'signIn'])->name('signin');
    Route::post('/login', [SellerAuthController::class, 'login'])->name('login');
    Route::get('/forgot/password', [SellerAuthController::class, 'forgot'])->name('forgot');
});
