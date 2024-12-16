<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    AboutController,
    BannerController,
    ProjectController,
    CategoryController,
    UserController,
    ContractController,
    LanguageController
};
use App\Http\Controllers\Api\LoginController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');



Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:api');

Route::apiResource('banner', BannerController::class);

Route::get('about', [AboutController::class, 'index']);
Route::put('about', [AboutController::class, 'update']);

Route::get('project', [ProjectController::class, 'index']);

Route::apiResource('category', CategoryController::class);

Route::apiResource('user', UserController::class);

Route::get('total/project', [ProjectController::class, 'total']);
Route::get('total/user', [UserController::class, 'total']);
Route::get('total/contract', [ContractController::class, 'total']);

Route::apiResource('contract', ContractController::class);
Route::apiResource('language', LanguageController::class);
