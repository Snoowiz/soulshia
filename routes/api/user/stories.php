<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Ultimate Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Soulshia. All rights reserved.
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;

Route::get('/feed', [App\Http\Controllers\Api\User\Story\StoryController::class, 'getFeed']);
Route::get('/stories/{storyId}', [App\Http\Controllers\Api\User\Story\StoryController::class, 'getStories']);
Route::get('/views/{frameId}', [App\Http\Controllers\Api\User\Story\StoryController::class, 'getStoryViews']);
Route::post('/views/record', [App\Http\Controllers\Api\User\Story\StoryController::class, 'recordView']);
Route::delete('/delete', [App\Http\Controllers\Api\User\Story\StoryController::class, 'deleteStory']);