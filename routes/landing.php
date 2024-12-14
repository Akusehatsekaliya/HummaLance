<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NotificationController;

Route::middleware("rauth:landing.index")->group(function () {
  Route::get('/', [LandingPageController::class, 'index'])->name('home');
  Route::get('/work', function () {
    return view('home.work');
  })->name("work");
  Route::get('/aboutUs', [LandingPageController::class, 'aboutUs'])->name('about');
  Route::get('/contact', [LandingPageController::class, 'contact'])->name('contact');
  Route::get('/jobs', [LandingPageController::class, 'jobs']);
  Route::get('/profile', [LandingPageController::class, 'profile']);
  Route::get('/chat', [LandingPageController::class, 'chat']);
  Route::get('/detail-job', [LandingPageController::class, 'detail']);
  Route::get('/favorite', [LandingPageController::class, 'favorite']);

  Route::get('/detailCompany', [LandingPageController::class, 'detailCompany']);
});

#notifications
Route::resource('notifications', NotificationController::class);

Route::prefix("landing")->name("landing.")->group(function () {
  Route::get('/', function () {
    return view('landing');
  })->name("index");

  Route::get('about', function () {
    return view('about');
  })->name('about');

  Route::get('guides', function () {
    return view('landing.guides');
  })->name('guides');

  Route::get('learn', function () {
    return view('landing.learn');
  })->name('learn');

  Route::get('events', function () {
    return view('landing.events');
  })->name('events');
});
