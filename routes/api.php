<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\NewsApi;

Route::prefix('news')->group(function(){
    Route::get('/show', [NewsApi::class, 'show'])->name('api.news.show');
    Route::get('/find/{id}', [NewsApi::class, 'find'])->name('api.news.find');
    Route::post('/store', [NewsApi::class, 'store'])->name('api.news.store');
    Route::put('/update/{id}', [NewsApi::class, 'update'])->name('api.news.update');
});