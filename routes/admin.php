<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::resource('/admin-dashboard', DashboardController::class);
Route::get('/category', function () {
    return view('admin/category');
})->name('category');
Route::resource('/admin-dashboard', DashboardController::class);
Route::get('/project', function () {
    return view('admin/project');
})->name('project');
Route::get('/user', function () {
    return view('admin/user');
})->name('user');
Route::get('/banner', function () {
    return view('admin/banner');
})->name('banner');
Route::get('/about-us', function () {
    return view('admin/about');
})->name('about');
Route::get('/contract', function () {
    return view('admin/contract');
})->name('contract');

