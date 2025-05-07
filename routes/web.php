<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengelolaanController;

Route::get('/', [LoginController::class, 'showPageLogin'])->name('login');
Route::post('/login', [LoginController::class, 'Autentikasi'])->name('login.Autentikasi');

Route::get('/dashboard', [DashboardController::class, 'showPageDashboard'])->name('dashboard');

Route::get('/profile', [ProfileController::class, 'showPageProfile'])->name('profile');

Route::get('/pengelolaan', [PengelolaanController::class, 'showPagePengelolaan'])->name('pengelolaan');

