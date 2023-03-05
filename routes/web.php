<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminSellerController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HelpCategoryController;
use App\Http\Controllers\Admin\HelpController;
use App\Http\Controllers\Admin\MultiCategoryProductController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SingleCategoryProductController;
use App\Http\Controllers\Admin\SponsorController;
use App\Http\Controllers\Admin\WebSettingsController;
use App\Http\Controllers\Home\CartController;
use App\Http\Controllers\Home\FontendController;
use App\Http\Controllers\Home\HomeAuthController;
use App\Http\Controllers\Home\OrderController;
use App\Http\Controllers\Home\QuestionAndAnswerController;
use App\Http\Controllers\Home\ReviewController;
use App\Http\Controllers\Home\UserController;
use App\Http\Controllers\Home\UserDashboardController;
use App\Http\Controllers\Home\WishController;
use App\Http\Controllers\Seller\CouponController;
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


Route::get('/',[FontendController::class,'home'])->name('home');
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
Route::post('/question',[QuestionAndAnswerController::class,'question'])->name('ask.question');

    // User Auth Route

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
    Route::post('/post-review/{order_id}/{product_id}',[OrderController::class,'review'])->name('post.review');

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

        Route::get('/order', [OrderController::class, 'adminOrder'])->name('order');

        // Banner Route

        Route::get('/banner', [BannerController::class, 'index'])->name('banner.index');
        Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');
        Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
        Route::get('/banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
        Route::post('/banner/update/{id}', [BannerController::class, 'update'])->name('banner.update');
        Route::get('/banner/delete/{id}', [BannerController::class, 'delete'])->name('banner.delete');

        // Sponsor Route

        Route::get('/sponsor', [SponsorController::class, 'index'])->name('sponsor.index');
        Route::get('/sponsor/create', [SponsorController::class, 'create'])->name('sponsor.create');
        Route::post('/sponsor/store', [SponsorController::class, 'store'])->name('sponsor.store');
        Route::get('/sponsor/edit/{id}', [SponsorController::class, 'edit'])->name('sponsor.edit');
        Route::post('/sponsor/update/{id}', [SponsorController::class, 'update'])->name('sponsor.update');
        Route::get('/sponsor/delete/{id}', [SponsorController::class, 'delete'])->name('sponsor.delete');

        // Category wise Product Section

        Route::get('/web-section', [MultiCategoryProductController::class, 'index'])->name('webSection');
        Route::get('/multiCatProduct/create', [MultiCategoryProductController::class, 'create'])->name('multiCatProduct.create');
        Route::post('/multiCatProduct/store', [MultiCategoryProductController::class, 'store'])->name('multiCatProduct.store');
        Route::get('/multiCatProduct/edit/{id}', [MultiCategoryProductController::class, 'edit'])->name('multiCatProduct.edit');
        Route::post('/multiCatProduct/update/{id}', [MultiCategoryProductController::class, 'update'])->name('multiCatProduct.update');
        Route::get('/multiCatProduct/delete/{id}', [MultiCategoryProductController::class, 'delete'])->name('multiCatProduct.delete');

        Route::post('/singleCatProduct/store', [SingleCategoryProductController::class, 'store'])->name('singleCatProduct.store');
        Route::post('/singleCatProduct/update/{id}', [SingleCategoryProductController::class, 'update'])->name('singleCatProduct.update');
        Route::get('/singleCatProduct/delete/{id}', [SingleCategoryProductController::class, 'delete'])->name('singleCatProduct.delete');

        // Website Settings Route

        Route::get('/web-settings', [WebSettingsController::class, 'index'])->name('webSettings.index');
        Route::get('/web-settings/create', [WebSettingsController::class, 'create'])->name('webSettings.create');
        Route::post('/web-settings/store', [WebSettingsController::class, 'store'])->name('webSettings.store');
        Route::get('/web-settings/edit/{id}', [WebSettingsController::class, 'edit'])->name('webSettings.edit');
        Route::post('/web-settings/update/{id}', [WebSettingsController::class, 'update'])->name('webSettings.update');
        Route::get('/web-settings/delete/{id}', [WebSettingsController::class, 'delete'])->name('webSettings.delete');

        // Carousel Route

        Route::get('/carousel', [CarouselController::class, 'index'])->name('carousel.index');
        Route::get('/carousel/create', [CarouselController::class, 'create'])->name('carousel.create');
        Route::post('/carousel/store', [CarouselController::class, 'store'])->name('carousel.store');
        Route::get('/carousel/edit/{id}', [CarouselController::class, 'edit'])->name('carousel.edit');
        Route::post('/carousel/update/{id}', [CarouselController::class, 'update'])->name('carousel.update');
        Route::get('/carousel/delete/{id}', [CarouselController::class, 'delete'])->name('carousel.delete');

        // Admin Seller Route

        Route::get('/seller',[AdminSellerController::class,'index'])->name('seller');
        Route::post('/seller/update/{id}',[AdminSellerController::class,'update'])->name('seller.update');
        Route::get('/search/seller',[AdminSellerController::class,'searchSeller'])->name('search.seller');

        // Help category and FAQ section
        Route::get('/faq-cat', [HelpCategoryController::class, 'index'])->name('faqcat');
        Route::get('/faq-cat/create', [HelpCategoryController::class, 'create'])->name('faqcat.create');
        Route::post('/faq-cat/store', [HelpCategoryController::class, 'store'])->name('faqcat.store');
        Route::get('/faq-cat/edit/{id}', [HelpCategoryController::class, 'edit'])->name('faqcat.edit');
        Route::post('/faq-cat/update/{id}', [HelpCategoryController::class, 'update'])->name('faqcat.update');
        Route::get('/faq-cat/delete/{id}', [HelpCategoryController::class, 'delete'])->name('faqcat.delete');

        Route::get('/help', [HelpController::class, 'index'])->name('help');
        Route::get('/help/create', [HelpController::class, 'create'])->name('help.create');
        Route::post('/help/store', [HelpController::class, 'store'])->name('help.store');
        Route::get('/help/edit/{id}', [HelpController::class, 'edit'])->name('help.edit');
        Route::post('/help/update/{id}', [HelpController::class, 'update'])->name('help.update');
        Route::get('/help/delete/{id}', [HelpController::class, 'delete'])->name('help.delete');

        // Page Route Section

        Route::get('/page', [PageController::class, 'index'])->name('page');
        Route::get('/page/create', [PageController::class, 'create'])->name('page.create');
        Route::post('/page/store', [PageController::class, 'store'])->name('page.store');
        Route::get('/page/edit/{id}', [PageController::class, 'edit'])->name('page.edit');
        Route::post('/page/update/{id}', [PageController::class, 'update'])->name('page.update');
        Route::get('/page/delete/{id}', [PageController::class, 'delete'])->name('page.delete');

        // Reviews

        Route::get('/reviews',[ReviewController::class,'index'])->name('reviews');
        Route::get('review/update/{id}',[ReviewController::class,'status'])->name('review.update');

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

        // Product Route

        Route::get('/product', [ProductController::class, 'index'])->name('product.index');
        Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/product/details/{id}', [ProductController::class, 'details'])->name('product.details');
        Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
        Route::get('/product/subcategory/{id}',[ProductController::class,'subCategory'])->name('sub.category');

        // Seller order Route

        Route::get('/order', [OrderController::class, 'sellerOrder'])->name('order');
        Route::get('/order/edit/{id}', [OrderController::class, 'sellerEdit'])->name('order.edit');

        // Seller Settings Route

        Route::get('/settings', [SellerAuthController::class, 'settings'])->name('settings');
        Route::post('/update/{id}', [SellerAuthController::class, 'update'])->name('update');
        Route::post('/update/password/{id}', [SellerAuthController::class, 'updatePassword'])->name('update.password');
        Route::post('/update/status/{id}', [SellerAuthController::class, 'updateStatus'])->name('update.status');

        // Special product

        Route::get('/special/product', [SpecialDealController::class, 'specialProduct'])->name('special.product');
        Route::get('/special/create', [SpecialDealController::class, 'create'])->name('special.create');
        Route::post('/special/store', [SpecialDealController::class, 'store'])->name('special.store');
        Route::get('/special/edit/{id}', [SpecialDealController::class, 'edit'])->name('special.edit');
        Route::post('/special/update/{id}', [SpecialDealController::class, 'update'])->name('special.update');
        Route::get('/special/delete/{id}', [SpecialDealController::class, 'delete'])->name('special.delete');
        // ajax search route
        Route::get('/search/products', [SpecialDealController::class, 'search'])->name('search.products');

        // Seller Answer

        Route::get('/response-&-replay',[QuestionAndAnswerController::class,'response'])->name('response');
        Route::post('/answer',[QuestionAndAnswerController::class,'answer'])->name('answer');

        // Coupon Route

        Route::get('/coupon', [CouponController::class, 'index'])->name('coupon.index');
        Route::get('/coupon/create', [CouponController::class, 'create'])->name('coupon.create');
        Route::post('/coupon/store', [CouponController::class, 'store'])->name('coupon.store');
        Route::get('/coupon/edit/{id}', [CouponController::class, 'edit'])->name('coupon.edit');
        Route::post('/coupon/update/{id}', [CouponController::class, 'update'])->name('coupon.update');
        Route::get('/coupon/delete/{id}', [CouponController::class, 'delete'])->name('coupon.delete');
    });
    // auth

    Route::get('/sign-up', [SellerAuthController::class, 'register'])->name('register');
    Route::post('/add', [SellerAuthController::class, 'store'])->name('store');
    Route::get('/login', [SellerAuthController::class, 'signIn'])->name('signin');
    Route::post('/sign-in', [SellerAuthController::class, 'login'])->name('login');
    Route::get('/forgot/password', [SellerAuthController::class, 'forgot'])->name('forgot');
});
