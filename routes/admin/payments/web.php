<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Ultimate Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Soulshia. All rights reserved.
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Admin\Payment\PaymentController::class, 'index'])->name('admin.payments.index');

Route::get('/show/{paymentId}', [App\Http\Controllers\Admin\Payment\PaymentController::class, 'show'])->name('admin.payments.show');