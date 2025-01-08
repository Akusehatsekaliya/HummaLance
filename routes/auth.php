<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CompanyController;

// use App\Http\Controllers\Auth\SetPasswordControllerSetPasswordController;

Auth::routes();

Route::get("login", fn() => redirect(route('landing.index') . '#login'))->name("login");
Route::get("register", fn() => redirect(route('landing.index') . '#register'))->name("register");
// register freelancer
Route::get('/freelancer-register', [RegisterController::class, 'RegisterFreelancerStore'])->name('freelancer_register');
Route::get('/freelancer/register/google', [RegisterController::class, 'registerRedirecToGoogle'])->name('registerRedirectToGoogle');
Route::get('/freelancer/register/googleCallback', [RegisterController::class, 'RegisterFreelancerGoogleStore'])->name('freelancer_register_google');
Route::post('/freelancer-register-google-next/{user_id}', [RegisterController::class, 'RegisterFreelancerStoreNextGoogle'])->name('freelancer_register_next_google');
// end
Route::get('/register', action: function () {
    return view('auth.option');
})->name('option');
Route::get('/journey', function () {
    return view('auth.journey');
})->name('journey');
Route::get('/adventure', function () {
    return view(view: 'auth.adventure');
})->name('adventure');
Route::get('/optionExperience', function () {
    return view('auth.optionExperience');
})->name('optionExperience');
Route::get('/goals', function () {
    return view('auth.goals');
})->name('goals');
Route::get('/success', function () {
    return view('auth.success');
})->name('success');
Route::get('/option', function () {
    return view('auth.option');
})->name('option1');
Route::get('/question', function () {
    return view('auth.question');
})->name('question');
Route::get('/overview', function () {
    return view('auth.overview');
})->name( 'overview');
Route::get('/job', function () {
    return view('auth.job');
})->name('job');
Route::get('/aboutyou', function () {
    return view('auth.aboutyou');
})->name('aboutyou');

// Google Login

Route::get("auth/check", function () {
    return response()->json([
        'authorized' => Auth::check(),
        'user' => Auth::user()->only(["first_name", "email", "avatar"])
    ]);
});


// Route::middleware("guest")->group(function () {
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);
// });

// Menampilkan form "Lupa Password"
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// Mengirim email link reset password
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Menampilkan form reset password berdasarkan token
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');

// Memproses reset password
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::post('/update-goal', [UserController::class, 'UpdateGoal'])->name('update-goal');

Route::post('/update-jobs', [UserController::class, 'UpdateJob'])->name('update-job');

Route::post('/update-about_user', [UserController::class, 'UpdateAboutUser'])->name('update.about');

Route::post('/update-experience', [UserController::class, 'UpdateExperience'])->name('update-experience');

Route::resource('/company', CompanyController::class);
