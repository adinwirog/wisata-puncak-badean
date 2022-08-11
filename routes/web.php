<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\TipeTiketController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ListAkunController;
use App\Http\Controllers\LoginController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.attempt');

Route::get('/tiket', function () {
    return view('tiket');
});

Route::group(['middleware' => ['auth']], function() {
    
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });

    Route::resource('laporanpengunjung', LaporanController::class);

    Route::resource('booking-tiket', VisitorController::class);
    
    Route::resource('verifikasitiket', VerifikasiController::class);

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

    Route::group(['middleware' => ['cekadmin']], function () {
        Route::resource('listakun', ListAkunController::class);
    });
});



// Route::get('/post', [EventController::class, 'index'])->name('dashboard.post');


// Route::get('/productscreate', function () {
//     return view('dashboard.productscreate');
// });



// Route::get('/verifikasitiket', function () {
//     return view('dashboard.verifikasitiket');
// });

// Route::get('v', function () {
//     return view('dashboard.print');
// });




