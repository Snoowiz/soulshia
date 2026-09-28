<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Ultimate Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Soulshia. All rights reserved.
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;

Route::name('downloads.')->prefix('file-downloads')->group(function() {
    Route::get('/post/download-document/{mediaId}/file', [App\Http\Controllers\Downloads\DownloadController::class, 'downloadDocument'])->name('document.index');
});
