<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::view('/about', 'pages.about')->name('about');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/contact', 'pages.contact')->name('contact');

/*
|--------------------------------------------------------------------------
| Services
|--------------------------------------------------------------------------
*/

Route::view('/commercial-concrete', 'pages.commercial-concrete')
    ->name('commercial-concrete');

Route::view('/residential-concrete', 'pages.residential-concrete')
    ->name('residential-concrete');

Route::view('/concrete-finishes', 'pages.concrete-finishes')
    ->name('concrete-finishes');

Route::view('/masonry', 'pages.masonry')
    ->name('masonry');

Route::view('/asphalt', 'pages.asphalt')
    ->name('asphalt');

Route::view('/snow-melt', 'pages.snow-melt')
    ->name('snow-melt');

/*
|--------------------------------------------------------------------------
| Service Areas
|--------------------------------------------------------------------------
*/

Route::view('/service-areas', 'pages.service-areas')
    ->name('service-areas');

Route::view('/service-areas/denver', 'pages.areas.denver')
    ->name('areas.denver');

Route::view('/service-areas/aurora', 'pages.areas.aurora')
    ->name('areas.aurora');

Route::view('/service-areas/littleton', 'pages.areas.littleton')
    ->name('areas.littleton');

Route::view('/service-areas/highlands-ranch', 'pages.areas.highlands-ranch')
    ->name('areas.highlands-ranch');

Route::view('/service-areas/castle-rock', 'pages.areas.castle-rock')
    ->name('areas.castle-rock');