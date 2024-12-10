<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// use App\Http\Controllers\Auth\SetPasswordControllerSetPasswordController;

Auth::routes();

Route::get("login", fn() => redirect(route('landing.index') . '#login'))->name("login");
Route::get("register", fn() => redirect(route('landing.index') . '#register'))->name("register");
Route::get('/freelancer-register', [RegisterController::class, 'freelancerStore'])->name('freelancer_register');
Route::get('/register', function () {
    return view('auth.option');
})->name('option');
Route::get('/journey', function () {
    return view('auth.journey');
})->name('journey');
Route::get('/adventure', function () {
    return view('auth.adventure');
})->name('adventure');
Route::get('/optionExperience', function () {
    return view('auth.optionExperience');
})->name('optionExperience');

// Google Login
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);
