<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = "Beranda";
    return view('beranda', compact('title'));
});
Route::get('/v1', function () {
    $title = "Beranda-v1";
    return view('beranda-1', compact('title'));
});
Route::get('/v2', function () {
    $title = "Beranda-v2";
    return view('beranda-2', compact('title'));
});
Route::get('/about', function(){
    $title = "About";
    return view('about', compact('title'));
})->name('about');
Route::get('/news', function(){
    $title = "News";
    return view('news', compact('title'));
})->name('news');
Route::get('/programs-publications', function(){
    $title = "Programs & Publications";
    return view('programs', compact('title'));
})->name('programs-publications');
Route::get('/events', function(){
    $title = "Events";
    return view('events', compact('title'));
})->name('events');
Route::get('/contact', function(){
    $title = "Contact";
    return view('contact', compact('title'));
})->name('contact');
Route::get('/careers', function(){
    $title = "Careers";
    return view('careers', compact('title'));
})->name('careers');



// berbeda
Route::get('/welcome', function(){
    return view('welcome');
});
