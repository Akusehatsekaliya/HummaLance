<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\RegisterController;

// use App\Http\Controllers\Auth\SetPasswordControllerSetPasswordController;

Auth::routes();

Route::get("login", fn() => redirect(route('landing.index') . '#login'))->name("login");
Route::get("register", fn() => redirect(route('landing.index') . '#register'))->name("register");
// register freelancer
Route::get('/freelancer-register', [RegisterController::class, 'RegisterFreelancerStore'])->name('freelancer_register');
Route::get('/freelancer-register-google', [RegisterController::class, 'RegisterFreelancerGoogleStore'])->name('freelancer_register_google');
Route::get('/freelancer-register-google-next', [RegisterController::class, 'RegisterFreelancerStoreNextGoogle'])->name('freelancer_register_next_google');
// end
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
Route::get('/goals', function () {
    return view('auth.goals');
})->name('goals');

// Google Login
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);

// Menampilkan form "Lupa Password"
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// Mengirim email link reset password
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Menampilkan form reset password berdasarkan token
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');

// Memproses reset password
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
