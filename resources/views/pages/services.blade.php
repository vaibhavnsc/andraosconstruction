@extends('layouts.app')

@php
    $seo = getPageSeoByKey('services');
    $title = $seo->meta_title ?? 'Commercial Concrete, Asphalt & Masonry Services | Denver, CO';
    $description =
        $seo->meta_description ??
        'Concrete flatwork, asphalt paving, masonry & snow-melt across the Colorado
Front Range since 1993. Request an estimate: (303) 915-3703.';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)

@section('content')

    <!-- ====================== PAGE HERO ====================== -->
    <header class="page-hero">
        <div class="page-hero__bg" data-bg="assets/images/andraos37.jpg" aria-hidden="true"></div>
        <div class="page-hero__scrim" aria-hidden="true"></div>
        <div class="container">
            <nav class="breadcrumb-mono mb-3" aria-label="Breadcrumb">
                <a href="/">Home</a> &nbsp;/&nbsp; Services
            </nav>
            <h1>Commercial Concrete, Asphalt & Masonry Services | Denver, CO</h1>
            <p class="lede on-dark mt-3 maxw-60">
                Managed in-house by Andraos across the Colorado Front Range — one accountable contractor from estimate to
                final punch list.
            </p>
        </div>
    </header>


    <section class="section" aria-label="Service details">
        <div class="container" id="js-service-detail">
            <div class="row g-5 align-items-center reveal anchor-offset is-visible" id="commercial-concrete">
                <div class="col-lg-6"><img src="{{ asset('assets/images/commercialcon.JPG') }}" alt="Commercial Concrete"
                        class="ratio-4-3 img-treat"></div>
                <div class="col-lg-6">
                    <h2 class="ff-display display-md mt-2">Commercial Concrete</h2>
                    <p class="lede mt-3">We self-perform concrete flatwork, curb and gutter, and ADA-compliant sidewalks. In
                        partnership with our trusted subcontractors, we also manage every aspect of asphalt milling and
                        overlay, full-depth pavement replacement, masonry site work, and hydronic snow-melt installation.
                        By keeping our crews, equipment, and project management in-house, we maintain full control over
                        scheduling, quality, and accountability—delivering a seamless experience from start to finish.
                        <a href="/">Andraos Construction</a> is fully licensed, bonded, and insured, and every project
                        is backed by a
                        one-year workmanship warrantyRequest an Estimate
                    </p>
                    <div class="d-flex gap-2 flex-wrap mt-4"><a href="/commercial-concrete-services"
                            class="btn btn-navy btn-arrow">View Service Details</a><a href="./contact"
                            class="btn btn-outline-navy">Request an Estimate</a></div>
                </div>
            </div>
            <div class="row g-5 align-items-center reveal anchor-offset pt-5 mt-5 border-top is-visible"
                id="hoa-property-management">
                <div class="col-lg-6 order-lg-2"><img src="{{ asset('assets/images/residential/IMG_0079.jpeg') }}"
                        alt="Retail Commercial Concrete" class="ratio-4-3 img-treat"></div>
                <div class="col-lg-6 order-lg-1">
                    <h2 class="ff-display display-md mt-2">Retail Commercial Concrete</h2>
                    <p class="lede mt-3">We provide interior and exterior concrete services for residential customers,
                        delivering solutions for projects ranging from stairs, pool decks, patios, garage floors, and
                        driveways to concrete leveling and repairs. Our team specializes in high-end finishes, including
                        stamped and colored concrete, to create durable surfaces that enhance the beauty and value of your
                        home. Above all, we are commiRequest an Estimateing quality craftsmanship and exceeding our customers'
                        expectations on every project.</p>
                    <div class="d-flex gap-2 flex-wrap mt-4"><a href="/retail-commercial-concrete"
                            class="btn btn-navy btn-arrow">View Service Details</a><a href="/contact"
                            class="btn btn-outline-navy">Request an Estimate</a></div>
                </div>
            </div>
            <div class="row g-5 align-items-center reveal anchor-offset pt-5 mt-5 border-top is-visible" id="asphalt">
                <div class="col-lg-6 "><img src="{{ asset('assets/images/asphalt/Hero-Song.JPG') }}"
                        alt="Asphalt Paving &amp; Repair" class="ratio-4-3 img-treat"></div>
                <div class="col-lg-6 ">
                    <h2 class="ff-display display-md mt-2">Asphalt Paving &amp; Repair</h2>
                    <p class="lede mt-3">Our asphalt division handles everything from routine maintenance to full-depth
                        reconstruction. We help all of our clients extend pavement life witRequest an Estimateatment at the
                        right time — crackfilling and sealcoating early, infrared heat patching for localized repairs, mill
                        and overlay at mid-life, and full-depth replacement when the base has failed.</p>
                    <div class="d-flex gap-2 flex-wrap mt-4"><a href="/asphalt-services" class="btn btn-navy btn-arrow">View
                            Service Details</a><a href="/contact" class="btn btn-outline-navy">Request an Estimate</a></div>
                </div>
            </div>
            <div class="row g-5 align-items-center reveal anchor-offset pt-5 mt-5 border-top is-visible" id="masonry">
                <div class="col-lg-6 order-lg-2"><img
                        src="{{ asset('/assets/images/masonry/Cherry-Creek-Country-Club.JPEG') }}" alt="Commercial Masonry"
                        class="ratio-4-3 img-treat"></div>
                <div class="col-lg-6 order-lg-1">
                    <h2 class="ff-display display-md mt-2">Commercial Masonry</h2>
                    <p class="lede mt-3">Andraos provides commercial and architectural masonRequest an Estimateents the flatwork
                        it sits on. We build sandstone seat walls, brick veneer, structural CMU, and retaining walls for
                        retail districts, hospitality properties, multifamily communities, municipal facilities, and HOA
                        common areas throughout the Front Range.</p>
                    <div class="d-flex gap-2 flex-wrap mt-4"><a href="/masonry-services" class="btn btn-navy btn-arrow">View
                            Service Details</a><a href="./contact" class="btn btn-outline-navy">Request an Estimate</a>
                    </div>
                </div>
            </div>
            <div class="row g-5 align-items-center reveal anchor-offset pt-5 mt-5 border-top is-visible" id="snow-melt">
                <div class="col-lg-6"><img src="{{ asset('assets/images/snowmelt/064-25f.jpeg') }}" alt="Snow Melt Systems"
                        class="ratio-4-3 img-treat"></div>
                <div class="col-lg-6">
                    <h2 class="ff-display display-md mt-2">Snow Melt Systems</h2>
                    <p class="lede mt-3">Hydronic snow-melt systems help reduce snow and ice accumulation at entries, ramps,
                        and high-traffic walkways, improving safety and reducing the need for manual snow removal and
                        deicing efforts. We coordinatRequest an Estimated embed the tubing during the original concrete pour,
                        creating a system that is protected within the slab and remains virtually invisible for the life of
                        the installation.</p>
                    <div class="d-flex gap-2 flex-wrap mt-4"><a href="/snow-melt-services"
                            class="btn btn-navy btn-arrow">View Service Details</a><a href="/contact"
                            class="btn btn-outline-navy">Request an Estimate</a></div>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================== CTA ====================== -->
    <section class="section bg-navy-deep text-white text-center" aria-labelledby="svc-cta-heading">
        <div class="container reveal">Request an Estimate
            <h2 id="svc-cta-heading" class="ff-display display-xl text-white mx-auto maxw-20">Have a scope in mind?</h2>
            <p class="lede on-dark mt-3 mx-auto maxw-48">Send it over and we&rsquo;ll return a detailed estimate in
                3&ndash;5 business days.</p>
            <div class="d-flex gap-2 justify-content-center mt-4 flex-wrap">
                <a href="/contact" class="btn btn-light-navy btn-arrow">Request an Estimate</a>
                <a href="tel:+3039153703" class="btn btn-outline-light btn-arrow">(303)&nbsp;915-3703</a>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('page-services');
            const pathMap = {
                '/commercial-concrete': '#commercial-concrete',
                '/residential-concrete': '#commercial-concrete',
                '/asphalt': '#asphalt',
                '/masonry': '#masonry',
                '/snow-melt': '#snow-melt',
                '/concrete-finishes': '#concrete-finishes'
            };

            const targetHash = window.location.hash || pathMap[window.location.pathname];

            if (targetHash) {
                setTimeout(function() {
                    const target = document.querySelector(targetHash);
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }
                }, 150);
            }
        });
    </script>
@endpush
