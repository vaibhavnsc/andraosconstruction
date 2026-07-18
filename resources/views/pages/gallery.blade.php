@extends('layouts.app')

@php
    $seo = getPageSeoByKey('gallery');

    $title = $seo->meta_title ?? 'Project Gallery | Andraos Construction Denver, CO';

    $description =
        $seo->meta_description ??
        'See recent commercial concrete, asphalt & masonry projects across Denver & the Front Range. Built by Andraos Construction since 1993.';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)


@section('content')

    <!-- ====================== PAGE HERO ====================== -->
    <header class="page-hero">
        <div class="page-hero__bg" data-bg="{{ asset('assets/images/andraos-construction-gallery.jpg') }}" aria-hidden="true">
        </div>
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
                <button type="button" class="filter-btn active" data-filter="all">All Work</button>
                <button type="button" class="filter-btn" data-filter="commercial-concrete">Commercial Concrete</button>
                <button type="button" class="filter-btn" data-filter="residential-concrete">Residential Concrete</button>
                <button type="button" class="filter-btn" data-filter="hoa">Retail Commercial Concrete </button>
                <button type="button" class="filter-btn" data-filter="masonry">Masonry</button>
                <button type="button" class="filter-btn" data-filter="stucco">Stucco</button>
                <button type="button" class="filter-btn" data-filter="asphalt">Asphalt</button>
                <button type="button" class="filter-btn" data-filter="snow-melt-system">Snow Melt Systems</button>
                <button type="button" class="filter-btn" data-filter="concrete-finishes">Concrete Finishes</button>

            </div>
            <!-- Project cards injected by site.js -->
            <div class="row g-3" id="projGrid">
                @include('partials.gallery-project', [
                    'category' => 'hoa',
                    'title' => 'Central Park Highlands',
                    'subtitle' => 'Central Park Highlands',
                    'cover' => asset(
                        'assets/images/WebsiteRetailCommercialConcrete/CentralParkHighlands/Central_park_highlands01.jpeg'),
                    'images' => [
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/CentralParkHighlands/Central_park_highlands02.jpeg'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/CentralParkHighlands/Central_park_highlands03.jpeg'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/CentralParkHighlands/Central_park_highlands04.jpeg'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/CentralParkHighlands/Central_park_highlands05.jpeg'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/CentralParkHighlands/Central_park_highlands06.jpeg'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/CentralParkHighlands/Central_park_highlands07.jpeg'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/CentralParkHighlands/Central_park_highlands08.jpeg'),
                    ],
                ])
                @include('partials.gallery-project', [
                    'category' => 'hoa',
                    'title' => 'Town Center',
                    'subtitle' => 'Town Center',
                    'cover' => asset(
                        'assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center_Hero.jpeg'),
                    'images' => [
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center01.JPG'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center02.JPG'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center03.JPG'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center04.JPG'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center05.JPG'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center06.jpeg'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center07.jpeg'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center08.jpeg'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center09.jpeg'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center10.jpeg'),
                    ],
                ])
                @include('partials.gallery-project', [
                    'category' => 'hoa',
                    'title' => 'Wildcat Reserve Highlands',
                    'subtitle' => 'Wildcat Reserve Highlands',
                    'cover' => asset(
                        'assets/images/WebsiteRetailCommercialConcrete/WildcatReserveHighlands/Wildcat_reserve_highlands01.jpeg'),
                    'images' => [
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/WildcatReserveHighlands/Wildcat_reserve_highlands02.jpeg'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/WildcatReserveHighlands/Wildcat_reserve_highlands03.jpeg'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/WildcatReserveHighlands/Wildcat_reserve_highlands04.jpeg'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/WildcatReserveHighlands/Wildcat_reserve_highlands05.jpeg'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/WildcatReserveHighlands/Wildcat_reserve_highlands06.jpeg'),
                    ],
                ])
                @include('partials.gallery-project', [
                    'category' => 'stucco',
                    'title' => 'Stucco',
                    'subtitle' => 'Stucco',
                    'cover' => asset('assets/images/stucco/Stucco01.jpg'),
                    'images' => [asset('assets/images/stucco/Stucco02.jpeg')],
                ])
                {{-- @include('partials.gallery-project', [
                    'category' => 'stucco',
                    'title' => 'Stucco',
                    'subtitle' => 'Stucco',
                    'cover' => asset('assets/images/stucco/IMG_3656.jpeg'),
                ]) --}}
                @include('partials.gallery-project', [
                    'category' => 'commercial-concrete',
                    'title' => 'Advanced Energy',
                    'subtitle' => 'Commercial Concrete',
                    'cover' => asset('assets/images/WebsiteCommercialConcrete/Advanced/AdvancedEnergy01.JPG'),
                    'images' => [
                        asset('assets/images/WebsiteCommercialConcrete/Advanced/AdvancedEnergy02.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Advanced/AdvancedEnergy03.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Advanced/AdvancedEnergy04.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Advanced/AdvancedEnergy05.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Advanced/AdvancedEnergy06.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Advanced/AdvancedEnergy07.JPG'),
                    ],
                ])
                @include('partials.gallery-project', [
                    'category' => 'commercial-concrete',
                    'title' => 'Asterisk',
                    'subtitle' => 'Commercial Concrete',
                    'cover' => asset(
                        'assets/images/WebsiteCommercialConcrete/Asterisk/AsteriskDenverCitySidewalk01.JPG'),
                    'images' => [
                        asset('assets/images/WebsiteCommercialConcrete/Asterisk/Asterisk02.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Asterisk/Asterisk03.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Asterisk/Asterisk04.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Asterisk/Asterisk05.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Asterisk/Asterisk06.JPG'),
                    ],
                ])
                @include('partials.gallery-project', [
                    'category' => 'commercial-concrete',
                    'title' => 'Ballys',
                    'subtitle' => 'Commercial Concrete',
                    'cover' => asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys01.jpg'),
                    'images' => [
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys02.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys03.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys04.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys05.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys06.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys07.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys08.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys09.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys10.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys11.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys12.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys13.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys14.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys15.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys16.JPG'),
                    ],
                ])
                @include('partials.gallery-project', [
                    'category' => 'commercial-concrete',
                    'title' => 'Denver Pavilions',
                    'subtitle' => 'Commercial Concrete',
                    'cover' => asset(
                        'assets/images/WebsiteCommercialConcrete/DenverPavilions/DenverPavilions01.jpeg'),
                    'images' => [
                        asset('assets/images/WebsiteCommercialConcrete/DenverPavilions/DenverPavilions02.jpeg'),
                    ],
                ])
                @include('partials.gallery-project', [
                    'category' => 'commercial-concrete',
                    'title' => 'Detroit Street',
                    'subtitle' => 'Commercial Concrete',
                    'cover' => asset('assets/images/WebsiteCommercialConcrete/DetroitSt/DetroitDenver01.JPG'),
                    'images' => [
                        asset('assets/images/WebsiteCommercialConcrete/DetroitSt/DetroitDenver02.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/DetroitSt/DetroitDenver03.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/DetroitSt/DetroitDenver04.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/DetroitSt/DetroitDenver05.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/DetroitSt/DetroitDenver06.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/DetroitSt/DetroitDenver07.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/DetroitSt/DetroitDenver08.JPG'),
                    ],
                ])
                @include('partials.gallery-project', [
                    'category' => 'commercial-concrete',
                    'title' => "Tommy's Car Wash",
                    'subtitle' => 'Commercial Concrete',
                    'cover' => asset('assets/images/WebsiteCommercialConcrete/TommyCarWash/Tommycarwash01.jpg'),
                    'images' => [
                        asset('assets/images/WebsiteCommercialConcrete/TommyCarWash/Tommycarwash02.JPEG'),
                        asset('assets/images/WebsiteCommercialConcrete/TommyCarWash/Tommycarwash03.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/TommyCarWash/Tommycarwash04.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/TommyCarWash/Tommycarwash05.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/TommyCarWash/Tommycarwash06.JPG'),
                    ],
                ])
                @include('partials.gallery-project', [
                    'category' => 'commercial-concrete',
                    'title' => 'whole foods',
                    'subtitle' => 'Commercial Concrete',
                    'cover' => asset('assets/images/WebsiteCommercialConcrete/WholeFoods/WholeFoods01.JPG'),
                    'images' => [
                        asset('assets/images/WebsiteCommercialConcrete/WholeFoods/WholeFoods02.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/WholeFoods/WholeFoods03.JPG'),
                        asset('assets/images/WebsiteCommercialConcrete/WholeFoods/WholeFoods04.JPG'),
                    ],
                ])

                @include('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'Jones',
                    'subtitle' => 'Jones',
                    'cover' => asset('assets/images/ResidentialConcrete/Jones/Jonesresidence01.jpg'),
                    'images' => [asset('assets/images/ResidentialConcrete/Jones/Jonesresidence02.jpeg')],
                ])
                @include('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'Rays Driveway',
                    'subtitle' => 'Rays Driveway',
                    'cover' => asset('assets/images/ResidentialConcrete/RaysDriveway/Rays_driveway01.JPG'),
                    'images' => [
                        asset('assets/images/ResidentialConcrete/RaysDriveway/Rays_driveway02.JPG'),
                        asset('assets/images/ResidentialConcrete/RaysDriveway/Rays_driveway03.JPG'),
                        asset('assets/images/ResidentialConcrete/RaysDriveway/Rays_driveway04.JPG'),
                    ],
                ])
                @include('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'Stairs',
                    'subtitle' => 'Stairs',
                    'cover' => asset('assets/images/ResidentialConcrete/Stairs/Stairs01.JPG'),
                    'images' => [asset('assets/images/ResidentialConcrete/Stairs/Stairs02.JPG')],
                ])
                {{-- @include('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'Highlands Ranch Residential',
                    'subtitle' => 'Residential Concrete',
                    'cover' => asset('assets/images/residential/IMG_0079.jpeg'),
                ])
                @include('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'Before Stair Project',
                    'subtitle' => 'Residential Concrete',
                    'cover' => asset('assets/images/residential/IMG_5912.jpeg'),
                ])
                @include('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'After Stair Project',
                    'subtitle' => 'Residential Concrete',
                    'cover' => asset('assets/images/residential/IMG_7038.jpeg'),
                ])
                @include('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'Castle Pines Decorative Concrete',
                    'subtitle' => 'Residential Concrete',
                    'cover' => asset('assets/images/residential/IMG_0161.jpg'),
                ])
                @include('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'Acid Stained Patio',
                    'subtitle' => 'Residential Patio',
                    'cover' => asset('assets/images/residential-patio/Acid_stained_patio.jpeg'),
                ])
                @include('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'Classical Gray Colored Patio with Steps',
                    'subtitle' => 'Residential Patio',
                    'cover' => asset(
                        'assets/images/residential-patio/Classical_gray_colored_patio_with_steps.jpeg'),
                ])
                @include('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'Colored Concrete Patio',
                    'subtitle' => 'Residential Patio',
                    'cover' => asset('assets/images/residential-patio/Colored_concrete_patio.jpeg'),
                ])
                @include('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'Colored Stamped Patio',
                    'subtitle' => 'Residential Patio',
                    'cover' => asset('assets/images/residential-patio/Colored_stamped_patio.jpeg'),
                ])
                @include('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'Concrete and Masonry Patio',
                    'subtitle' => 'Residential Patio',
                    'cover' => asset('assets/images/residential-patio/Concrete_and_masonry_patio.jpeg'),
                ])
                @include('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'Exposed Aggregate Patio',
                    'subtitle' => 'Residential Patio',
                    'cover' => asset('assets/images/residential-patio/Exposed_aggregate_patio.jpeg'),
                ])
                @include('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'Gray Patio with Steps',
                    'subtitle' => 'Residential Patio',
                    'cover' => asset('assets/images/residential-patio/Gray_patio_with_steps.jpeg'),
                ])
                @include('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'Before Jones Residence',
                    'subtitle' => 'Jones Residence',
                    'cover' => asset('assets/images/jones-residence/before-Jones-residence.jpeg'),
                ])
                @include('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'After Jones Residence',
                    'subtitle' => 'Jones Residence',
                    'cover' => asset('assets/images/jones-residence/after-Jones-residence.jpeg'),
                ])
                @include('partials.gallery-project', [
                    'category' => 'asphalt',
                    'title' => 'Meadow Wood',
                    'subtitle' => 'Asphalt',
                    'cover' => asset('assets/images/asphalt/168-25-Meadow.jpg'),
                    'images' => [asset('assets/images/asphalt/168-25.jpg')],
                ]) --}}
                @include('partials.gallery-project', [
                    'category' => 'asphalt',
                    'title' => 'Songbird HOA Littleton',
                    'subtitle' => 'Asphalt',
                    'cover' => asset('assets/images/asphalt/Asphalt01.JPG'),
                ])
                @include('partials.gallery-project', [
                    'category' => 'snow-melt-system',
                    'title' => 'Snow Melt Systems',
                    'subtitle' => 'Snow Melt Systems',
                    'cover' => asset('assets/images/SnowMeltSystems/Snow_melt_systems01.jpeg'),
                    'images' => [
                        asset('assets/images/SnowMeltSystems/Snow_melt_systems02.jpeg'),
                        asset('assets/images/SnowMeltSystems/Snow_melt_systems03.jpeg'),
                        asset('assets/images/SnowMeltSystems/Snow_melt_systems04.jpeg'),
                        asset('assets/images/SnowMeltSystems/Snow_melt_systems05.jpeg'),
                    ],
                ])

                @include('partials.gallery-project', [
                    'category' => 'concrete-finishes',
                    'title' => 'Colored Concrete',
                    'subtitle' => 'Concrete Finishes',
                    'cover' => asset('assets/images/ConcreteFinishes/Concrete_finishes01.JPG'),
                    'images' => [
                        asset('assets/images/ConcreteFinishes/Concrete_finishes02.jpeg'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes03.jpeg'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes04.JPG'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes05.JPG'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes06.jpg'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes07.jpg'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes08.JPG'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes09.jpeg'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes10.jpg'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes11.JPG'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes12.JPG'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes13.JPG'),
                    ],
                ])
                {{-- @include('partials.gallery-project', [
                    'category' => 'concrete-finishes',
                    'title' => 'Exposed Aggregate',
                    'subtitle' => 'Concrete Finishes',
                    'cover' => asset('assets/images/concrete-finishes/Exposed-aggregate.jpg'),
                ]) --}}
                {{-- @include('partials.gallery-project', [
                    'category' => 'concrete-finishes',
                    'title' => 'Stamped Concrete',
                    'subtitle' => 'Concrete Finishes',
                    'cover' => asset('assets/images/concrete-finishes/Stamped-concrete.JPG'),
                ]) --}}
                @include('partials.gallery-project', [
                    'category' => 'masonry',
                    'title' => 'Masonry',
                    'subtitle' => 'Masonry',
                    'cover' => asset('assets/images/masonry/Masonry01.JPEG'),
                    'images' => [
                        asset('assets/images/masonry/Masonry02.jpeg'),
                        asset('assets/images/masonry/Masonry03.JPG'),
                        asset('assets/images/masonry/Masonry04.jpeg'),
                        asset('assets/images/masonry/Masonry05.JPG'),
                        asset('assets/images/masonry/Masonry06.jpeg'),
                        asset('assets/images/masonry/Masonry07.jpeg'),
                        asset('assets/images/masonry/Masonry08.JPG'),
                        asset('assets/images/masonry/Masonry09.JPG'),
                        asset('assets/images/masonry/Masonry10.JPG'),
                        asset('assets/images/masonry/Masonry11.JPG'),
                        asset('assets/images/masonry/Masonry12.JPG'),
                        asset('assets/images/masonry/Masonry13.JPG'),
                        asset('assets/images/masonry/Masonry14.JPG'),
                        asset('assets/images/masonry/Masonry15.JPG'),
                        asset('assets/images/masonry/Masonry16.JPG'),
                        asset('assets/images/masonry/Masonry17.jpeg'),
                    ],
                ])
                {{-- @include('partials.gallery-project', [
                    'category' => 'masonry',
                    'title' => 'Blackhawk',
                    'subtitle' => 'Masonry',
                    'cover' => asset('assets/images/masonry/Blackhawk.jpeg'),
                ])
                @include('partials.gallery-project', [
                    'category' => 'masonry',
                    'title' => 'DTC Masonry Project',
                    'subtitle' => 'Masonry',
                    'cover' => asset('assets/images/masonry/IMG_0038.jpeg'),
                ])
                @include('partials.gallery-project', [
                    'category' => 'masonry',
                    'title' => 'Cherry Creek Country',
                    'subtitle' => 'Masonry',
                    'cover' => asset('assets/images/masonry/Cherry-Creek-Country-Club.JPEG'),
                    'images' => [asset('assets/images/masonry/Cherry-Creek-Country.jpeg')],
                ])
                @include('partials.gallery-project', [
                    'category' => 'masonry',
                    'title' => 'Masonry Vasa',
                    'subtitle' => 'Masonry',
                    'cover' => asset('assets/images/masonry/Masonry-Vasa.jpeg'),
                ]) --}}
            </div>
        </div> 
    </section>


    <!-- ====================== CTA ====================== -->
    <section class="section bg-navy-deep text-white text-center" aria-labelledby="gallery-cta-heading">
        <div class="container reveal">
            <h2 id="gallery-cta-heading" class="ff-display display-xl text-white mx-auto maxw-22">Want references for your
                sector?</h2>
            <div class="d-flex gap-2 justify-content-center mt-4 flex-wrap">
                <a href="/contact" class="btn btn-light-navy btn-arrow">Request an Estimate</a>
                <a href="tel:+13039153703" class="btn btn-outline-light btn-arrow">(303)&nbsp;915-3703</a>
            </div>
        </div>
    </section>

@endsection


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('page-gallery');
        });
    </script>
@endpush
