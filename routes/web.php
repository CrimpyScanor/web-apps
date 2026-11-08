<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'pages.home')->name('home');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');

// Rutas originales de la actividad, conservadas para no perder su funcionamiento.
Route::get('/greeting', function () {
    $records = ['Record 1', 'Record 2'];

    return view('welcome', [
        'name' => 'Bernardo',
        'records' => $records,
    ]);
})->name('greeting');

Route::view('/child', 'child')->name('child');
