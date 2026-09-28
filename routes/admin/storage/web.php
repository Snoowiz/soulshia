<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Ultimate Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Soulshia. All rights reserved.
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Admin\Storage\StorageController::class, 'index'])->name('admin.storage.index');

Route::get('/show/{diskId}', [App\Http\Controllers\Admin\Storage\StorageController::class, 'show'])
	->name('admin.storage.show')
	->where('diskId', '[a-zA-Z0-9]+');