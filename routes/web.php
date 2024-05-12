<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckRole;

Route::get('/', function () {
    return view('pages.auth.auth-login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),  'verified',])
->group(function () {
    Route::get('/home', function () {
        return view('admin.dashboard');
    })->name('home');
});

// Route::get('/home', [HomeController::class, 'index'])->name('home');


// Route::middleware(['auth:sanctum', config('jetstream.auth_session'),  'verified'])->prefix('admin')->group(function () {
//     Route::get('/home', function () {
//         return view('admin.home');
//     })->name('home');
// });

// Route::middleware(['auth:sanctum', config('jetstream.auth_session'),  'verified'])->prefix('user')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('home');
// });
