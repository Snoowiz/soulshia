<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Ultimate Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Soulshia. All rights reserved.
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Admin\Job\JobController::class, 'index'])->name('admin.jobs.index');

Route::middleware('sided.layout')->get('/show/{jobId}', [App\Http\Controllers\Admin\Job\JobController::class, 'show'])
	->name('admin.jobs.show');

Route::post('/destroy/{jobId}', [App\Http\Controllers\Admin\Job\JobController::class, 'destroy'])
	->name('admin.jobs.destroy');

Route::post('/approve/{jobId}', [App\Http\Controllers\Admin\Job\JobController::class, 'approve'])
	->name('admin.jobs.approve');

Route::post('/reject/{jobId}', [App\Http\Controllers\Admin\Job\JobController::class, 'reject'])
	->name('admin.jobs.reject');