<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NotificationController;

Route::get('/',[LandingpageController::class, 'index']);
Route::get('/aboutUs', [LandingpageController::class, 'aboutUs']);
Route::get('/contact', [LandingpageController::class, 'contact']);
Route::get('/jobs', [LandingpageController::class, 'jobs']);
Route::get('/profile', [LandingpageController::class, 'profile']);
Route::get('/chat', [LandingpageController::class, 'chat']);
Route::get('/detail-job',[LandingpageController::class, 'detail']);

Route::get('/detailCompany', [LandingpageController::class, 'detailCompany']);

#notifications
Route::resource('notifications', NotificationController::class);



