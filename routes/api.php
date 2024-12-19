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
    LanguageController,
    AuthController
};
use App\Http\Controllers\Api\LoginController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return response()->json([
        'authenticated' => true,
        'user' => $request->user(),
    ]);
});


Route::middleware("check.token.domain")->group(function () {
    Route::post('/auth/refresh', [AuthController::class, 'refresh']);

    Route::post('/login', [LoginController::class, 'login']);

    Route::middleware('auth:api')->group(function () {
        Route::post('/logout', [LoginController::class, 'logout']);
        Route::post('/auth/journey', [AuthController::class, 'journey']);
    });
});


Route::prefix("admin")->group(function () {
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
});
