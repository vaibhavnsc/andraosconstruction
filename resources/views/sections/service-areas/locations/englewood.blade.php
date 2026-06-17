@extends('layouts.app')

@section('content')


 <main>

    <!-- ====================== PAGE HERO ====================== -->
    <header class="page-hero">
      <div class="page-hero__bg" data-bg="/assets/images/andraos-construction6.jpg" aria-hidden="true"></div>
      <div class="page-hero__scrim" aria-hidden="true"></div>
      <div class="container">
        <nav class="breadcrumb-mono mb-3" aria-label="Breadcrumb">
          <a href="/">Home</a> &nbsp;/&nbsp;
          <a href="/service-areas">Service Areas</a> &nbsp;/&nbsp; Englewood
        </nav>
        <h1>Englewood Commercial Concrete and Asphalt Services</h1>
      </div>
    </header>

    <!-- ====================== INTRO ====================== -->
    <section class="section" aria-labelledby="intro-heading">
      <div class="container">
        <div class="row g-5 align-items-center reveal">
          <div class="col-lg-6">
            <img src="/assets/images/andraos-construction6.jpg"
                 alt="Commercial concrete and asphalt work in Englewood, Colorado"
                 class="ratio-4-3 img-treat">
          </div>
          <div class="col-lg-6">
            <p class="eyebrow">Service Area &middot; Arapahoe County</p>
            <h2 id="intro-heading" class="ff-display display-md mt-2">
              Commercial Concrete, Asphalt &amp; Masonry in Englewood
            </h2>
            <p class="lede mt-3">Englewood and CityCenter Englewood commercial properties, healthcare campuses, and retail developments engage Andraos for concrete flatwork, asphalt maintenance, and full-site capital renewal sequenced around active tenants.</p>
            <div class="d-flex gap-2 mt-4 flex-wrap">
              <a href="/contact" class="btn btn-navy btn-arrow">Request a Quote in Englewood</a>
              <a href="tel:+13034793181" class="btn btn-outline-navy">Call (303) 479-3181</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ====================== SERVICES IN CITY ====================== -->
    <section class="section bg-warm section--tight" aria-labelledby="city-services-heading">
      <div class="container">
        <p class="eyebrow mb-2">Commercial Services in Englewood</p>
        <h2 id="city-services-heading" class="ff-display display-md mb-4">What We Build in Englewood, Colorado</h2>
        <div class="row g-3">
            <div class="col-md-6 col-lg-4">
              <a href="/services#commercial-concrete" class="svc-link-card">
                <span class="num-eyebrow">01</span>
                <h3>Commercial Concrete</h3>
                <p class="text-slate small mb-0">Flatwork, curb &amp; gutter, drain pans, dock ramps, ADA sidewalks, and structural slabs for commercial properties.</p>
              </a>
            </div>
            <div class="col-md-6 col-lg-4">
              <a href="/services#asphalt" class="svc-link-card">
                <span class="num-eyebrow">02</span>
                <h3>Asphalt Paving &amp; Repair</h3>
                <p class="text-slate small mb-0">Mill &amp; overlay, full-depth removal &amp; replacement, crackfilling, sealcoating, and striping for parking lots.</p>
              </a>
            </div>
            <div class="col-md-6 col-lg-4">
              <a href="/services#masonry" class="svc-link-card">
                <span class="num-eyebrow">03</span>
                <h3>Commercial Masonry</h3>
                <p class="text-slate small mb-0">Architectural stone walls, sandstone seat-walls, brick veneer, retaining walls, and structural CMU site work.</p>
              </a>
            </div>
            <div class="col-md-6 col-lg-4">
              <a href="/services#snow-melt" class="svc-link-card">
                <span class="num-eyebrow">04</span>
                <h3>Snow Melt Systems</h3>
                <p class="text-slate small mb-0">Hydronic snow-melt for entries, ADA ramps, drive courts, and walkways &mdash; embedded during the original pour.</p>
              </a>
            </div>
            <div class="col-md-6 col-lg-4">
              <a href="/services#hoa-property-management" class="svc-link-card">
                <span class="num-eyebrow">05</span>
                <h3>HOA &amp; Property Management</h3>
                <p class="text-slate small mb-0">Community-wide capital renewal: sidewalks, drive lanes, curb &amp; gutter, parking lots, and asphalt maintenance.</p>
              </a>
            </div>
            <div class="col-md-6 col-lg-4">
              <a href="/services#concrete-finishes" class="svc-link-card">
                <span class="num-eyebrow">06</span>
                <h3>Concrete Finishes</h3>
                <p class="text-slate small mb-0">Broom, exposed aggregate, stamped, and integral color finishes for entrances, plazas, and feature flatwork.</p>
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
            <p class="eyebrow mb-2">Why Englewood Chooses Andraos</p>
            <h2 id="why-city-heading" class="ff-display display-md">Local Experience, Self-Performed.</h2>
            <p class="text-slate mt-3">
              Since 1993, Andraos Construction has self-performed commercial concrete, asphalt, and masonry
              across Arapahoe County. One project manager owns your job from estimate to warranty &mdash; backed
              by a written one-year workmanship warranty.
            </p>
          </div>
          <div class="col-lg-8">
            <ul class="location-services">
          <li>Commercial Concrete in Englewood</li>
          <li>Asphalt Paving & Repair in Englewood</li>
          <li>Commercial Masonry in Englewood</li>
          <li>Snow Melt Systems in Englewood</li>
          <li>HOA & Property Management in Englewood</li>
          <li>Concrete Finishes in Englewood</li>
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
            <a href="broomfield" class="area-card">
              <span>
                <span class="area-card__name d-block">Broomfield</span>
                <span class="area-card__meta">Broomfield County</span>
              </span>
              <span class="area-card__arrow" aria-hidden="true">&rarr;</span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="boulder" class="area-card">
              <span>
                <span class="area-card__name d-block">Boulder</span>
                <span class="area-card__meta">Boulder County</span>
              </span>
              <span class="area-card__arrow" aria-hidden="true">&rarr;</span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="westminster" class="area-card">
              <span>
                <span class="area-card__name d-block">Westminster</span>
                <span class="area-card__meta">Jefferson &amp; Adams Counties</span>
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
        <h2 id="city-cta-heading" class="ff-display display-xl text-white mx-auto maxw-20">Get a quote for your Englewood project.</h2>
        <div class="d-flex gap-2 justify-content-center mt-4 flex-wrap">
          <a href="/contact" class="btn btn-light-navy btn-arrow">Request a Quote</a>
          <a href="tel:+13034793181" class="btn btn-outline-light btn-arrow">(303)&nbsp;479-3181</a>
        </div>
      </div>
    </section>

  </main>

@endsection