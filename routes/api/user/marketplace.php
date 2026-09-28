<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Ultimate Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Soulshia. All rights reserved.
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;

Route::post('/products', [App\Http\Controllers\Api\User\Market\MarketController::class, 'getProducts']);
Route::get('/products/{productId}', [App\Http\Controllers\Api\User\Market\MarketController::class, 'getProductData']);
Route::get('/categories', [App\Http\Controllers\Api\User\Market\MarketController::class, 'getCategories']);
Route::get('/metadata', [App\Http\Controllers\Api\User\Market\MarketController::class, 'getMetadata']);
Route::get('/bookmarks', [App\Http\Controllers\Api\User\Market\MarketController::class, 'getBookmarks']);
Route::post('/bookmarks/add', [App\Http\Controllers\Api\User\Market\MarketController::class, 'bookmark']);