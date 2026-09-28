<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Ultimate Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Soulshia. All rights reserved.
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;

Route::name('social-login.')->prefix('social-login')->group(function() {
    // Google login routes
    Route::get('/auth/google', [App\Http\Controllers\User\Auth\Social\GoogleAuthController::class, 'index'])->name('google.redirect');

    Route::get('/callback/google',[App\Http\Controllers\User\Auth\Social\GoogleAuthController::class, 'callbackHandler'])->name('google.callback');
});
