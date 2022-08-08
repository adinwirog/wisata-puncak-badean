<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\TipeTiketController;
use App\Http\Controllers\VisitorController;

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

Route::post('/login', function () {
    return view('auth.signin');
});

Route::get('/tiket', function () {
    return view('tiket');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

// Route::get('/post', [EventController::class, 'index'])->name('dashboard.post');
Route::resource('post', EventController::class);

Route::get('/postcreate', function () {
    return view('dashboard.postcreate');
});

Route::get('/postedit', function () {
    return view('dashboard.postedit');
});

Route::resource('products', ProductsController::class);

Route::resource('ticketting', TiketController::class);

Route::resource('typeticket', TipeTiketController::class);

// Route::get('/productscreate', function () {
//     return view('dashboard.productscreate');
// });

Route::resource('booking-tiket', VisitorController::class);

Route::get('/verifikasitiket', function () {
    return view('dashboard.verifikasitiket');
});