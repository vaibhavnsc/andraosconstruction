<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::view('/about', 'pages.about')->name('about');
Route::view('/privacy', 'pages.privacy')->name('privacy');
Route::view('/terms', 'pages.terms')->name('terms');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/contact', 'pages.contact')->name('contact');

/*
|--------------------------------------------------------------------------
| Services
|--------------------------------------------------------------------------
*/

Route::view('/services', 'pages.services')
    ->name('services');

Route::view('/commercial-concrete', 'pages.services')
    ->name('commercial-concrete');

Route::view('/residential-concrete', 'pages.services')
    ->name('residential-concrete');

Route::view('/concrete-finishes', 'pages.services')
    ->name('concrete-finishes');

Route::view('/masonry', 'pages.services')
    ->name('masonry');

Route::view('/asphalt', 'pages.services')
    ->name('asphalt');

Route::view('/snow-melt', 'pages.services')
    ->name('snow-melt');

/*
|--------------------------------------------------------------------------
| Service Areas
|--------------------------------------------------------------------------
*/

Route::view('/service-areas', 'pages.service-areas')
    ->name('service-areas');

Route::view('/service-areas/denver', 'pages.service-areas')
    ->name('areas.denver');

Route::view('/service-areas/aurora', 'pages.service-areas')
    ->name('areas.aurora');

Route::view('/service-areas/littleton', 'pages.service-areas')
    ->name('areas.littleton');

Route::view('/service-areas/highlands-ranch', 'pages.service-areas')
    ->name('areas.highlands-ranch');

Route::view('/service-areas/castle-rock', 'pages.service-areas')
    ->name('areas.castle-rock');

Route::view('/service-areas/parker', 'pages.service-areas')
    ->name('areas.parker');

Route::view('/service-areas/englewood', 'pages.service-areas')
    ->name('areas.englewood');

Route::view('/service-areas/broomfield', 'pages.service-areas')
    ->name('areas.broomfield');

Route::view('/service-areas/boulder', 'pages.service-areas')
    ->name('areas.boulder');

Route::view('/service-areas/westminster', 'pages.service-areas')
    ->name('areas.westminster');

Route::view('/service-areas/thornton', 'pages.service-areas')
    ->name('areas.thornton');

Route::view('/service-areas/arvada', 'pages.service-areas')
    ->name('areas.arvada');

Route::view('/service-areas/longmont', 'pages.service-areas')
    ->name('areas.longmont');

Route::view('/service-areas/locations/denver', 'sections.service-areas.locations.denver')
    ->name('locations.denver');

Route::view('/service-areas/locations/aurora', 'sections.service-areas.locations.aurora')
    ->name('locations.aurora');

Route::view('/service-areas/locations/littleton', 'sections.service-areas.locations.littleton')
    ->name('locations.littleton');

Route::view('/service-areas/locations/highlands-ranch', 'sections.service-areas.locations.highlands-ranch')
    ->name('locations.highlands-ranch');

Route::view('/service-areas/locations/castle-rock', 'sections.service-areas.locations.castle-rock')
    ->name('locations.castle-rock');

Route::view('/service-areas/locations/parker', 'sections.service-areas.locations.parker')
    ->name('locations.parker');

Route::view('/service-areas/locations/broomfield', 'sections.service-areas.locations.broomfield')
    ->name('locations.broomfield');

Route::view('/service-areas/locations/boulder', 'sections.service-areas.locations.boulder')
    ->name('locations.boulder');

Route::view('service-areas/locations/westminster', 'sections.service-areas.locations.westminster')
    ->name('locations.westminster');

Route::view('service-areas/locations/thornton', 'sections.service-areas.locations.thornton')
    ->name('locations.thornton');


/*
|--------------------------------------------------------------------------
| Fallback function
|--------------------------------------------------------------------------
*/

Route::fallback(function () {
    return response()->view('pages.404', [], 404);
});
