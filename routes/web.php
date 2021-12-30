<?php

use GuzzleHttp\Promise\Create;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\homeController2::class, 'home'])->name('index');
Route::get('/about', [App\Http\Controllers\homeController2::class, 'about'])->name('about');
Route::get('/shop', [App\Http\Controllers\homeController2::class, 'shop']);
Route::get('/shop-single', [App\Http\Controllers\homeController2::class, 'shop_single'])->name('shop-single');
Route::get('/dashboard', [App\Http\Controllers\dasboardadminController::class, 'dashboardadmin'])->name('dashboardadmin');

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');
Route::resource('product',App\Http\Controllers\ProductController::class);
Route::resource('categories',App\Http\Controllers\CategoryController::class);

Route::resource('edit', App\Http\Controllers\ProductController::class);