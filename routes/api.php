<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContractController;
use App\Http\Controllers\Api\{
    AboutController,
    BannerController,
    ProjectController,
    CategoryController,
    UserController
};
use App\Http\Controllers\Api\LoginController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');



Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:api');

Route::apiResource('banner', BannerController::class);

Route::get('about', [AboutController::class, 'index']);
Route::put('about', [AboutController::class, 'update']);

Route::get('project', [ProjectController::class, 'index']);
Route::get('project/total', [ProjectController::class, 'total']);
Route::apiResource('category', CategoryController::class);
Route::apiResource('user', UserController::class);

Route::apiResource('contract', ContractController::class);
