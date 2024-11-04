<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/debug', function () {
    return view('debug');
})->name('debug');
Route::get('/debug2', function () {
    return view('debug2');
})->name('debug2');

require __DIR__.'/landing.php';
require __DIR__.'/admin.php';