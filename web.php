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
route::get('hello', function () {
     echo "<h1>hello word!!!</h1>";
});

//rute baru mengarah ke controller
route::get('hellocontroller', 'HelloController@index');

//resource untuk memanggil seluruh fungsi yang ada di controller
route::resource('product', 'ProductController');