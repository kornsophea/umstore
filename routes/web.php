<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ListProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



/*
 * Admin Routes
 */
Route::prefix('admin')->group(function() {

    Route::middleware('auth:admin')->group(function() {
        // Dashboard
        // Route::get('/', 'DashboardController@index');
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/', 'index')->name('/');
        });

        // Products
        // Route::resource('/products','ProductController');
        Route::controller(ProductController::class)->group(function () {
            Route::get('/products', 'index')->name('/products');
            Route::put('/products/{id}', 'update')->name('/products');
            Route::get('/products/show/{id}', 'show')->name('/products/show');
            Route::get('/products/create', 'create')->name('/products/create');
            Route::post('/products/store', 'store')->name('/products/store');
            Route::delete('/products/destroy{id}', 'destroy')->name('/products/destroy');
            Route::get('/products/edit/{id}', 'edit')->name('/products/edit');
        });

        // Orders
        // Route::resource('/orders','OrderController');
        Route::controller(OrderController::class)->group(function () {
            Route::get('/orders', 'index')->name('orders');
            Route::get('/pending/{id}', 'pending')->name('order.pending');
            Route::get('/confirm/{id}', 'confirm')->name('order.confirm');
            Route::get('/show/{id}', 'show')->name('order.show');
            Route::get('/order/detail/{id}', 'show')->name('order.detail');
        });
        // Route::get('/confirm/{id}','OrderController@confirm')->name('order.confirm');
        // Route::get('/pending/{id}','OrderController@pending')->name('order.pending');

        // // Users
        // Route::resource('/users','UsersController');
        Route::controller(UserController::class)->group(function () {
            Route::get('/users', 'index')->name('users');
            Route::get('/users/show/{id}', 'show')->name('users.show');
        });
        // // Logout
        // Route::get('/logout','AdminUserController@logout');

    });

    // Admin Login
    Route::controller(AdminController::class)->group(function () {
        Route::get('/login', 'index')->name('/login');
        Route::post('/login', 'store')->name('/login');
    });
   
    
});

/*
 * Front Routes
 */

// Route::get('/', 'Front\HomeController@index');
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('/');
    });
    Route::controller(ListProductController::class)->group(function () {
        Route::get('/products', 'index')->name('products');
    });

// User Registration
// Route::get('/user/register','Front\RegistrationController@index');
// Route::post('/user/register','Front\RegistrationController@store');
    Route::controller(RegistrationController::class)->group(function () {
        Route::get('/user/register', 'index')->name('user.index');
        Route::post('/user/register', 'store')->name('user.index');
    });

// // User Login
// Route::get('/user/login','Front\SessionsController@index');
// Route::post('/user/login','Front\SessionsController@store');
    Route::controller(SessionsController::class)->group(function () {
        Route::get('/user/login', 'index')->name('/user/login');
        Route::post('/user/login', 'store')->name('/user/login');
        Route::get('/user/profile', 'index')->name('/user/profile');
    });
// // Logout
// Route::get('/user/logout','Front\SessionsController@logout');
    Route::controller(SessionsController::class)->group(function () {
        Route::get('/user/logout', 'logout')->name('user.logout');
    });

// Route::get('/user/profile', 'Front\UserProfileController@index');
// Route::get('/user/order/{id}','Front\UserProfileController@show');
    Route::controller(UserProfileController::class)->group(function () {
        Route::get('/user/profile', 'index')->name('/user/profile');
        Route::get('/user/order/{id}', 'show')->name('/user/order');
    });

// // Cart
// Route::get('/cart', 'Front\CartController@index');
// Route::post('/cart','Front\CartController@store')->name('cart');
// Route::patch('/cart/update/{product}','Front\CartController@update')->name('cart.update');
// Route::delete('/cart/remove/{product}','Front\CartController@destroy')->name('cart.destroy');
// Route::post('/cart/saveLater/{product}', 'Front\CartController@saveLater')->name('cart.saveLater');
    Route::controller(CartController::class)->group(function () {
        Route::get('/cart', 'index')->name('/cart');
        Route::post('/cart', 'store')->name('/cart');
        Route::delete('/cart/remove/{product}', 'destroy')->name('cart.destroy');
        Route::patch('/cart/update/{id}', 'update')->name('cart.update');
        Route::post('/cart/saveLater/{product}', 'saveLater')->name('cart.saveLater');
    });

// // Save for later
// Route::delete('/saveLater/destroy/{product}','Front\SaveLaterController@destroy')->name('saveLater.destroy');
// Route::post('/cart/moveToCart/{product}','Front\SaveLaterController@moveToCart')->name('moveToCart');

// // Checkout
// Route::get('/checkout','Front\CheckoutController@index');
// Route::post('/checkout','Front\CheckoutController@store')->name('checkout');
Route::controller(CheckoutController::class)->group(function () {
    Route::get('/checkout', 'index');
    Route::post('/checkout', 'store')->name('checkout');
    Route::post('/cart/remove/{product}', 'destroy')->name('cart.destroy');
    Route::post('/cart/saveLater/{product}', 'saveLater')->name('cart.saveLater');
});
// Route::get('empty', function() {
//     Cart::instance('default')->destroy();
// });

Route::get('/about', function() {
   return view('front.about.index');
});