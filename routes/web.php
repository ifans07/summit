<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NewsApi;

// beranda
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
Route::get('/v3', function () {
    $title = "Beranda-v3";
    return view('beranda-3', compact('title'));
});

// about
Route::get('/about', function(){
    $title = "About";
    return view('about', compact('title'));
})->name('about');
Route::get('/about/v0', function(){
    $title = "About-v0";
    return view('about-0', compact('title'));
})->name('about/v0');
Route::get('/about/leadership', function(){
    $title = "Leadership";
    return view('about/leadership', compact('title'));
})->name('about/leadership');
Route::get('/about/speciality', function(){
    $title = "Speciality";
    return view('about/our-speciality', compact('title'));
})->name('about/speciality');
Route::get('/about/our-team', function(){
    $title = "Our Team";
    return view('about/our-team', compact('title'));
})->name('about/our-team');

// news
Route::get('/news', function(){
    $title = "News";
    return view('news', compact('title'));
})->name('news');
Route::get('/programs-publications', function(){
    $title = "Programs & Publications";
    return view('programs', compact('title'));
})->name('programs-publications');
Route::get('/programs/dojo', function(){
    $title = "dojo";
    return view('programs.dojo', compact('title'));
});
Route::get('/publications', function(){
    $title = "Publications";
    return view('publications', compact('title'));
});

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
Route::get('/testing', function(){
    $title = "Testing";
    return view('testing', compact('title'));
});

// Route::get('/api/news', [NewsApi::class, 'show']);
// Route::post('/api/news/store', [NewsApi::class, 'store']);
