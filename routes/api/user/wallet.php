<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Ultimate Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Soulshia. All rights reserved.
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;

Route::get('/data', [App\Http\Controllers\Api\User\Wallet\WalletController::class, 'getData']);
Route::get('/payment/providers', [App\Http\Controllers\Api\User\Wallet\WalletController::class, 'getPaymentProviders']);
Route::post('/deposit', [App\Http\Controllers\Api\User\Wallet\WalletController::class, 'createDepositPayment']);
Route::post('/transfer', [App\Http\Controllers\Api\User\Wallet\WalletController::class, 'makeTransfer']);
Route::get('/transactions', [App\Http\Controllers\Api\User\Wallet\WalletController::class, 'getTransactions']);
Route::get('/receiver/find', [App\Http\Controllers\Api\User\Wallet\WalletController::class, 'getReceivers']);
Route::get('/receiver/history', [App\Http\Controllers\Api\User\Wallet\WalletController::class, 'getReceiverHistory']);