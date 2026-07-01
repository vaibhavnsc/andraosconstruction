@extends('layouts.app')

@php
    $seo = getPageSeoByKey('gallery');

    $title = $seo->meta_title ?? 'Gallery | Andraos Construction | Denver, CO Area';

    $description = $seo->meta_description
        ?? 'View our recent projects like driveways & patios. Learn more! Serving the Denver, CO Metro Area.';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)


@section('content')

<!-- ====================== PAGE HERO ====================== -->
    <header class="page-hero">
      <div class="page-hero__bg" data-bg="{{ asset('assets/images/andraos-construction-gallery.jpg') }}" aria-hidden="true"></div>
      <div class="page-hero__scrim" aria-hidden="true"></div>
      <div class="container">
        <nav class="breadcrumb-mono mb-3" aria-label="Breadcrumb">
          <a href="/">Home</a> &nbsp;/&nbsp; Gallery
        </nav>
        <h1>Recent Commercial Concrete Projects Across Colorado</h1>
        <p class="lede on-dark mt-3 maxw-58">
          A selection of recent concrete, asphalt and masonry work. Filter by sector, or contact us
          for the full portfolio with references.
        </p>
      </div>
    </header>


<section class="section bg-navy text-white" aria-label="Project gallery">
    <div class="container">
        <!-- Filter buttons injected by site.js -->
        <div class="d-flex flex-wrap gap-1 mb-4" id="filters" role="group" aria-label="Filter projects by sector">
            <button type="button" class="filter-btn active" data-filter="all">All
                Work</button><button type="button" class="filter-btn"
                data-filter="commercial-concrete">Commercial Concrete</button>
                 <button type="button" class="filter-btn" data-filter="residential-concrete">Residential Concrete</button>
                <button type="button" class="filter-btn" data-filter="hoa">Property &amp;
               HOA</button> <!-- <button type="button" class="filter-btn"
                data-filter="hospitality">Hospitality</button><button type="button" class="filter-btn"
                data-filter="retail">Retail</button><button type="button" class="filter-btn"
                data-filter="civic">Civic</button> -->
            <button type="button" class="filter-btn" data-filter="masonry">Masonry</button>
            <button type="button" class="filter-btn"
                data-filter="stucco">Stucco</button>
            <button type="button" class="filter-btn" data-filter="asphalt">Asphalt</button>
            <button type="button" class="filter-btn" data-filter="snow-melt-system">Snow Melt Systems</button>
            <button type="button" class="filter-btn" data-filter="concrete-finishes">Concrete Finishes</button>
           
        </div>
        <!-- Project cards injected by site.js -->
        <div class="row g-3" id="projGrid">
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/andraos-construction37.jpg') }}"
                        alt="Shadow Canyon HOA — Community renewal · Front Range">
                    <figcaption class="ov"><span class="cat">hoa</span><span class="nm">Shadow
                            Canyon HOA</span><span class="small text-white-50">Community renewal · Front Range</span>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/andraos-construction43.jpeg') }}"
                        alt="Logan Reserve Drives — Aurora · 14 drive lanes">
                    <figcaption class="ov"><span class="cat">hoa</span><span class="nm">Logan
                            Reserve Drives</span><span class="small text-white-50">Aurora · 14 drive lanes</span>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/hoa-andros.webp') }}"
                        alt="Logan Reserve Drives — Aurora · 14 drive lanes">
                    <figcaption class="ov"><span class="cat">hoa</span><span class="nm">HOA</span><span class="small text-white-50">HOA</span>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/andraos-construction.webp') }}"
                        alt="Logan Reserve Drives — Aurora · 14 drive lanes">
                    <figcaption class="ov"><span class="cat">hoa</span><span class="nm">HOA</span><span class="small text-white-50">HOA</span>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/stucco/IMG_0669.jpg') }}" alt="Stucco">
                    <figcaption class="ov"><span class="cat">stucco</span><span class="nm">Stucco</span><span
                            class="small text-white-50">Stucco</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/stucco/IMG_3656.jpeg') }}" alt="Stucco">
                    <figcaption class="ov"><span class="cat">stucco</span><span class="nm">Stucco</span><span
                            class="small text-white-50">Stucco</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/commercial/schomp-ford-aurora.png') }}"
                        alt="Commercial Concrete">
                    <figcaption class="ov"><span class="cat">commercial-concrete</span><span class="nm">Schomp Ford – Aurora</span><span class="small text-white-50">Commercial Concrete</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/commercial/cherry-creek.jpg') }}"
                        alt="Commercial Concrete">
                    <figcaption class="ov"><span class="cat">commercial-concrete</span><span class="nm">Cherry Creek</span><span class="small text-white-50">Commercial Concrete</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/commercial/1075-Park-Ave-Denver.jpg') }}"
                        alt="Commercial Concrete">
                    <figcaption class="ov"><span class="cat">commercial-concrete</span><span class="nm">1075 Park Avenue West</span><span class="small text-white-50">Commercial Concrete</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/commercial/advanced-energy-fort-collins.jpg') }}"
                        alt="Commercial Concrete">
                    <figcaption class="ov"><span class="cat">commercial-concrete</span><span class="nm">Advanced Energy – Fort Collins</span><span class="small text-white-50">Commercial Concrete</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/commercial/blackhawk.jpg') }}"
                        alt="Commercial Concrete">
                    <figcaption class="ov"><span class="cat">commercial-concrete</span><span class="nm">Black Hawk</span><span class="small text-white-50">Commercial Concrete</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/commercial/blake-street.jpg') }}"
                        alt="Commercial Concrete">
                    <figcaption class="ov"><span class="cat">commercial-concrete</span><span class="nm">Blake Street</span><span class="small text-white-50">Commercial Concrete</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/commercial/central-park-highlands.jpeg') }}"
                        alt="Commercial Concrete">
                    <figcaption class="ov"><span class="cat">commercial-concrete</span><span class="nm">Central Park Highlands</span><span class="small text-white-50">Commercial Concrete</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/commercial/chick-fil-a.jpg') }}"
                        alt="Commercial Concrete">
                    <figcaption class="ov"><span class="cat">commercial-concrete</span><span class="nm">Chick-fil-A</span><span class="small text-white-50">Commercial Concrete</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/commercial/denver-sidewalks.jpeg') }}"
                        alt="Commercial Concrete">
                    <figcaption class="ov"><span class="cat">commercial-concrete</span><span class="nm">Denver Pavilion + Denver Sidewalks</span><span class="small text-white-50">Commercial Concrete</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/commercial/tommys.jpeg') }}"
                        alt="Commercial Concrete">
                    <figcaption class="ov"><span class="cat">commercial-concrete</span><span class="nm">Tommy’s </span><span class="small text-white-50">Commercial Concrete</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/commercial/whole-foods-lakewood.jpg') }}"
                        alt="Commercial Concrete">
                    <figcaption class="ov"><span class="cat">commercial-concrete</span><span class="nm">Whole Foods – Lakewood</span><span class="small text-white-50">Commercial Concrete</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/commercial/town-center.jpeg') }}"
                        alt="Commercial Concrete">
                    <figcaption class="ov"><span class="cat">commercial-concrete</span><span class="nm">Town Center</span><span class="small text-white-50">Commercial Concrete</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/commercial/wildcat-reserve-highlands.jpeg') }}"
                        alt="Commercial Concrete">
                    <figcaption class="ov"><span class="cat">commercial-concrete</span><span class="nm">Wildcat Reserve Highlands</span><span class="small text-white-50">Commercial Concrete</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/residential/IMG_0041.jpeg') }}"
                        alt="Residential Concrete">
                    <figcaption class="ov"><span class="cat">residential-concrete</span><span class="nm">Residential Patio</span><span class="small text-white-50">Residential Concrete</span></figcaption>
                </figure>
            </div>
            <!-- <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/residential/IMG_0054.jpeg') }}"
                        alt="Residential Concrete">
                    <figcaption class="ov"><span class="cat">residential-concrete</span><span class="nm">Residential Porch</span><span class="small text-white-50">Residential Concrete</span></figcaption>
                </figure>
            </div> -->
            <!-- <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/residential/IMG_0061.jpeg') }}"
                        alt="Residential Concrete">
                    <figcaption class="ov"><span class="cat">residential-concrete</span><span class="nm">Pool Deck / Residential Concrete</span><span class="small text-white-50">Residential Concrete</span></figcaption>
                </figure>
            </div> -->
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/residential/IMG_0079.jpeg') }}"
                        alt="Residential Concrete">
                    <figcaption class="ov"><span class="cat">residential-concrete</span><span class="nm">Highlands Ranch Residential</span><span class="small text-white-50">Residential Concrete</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/residential/IMG_5912.jpeg') }}"
                        alt="Residential Concrete">
                    <figcaption class="ov"><span class="cat">residential-concrete</span><span class="nm">Before Stair Project</span><span class="small text-white-50">Residential Concrete</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/residential/IMG_7038.jpeg') }}"
                        alt="Residential Concrete">
                    <figcaption class="ov"><span class="cat">residential-concrete</span><span class="nm">After Stair Project</span><span class="small text-white-50">Residential Concrete</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/residential/IMG_0161.jpg') }}"
                        alt="Residential Concrete">
                    <figcaption class="ov"><span class="cat">residential-concrete</span><span class="nm">Castle Pines Decorative Concrete</span><span class="small text-white-50">Residential Concrete</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/asphalt/168-25.jpg') }}" alt="Asphalt">
                    <figcaption class="ov"><span class="cat">asphalt</span><span class="nm">Asphalt</span><span
                            class="small text-white-50">Asphalt</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/asphalt/168-25-Meadow.jpg') }}"
                        alt="Asphalt">
                    <figcaption class="ov"><span class="cat">asphalt</span><span class="nm">Asphalt</span><span
                            class="small text-white-50">Asphalt</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/asphalt/HOA_Littleton_IMG_3636.jpeg') }}"
                        alt="Asphalt">
                    <figcaption class="ov"><span class="cat">asphalt</span><span class="nm">Asphalt</span><span
                            class="small text-white-50">Asphalt</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/asphalt/IMG_3635.jpeg') }}" alt="Asphalt">
                    <figcaption class="ov"><span class="cat">asphalt</span><span class="nm">Asphalt</span><span
                            class="small text-white-50">Asphalt</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/asphalt/Songbird_HOA_IMG_3637.jpeg') }}" alt="Asphalt">
                    <figcaption class="ov"><span class="cat">asphalt</span><span class="nm">Asphalt</span><span
                            class="small text-white-50">Asphalt</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/asphalt/Songbird_HOA_Littleton_IMG_3638.jpeg') }}" alt="Asphalt">
                    <figcaption class="ov"><span class="cat">asphalt</span><span class="nm">Asphalt</span><span
                            class="small text-white-50">Asphalt</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/snowmelt/064-25f.jpeg') }}" alt="Snow Melt Systems">
                    <figcaption class="ov"><span class="cat">snow-melt-system</span><span class="nm">Snow Melt Systems</span><span
                            class="small text-white-50">Snow Melt Systems</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/snowmelt/064-25s.jpeg') }}" alt="Snow Melt Systems">
                    <figcaption class="ov"><span class="cat">snow-melt-system</span><span class="nm">Snow Melt Systems</span><span
                            class="small text-white-50">Snow Melt Systems</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/snowmelt/064-25si.jpeg') }}" alt="Snow Melt Systems">
                    <figcaption class="ov"><span class="cat">snow-melt-system</span><span class="nm">Snow Melt Systems</span><span
                            class="small text-white-50">Snow Melt Systems</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/snowmelt/064-25t.jpeg') }}" alt="Snow Melt Systems">
                    <figcaption class="ov"><span class="cat">snow-melt-system</span><span class="nm">Snow Melt Systems</span><span
                            class="small text-white-50">Snow Melt Systems</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/snowmelt/064-25th.jpeg') }}" alt="Snow Melt Systems">
                    <figcaption class="ov"><span class="cat">snow-melt-system</span><span class="nm">Snow Melt Systems</span><span
                            class="small text-white-50">Snow Melt Systems</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/snowmelt/064-25fi.jpg') }}" alt="Snow Melt Systems">
                    <figcaption class="ov"><span class="cat">snow-melt-system</span><span class="nm">Snow Melt Systems</span><span
                            class="small text-white-50">Snow Melt Systems</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/concrete-finishes/Colored-concrete.jpeg') }}" alt="Concrete Finishes">
                    <figcaption class="ov"><span class="cat">concrete-finishes</span><span class="nm">Colored Concrete</span><span
                            class="small text-white-50">Concrete Finishes</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/concrete-finishes/Exposed-aggregate.jpg') }}" alt="Exposed Aggregate">
                    <figcaption class="ov"><span class="cat">concrete-finishes</span><span class="nm">Exposed Aggregate</span><span
                            class="small text-white-50">Concrete Finishes</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/concrete-finishes/Stamped-concrete.JPG') }}" alt="Concrete Finishes">
                    <figcaption class="ov"><span class="cat">concrete-finishes</span><span class="nm">Stamped Concrete</span><span
                            class="small text-white-50">Concrete Finishes</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/masonry/IMG_1450.jpg') }}" alt="Commercial Masonry Before/After">
                    <figcaption class="ov"><span class="cat">masonry</span><span class="nm">Commercial Masonry Before/After</span><span
                            class="small text-white-50">Masonry</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/masonry/IMG_0038.jpeg') }}" alt="Commercial Masonry Before/After">
                    <figcaption class="ov"><span class="cat">masonry</span><span class="nm">DTC Masonry Project </span><span
                            class="small text-white-50">Masonry</span></figcaption>
                </figure>
            </div>
            <!-- <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/residential-concrete/Acid_stained_patio.jpeg') }}" alt="Acid Stained Patio">
                    <figcaption class="ov"><span class="cat">residential-concrete</span><span class="nm">Acid Stained Patio </span><span
                            class="small text-white-50">Residential Patio</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/residential-concrete/Classical_gray_colored_patio_with_steps.jpeg') }}" alt="Classical Gray Colored Patio with Steps">
                    <figcaption class="ov"><span class="cat">residential-concrete</span><span class="nm">Classical Gray Colored Patio with Steps </span><span
                            class="small text-white-50">Residential Patio</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/residential-concrete/Colored_concrete_patio.jpeg') }}" alt="Colored Concrete Patio">
                    <figcaption class="ov"><span class="cat">residential-concrete</span><span class="nm">Colored Concrete Patio</span><span
                            class="small text-white-50">Residential Patio</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/residential-concrete/Colored_stamped_patio.jpeg') }}" alt="Colored Stamped Patio">
                    <figcaption class="ov"><span class="cat">residential-concrete</span><span class="nm">Colored Stamped Patio</span><span
                            class="small text-white-50">Residential Patio</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/residential-concrete/Concrete_and_masonry_patio.jpeg') }}" alt="Concrete and Masonry Patio">
                    <figcaption class="ov"><span class="cat">residential-concrete</span><span class="nm">Concrete and Masonry Patio</span><span
                            class="small text-white-50">Residential Patio</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/residential-concrete/Exposed_aggregate_patio.jpeg') }}" alt="Exposed Aggregate Patio">
                    <figcaption class="ov"><span class="cat">residential-concrete</span><span class="nm">Exposed Aggregate Patio</span><span
                            class="small text-white-50">Residential Patio</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/residential-concrete/Gray_patio_with_steps.jpeg') }}" alt="Gray Patio with Steps">
                    <figcaption class="ov"><span class="cat">residential-concrete</span><span class="nm">Gray Patio with Steps</span><span
                            class="small text-white-50">Residential Patio</span></figcaption>
                </figure>
            </div>
             <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/residential-concrete/before-Jones-residence.jpeg') }}" alt="Before Jones Residence">
                    <figcaption class="ov"><span class="cat">residential-concrete</span><span class="nm">Before Jones Residence</span><span
                            class="small text-white-50">Jones Residence</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/residential-concrete/after-Jones-residence.jpeg') }}" alt="After Jones Residence">
                    <figcaption class="ov"><span class="cat">residential-concrete</span><span class="nm">After Jones Residence</span><span
                            class="small text-white-50">Jones Residence</span></figcaption>
                </figure>
            </div> -->
        </div>
    </div>
</section>


<!-- ====================== CTA ====================== -->
    <section class="section bg-navy-deep text-white text-center" aria-labelledby="gallery-cta-heading">
      <div class="container reveal">
        <h2 id="gallery-cta-heading" class="ff-display display-xl text-white mx-auto maxw-22">Want references for your sector?</h2>
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
    document.body.classList.add('page-gallery');
});
</script>
@endpush