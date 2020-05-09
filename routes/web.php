<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
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

Route::get('/helo', function() {
    return "Hello World";
});

Route::get('/product/display', 'ProductController@showAll');

Route::get('/product/save', 'ProductController@saveNew');

Route::get("/pintu-masuk", 'TestController@pintuMasuk');

// Method GET untuk melihat daftar list
Route::get("/products/list", 'ProductController@list');

// Method POST untuk membuat produk baru
Route::post("/product/create", 'ProductController@create');

// Method PUT untuk mengupdate data produk
Route::put("/products/{id}", 'ProductController@update');

// Mengizinkan lebih dari 1 HTTP Method : PUT dan PATCH
Route::match(["PUT", "PATCH"], "/products/{id}", "ProductController@update");

// Mengizinkan semua HTTP Method
Route::any("/products/{id}", 'ProductController@action');

// Membuat nama untuk route
Route::get('/products/list', 'ProductController@list')->name('products');

// Membuat kelompok route (Route Group)
Route::group(["prefix" => "/products"], function(){
    Route::get('/all', 'ProductController@all');
    Route::get('/bag', 'ProductController@bag');
    Route::get('/latest', 'ProductController@latest');
});

// Membuat route view
Route::view("/path", "nama.view");