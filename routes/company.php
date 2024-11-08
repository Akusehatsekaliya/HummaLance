<?php

use Illuminate\Support\Facades\Route;

Route::get('/company', function () {
    return view('company.index');
});

Route::get('/company/profile', function () {
    return view('company.profile');
});

