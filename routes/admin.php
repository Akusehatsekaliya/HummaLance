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

// dashboard
Route::resource('/admin-dashboard', DashboardController::class);
// category
Route::resource('/admin/category', CategoryController::class);
Route::get('/categories/data', [CategoryController::class, 'getData'])->name('categories.data');
// project
Route::resource('/Admin/project', ProjectController::class);
// user
Route::resource('user', UserController::class);
Route::get('/admin/users/data', [UserController::class, 'getData'])->name('admin.users.data');
// banner
Route::resource('/Admin/banner', BannerController::class);
// about
Route::resource('/Admin/about', AboutController::class);
// contract
Route::resource('/Admin/contract', ContractController::class);
// transaction
Route::resource('/Admin/transaction', TransactionController::class);
