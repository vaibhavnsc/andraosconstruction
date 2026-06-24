@extends('layouts.app')

@section('content')

<header class="page-hero">
    <div class="page-hero__bg" id="js-service-hero-bg" aria-hidden="true" data-bg="/assets/images/snow.jpg"
        style="background-image: url(/assets/images/snow.jpg);"></div>
    <div class="page-hero__scrim" aria-hidden="true"></div>
    <div class="container">
        <nav class="breadcrumb-mono mb-3" aria-label="Breadcrumb">
            <a href="/">Home</a> &nbsp;/&nbsp;
            <a href="/services">Services</a> &nbsp;/&nbsp;
            <span class="js-service-name">Snow Melt Systems</span>
        </nav>
        <h1 class="js-service-name">Snow Melt Systems</h1>
    </div>
</header>

<!-- ====================== CONTENT + SIDEBAR ====================== -->

<section class="section" aria-label="Service detail">
    <div class="container">
        <div class="row g-5">

            <!-- Main column -->
            <div class="col-lg-8">
                <article class="reveal is-visible">
                    <img id="js-service-image" alt="Snow Melt Systems" class="ratio-16-9 mb-4"
                        src="/assets/images/snow.jpg">

                    <p class="eyebrow">Overview</p>
                    <h2 class="ff-display display-md mt-2 mb-3">
                        Commercial-Grade Work, Self-Performed
                    </h2>
                    <p class="lede" id="js-service-overview">Hydronic snow-melt systems eliminate manual snow removal at
                        entries, ramps, and high-traffic walkways — and reduce slip-and-fall liability. We design and
                        embed the tubing during the original concrete pour, so the system is invisible and protected for
                        the life of the slab.</p>

                    <div class="d-flex flex-wrap gap-1 mt-3" id="js-service-tags"><span class="tag">Hydronic</span><span
                            class="tag">Entries</span><span class="tag">ADA ramps</span></div>

                    <!-- What's included -->
                    <h2 class="ff-display display-md mt-5 mb-4">What’s Included</h2>
                    <ul class="included-list row row-cols-1 row-cols-md-2 g-0" id="js-service-included">
                        <li>Hydronic system design</li>
                        <li>In-slab tubing installation</li>
                        <li>Entry &amp; walkway zones</li>
                        <li>ADA ramp protection</li>
                        <li>Drive court &amp; loading areas</li>
                        <li>Boiler &amp; manifold coordination</li>
                    </ul>

                    <!-- CTA inline -->
                    <div class="d-flex gap-2 mt-5 flex-wrap">
                        <a href="contact" class="btn btn-navy btn-arrow">Request a Quote</a>
                        <a href="tel:+13034793181" class="btn btn-outline-navy">Call (303) 479-3181</a>
                    </div>
                </article>
            </div>

            <!-- Sidebar -->
            <aside class="col-lg-4" aria-label="Service navigation">
                <div class="sidebar-card">
                    <h2 class="sidebar-card__title">All Services</h2>
                    <nav id="js-service-nav"><a class="service-nav-link"
                            href="/services/commercial-concrete">Commercial Concrete<span
                                aria-hidden="true">→</span></a><a class="service-nav-link"
                            href="/services/asphalt">Asphalt Paving &amp; Repair<span
                                aria-hidden="true">→</span></a><a class="service-nav-link"
                            href="/services/masonry">Commercial Masonry<span
                                aria-hidden="true">→</span></a><a class="service-nav-link active"
                            href="/services/snow-melt">Snow Melt Systems<span
                                aria-hidden="true">→</span></a><a class="service-nav-link"
                            href="/services/hoa-property-management">HOA &amp; Property
                            Management<span aria-hidden="true">→</span></a></nav>
                </div>
                <div class="sidebar-cta">
                    <h2>Have a scope in mind?</h2>
                    <p class="text-white-50 small mt-2 mb-4">
                        Send us the details and we’ll return a line-item estimate in 3–5 business days.
                    </p>
                    <a href="/contact" class="btn btn-light-navy btn-arrow w-100">Request a Quote</a>
                </div>
            </aside>

        </div>
    </div>
</section>

@include('sections.services.warrenty')


<section class="section bg-navy-deep text-white text-center" aria-labelledby="svc-single-cta">
    <div class="container reveal is-visible">
        <h2 id="svc-single-cta" class="ff-display display-xl text-white mx-auto maxw-20">
            Let’s talk about your Snow<span class="js-service-name">Melt Systems.</span>.
        </h2>
        <div class="d-flex gap-2 justify-content-center mt-4 flex-wrap">
            <a href="/contact" class="btn btn-light-navy btn-arrow">Request a Quote</a>
            <a href="tel:+13034793181" class="btn btn-outline-light btn-arrow">(303)&nbsp;479-3181</a>
        </div>
    </div>
</section>
@endsection