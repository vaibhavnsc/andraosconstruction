<?php
    $seo = getPageSeoByKey('commercial-concrete');

    $title = $seo->meta_title ?? 'Commercial Concrete Companies Denver | Andraos Construction';

    $description = $seo->meta_description
        ?? 'Are you looking for commercial concrete companies in Denver, CO? Call or text Andraos Construction today for expert services with detailed estimates.';
?> 

<?php $__env->startSection('meta_title', $title); ?>
<?php $__env->startSection('meta_description', $description); ?>


<?php $__env->startSection('content'); ?>

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
                        src="/assets/images/commercial-concrete.jpeg">

                    <p class="eyebrow">Overview</p>
                    <h2 class="ff-display display-md mt-2 mb-3">
                        Commercial-Grade Work, Self-Performed
                    </h2>
                    <p class="lede" id="js-service-overview">Andraos Construction self-performs the full range of
                        commercial concrete flatwork and structural work across the Colorado Front Range. From new
                        sidewalks, curb &amp; gutter, and ADA-compliant ramps to dock aprons, drain pans, and structural
                        slabs, we deliver concrete that meets spec, passes inspection, and holds up to Colorado
                        freeze-thaw.</p>

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
                        <a href="tel:+13034793181" class="btn btn-outline-navy">Call (303) 479-3181</a>
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

<?php echo $__env->make('sections.services.warrenty', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


<section class="section bg-navy-deep text-white text-center" aria-labelledby="svc-single-cta">
      <div class="container reveal is-visible">
        <h2 id="svc-single-cta" class="ff-display display-xl text-white mx-auto maxw-20">
          Let’s talk about your <span class="js-service-name">Commercial Concrete</span>.
        </h2>
        <div class="d-flex gap-2 justify-content-center mt-4 flex-wrap">
          <a href="contact.html" class="btn btn-light-navy btn-arrow">Request a Quote</a>
          <a href="tel:+13034793181" class="btn btn-outline-light btn-arrow">(303)&nbsp;479-3181</a>
        </div>
      </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\andraosconstruction\resources\views/sections/services/commercial-concrete.blade.php ENDPATH**/ ?>