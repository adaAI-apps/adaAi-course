<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/auth/google/redirect', [AuthController::class, 'redirectGoogle'])->name('auth.google.redirect');
Route::get('/auth/google/callback', [AuthController::class, 'callbackGoogle'])->name('auth.google.callback');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/email/verify', function () {
    return inertia('Auth/VerifyEmail');
})->middleware('auth')->name('verification.notice');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route('index');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::prefix('admin')->middleware(['auth', 'admin', 'verified'])->group(function () {});
