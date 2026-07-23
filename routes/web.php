<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

$pages = config('pages');

// Leads page
Route::get('/leads', function () {
    $perPage = 25;
    $leads = \Illuminate\Support\Facades\DB::table('quotes')->orderByDesc('created_at')->paginate($perPage);
    return view('pages.leads', compact('leads'));
})->name('leads');

// Leads data API for auto-refresh
Route::get('/leads-data', function () {
    $perPage = 25;
    $page = request('page', 1);
    $leads = \Illuminate\Support\Facades\DB::table('quotes')->orderByDesc('created_at')->paginate($perPage);
    return response()->json([
        'data' => $leads->items(),
        'meta' => [
            'current_page' => $leads->currentPage(),
            'last_page' => $leads->lastPage(),
            'per_page' => $leads->perPage(),
            'total' => $leads->total(),
        ]
    ]);
});

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
