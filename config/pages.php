<?php

/**
 * Site page registry — single source of truth for routes and views.
 *
 * Structure:
 *   pages/    → full pages (all HTML in one file per page)
 *   partials/ → shared layout pieces (header, footer, head)
 */

return [

  // ── Main pages ──────────────────────────────────────────────────────────
    'main' => [
        ['path' => '/',           'view' => 'pages.home',          'name' => 'home',          'seo' => 'home'],
        ['path' => '/about',      'view' => 'pages.about',         'name' => 'about',         'seo' => 'about'],
        ['path' => '/contact',    'view' => 'pages.contact',       'name' => 'contact',       'seo' => 'contact'],
        ['path' => '/gallery',    'view' => 'pages.gallery',       'name' => 'gallery',       'seo' => 'gallery'],
        ['path' => '/blog',       'view' => 'pages.blog',          'name' => 'blog',          'seo' => 'blog'],
        ['path' => '/faq',        'view' => 'pages.faq',           'name' => 'faq',           'seo' => 'faq'],
        ['path' => '/privacy',    'view' => 'pages.privacy',       'name' => 'privacy',       'seo' => 'privacy'],
        ['path' => '/terms',      'view' => 'pages.terms',         'name' => 'terms',         'seo' => 'terms'],
        ['path' => '/services',   'view' => 'pages.services',      'name' => 'services',      'seo' => 'services'],
        ['path' => '/service-areas', 'view' => 'pages.service-areas', 'name' => 'service-areas', 'seo' => 'service-areas'],
    ],

    // Legacy URLs that scroll to a section on the services page
    'service_anchors' => [
        ['path' => '/commercial-concrete',  'name' => 'commercial-concrete'],
        ['path' => '/residential-concrete', 'name' => 'residential-concrete'],
        ['path' => '/concrete-finishes',    'name' => 'concrete-finishes'],
        ['path' => '/masonry',              'name' => 'masonry'],
        ['path' => '/asphalt',              'name' => 'asphalt'],
        ['path' => '/snow-melt',            'name' => 'snow-melt'],
    ],

    // Individual service detail pages
    'services' => [
        ['path' => '/services/commercial-concrete',    'view' => 'pages.services.commercial-concrete',    'name' => 'services.commercial-concrete',    'seo' => 'commercial-concrete'],
        ['path' => '/services/asphalt',                'view' => 'pages.services.asphalt',                'name' => 'services.asphalt',                'seo' => 'asphalt'],
        ['path' => '/services/masonry',                'view' => 'pages.services.masonry',                'name' => 'services.masonry',                'seo' => 'masonry'],
        ['path' => '/services/snow-melt',               'view' => 'pages.services.snow-melt',               'name' => 'services.snow-melt',               'seo' => 'snow-melt'],
        ['path' => '/services/hoa-property-management', 'view' => 'pages.services.hoa-property-management', 'name' => 'services.hoa-property-management', 'seo' => 'hoa-property-management'],
    ],

    // Service area location pages
    'areas' => [
        'denver', 'aurora', 'littleton', 'highlands-ranch', 'castle-rock',
        'parker', 'englewood', 'broomfield', 'boulder', 'westminster',
        'thornton', 'arvada', 'longmont',
    ],

    // Blog articles
    'blog' => [
        ['path' => '/why-proper-concrete-flatwork-matters-for-longevity-and-safety', 'view' => 'pages.blog.why-proper-concrete-flatwork-matters-for-longevity-and-safety', 'name' => 'blog.flatwork', 'seo' => 'why-proper-concrete-flatwork-matters-for-longevity-and-safety'],
        ['path' => '/how-concrete-companies-ensure-long-lasting-structures',         'view' => 'pages.blog.how-concrete-companies-ensure-long-lasting-structures',         'name' => 'blog.structures', 'seo' => 'how-concrete-companies-ensure-long-lasting-structures'],
        ['path' => '/what-to-look-for-when-hiring-a-concrete-company',               'view' => 'pages.blog.what-to-look-for-when-hiring-a-concrete-company',               'name' => 'blog.hiring', 'seo' => 'what-to-look-for-when-hiring-a-concrete-company'],
    ],

];
