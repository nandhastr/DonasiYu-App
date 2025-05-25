<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

// // route auth
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login.store', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register.store', [RegisterController::class, 'store'])->name('register.store');



Route::middleware(['isLogin'])->group(function () {
    
    // route donasi
    Route::get('/donasi', [DonasiController::class, 'index'])->name('donasi');
    Route::post('/donasi.store', [DonasiController::class, 'store'])->name('donasi.store');
    
    
    // route riwayat
    Route::get('/riwayat', [DonasiController::class, 'riwayat'])->name('riwayat');
    Route::delete('/riwayat/{id}', [DonasiController::class, 'destroy'])->name('riwayat.destroy');
    
    // route account
    Route::get('/account', [AccountController::class, 'index']);

});



