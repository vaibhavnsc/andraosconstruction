<?php
    $seo = getPageSeoByKey('gallery');

    $title = $seo->meta_title ?? 'Project Gallery | Andraos Construction Denver, CO';

    $description =
        $seo->meta_description ??
        'See recent commercial concrete, asphalt & masonry projects across Denver & the Front Range. Built by Andraos Construction since 1993.';
?>

<?php $__env->startSection('meta_title', $title); ?>
<?php $__env->startSection('meta_description', $description); ?>


<?php $__env->startSection('content'); ?>

    <!-- ====================== PAGE HERO ====================== -->
    <header class="page-hero">
        <div class="page-hero__bg" data-bg="<?php echo e(asset('assets/images/andraos-construction-gallery.jpg')); ?>" aria-hidden="true">
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
                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'hoa',
                    'title' => 'Central Park Highlands',
                    'subtitle' => 'Central Park Highlands',
                    'cover' => asset(
                        'assets/images/WebsiteRetailCommercialConcrete/CentralParkHighlands/Central_park_highlands01.JPEG'),
                    'images' => [
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/CentralParkHighlands/Central_park_highlands02.JPEG'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/CentralParkHighlands/Central_park_highlands03.JPEG'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/CentralParkHighlands/Central_park_highlands04.JPEG'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/CentralParkHighlands/Central_park_highlands05.JPEG'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/CentralParkHighlands/Central_park_highlands06.JPEG'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/CentralParkHighlands/Central_park_highlands07.JPEG'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/CentralParkHighlands/Central_park_highlands08.JPEG'),
                    ],
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'hoa',
                    'title' => 'Town Center',
                    'subtitle' => 'Town Center',
                    'cover' => asset(
                        'assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center_Hero.JPEG'),
                    'images' => [
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center01.JPG'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center02.JPG'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center03.JPG'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center04.JPG'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center05.JPG'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center06.JPEG'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center07.JPEG'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center08.JPEG'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center09.JPEG'),
                        asset('assets/images/WebsiteRetailCommercialConcrete/TownCenter/Town_center10.JPEG'),
                    ],
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'hoa',
                    'title' => 'Wildcat Reserve Highlands',
                    'subtitle' => 'Wildcat Reserve Highlands',
                    'cover' => asset(
                        'assets/images/WebsiteRetailCommercialConcrete/WildcatReserveHighlands/Wildcat_reserve_highlands01.JPEG'),
                    'images' => [
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/WildcatReserveHighlands/Wildcat_reserve_highlands02.JPEG'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/WildcatReserveHighlands/Wildcat_reserve_highlands03.JPEG'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/WildcatReserveHighlands/Wildcat_reserve_highlands04.JPEG'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/WildcatReserveHighlands/Wildcat_reserve_highlands05.JPEG'),
                        asset(
                            'assets/images/WebsiteRetailCommercialConcrete/WildcatReserveHighlands/Wildcat_reserve_highlands06.JPEG'),
                    ],
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'stucco',
                    'title' => 'Stucco',
                    'subtitle' => 'Stucco',
                    'cover' => asset('assets/images/stucco/Stucco01.JPG'),
                    'images' => [asset('assets/images/stucco/Stucco02.JPEG')],
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                
                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'commercial-concrete',
                    'title' => 'Advanced Energy',
                    'subtitle' => 'Commercial Concrete',
                    'cover' => asset('assets/images/WebsiteCommercialConcrete/Advanced/AdvancedEnergy01.jpg'),
                    'images' => [
                        asset('assets/images/WebsiteCommercialConcrete/Advanced/AdvancedEnergy02.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Advanced/AdvancedEnergy03.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Advanced/AdvancedEnergy04.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Advanced/AdvancedEnergy05.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Advanced/AdvancedEnergy06.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Advanced/AdvancedEnergy07.jpg'),
                    ],
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'commercial-concrete',
                    'title' => 'Asterisk',
                    'subtitle' => 'Commercial Concrete',
                    'cover' => asset(
                        'assets/images/WebsiteCommercialConcrete/Asterisk/AsteriskDenverCitySidewalk01.jpg'),
                    'images' => [
                        asset('assets/images/WebsiteCommercialConcrete/Asterisk/Asterisk02.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Asterisk/Asterisk03.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Asterisk/Asterisk04.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Asterisk/Asterisk05.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Asterisk/Asterisk06.jpg'),
                    ],
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'commercial-concrete',
                    'title' => 'Ballys',
                    'subtitle' => 'Commercial Concrete',
                    'cover' => asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys01.jpg'),
                    'images' => [
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys02.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys03.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys04.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys05.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys06.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys07.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys08.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys09.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys10.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys11.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys12.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys13.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys14.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys15.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/Ballys/Ballys16.jpg'),
                    ],
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'commercial-concrete',
                    'title' => 'Denver Pavilions',
                    'subtitle' => 'Commercial Concrete',
                    'cover' => asset(
                        'assets/images/WebsiteCommercialConcrete/DenverPavilions/DenverPavilions01.jpeg'),
                    'images' => [
                        asset('assets/images/WebsiteCommercialConcrete/DenverPavilions/DenverPavilions02.jpeg'),
                    ],
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'commercial-concrete',
                    'title' => 'Detroit Street',
                    'subtitle' => 'Commercial Concrete',
                    'cover' => asset('assets/images/WebsiteCommercialConcrete/DetroitSt/DetroitDenver01.jpg'),
                    'images' => [
                        asset('assets/images/WebsiteCommercialConcrete/DetroitSt/DetroitDenver02.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/DetroitSt/DetroitDenver03.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/DetroitSt/DetroitDenver04.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/DetroitSt/DetroitDenver05.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/DetroitSt/DetroitDenver06.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/DetroitSt/DetroitDenver07.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/DetroitSt/DetroitDenver08.jpg'),
                    ],
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'commercial-concrete',
                    'title' => "Tommy's Car Wash",
                    'subtitle' => 'Commercial Concrete',
                    'cover' => asset('assets/images/WebsiteCommercialConcrete/TommyCarWash/Tommycarwash01.jpg'),
                    'images' => [
                        asset('assets/images/WebsiteCommercialConcrete/TommyCarWash/Tommycarwash02.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/TommyCarWash/Tommycarwash03.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/TommyCarWash/Tommycarwash04.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/TommyCarWash/Tommycarwash05.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/TommyCarWash/Tommycarwash06.jpg'),
                    ],
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'commercial-concrete',
                    'title' => 'whole foods',
                    'subtitle' => 'Commercial Concrete',
                    'cover' => asset('assets/images/WebsiteCommercialConcrete/WholeFoods/WholeFoods01.jpg'),
                    'images' => [
                        asset('assets/images/WebsiteCommercialConcrete/WholeFoods/WholeFoods02.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/WholeFoods/WholeFoods03.jpg'),
                        asset('assets/images/WebsiteCommercialConcrete/WholeFoods/WholeFoods04.jpg'),
                    ],
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'Jones',
                    'subtitle' => 'Jones',
                    'cover' => asset('assets/images/ResidentialConcrete/Jones/Jonesresidence01.JPG'),
                    'images' => [asset('assets/images/ResidentialConcrete/Jones/Jonesresidence02.JPEG')],
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'Rays Driveway',
                    'subtitle' => 'Rays Driveway',
                    'cover' => asset('assets/images/ResidentialConcrete/RaysDriveway/Rays_driveway01.JPG'),
                    'images' => [
                        asset('assets/images/ResidentialConcrete/RaysDriveway/Rays_driveway02.JPG'),
                        asset('assets/images/ResidentialConcrete/RaysDriveway/Rays_driveway03.JPG'),
                        asset('assets/images/ResidentialConcrete/RaysDriveway/Rays_driveway04.JPG'),
                    ],
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'residential-concrete',
                    'title' => 'Stairs',
                    'subtitle' => 'Stairs',
                    'cover' => asset('assets/images/ResidentialConcrete/Stairs/Stairs01.JPG'),
                    'images' => [asset('assets/images/ResidentialConcrete/Stairs/Stairs02.JPG')],
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                
                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'asphalt',
                    'title' => 'Songbird HOA Littleton',
                    'subtitle' => 'Asphalt',
                    'cover' => asset('assets/images/asphalt/Asphalt01.JPG'),
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'snow-melt-system',
                    'title' => 'Snow Melt Systems',
                    'subtitle' => 'Snow Melt Systems',
                    'cover' => asset('assets/images/SnowMeltSystems/Snow_melt_systems01.JPG'),
                    'images' => [
                        asset('assets/images/SnowMeltSystems/Snow_melt_systems02.JPG'),
                        asset('assets/images/SnowMeltSystems/Snow_melt_systems03.JPG'),
                        asset('assets/images/SnowMeltSystems/Snow_melt_systems04.JPG'),
                        asset('assets/images/SnowMeltSystems/Snow_melt_systems05.JPEG'),
                    ],
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'concrete-finishes',
                    'title' => 'Concrete Finishes',
                    'subtitle' => 'Concrete Finishes',
                    'cover' => asset('assets/images/ConcreteFinishes/Concrete_finishes01.JPG'),
                    'images' => [
                        asset('assets/images/ConcreteFinishes/Concrete_finishes02.JPG'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes03.JPEG'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes04.JPG'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes05.JPG'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes06.JPG'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes07.JPG'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes08.JPG'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes09.JPEG'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes10.JPG'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes11.JPG'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes12.JPG'),
                        asset('assets/images/ConcreteFinishes/Concrete_finishes13.JPG'),
                    ],
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                
                
                <?php echo $__env->make('partials.gallery-project', [
                    'category' => 'masonry',
                    'title' => 'Masonry',
                    'subtitle' => 'Masonry',
                    'cover' => asset('assets/images/masonry/Masonry01.JPEG'),
                    'images' => [
                        asset('assets/images/masonry/Masonry02.JPG'),
                        asset('assets/images/masonry/Masonry03.JPG'),
                        asset('assets/images/masonry/Masonry04.JPG'),
                        asset('assets/images/masonry/Masonry05.JPG'),
                        asset('assets/images/masonry/Masonry06.JPG'),
                        asset('assets/images/masonry/Masonry07.JPG'),
                        asset('assets/images/masonry/Masonry08.JPG'),
                        asset('assets/images/masonry/Masonry09.JPG'),
                        asset('assets/images/masonry/Masonry10.JPG'),
                        asset('assets/images/masonry/Masonry11.JPG'),
                        asset('assets/images/masonry/Masonry12.JPG'),
                        asset('assets/images/masonry/Masonry13.JPG'),
                        asset('assets/images/masonry/Masonry14.JPG'),
                        asset('assets/images/masonry/Masonry15.JPG'),
                        asset('assets/images/masonry/Masonry16.JPG'),
                        asset('assets/images/masonry/Masonry17.JPG'),
                    ],
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                
            </div>
        </div>
    </section>


    <!-- ====================== CTA ====================== -->
    <section class="section bg-navy-deep text-white text-center" aria-labelledby="gallery-cta-heading">
        <div class="container reveal">
            <h2 id="gallery-cta-heading" class="ff-display display-xl text-white mx-auto maxw-22">Want references for your
                sector?</h2>
            <div class="d-flex gap-2 justify-content-center mt-4 flex-wrap">
                <a href="/contact" class="btn btn-light-navy btn-arrow">Request a Quote</a>
                <a href="tel:+3039153703" class="btn btn-outline-light btn-arrow">(303)&nbsp;915-3703</a>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('page-gallery');
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Andros\andraosconstruction\resources\views/pages/gallery.blade.php ENDPATH**/ ?>