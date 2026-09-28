<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Ultimate Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Soulshia. All rights reserved.
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Admin\Currency\CurrencyController::class, 'index'])->name('admin.currency.index');

Route::get('/show/{currencyId}', [App\Http\Controllers\Admin\Currency\CurrencyController::class, 'show'])->name('admin.currency.show');