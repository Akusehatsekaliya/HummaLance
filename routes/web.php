<?php

use App\Models\Language;
use App\Models\User;
use App\Models\UserReport;
use App\Models\UserSetting;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/debug', function () {
    return view('debug2');
})->name('debug');
Route::get('/setlang/{lang}', function ($lang) {
    dd(Language::all(), UserSetting::where("user_id", auth()->id())->get(), UserSetting::where("user_id", auth()->id())->update([
        "languages_id" => $lang
    ]));
    // return view('debug2');
})->name('debug');
Route::get('/debug2', function (Request $request) {
    $routeName = $request->route('route');

        // Cek apakah route yang diminta ada
        if (Route::has($routeName)) {
            // Menggunakan Route::dispatch untuk menjalankan route yang diminta
            $response = Route::dispatch(Request::create(route($routeName)));
            
            // Mengembalikan respon dari route yang diminta (bisa berupa view atau response lain)
            return $response;
        }
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