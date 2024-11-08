<?php

use App\Http\Controllers\TripayController;
use Illuminate\Support\Facades\Route;

Route::resource('tripay', TripayController::class)->except('store');
Route::post('tripay/{contract}', [TripayController::class, 'store'])->name('tripay.store');
