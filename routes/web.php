<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');


Route::view('/privacy', 'pages.privacy')->name('privacy');
Route::view('/terms', 'pages.terms')->name('terms');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/about', 'pages.about')->name('about');
Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/faq', 'pages.faq')->name('faq');



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

$serviceAreaLocations = [
    'denver',
    'aurora',
    'littleton',
    'highlands-ranch',
    'castle-rock',
    'parker',
    'englewood',
    'broomfield',
    'boulder',
    'westminster',
    'thornton',
    'arvada',
    'longmont',
];

Route::view('/services/commercial-concrete', 'sections.services.commercial-concrete')
  ->name('commercial-concrete');

Route::view('/services/asphalt', 'sections.services.asphalt')
  ->name('asphalt');

Route::view('/services/masonry', 'sections.services.masonry')
    ->name('masonry');

Route::view('/services/snow-melt', 'sections.services.snow-melt')
    ->name('snow-melt');

Route::view('/services/hoa-property-management', 'sections.services.hoa-property-management')
    ->name('hoa-property-management');

Route::view('/why-proper-concrete-flatwork-matters-for-longevity-and-safety', 'sections.blog.blog-details.why-proper-concrete-flatwork-matters-for-longevity-and-safety')
  ->name('snow-melt-systems-what-property-managers-need-to-know');

Route::view('/how-concrete-companies-ensure-long-lasting-structures', 'sections.blog.blog-details.how-concrete-companies-ensure-long-lasting-structures')
  ->name('how-concrete-companies-ensure-long-lasting-structures');

Route::view('/what-to-look-for-when-hiring-a-concrete-company', 'sections.blog.blog-details.what-to-look-for-when-hiring-a-concrete-company')
  ->name('what-to-look-for-when-hiring-a-concrete-company');


foreach ($serviceAreaLocations as $serviceAreaLocation) {
    Route::view('/service-areas/'.$serviceAreaLocation, 'sections.service-areas.locations.'.$serviceAreaLocation)
        ->name('areas.'.$serviceAreaLocation);
}

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

Route::view('service-areas/locations/arvada', 'sections.service-areas.locations.arvada')
    ->name('locations.arvada');


Route::view('service-areas/locations/longmont', 'sections.service-areas.locations.longmont')
    ->name('locations.longmont');

Route::view('service-areas/locations/englewood', 'sections.service-areas.locations.englewood')
    ->name('locations.englewood');

/*
|--------------------------------------------------------------------------
| Fallback function
|--------------------------------------------------------------------------
*/

Route::fallback(function () {
    return response()->view('pages.404', [], 404);
});
