<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Ultimate Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Soulshia. All rights reserved.
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;

Route::middleware(['api.key'])->post('/verification/user/verify', [App\Http\Controllers\Api\Admin\VerificationController::class, 'verifyUser']);
