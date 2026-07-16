@extends('layouts.app')

@php
    $seo = getPageSeoByKey('gallery');

    $title = $seo->meta_title ?? 'Project Gallery | Andraos Construction Denver, CO';

    $description = $seo->meta_description
        ?? 'See recent commercial concrete, asphalt & masonry projects across Denver & the Front Range. Built by Andraos Construction since 1993.';
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
                <button type="button" class="filter-btn" data-filter="hoa">Retail Commercial Concrete </button> 
            <button type="button" class="filter-btn" data-filter="masonry">Masonry</button>
            <button type="button" class="filter-btn"
                data-filter="stucco">Stucco</button>
            <button type="button" class="filter-btn" data-filter="asphalt">Asphalt</button>
            <button type="button" class="filter-btn" data-filter="snow-melt-system">Snow Melt Systems</button>
            <button type="button" class="filter-btn" data-filter="concrete-finishes">Concrete Finishes</button>
           
        </div>
        <!-- Project cards injected by site.js -->
        <div class="row g-3" id="projGrid">
            @include('partials.gallery-project', [
                'category' => 'hoa',
                'title' => 'HOA',
                'subtitle' => 'HOA',
                'cover' => asset('assets/images/hoa-andros.webp'),
                'images' => [
                   asset('assets/images/andraos-construction.webp'),
                ]
            ])
            @include('partials.gallery-project', [
                'category' => 'stucco',
                'title' => 'Stucco',
                'subtitle' => 'Stucco',
                'cover' => asset('assets/images/stucco/IMG_0669.jpg')
            ])
            @include('partials.gallery-project', [
                'category' => 'stucco',
                'title' => 'Stucco',
                'subtitle' => 'Stucco',
                'cover' => asset('assets/images/stucco/IMG_3656.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'commercial-concrete',
                'title' => 'Schomp Ford – Aurora',
                'subtitle' => 'Commercial Concrete',
                'cover' => asset('assets/images/commercial/schomp-ford-aurora.png'),
                'images' => [
                    asset('assets/images/commercial/IMG_0015.jpeg'),
                    asset('assets/images/commercial/IMG_0026.jpeg'),
                    asset('assets/images/commercial/IMG_0051.jpeg'),
                ]
            ])
            @include('partials.gallery-project', [
                'category' => 'commercial-concrete',
                'title' => 'Cherry Creek',
                'subtitle' => 'Commercial Concrete',
                'cover' => asset('assets/images/commercial/cherry-creek.jpg')
            ])
            @include('partials.gallery-project', [
                'category' => 'commercial-concrete',
                'title' => '1075 Park Avenue West',
                'subtitle' => 'Commercial Concrete',
                'cover' => asset('assets/images/commercial/1075-Park-Ave-Denver.jpg')
            ])
            @include('partials.gallery-project', [
                'category' => 'commercial-concrete',
                'title' => 'Advanced Energy – Fort Collins',
                'subtitle' => 'Commercial Concrete',
                'cover' => asset('assets/images/commercial/advanced-energy-fort-collins.jpg')
            ])
            @include('partials.gallery-project', [
                'category' => 'commercial-concrete',
                'title' => 'Black Hawk',
                'subtitle' => 'Commercial Concrete',
                'cover' => asset('assets/images/commercial/blackhawk.jpg')
            ])
            @include('partials.gallery-project', [
                'category' => 'commercial-concrete',
                'title' => 'Blake Street',
                'subtitle' => 'Commercial Concrete',
                'cover' => asset('assets/images/commercial/blake-street.jpg')
            ])
            @include('partials.gallery-project', [
                'category' => 'commercial-concrete',
                'title' => 'Central Park Highlands',
                'subtitle' => 'Commercial Concrete',
                'cover' => asset('assets/images/commercial/central-park-highlands.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'commercial-concrete',
                'title' => 'Chick-fil-A',
                'subtitle' => 'Commercial Concrete',
                'cover' => asset('assets/images/commercial/chick-fil-a.jpg')
            ])
            @include('partials.gallery-project', [
                'category' => 'commercial-concrete',
                'title' => 'Denver Pavilion + Denver Sidewalks',
                'subtitle' => 'Commercial Concrete',
                'cover' => asset('assets/images/commercial/denver-sidewalks.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'commercial-concrete',
                'title' => 'Tommy’s',
                'subtitle' => 'Commercial Concrete',
                'cover' => asset('assets/images/commercial/tommys.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'commercial-concrete',
                'title' => 'Whole Foods – Lakewood',
                'subtitle' => 'Commercial Concrete',
                'cover' => asset('assets/images/commercial/whole-foods-lakewood.jpg')
            ])
            @include('partials.gallery-project', [
                'category' => 'commercial-concrete',
                'title' => 'Town Center',
                'subtitle' => 'Commercial Concrete',
                'cover' => asset('assets/images/commercial/town-center.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'commercial-concrete',
                'title' => 'Wildcat Reserve Highlands',
                'subtitle' => 'Commercial Concrete',
                'cover' => asset('assets/images/commercial/wildcat-reserve-highlands.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'residential-concrete',
                'title' => 'Residential Patio',
                'subtitle' => 'Residential Concrete',
                'cover' => asset('assets/images/residential/IMG_0041.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'residential-concrete',
                'title' => 'Highlands Ranch Residential',
                'subtitle' => 'Residential Concrete',
                'cover' => asset('assets/images/residential/IMG_0079.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'residential-concrete',
                'title' => 'Before Stair Project',
                'subtitle' => 'Residential Concrete',
                'cover' => asset('assets/images/residential/IMG_5912.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'residential-concrete',
                'title' => 'After Stair Project',
                'subtitle' => 'Residential Concrete',
                'cover' => asset('assets/images/residential/IMG_7038.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'residential-concrete',
                'title' => 'Castle Pines Decorative Concrete',
                'subtitle' => 'Residential Concrete',
                'cover' => asset('assets/images/residential/IMG_0161.jpg')
            ])
            @include('partials.gallery-project', [
                'category' => 'residential-concrete',
                'title' => 'Acid Stained Patio',
                'subtitle' => 'Residential Patio',
                'cover' => asset('assets/images/residential-patio/Acid_stained_patio.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'residential-concrete',
                'title' => 'Classical Gray Colored Patio with Steps',
                'subtitle' => 'Residential Patio',
                'cover' => asset('assets/images/residential-patio/Classical_gray_colored_patio_with_steps.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'residential-concrete',
                'title' => 'Colored Concrete Patio',
                'subtitle' => 'Residential Patio',
                'cover' => asset('assets/images/residential-patio/Colored_concrete_patio.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'residential-concrete',
                'title' => 'Colored Stamped Patio',
                'subtitle' => 'Residential Patio',
                'cover' => asset('assets/images/residential-patio/Colored_stamped_patio.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'residential-concrete',
                'title' => 'Concrete and Masonry Patio',
                'subtitle' => 'Residential Patio',
                'cover' => asset('assets/images/residential-patio/Concrete_and_masonry_patio.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'residential-concrete',
                'title' => 'Exposed Aggregate Patio',
                'subtitle' => 'Residential Patio',
                'cover' => asset('assets/images/residential-patio/Exposed_aggregate_patio.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'residential-concrete',
                'title' => 'Gray Patio with Steps',
                'subtitle' => 'Residential Patio',
                'cover' => asset('assets/images/residential-patio/Gray_patio_with_steps.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'residential-concrete',
                'title' => 'Before Jones Residence',
                'subtitle' => 'Jones Residence',
                'cover' => asset('assets/images/jones-residence/before-Jones-residence.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'residential-concrete',
                'title' => 'After Jones Residence',
                'subtitle' => 'Jones Residence',
                'cover' => asset('assets/images/jones-residence/after-Jones-residence.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'asphalt',
                'title' => 'Meadow Wood',
                'subtitle' => 'Asphalt',
                'cover' => asset('assets/images/asphalt/168-25-Meadow.jpg'),
                'images' => [
                    asset('assets/images/asphalt/168-25.jpg'),
                ]
            ])
            @include('partials.gallery-project', [
                'category' => 'asphalt',
                'title' => 'Songbird HOA Littleton',
                'subtitle' => 'Asphalt',
                'cover' => asset('assets/images/asphalt/HOA_Littleton_IMG_3636.jpeg'),
                'images' => [
                    asset('assets/images/asphalt/IMG_3635.jpeg'),
                    asset('assets/images/asphalt/Songbird_HOA_IMG_3637.jpeg'),
                    asset('assets/images/asphalt/Songbird_HOA_Littleton_IMG_3638.jpeg'),
                ]
            ])
            @include('partials.gallery-project', [
                'category' => 'snow-melt-system',
                'title' => 'Snow Melt Systems',
                'subtitle' => 'Snow Melt Systems',
                'cover' => asset('assets/images/snowmelt/064-25f.jpeg'),
                'images' => [
                    asset('assets/images/snowmelt/064-25s.jpeg'),
                    asset('assets/images/snowmelt/064-25si.jpeg'),
                    asset('assets/images/snowmelt/064-25t.jpeg'),
                    asset('assets/images/snowmelt/064-25th.jpeg'),
                    asset('assets/images/snowmelt/064-25fi.jpg')
                ]
            ])

            @include('partials.gallery-project', [
                'category' => 'concrete-finishes',
                'title' => 'Colored Concrete',
                'subtitle' => 'Concrete Finishes',
                'cover' => asset('assets/images/concrete-finishes/Colored-concrete.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'concrete-finishes',
                'title' => 'Exposed Aggregate',
                'subtitle' => 'Concrete Finishes',
                'cover' => asset('assets/images/concrete-finishes/Exposed-aggregate.jpg')
            ])
            @include('partials.gallery-project', [
                'category' => 'concrete-finishes',
                'title' => 'Stamped Concrete',
                'subtitle' => 'Concrete Finishes',
                'cover' => asset('assets/images/concrete-finishes/Stamped-concrete.JPG')
            ])
            @include('partials.gallery-project', [
                'category' => 'masonry',
                'title' => 'Commercial Masonry Before/After',
                'subtitle' => 'Blackhawk',
                'cover' => asset('assets/images/masonry/IMG_1450.jpg')
            ])
            @include('partials.gallery-project', [
                'category' => 'masonry',
                'title' => 'Blackhawk',
                'subtitle' => 'Masonry',
                'cover' => asset('assets/images/masonry/Blackhawk.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'masonry',
                'title' => 'DTC Masonry Project',
                'subtitle' => 'Masonry',
                'cover' => asset('assets/images/masonry/IMG_0038.jpeg')
            ])
            @include('partials.gallery-project', [
                'category' => 'masonry',
                'title' => 'Cherry Creek Country',
                'subtitle' => 'Masonry',
                'cover' => asset('assets/images/masonry/Cherry-Creek-Country-Club.JPEG'),
                'images' => [
                   asset('assets/images/masonry/Cherry-Creek-Country.jpeg'),
                ]
            ])
            @include('partials.gallery-project', [
                'category' => 'masonry',
                'title' => 'Masonry Vasa',
                'subtitle' => 'Masonry',
                'cover' => asset('assets/images/masonry/Masonry-Vasa.jpeg')
            ])
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