<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('/admin-dashboard', DashboardController::class);
Route::get('/category', function () {
    return view('admin/category');
})->name('category');
Route::resource('/admin-dashboard', DashboardController::class);
Route::get('/project', function () {
    return view('admin/project');
})->name('project');
Route::resource('user', UserController::class);
Route::get('/admin/users/data', [UserController::class, 'getData'])->name('admin.users.data');
Route::get('/banner', function () {
    return view('admin/banner');
})->name('banner');
Route::get('/about-us', function () {
    return view('admin/about');
})->name('about');

Route::get('/contract', function () {
    return view('admin/contract');
})->name('contract');

Route::get('/transaction', function () {
    return view('admin/transaction');
})->name('transaction');
