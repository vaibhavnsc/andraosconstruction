@extends('layouts.app')

@php
    $seo = getPageSeoByKey('commercial-concrete');

    $title = $seo->meta_title ?? 'Commercial Concrete Companies Denver | Andraos Construction';

    $description = $seo->meta_description
        ?? 'Are you looking for commercial concrete companies in Denver, CO? Call or text Andraos Construction today for expert services with detailed estimates.';
@endphp 

@section('meta_title', $title)
@section('meta_description', $description)


@section('content')

<header class="page-hero">
    <div class="page-hero__bg" id="js-service-hero-bg" aria-hidden="true"
        data-bg="/assets/images/project.jpg"
        style="background-image: url(/assets/images/project.jpg&quot;);"></div>
    <div class="page-hero__scrim" aria-hidden="true"></div>
    <div class="container">
        <nav class="breadcrumb-mono mb-3" aria-label="Breadcrumb">
            <a href="/">Home</a> &nbsp;/&nbsp;
            <a href="/services">Services</a> &nbsp;/&nbsp;
            <span class="js-service-name">Commercial Concrete</span>
        </nav>
        <h1 class="js-service-name">Commercial Concrete</h1>
    </div>
</header>


<!-- ====================== CONTENT + SIDEBAR ====================== -->

<section class="section" aria-label="Service detail">
    <div class="container">
        <div class="row g-5">

            <!-- Main column -->
            <div class="col-lg-8">
                <article class="reveal is-visible">
                    <img id="js-service-image" alt="Commercial Concrete" class="ratio-16-9 mb-4"
                        src="{{ asset('assets/images/commercial.jpeg') }}">

                    <p class="eyebrow">Overview</p>
                    <h2 class="ff-display display-md mt-2 mb-3">
                        Expert Concrete Services for Your Business
                    </h2>
                    <p class="lede" id="js-service-overview">Andraos Construction has been providing concrete, asphalt, and masonry services throughout the Denver Metro area since 1993. With decades of experience and knowledge in working with property management companies, business owners, and general contractors. Our customers include retail centers, shopping centers, warehouses, multifamily housing, car washes, city works, and more. Our services include:</p>
                    <p class="lede" id="js-service-overview">
                        <ul>
                            <li>Driveway</li>
                            <li>Sidewalks</li>
                            <li>Patios</li>
                            <li>Curb and gutter</li>
                            <li>Drain pans</li>
                            <li>Concrete lots</li>
                            <li>Pool decks</li>
                            <li>Stairs and steps</li>
                            <li>Caissons</li>
                            <li>Concrete decks</li>
                            <li>Concrete entrances</li>
                            <li>Ramps</li>
                            <li>Grinding tripping hazards</li>
                            <li>Concrete repair and patch</li>
                            <li>Crack chase and sealing</li>
                            <li>Bollards</li>
                            <li>Excavation and grading</li>
                            <li>Snow melting systems</li>
                        </ul>

                        <a href="/contact">Call us today</a> to discuss your commercial concrete needs.
                    </p>

                    <div class="d-flex flex-wrap gap-1 mt-3" id="js-service-tags"><span class="tag">Flatwork</span><span
                            class="tag">Curb &amp; gutter</span><span class="tag">ADA</span></div>

                    <!-- What's included -->
                    <h2 class="ff-display display-md mt-5 mb-4">What’s Included</h2>
                    <ul class="included-list row row-cols-1 row-cols-md-2 g-0" id="js-service-included">
                        <li>Concrete flatwork &amp; sidewalks</li>
                        <li>Curb, gutter &amp; drain pans</li>
                        <li>ADA-compliant ramps &amp; detectable warnings</li>
                        <li>Dock aprons &amp; loading ramps</li>
                        <li>Structural slabs &amp; foundations</li>
                        <li>Demolition &amp; removal</li>
                    </ul>

                    <!-- CTA inline -->
                    <div class="d-flex gap-2 mt-5 flex-wrap">
                        <a href="/contact" class="btn btn-navy btn-arrow">Request a Quote</a>
                        <a href="tel:+3039153703" class="btn btn-outline-navy">Call (303) 915-3703</a>
                    </div>
                </article>
            </div>

            <!-- Sidebar -->
            <aside class="col-lg-4" aria-label="Service navigation">
                <div class="sidebar-card">
                    <h2 class="sidebar-card__title">All Services</h2>
                    <nav id="js-service-nav"><a class="service-nav-link active"
                            href="/services/commercial-concrete">Commercial Concrete<span
                                aria-hidden="true">→</span></a><a class="service-nav-link"
                            href="/services/asphalt">Asphalt Paving &amp; Repair<span
                                aria-hidden="true">→</span></a><a class="service-nav-link"
                            href="/services/masonry">Commercial Masonry<span
                                aria-hidden="true">→</span></a><a class="service-nav-link"
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
                    <a href="contact" class="btn btn-light-navy btn-arrow w-100">Request a Quote</a>
                </div>
            </aside>

        </div>
    </div>
</section>


<section class="section bg-warm section--tight" aria-labelledby="process-heading">
    <div class="container">
        <p class="eyebrow mb-2">How We Work</p>
        <h2 id="process-heading" class="ff-display display-md mb-4">From Site Walk to Warranty</h2>
        <div class="row g-3" id="js-service-process">
            <div class="col-md-6 col-lg-4">
                <div class="process-step h-100"><span class="num-eyebrow d-block mb-2">01</span>
                    <h3 class="ff-display fs-5 mb-2">Site Walk &amp; Assessment</h3>
                    <p class="text-slate small mb-0">We meet on site, review the scope, and document existing conditions
                        — no guesswork from a desk.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="process-step h-100"><span class="num-eyebrow d-block mb-2">02</span>
                    <h3 class="ff-display fs-5 mb-2">Detailed Estimate</h3>
                    <p class="text-slate small mb-0">A clear, line-item estimate in 3–5 business days, with scope,
                        schedule, and assumptions spelled out.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="process-step h-100"><span class="num-eyebrow d-block mb-2">03</span>
                    <h3 class="ff-display fs-5 mb-2">Scheduling &amp; Mobilization</h3>
                    <p class="text-slate small mb-0">We sequence the work around tenants, residents, and traffic, then
                        mobilize our own crews and equipment.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="process-step h-100"><span class="num-eyebrow d-block mb-2">04</span>
                    <h3 class="ff-display fs-5 mb-2">Self-Performed Execution</h3>
                    <p class="text-slate small mb-0">Andraos crews perform the work — concrete, asphalt, and masonry —
                        under one accountable project manager.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="process-step h-100"><span class="num-eyebrow d-block mb-2">05</span>
                    <h3 class="ff-display fs-5 mb-2">Punch &amp; Warranty</h3>
                    <p class="text-slate small mb-0">We walk the finished work with you and stand behind it with a
                        written one-year workmanship warranty.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="section bg-navy-deep text-white text-center" aria-labelledby="svc-single-cta">
      <div class="container reveal is-visible">
        <h2 id="svc-single-cta" class="ff-display display-xl text-white mx-auto maxw-20">
          Let’s talk about your <span class="js-service-name">Commercial Concrete</span>.
        </h2>
        <div class="d-flex gap-2 justify-content-center mt-4 flex-wrap">
          <a href="contact.html" class="btn btn-light-navy btn-arrow">Request a Quote</a>
          <a href="tel:+3039153703" class="btn btn-outline-light btn-arrow">(303)&nbsp;915-3703</a>
        </div>
      </div>
    </section>
@endsection