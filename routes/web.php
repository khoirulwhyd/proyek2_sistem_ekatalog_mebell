<?php

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



Auth::routes();
Route::get('/', [App\Http\Controllers\homeController2::class, 'home'])->name('index');
Route::get('/homeadmin', [App\Http\Controllers\homeController2::class, 'home'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\dasboardadminController::class, 'dashboardadmin'])->name('dashboardadmin');
Route::get('/detailproduk', [App\Http\Controllers\dasboardadminController::class, 'detailproduk'])->name('detailproduk');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\homeController2::class, 'home'])->name('index');
Route::get('/about', [App\Http\Controllers\homeController2::class, 'about'])->name('about');
Route::get('/shop', [App\Http\Controllers\homeController2::class, 'shop'])->name('shop');
Route::get('/contact', [App\Http\Controllers\homeController2::class, 'contact'])->name('contact');
Route::get('/shop-single', [App\Http\Controllers\homeController2::class, 'shop_single'])->name('shop-single');