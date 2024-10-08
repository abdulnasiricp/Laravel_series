<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Usercontroller;
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
// admin side route

Route::get('admin/login', function () {
    return view('admin-panel.login');
})->name('login');

Route::post('admin/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('admin/register', [RegisterController::class, 'create'])->name('admin.register');
Route::post('admin/store', [RegisterController::class, 'register'])->name('admin.store');

Route::middleware('auth')->group(function () {

    Route::get('dashboard', function () {
        return view('admin-panel.dashboard');
    })->name('dashboard');

    Route::get('user/list', [Usercontroller::class, 'index'])->name('users.list');

    Route::prefix('product')->group(function () {
        Route::get('create', [ProductController::class, 'createProduct'])->name('product.create');
        Route::get('list', [ProductController::class, 'productList'])->name('product.list');
        Route::post('store', [ProductController::class, 'productStore'])->name('product.store');
    });
});

// user side route
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('shop', function () {
    return view('shop');
})->name('shop');

Route::get('cart', function () {
    return view('cart');
})->name('cart');

Route::get('checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('products-detials', function () {
    return view('products-detials');
})->name('products-detials');
