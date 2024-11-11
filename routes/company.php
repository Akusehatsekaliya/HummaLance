<?php

use Illuminate\Support\Facades\Route;

Route::get('/jobs-company', function () {
    return view('company.jobs');
});

Route::get('/dashboard-company', function () {
    return view('company.dashboard');
});

Route::get('/company/profile', function () {
    return view('company.profile');
});

