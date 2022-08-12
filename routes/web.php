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
use App\Http\Controllers\DetailAkunController;
use App\Http\Controllers\ResetPwdAkunController;
use App\Models\Event;

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
    $events = Event::with('user')->where('is_visible', true)->orderBy('updated_at', 'desc')->limit(3)->get();
    return view('home', ['events' => $events]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.attempt');

Route::post('displaytiket', [VisitorController::class, 'display'])->name('display.tiket');

Route::resource('booking-tiket', VisitorController::class);

// Route::get('/tiket', function () {
//     return view('tiket');
// });

Route::group(['middleware' => ['auth']], function() {
    
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });

    Route::resource('laporanpengunjung', LaporanController::class);
    
    Route::resource('verifikasitiket', VerifikasiController::class);

    Route::resource('post', EventController::class);

    Route::get('/postcreate', function () {
        return view('dashboard.postcreate');
    });

    Route::get('/postedit', function () {
        return view('dashboard.postedit');
    });

    Route::resource('detailakun', DetailAkunController::class);

    Route::resource('resetpassword', ResetPwdAkunController::class);

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




