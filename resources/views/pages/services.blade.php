@extends('layouts.app')

@php
    $seo = getPageSeoByKey('services');
    $title = $seo->meta_title ?? 'Commercial Services — Concrete, Asphalt, Masonry & Snow Melt | Andraos Construction';
    $description = $seo->meta_description ?? 'Commercial concrete, asphalt paving, masonry, snow-melt systems, Retail Commercial Concrete, and concrete finishes across the Colorado Front Range. Serving the Colorado Front Range since 1993.';
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
        <h1>Commercial Concrete, Asphalt, Masonry &amp; Snow Melt Services</h1>
        <p class="lede on-dark mt-3 maxw-60">
          Managed in-house by Andraos across the Colorado Front Range — one accountable contractor from estimate to final punch list.
        </p>
      </div>
    </header>

    
<section class="section" aria-label="Service details">
    <div class="container" id="js-service-detail">
        <div class="row g-5 align-items-center reveal anchor-offset is-visible" id="commercial-concrete">
            <div class="col-lg-6"><img src="{{ asset('assets/images/commercial.jpeg') }}" alt="Commercial Concrete"
                    class="ratio-4-3 img-treat"></div>
            <div class="col-lg-6">
                <h2 class="ff-display display-md mt-2">Commercial Concrete</h2>
                <p class="lede mt-3">Flatwork, curb &amp; gutter, drain pans, dock ramps, ADA sidewalks, and structural
                    slabs for commercial properties.</p>
                <div class="d-flex gap-2 flex-wrap mt-4"><a href="/commercial-concrete-services"
                        class="btn btn-navy btn-arrow">View Service Details</a><a href="./contact"
                        class="btn btn-outline-navy">Request a Quote</a></div>
            </div>
        </div>
        <div class="row g-5 align-items-center reveal anchor-offset pt-5 mt-5 border-top is-visible"
            id="hoa-property-management">
            <div class="col-lg-6 order-lg-2"><img src="{{ asset('assets/images/residential/IMG_0079.jpeg') }}" alt="Retail Commercial Concrete"
                    class="ratio-4-3 img-treat"></div>
            <div class="col-lg-6 order-lg-1">
                <h2 class="ff-display display-md mt-2">Retail Commercial Concrete</h2>
                <p class="lede mt-3">We provide interior and exterior concrete services for residential customers, delivering solutions for projects ranging from stairs, pool decks, patios, garage floors, and driveways to concrete leveling and repairs. Our team specializes in high-end finishes, including stamped and colored concrete, to create durable surfaces that enhance the beauty and value of your home. Above all, we are committed to delivering quality craftsmanship and exceeding our customers' expectations on every project.</p>
                <div class="d-flex gap-2 flex-wrap mt-4"><a href="/hoa-property-management-services"
                        class="btn btn-navy btn-arrow">View Service Details</a><a href="/contact"
                        class="btn btn-outline-navy">Request a Quote</a></div>
            </div>
        </div>
        <div class="row g-5 align-items-center reveal anchor-offset pt-5 mt-5 border-top is-visible" id="asphalt">
            <div class="col-lg-6 "><img src="{{ asset('assets/images/asphalt/168-25.jpg') }}"
                    alt="Asphalt Paving &amp; Repair" class="ratio-4-3 img-treat"></div>
            <div class="col-lg-6 ">
                <h2 class="ff-display display-md mt-2">Asphalt Paving &amp; Repair</h2>
                <p class="lede mt-3">Our asphalt division handles everything from routine maintenance to full-depth reconstruction. We help all of our clients extend pavement life with the right treatment at the right time — crackfilling and sealcoating early, infrared heat patching for localized repairs, mill and overlay at mid-life, and full-depth replacement when the base has failed.</p>
                <div class="d-flex gap-2 flex-wrap mt-4"><a href="/asphalt-services" class="btn btn-navy btn-arrow">View
                        Service Details</a><a href="/contact" class="btn btn-outline-navy">Request a Quote</a></div>
            </div>
        </div>
        <div class="row g-5 align-items-center reveal anchor-offset pt-5 mt-5 border-top is-visible" id="masonry">
            <div class="col-lg-6 order-lg-2"><img src="{{ asset('/assets/images/masonry/IMG_1450.jpg') }}" alt="Commercial Masonry"
                    class="ratio-4-3 img-treat"></div>
            <div class="col-lg-6 order-lg-1">
                <h2 class="ff-display display-md mt-2">Commercial Masonry</h2>
                <p class="lede mt-3">Andraos provides commercial and architectural masonry that complements the flatwork it sits on. We build sandstone seat walls, brick veneer, structural CMU, and retaining walls for retail districts, hospitality properties, multifamily communities, municipal facilities, and HOA common areas throughout the Front Range.</p>
                <div class="d-flex gap-2 flex-wrap mt-4"><a href="/masonry-services" class="btn btn-navy btn-arrow">View
                        Service Details</a><a href="./contact" class="btn btn-outline-navy">Request a Quote</a>
                </div>
            </div>
        </div>
        <div class="row g-5 align-items-center reveal anchor-offset pt-5 mt-5 border-top is-visible" id="snow-melt">
            <div class="col-lg-6"><img src="{{ asset('assets/images/snowmelt/064-25f.jpeg') }}" alt="Snow Melt Systems"
                    class="ratio-4-3 img-treat"></div>
            <div class="col-lg-6">
                <h2 class="ff-display display-md mt-2">Snow Melt Systems</h2>
                <p class="lede mt-3">Hydronic snow-melt systems help reduce snow and ice accumulation at entries, ramps, and high-traffic walkways, improving safety and reducing the need for manual snow removal and deicing efforts. We coordinate the design and embed the tubing during the original concrete pour, creating a system that is protected within the slab and remains virtually invisible for the life of the installation.</p>
                <div class="d-flex gap-2 flex-wrap mt-4"><a href="/snow-melt-services"
                        class="btn btn-navy btn-arrow">View Service Details</a><a href="/contact"
                        class="btn btn-outline-navy">Request a Quote</a></div>
            </div>
        </div>
    </div>
</section>

    
<!-- ====================== CTA ====================== -->
    <section class="section bg-navy-deep text-white text-center" aria-labelledby="svc-cta-heading">
      <div class="container reveal">
        <h2 id="svc-cta-heading" class="ff-display display-xl text-white mx-auto maxw-20">Have a scope in mind?</h2>
        <p class="lede on-dark mt-3 mx-auto maxw-48">Send it over and we&rsquo;ll return a detailed estimate in 3&ndash;5 business days.</p>
        <div class="d-flex gap-2 justify-content-center mt-4 flex-wrap">
          <a href="/contact" class="btn btn-light-navy btn-arrow">Request a Quote</a>
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
                target.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }, 150);
    }
});
</script>
@endpush