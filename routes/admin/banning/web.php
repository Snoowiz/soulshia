<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Ultimate Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Soulshia. All rights reserved.
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Admin\Banning\BanningController::class, 'index'])->name('admin.banning.index');

Route::middleware(['sided.layout'])->get('/show/{banId}', [App\Http\Controllers\Admin\Banning\BanningController::class, 'show'])->name('admin.banning.show');

Route::post('/delete/{banId}', [App\Http\Controllers\Admin\Banning\BanningController::class, 'destroy'])->name('admin.banning.delete');