<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = "Beranda";
    return view('beranda', compact('title'));
});
Route::get('/about', function(){
    $title = "About";
    return view('about', compact('title'));
})->name('about');
Route::get('/welcome', function(){
    return view('welcome');
});
