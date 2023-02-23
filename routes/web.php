<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Home\CartController;
use App\Http\Controllers\Home\HomeAuthController;
use App\Http\Controllers\Home\OrderController;
use App\Http\Controllers\Home\UserController;
use App\Http\Controllers\Home\UserDashboardController;
use App\Http\Controllers\Home\WishController;
use App\Http\Controllers\Seller\ProductController;
use App\Http\Controllers\Seller\SellerAuthController;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Seller\SpecialDealController;
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
Route::get('/register', [HomeAuthController::class, 'register'])->name('register');
Route::post('/save/register', [HomeAuthController::class, 'store'])->name('register.store');
Route::get('/login', [HomeAuthController::class, 'login'])->name('login');
Route::post('/user/login', [HomeAuthController::class, 'userLogin'])->name('user.login');
route::get('/shop', [UserController::class, 'shop'])->name('shop');
route::get('/product/{name}/{id}', [UserController::class, 'singleProduct'])->name('single.product');
Route::get('/cart', [UserController::class, 'cart'])->name('cart');
Route::post('cart/store', [CartController::class, 'postCart'])->name('addToCart');
Route::post('product/{slug}/cart/store', [CartController::class, 'postCart'])->name('addToCart.singleProduct');
Route::post('wishlist/store', [WishController::class, 'store'])->name('wishlist.store');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [HomeAuthController::class, 'logout'])->name('logout');
    Route::post('/update-user', [HomeAuthController::class, 'update'])->name('update-user');
    Route::get('/account', [UserDashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/address', [UserDashboardController::class, 'address'])->name('address');
    Route::get('/orders', [UserDashboardController::class, 'orders'])->name('orders');
    Route::get('/wishlist', [UserDashboardController::class, 'wishlist'])->name('wishlist');
    Route::get('/invoice', [UserDashboardController::class, 'invoice'])->name('invoice');
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::post('/place/order', [OrderController::class, 'placeOrder'])->name('place.order');

    // ==================== Fontend Ajax Route Starts From Here =================================
    // ==================== Fontend Ajax Route Starts From Here =================================

    Route::get('cart/data', [CartController::class, 'data']);
    Route::get('product/{slug}/cart/data', [CartController::class, 'data']);
    Route::get('products/{id}', [CartController::class, 'show']);
    Route::get('product/{slug}/products/{id}', [CartController::class, 'showSingle']);
    Route::post('cart/remove', [CartController::class, 'delete']);



    // ==================== Fontend Ajax Route Ends In Here ====================================
    // ==================== Fontend Ajax Route Ends in Here ====================================
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(admin::class)->group(function () {
        Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');


        Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

        Route::get('/order',[OrderController::class,'adminOrder'])->name('order');

        // Banner Section

        Route::get('/banner');
    });
    Route::get('/sign-up', [AdminAuthController::class, 'register'])->name('register');
    Route::post('/add', [AdminAuthController::class, 'store'])->name('store');
    Route::get('/login', [AdminAuthController::class, 'signIn'])->name('signin');
    Route::post('/sign-in', [AdminAuthController::class, 'login'])->name('login');
    Route::get('/forgot/password', [AdminAuthController::class, 'forgot'])->name('forgot');
});


Route::prefix('seller')->name('seller.')->group(function () {
    Route::middleware(seller::class)->group(function () {
        Route::get('/dashboard', [SellerController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [SellerController::class, 'profile'])->name('profile');
        Route::get('/logout', [SellerAuthController::class, 'logout'])->name('logout');

        Route::get('/product', [ProductController::class, 'index'])->name('product.index');
        Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/product/details/{id}', [ProductController::class, 'details'])->name('product.details');
        Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
        Route::get('/order', [OrderController::class, 'sellerOrder'])->name('order');
        Route::get('/order/edit/{id}', [OrderController::class, 'sellerEdit'])->name('order.edit');
        Route::get('/settings', [SellerAuthController::class, 'settings'])->name('settings');
        Route::post('/update/{id}', [SellerAuthController::class, 'update'])->name('update');
        Route::post('/update/password/{id}', [SellerAuthController::class, 'updatePassword'])->name('update.password');
        Route::post('/update/status/{id}', [SellerAuthController::class, 'updateStatus'])->name('update.status');

        Route::get('/special/product',[SpecialDealController::class,'specialProduct'])->name('special.product');
        Route::get('/special/create',[SpecialDealController::class,'create'])->name('special.create');
        Route::post('/special/store',[SpecialDealController::class,'store'])->name('special.store');
        Route::get('/special/edit/{id}',[SpecialDealController::class,'edit'])->name('special.edit');
        Route::post('/special/update/{id}',[SpecialDealController::class,'update'])->name('special.update');
        Route::get('/special/delete/{id}',[SpecialDealController::class,'delete'])->name('special.delete');
        // ajax search route
        Route::get('/search/products', [SpecialDealController::class,'search'])->name('search.products');
    });
    // auth

    Route::get('/sign-up', [SellerAuthController::class, 'register'])->name('register');
    Route::post('/add', [SellerAuthController::class, 'store'])->name('store');
    Route::get('/login', [SellerAuthController::class, 'signIn'])->name('signin');
    Route::post('/sign-in', [SellerAuthController::class, 'login'])->name('login');
    Route::get('/forgot/password', [SellerAuthController::class, 'forgot'])->name('forgot');
});
