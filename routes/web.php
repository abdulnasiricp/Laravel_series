<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
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
})->name('admin.login');

Route::get('admin/register', function () {
    return view('admin-panel.register');
})->name('admin.register');

Route::get('dashboard', function () {
    return view('admin-panel.dashboard');
})->name('dashboard');

Route::get('user/list', [Usercontroller::class,'index'])->name('users.list');

Route::get('product/create', [ProductController::class,'createProduct'])->name('product.create');

Route::get('product/list', [ProductController::class,'productList'])->name('product.list');




// user side route
Route::get('/', function () {
    return view('index');
});

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



