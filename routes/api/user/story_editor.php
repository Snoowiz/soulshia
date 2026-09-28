<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Ultimate Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Soulshia. All rights reserved.
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;

Route::post('/create', [App\Http\Controllers\Api\User\Story\StoryController::class, 'create']);

Route::post('/media/upload', [App\Http\Controllers\Api\User\Story\StoryMediaController::class, 'uploadMedia']);

Route::delete('/media/delete', [App\Http\Controllers\Api\User\Story\StoryMediaController::class, 'deleteMedia']);