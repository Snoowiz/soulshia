<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Ultimate Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Soulshia. All rights reserved.
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;

Route::post('/mentions', [App\Http\Controllers\Api\User\Search\AutocompleteController::class, 'searchMentions']);
