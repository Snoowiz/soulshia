<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Ultimate Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Soulshia. All rights reserved.
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Admin\Story\StoryController::class, 'index'])->name('admin.stories.index');
Route::middleware('sided.layout')->get('/show/{frameId}', [App\Http\Controllers\Admin\Story\StoryController::class, 'show'])->name('admin.stories.show');
Route::post('/delete/{frameId}', [App\Http\Controllers\Admin\Story\StoryController::class, 'destroy'])->name('admin.stories.destroy');