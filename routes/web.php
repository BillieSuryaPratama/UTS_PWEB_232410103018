<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [LoginController::class, 'showPageLogin'])->name('login');
Route::post('/login', [LoginController::class, 'Autentikasi'])->name('login.Autentikasi');

Route::get('/dashboard', function (Request $request) {
    $username = $request->query('username');
    return view('dashboard', compact('username'));
})->name('dashboard');
