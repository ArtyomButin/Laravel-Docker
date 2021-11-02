<?php

use Illuminate\Support\Facades\Route;

Route::get('/','MainController@index')->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', 'MainController@getForm')->name('contact-form');

