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
