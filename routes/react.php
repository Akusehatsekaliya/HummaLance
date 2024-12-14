<?php

use App\Http\Controllers\React\AdminController;
use App\Http\Controllers\React\DashboardController;
use Illuminate\Support\Facades\Route;


// Route::prefix("react")->middleware("role:admin")->group(function () {
Route::get("/{path?}", [AdminController::class, "index"])->where('path', '.*');
// });
