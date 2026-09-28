<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Ultimate Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Soulshia. All rights reserved.
|--------------------------------------------------------------------------
*/

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/logout', function (Request $request) {
    auth()->guard('web')->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return response()->json([
        'status' => 'success',
        'message' => 'Logged out successfully'
    ]);
});