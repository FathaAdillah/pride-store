<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\SumberController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ReturController;
use App\Http\Controllers\HutangController;

Route::get('/', function () {
    return view('pages.auth.auth-login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),  'verified',])
->group(function () {
    Route::get('/home', function () {
        return view('admin.dashboard');
    })->name('home');
    Route::resource('sumber', SumberController::class);
    Route::resource('pengeluaran', PengeluaranController::class);
    Route::resource('jenis-produk', JenisProdukController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('penjualan', PenjualanController::class);
    Route::resource('retur', ReturController::class);
    Route::resource('hutang',HutangController::class);
    Route::resource('Jenis-produk', JenisProdukController::class);

});

