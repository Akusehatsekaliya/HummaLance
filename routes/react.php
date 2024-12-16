<?php

use App\Http\Controllers\React\AdminController;
use App\Http\Controllers\React\AuthController;
use App\Http\Controllers\React\DashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix("react")->group(function () {
    Route::get("auth/{path?}", [AuthController::class, "index"])->where('path', '.*');
    Route::get("admin/{path?}", [AdminController::class, "index"])->where('path', '.*');
});
