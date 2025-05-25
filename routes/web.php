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
Route::get('/register', [RegisterController::class, 'index']);


// route donasi
Route::get('/donasi', [DonasiController::class, 'index']);


// route riwayat
Route::get('/riwayat', [DonasiController::class, 'riwayat']);

// route account
Route::get('/account', [AccountController::class, 'index']);

