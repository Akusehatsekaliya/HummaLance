<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContractController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TransactionController;
use Illuminate\Support\Facades\Route;

Route::prefix("admin")->name("admin.")->group(function () {
    // dashboard
    Route::resource('dashboard', DashboardController::class);
    // category
    Route::resource('category', CategoryController::class);
    // Route::get('category/data', [CategoryController::class, 'getData'])->name('category.data');
    // project
    Route::resource('project', ProjectController::class);
    // user
    Route::resource('user', UserController::class);
    Route::put('/user/toggle-status/{user}', [UserController::class, 'toggleStatus'])->name('user.toggleStatus');
    // banner
    Route::resource('banner', BannerController::class)->except(['show', 'edit', 'create']);
    // about
    Route::resource('about', AboutController::class);
    // contract
    Route::resource('contract', ContractController::class);
    Route::get('contracts/showDetail/{id}', [ContractController::class, 'showDetail']);
    Route::get('/download/contract/{id}', [ContractController::class, 'downloadContract']);
    // transaction
    Route::resource('transaction', TransactionController::class);
});
