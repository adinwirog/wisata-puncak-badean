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
    return view('home');
});

Route::get('/login', function () {
    return view('auth.signin');
});

Route::get('/tiket', function () {
    return view('tiket');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/post', function () {
    return view('dashboard.post');
});

Route::get('/postcreate', function () {
    return view('dashboard.postcreate');
});

Route::get('/postedit', function () {
    return view('dashboard.postedit');
});

Route::get('/products', function () {
    return view('dashboard.products');
});

Route::get('/productscreate', function () {
    return view('dashboard.productscreate');
});

Route::get('/productsedit', function () {
    return view('dashboard.productsedit');
});

Route::get('/verifikasitiket', function () {
    return view('dashboard.verifikasitiket');
});