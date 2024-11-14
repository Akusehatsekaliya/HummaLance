<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NotificationController;

Route::get('/', [LandingpageController::class, 'index'])->name('landing');
Route::get('/aboutUs', [LandingpageController::class, 'aboutUs'])->name('about');
Route::get('/contact', [LandingpageController::class, 'contact'])->name('contact');
Route::get('/jobs', [LandingpageController::class, 'jobs']);
Route::get('/profile', [LandingpageController::class, 'profile']);
Route::get('/chat', [LandingpageController::class, 'chat']);
Route::get('/detail-job', [LandingpageController::class, 'detail']);
Route::get('/favorite', [LandingpageController::class, 'favorite']);

Route::get('/detailCompany', [LandingpageController::class, 'detailCompany']);

#notifications
Route::resource('notifications', NotificationController::class);
