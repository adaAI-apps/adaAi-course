<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/auth/google/redirect', [AuthController::class, 'redirectGoogle'])->name('auth.google.redirect');
Route::get('/auth/google/callback', [AuthController::class, 'callbackGoogle'])->name('auth.google.callback');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {

});
