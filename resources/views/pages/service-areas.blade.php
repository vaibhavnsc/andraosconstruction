@extends('layouts.app')

@php
    $seo = getPageSeoByKey('service-areas');
    $title = $seo->meta_title ?? 'Service Areas — Commercial Concrete & Asphalt on the Colorado Front Range | Andraos Construction';
    $description = $seo->meta_description ?? 'Andraos Construction serves Denver, Aurora, Boulder, Littleton, Highlands Ranch, Castle Rock, Parker and more across the Colorado Front Range. Find your city.';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)

@section('content')

 
<!-- ====================== PAGE HERO ====================== -->
    <header class="page-hero">
      <div class="page-hero__bg" data-bg="/assets/images/andraos-construction43.jpg" aria-hidden="true"></div>
      <div class="page-hero__scrim" aria-hidden="true"></div>
      <div class="container">
        <nav class="breadcrumb-mono mb-3" aria-label="Breadcrumb">
          <a href="/">Home</a> &nbsp;/&nbsp; Service Areas
        </nav>
        <h1>Commercial Concrete &amp; Asphalt Services Across the Colorado Front Range</h1>
        <p class="lede on-dark mt-3 maxw-62">
          Headquartered in Denver and self-performing across the Front Range. Select your city for local
          project history, services, and turnaround times.
        </p>
      </div>
    </header>


<!-- Service Areas -->

<section class="section" aria-labelledby="js-area-count">
    <div class="container">
        <h2 class="eyebrow mb-4" id="js-area-count"> service areas</h2>
        <!-- Area cards injected by site.js (county labels) -->
        <div class="row g-3" id="js-area-grid" data-label="county">

            <div class="col-lg-4 col-md-6"><a href="./service-areas/denver" class="area-card"><span><span
                            class="area-card__name d-block">Denver</span><span class="area-card__meta">City &amp; County
                            of Denver</span></span><span class="area-card__arrow" aria-hidden="true">→</span></a></div>
            <div class="col-lg-4 col-md-6"><a href="./service-areas/aurora " class="area-card"><span><span
                            class="area-card__name d-block">Aurora</span><span class="area-card__meta">Arapahoe
                            County</span></span><span class="area-card__arrow" aria-hidden="true">→</span></a></div>
            <div class="col-lg-4 col-md-6"><a href="./service-areas/littleton " class="area-card"><span><span
                            class="area-card__name d-block">Littleton</span><span class="area-card__meta">Jefferson
                            &amp; Arapahoe Counties</span></span><span class="area-card__arrow"
                        aria-hidden="true">→</span></a></div>
            <div class="col-lg-4 col-md-6"><a href="./service-areas/highlands-ranch " class="area-card"><span><span
                            class="area-card__name d-block">Highlands Ranch</span><span class="area-card__meta">Douglas
                            County</span></span><span class="area-card__arrow" aria-hidden="true">→</span></a></div>
            <div class="col-lg-4 col-md-6"><a href="./service-areas/castle-rock " class="area-card"><span><span
                            class="area-card__name d-block">Castle Rock</span><span class="area-card__meta">Douglas
                            County</span></span><span class="area-card__arrow" aria-hidden="true">→</span></a></div>
            <div class="col-lg-4 col-md-6"><a href="./service-areas/parker " class="area-card"><span><span
                            class="area-card__name d-block">Parker</span><span class="area-card__meta">Douglas
                            County</span></span><span class="area-card__arrow" aria-hidden="true">→</span></a></div>
            <div class="col-lg-4 col-md-6"><a href="./service-areas/englewood " class="area-card"><span><span
                            class="area-card__name d-block">Englewood</span><span class="area-card__meta">Arapahoe
                            County</span></span><span class="area-card__arrow" aria-hidden="true">→</span></a></div>
            <div class="col-lg-4 col-md-6"><a href="./service-areas/broomfield " class="area-card"><span><span
                            class="area-card__name d-block">Broomfield</span><span class="area-card__meta">Broomfield
                            County</span></span><span class="area-card__arrow" aria-hidden="true">→</span></a></div>
            <div class="col-lg-4 col-md-6"><a href="./service-areas/boulder " class="area-card"><span><span
                            class="area-card__name d-block">Boulder</span><span class="area-card__meta">Boulder
                            County</span></span><span class="area-card__arrow" aria-hidden="true">→</span></a></div>
            <div class="col-lg-4 col-md-6"><a href="./service-areas/westminster " class="area-card"><span><span
                            class="area-card__name d-block">Westminster</span><span class="area-card__meta">Jefferson
                            &amp; Adams Counties</span></span><span class="area-card__arrow"
                        aria-hidden="true">→</span></a></div>
            <div class="col-lg-4 col-md-6"><a href="./service-areas/thornton " class="area-card"><span><span
                            class="area-card__name d-block">Thornton</span><span class="area-card__meta">Adams
                            County</span></span><span class="area-card__arrow" aria-hidden="true">→</span></a></div>
            <div class="col-lg-4 col-md-6"><a href="./service-areas/arvada " class="area-card"><span><span
                            class="area-card__name d-block">Arvada</span><span class="area-card__meta">Jefferson
                            County</span></span><span class="area-card__arrow" aria-hidden="true">→</span></a></div>
            <div class="col-lg-4 col-md-6"><a href="./service-areas/longmont " class="area-card"><span><span
                            class="area-card__name d-block">Longmont</span><span class="area-card__meta">Boulder &amp;
                            Weld Counties</span></span><span class="area-card__arrow" aria-hidden="true">→</span></a>
            </div>
        </div>
    </div>
</section>


<section class="section bg-navy-deep text-white text-center" aria-labelledby="areas-cta-heading">
        <div class="container reveal">
            <h2 id="areas-cta-heading" class="ff-display display-xl text-white mx-auto maxw-22">Don&rsquo;t see your
                city?</h2>
            <p class="lede on-dark mt-3 mx-auto maxw-46">We cover the entire Front Range and mountain communities. Call
                and ask.</p>
            <div class="d-flex gap-2 justify-content-center mt-4 flex-wrap">
                <a href="/contact" class="btn btn-light-navy btn-arrow">Request a Quote</a>
                <a href="tel:+3039153703" class="btn btn-outline-light btn-arrow">(303)&nbsp;915-3703</a>
            </div>
        </div>
    </section>


@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-service-areas');
});
</script>
@endpush