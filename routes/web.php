<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::get('/signup', function () {
    return view('signup');  // Make sure you create a signup.blade.php view in resources/views
})->name('signup');