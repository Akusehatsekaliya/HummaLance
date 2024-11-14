<?php

use Illuminate\Support\Facades\Route;


Route::get('/landing', function () {
    return view('landing');
})->name('landing1');
Route::get('/debug', function () {
    return view('debug.landing');
})->name('debug');
Route::get('/debug2', function () {
    return '<script>window.localStorage.setItem("mytime", Date.now());</script>';
})->name('debug2');

#verification
Route::get('/verification', function () {
    return view('auth/verification');
})->name('verification');


require __DIR__ . '/auth.php';
require __DIR__ . '/landing.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/company.php';
require __DIR__ . '/tripay.php';
