<?php

use App\Http\Controllers\UserController;
use Faker\Provider\UserAgent;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('register', [App\Http\Controllers\UserController::class, 'create']) -> name('register');
Route::post('register', [App\Http\Controllers\UserController::class, 'store']) -> name('user.store');
Route::get('login', [App\Http\Controllers\UserController::class, 'login']) -> name('login');

Route::get('verify-email', function () {
    return view('user.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('dashboard', [UserController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect()->route('dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:3,1'])->name('verification.send');