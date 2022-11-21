<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\PesananMasukController;
use App\Http\Controllers\PesananRiwayatController;

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



require __DIR__.'/auth.php';



Route::middleware('role:admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    Route::view('about', 'about')->name('about');
    Route::view('welcome','welcome')->name('welcome');
    // Route::view('pesanan.masuk','pesanan.masuk.index')->name('pesanan.masuk.index');
    // Route::view('pesanan.riwayat','pesanan.riwayat.index')->name('pesanan.riwayat.index');
    // Route::view('pesanan.masuk.show','pesanan.masuk.show')->name('pesanan.masuk.show');
    // Route::view('pesanan.riwayat.show','pesanan.riwayat.show')->name('pesanan.riwayat.show');
    
    Route::resource('pengiriman', PengirimanController::class);
  
    Route::prefix('pesanan')->as('pesanan.')->group(function(){
        Route::resource('pesananMasuk', PesananMasukController::class);
        Route::resource('pesananRiwayat', PesananRiwayatController::class);
    });

    Route::view('pesanan.masuk.show','pesanan.masuk.show')->name('pesanan.masuk.show');
    Route::view('pesanan.riwayat.show','pesanan.riwayat.show')->name('pesanan.riwayat.show');

    Route::get('/katalog','\App\Http\Controllers\KatalogController@index')->name('katalog.index');
    Route::get('/createkatalog','\App\Http\Controllers\KatalogController@create')->name('katalog.create');
    Route::post('/postkatalog','\App\Http\Controllers\KatalogController@store')->name('katalog.post');
    Route::delete('/katalog/{katalog}','\App\Http\Controllers\KatalogController@destroy')->name('katalog.destroy');
    Route::get('/katalog/{katalog}/edit','\App\Http\Controllers\KatalogController@edit')->name('katalog.edit');
    Route::put('/katalog/{katalog}','\App\Http\Controllers\KatalogController@update')->name('katalog.update');

    Route::get('/kas','\App\Http\Controllers\UangKasController@index')->name('kas.index');
    Route::get('/createkas','\App\Http\Controllers\UangKasController@create')->name('kas.create');
    Route::post('/postkas','\App\Http\Controllers\UangKasController@store')->name('kas.post');
    Route::get('/kas/{kas}/edit','\App\Http\Controllers\UangKasController@edit')->name('kas.edit');
    Route::put('/kas/{kas}','\App\Http\Controllers\UangKasController@update')->name('kas.update');
    Route::get('/kas/{kas}','\App\Http\Controllers\UangKasController@show')->name('kas.show');
    

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
