<?php

use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;



Route::get('/debug', function () {
    return view('debug2');
})->name('debug');
Route::get('/debug2', function () {
    return public_path("a.png");
    // User::factory(1000)->withRole('client')->create();
    // $json_response = collect();

    // User::orderBy('id')->chunk(100, function ($users) use ($json_response) {
    //     foreach ($users as $user) {
    //         $json_response->push($user);
    //         sleep(1);
    //     }
    // });

    // return $json_response->toJson();
    // return Response::streamJson(User::cursor());
})->name('debug2');

#verification
Route::get('/verification', function () {
    return view('auth/verification');
})->name('verification');


require __DIR__ . '/auth.php';
require __DIR__ . '/landing.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/company.php';
require __DIR__ . '/tripay.php';