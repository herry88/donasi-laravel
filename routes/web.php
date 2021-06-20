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

Route::get('/', function () {
    return view('welcome');
});

//rute baru
Route::get('hello', function () {
    return '<h1>Hello Laravel</h1>';
});

Route::get('layout-page',[\App\Http\Controllers\TestController::class,'index']);

//rute baru controller
// Route::get('hellolaravel',[\App\Http\Controllers\TestController::class,'index']);
// Route::get('product-page/category/{cat}/id/{id}',[\App\Http\Controllers\TestController::class,'product']);
// Route::get('add/angka-1/{angka_1}/angka-2/{angka_2}',[\App\Http\Controllers\LatihanController::class,'jumlah']);

//rute baru controller ke views
Route::get('dosen-page',[\App\Http\Controllers\DosenController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('category',App\Http\Controllers\CategoryController::class);
Route::resource('product', App\Http\Controllers\ProductController::class);
