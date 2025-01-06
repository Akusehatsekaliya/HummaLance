<?php

use App\Http\Controllers\React\AdminController;
use App\Http\Controllers\React\AuthController;
use App\Http\Controllers\React\DashboardController;
use App\Http\Controllers\ReactController;
use Illuminate\Support\Facades\Route;


Route::prefix("react")->group(function () {
    Route::get("landing/{path?}", [ReactController::class, "landing"])->where('path', '.*');
    Route::get("auth/{path?}", [ReactController::class, "auth"])->where('path', '.*');
    Route::get("admin/{path?}", [ReactController::class, "admin"])->where('path', '.*');
});
