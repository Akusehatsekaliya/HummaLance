<?php

use App\Http\Controllers\Admin\ContractController;
use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\BannerController;
use Illuminate\Support\Facades\Route;

Route::apiResource('banner', BannerController::class);

Route::get('about', [AboutController::class, 'index']);
Route::put('about', [AboutController::class, 'update']);

Route::apiResource('contracts', ContractController::class);