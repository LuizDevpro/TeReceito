<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::middleware(['can:guest-or-user'])->group(function () {

    Route::get('/', [MainController::class, 'index'])->name('home');

});

Route::middleware(['guest'])->group(function () {

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register-submit', [AuthController::class, 'registerSubmit'])->name('register.submit');

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login-submit', [AuthController::class, 'loginSubmit'])->name('login.submit');

});

Route::middleware(['auth', 'can:admin'])->group(function () {

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');

});
