<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::resource('/admin-dashboard', DashboardController::class);
