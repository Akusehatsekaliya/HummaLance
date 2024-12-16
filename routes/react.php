<?php

use App\Http\Controllers\React\AdminController;
use App\Http\Controllers\React\DashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix("react")->group(function () {
    Route::get("admin/{path?}", [AdminController::class, "index"])->where('path', '.*');
});
