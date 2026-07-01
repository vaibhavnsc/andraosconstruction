@extends('layouts.app')

@php
    $seo = getPageSeoByKey('westminster');

    $title = $seo->meta_title ?? 'Westminster Commercial Concrete & Asphalt Services | Andraos Construction';

    $description = $seo->meta_description
        ?? 'Commercial concrete & asphalt in Westminster, CO. Retail centers, multifamily, full-site parking lot rehabilitation. Jefferson & Adams Counties since 1993.';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)


@section('content')


<main>

    <!-- ====================== PAGE HERO ====================== -->
    <header class="page-hero">
        <div class="page-hero__bg" data-bg="/assets/images/westminster.jpg"
            aria-hidden="true"></div>
        <div class="page-hero__scrim" aria-hidden="true"></div>
        <div class="container">
            <nav class="breadcrumb-mono mb-3" aria-label="Breadcrumb">
                <a href="/">Home</a> &nbsp;/&nbsp;
                <a href="/service-areas">Service Areas</a> &nbsp;/&nbsp; Westminster
            </nav>
            <h1>Westminster Commercial Concrete and Asphalt Services</h1>
        </div>
    </header>

    <!-- ====================== INTRO ====================== -->
    <section class="section" aria-labelledby="intro-heading">
        <div class="container">
            <div class="row g-5 align-items-center reveal">
                <div class="col-lg-6">
                    <img src="/assets/images/westminster.jpg"
                        alt="Commercial concrete and asphalt work in Westminster, Colorado" class="ratio-4-3 img-treat">
                </div>
                <div class="col-lg-6">
                    <p class="eyebrow">Service Area &middot; Jefferson &amp; Adams Counties</p>
                    <h2 id="intro-heading" class="ff-display display-md mt-2">
                        Commercial Concrete, Asphalt &amp; Masonry in Westminster
                    </h2>
                    <p class="lede mt-3">Westminster retail centers, multifamily communities, and commercial property
                        managers retain Andraos for concrete flatwork, asphalt mill &amp; overlay, and full-site parking
                        lot rehabilitation across Jefferson and Adams Counties.</p>
                    <div class="d-flex gap-2 mt-4 flex-wrap">
                        <a href="/contact" class="btn btn-navy btn-arrow">Request a Quote in Westminster</a>
                        <a href="tel:+3039153703" class="btn btn-outline-navy">Call (303) 915-3703</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== SERVICES IN CITY ====================== -->
    <section class="section bg-warm section--tight" aria-labelledby="city-services-heading">
        <div class="container">
            <p class="eyebrow mb-2">Commercial Services in Westminster</p>
            <h2 id="city-services-heading" class="ff-display display-md mb-4">What We Build in Westminster, Colorado
            </h2>
            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <a href="/services#commercial-concrete" class="svc-link-card">
                        <span class="num-eyebrow">01</span>
                        <h3>Commercial Concrete</h3>
                        <p class="text-slate small mb-0">Flatwork, curb &amp; gutter, drain pans, dock ramps, ADA
                            sidewalks, and structural slabs for commercial properties.</p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="/services#asphalt" class="svc-link-card">
                        <span class="num-eyebrow">02</span>
                        <h3>Asphalt Paving &amp; Repair</h3>
                        <p class="text-slate small mb-0">Mill &amp; overlay, full-depth removal &amp; replacement,
                            crackfilling, sealcoating, and striping for parking lots.</p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="/services#masonry" class="svc-link-card">
                        <span class="num-eyebrow">03</span>
                        <h3>Commercial Masonry</h3>
                        <p class="text-slate small mb-0">Architectural stone walls, sandstone seat-walls, brick veneer,
                            retaining walls, and structural CMU site work.</p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="/services#snow-melt" class="svc-link-card">
                        <span class="num-eyebrow">04</span>
                        <h3>Snow Melt Systems</h3>
                        <p class="text-slate small mb-0">Hydronic snow-melt for entries, ADA ramps, drive courts, and
                            walkways &mdash; embedded during the original pour.</p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="/services#hoa-property-management" class="svc-link-card">
                        <span class="num-eyebrow">05</span>
                        <h3>HOA &amp; Property Management</h3>
                        <p class="text-slate small mb-0">Community-wide capital renewal: sidewalks, drive lanes, curb
                            &amp; gutter, parking lots, and asphalt maintenance.</p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="/services#concrete-finishes" class="svc-link-card">
                        <span class="num-eyebrow">06</span>
                        <h3>Concrete Finishes</h3>
                        <p class="text-slate small mb-0">Broom, exposed aggregate, stamped, and integral color finishes
                            for entrances, plazas, and feature flatwork.</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== WHY + CHECKLIST ====================== -->
    <section class="section section--tight" aria-labelledby="why-city-heading">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <p class="eyebrow mb-2">Why Westminster Chooses Andraos</p>
                    <h2 id="why-city-heading" class="ff-display display-md">Local Experience, Self-Performed.</h2>
                    <p class="text-slate mt-3">
                        Since 1993, Andraos Construction has self-performed commercial concrete, asphalt, and masonry
                        across Jefferson &amp; Adams Counties. One project manager owns your job from estimate to
                        warranty &mdash; backed
                        by a written one-year workmanship warranty.
                    </p>
                </div>
                <div class="col-lg-8">
                    <ul class="location-services">
                        <li>Commercial Concrete in Westminster</li>
                        <li>Asphalt Paving & Repair in Westminster</li>
                        <li>Commercial Masonry in Westminster</li>
                        <li>Snow Melt Systems in Westminster</li>
                        <li>HOA & Property Management in Westminster</li>
                        <li>Concrete Finishes in Westminster</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== NEARBY AREAS ====================== -->
    <section class="section bg-navy text-white section--tight" aria-labelledby="nearby-heading">
        <div class="container">
            <p class="eyebrow on-dark mb-2">Nearby Service Areas</p>
            <h2 id="nearby-heading" class="ff-display display-md text-white mb-4">We Also Serve</h2>
            <div class="row g-3">
                <div class="col-md-4">
                    <a href="thornton" class="area-card">
                        <span>
                            <span class="area-card__name d-block">Thornton</span>
                            <span class="area-card__meta">Adams County</span>
                        </span>
                        <span class="area-card__arrow" aria-hidden="true">&rarr;</span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="arvada" class="area-card">
                        <span>
                            <span class="area-card__name d-block">Arvada</span>
                            <span class="area-card__meta">Jefferson County</span>
                        </span>
                        <span class="area-card__arrow" aria-hidden="true">&rarr;</span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="longmont" class="area-card">
                        <span>
                            <span class="area-card__name d-block">Longmont</span>
                            <span class="area-card__meta">Boulder &amp; Weld Counties</span>
                        </span>
                        <span class="area-card__arrow" aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>
            <div class="mt-4">
                <a href="/service-areas" class="btn btn-outline-light btn-arrow">All Service Areas</a>
            </div>
        </div>
    </section>

    <!-- ====================== CTA ====================== -->
    <section class="section bg-navy-deep text-white text-center" aria-labelledby="city-cta-heading">
        <div class="container reveal">
            <h2 id="city-cta-heading" class="ff-display display-xl text-white mx-auto maxw-20">Get a quote for your
                Westminster project.</h2>
            <div class="d-flex gap-2 justify-content-center mt-4 flex-wrap">
                <a href="/contact" class="btn btn-light-navy btn-arrow">Request a Quote</a>
                <a href="tel:+3039153703" class="btn btn-outline-light btn-arrow">(303)&nbsp;915-3703</a>
            </div>
        </div>
    </section>

</main>



@push('scripts')
<script>
document.body.classList.add('page-service-areas');
</script>
@endpush


@endsection