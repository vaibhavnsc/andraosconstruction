<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

$pages = config('pages');

// Main pages
foreach ($pages['main'] as $page) {
    Route::get($page['path'], [PageController::class, 'show'])
        ->defaults('view', $page['view'])
        ->name($page['name']);
}

// Legacy service URLs → services page (anchor scroll handled in JS)
foreach ($pages['service_anchors'] as $page) {
    Route::get($page['path'], [PageController::class, 'servicesAnchor'])
        ->name($page['name']);
}

// Service detail pages
foreach ($pages['services'] as $page) {
    Route::get($page['path'], [PageController::class, 'show'])
        ->defaults('view', $page['view'])
        ->name($page['name']);
}

// Service area locations
foreach ($pages['areas'] as $area) {
    Route::get('/service-areas/'.$area, [PageController::class, 'show'])
        ->defaults('view', 'pages.areas.'.$area)
        ->name('areas.'.$area);
}

// Blog articles
foreach ($pages['blog'] as $page) {
    Route::get($page['path'], [PageController::class, 'show'])
        ->defaults('view', $page['view'])
        ->name($page['name']);
}

// Contact form API
Route::post('/quote-submit', [QuoteController::class, 'submit'])
    ->name('quote.submit');

// 404 fallback
Route::fallback(fn () => response()->view('pages.404', [], 404));
