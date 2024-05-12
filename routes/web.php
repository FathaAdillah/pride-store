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

