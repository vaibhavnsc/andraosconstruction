<?php
    $seo = getPageSeoByKey('services');
    $title = $seo->meta_title ?? 'Commercial Services — Concrete, Asphalt, Masonry & Snow Melt | Andraos Construction';
    $description = $seo->meta_description ?? 'Commercial concrete, asphalt paving, masonry, snow-melt systems, HOA & property management, and concrete finishes across the Colorado Front Range. Self-performed since 1993.';
?>

<?php $__env->startSection('meta_title', $title); ?>
<?php $__env->startSection('meta_description', $description); ?>

<?php $__env->startSection('content'); ?>
    
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
          Self-performed by Andraos crews across the Colorado Front Range &mdash; one accountable
          contractor from estimate to final punch list.
        </p>
      </div>
    </header>

    
<section class="section" aria-label="Service details">
    <div class="container" id="js-service-detail">
        <div class="row g-5 align-items-center reveal anchor-offset is-visible" id="commercial-concrete">
            <div class="col-lg-6"><img src="<?php echo e(asset('assets/images/commercial.jpeg')); ?>" alt="Commercial Concrete"
                    class="ratio-4-3 img-treat"></div>
            <div class="col-lg-6"><span class="num-eyebrow">01 / 05</span>
                <h2 class="ff-display display-md mt-2">Commercial Concrete</h2>
                <p class="lede mt-3">Flatwork, curb &amp; gutter, drain pans, dock ramps, ADA sidewalks, and structural
                    slabs for commercial properties.</p>
                <div class="d-flex flex-wrap gap-1 mt-3"><span class="tag">Flatwork</span><span class="tag">Curb &amp;
                        gutter</span><span class="tag">ADA</span></div>

                <div class="d-flex gap-2 flex-wrap mt-4"><a href="/services/commercial-concrete"
                        class="btn btn-navy btn-arrow">View Service Details</a><a href="./contact"
                        class="btn btn-outline-navy">Request a Quote</a></div>
            </div>
        </div>
        <div class="row g-5 align-items-center reveal anchor-offset pt-5 mt-5 border-top is-visible"
            id="hoa-property-management">
            <div class="col-lg-6 order-lg-2"><img src="<?php echo e(asset('assets/images/residential/IMG_0079.jpeg')); ?>" alt="HOA &amp; Property Management"
                    class="ratio-4-3 img-treat"></div>
            <div class="col-lg-6 order-lg-1"><span class="num-eyebrow">02 / 05</span>
                <h2 class="ff-display display-md mt-2">HOA &amp; Property Management</h2>
                <p class="lede mt-3">Community-wide capital renewal: sidewalks, drive lanes, curb &amp; gutter, parking
                    lots, and asphalt maintenance.</p>
                <div class="d-flex flex-wrap gap-1 mt-3"><span class="tag">Capital renewal</span><span
                        class="tag">Sidewalks</span><span class="tag">Repair</span></div>
                <div class="d-flex gap-2 flex-wrap mt-4"><a href="/services/hoa-property-management"
                        class="btn btn-navy btn-arrow">View Service Details</a><a href="/contact"
                        class="btn btn-outline-navy">Request a Quote</a></div>
            </div>
        </div>
        <div class="row g-5 align-items-center reveal anchor-offset pt-5 mt-5 border-top is-visible" id="asphalt">
            <div class="col-lg-6 "><img src="<?php echo e(asset('assets/images/asphalt/168-25.jpg')); ?>"
                    alt="Asphalt Paving &amp; Repair" class="ratio-4-3 img-treat"></div>
            <div class="col-lg-6 "><span class="num-eyebrow">03 / 05</span>
                <h2 class="ff-display display-md mt-2">Asphalt Paving &amp; Repair</h2>
                <p class="lede mt-3">Mill &amp; overlay, full-depth removal &amp; replacement, crackfilling,
                    sealcoating, and striping for parking lots.</p>
                <div class="d-flex flex-wrap gap-1 mt-3"><span class="tag">Mill &amp; overlay</span><span
                        class="tag">Sealcoat</span><span class="tag">Striping</span></div>
                <div class="d-flex gap-2 flex-wrap mt-4"><a href="/services/asphalt" class="btn btn-navy btn-arrow">View
                        Service Details</a><a href="/contact" class="btn btn-outline-navy">Request a Quote</a></div>
            </div>
        </div>
        <div class="row g-5 align-items-center reveal anchor-offset pt-5 mt-5 border-top is-visible" id="masonry">
            <div class="col-lg-6 order-lg-2"><img src="<?php echo e(asset('/assets/images/masonry/IMG_1450.jpg')); ?>" alt="Commercial Masonry"
                    class="ratio-4-3 img-treat"></div>
            <div class="col-lg-6 order-lg-1"><span class="num-eyebrow">04 / 05</span>
                <h2 class="ff-display display-md mt-2">Commercial Masonry</h2>
                <p class="lede mt-3">Architectural stone walls, sandstone seat-walls, brick veneer, retaining walls, and
                    structural CMU site work.</p>
                <div class="d-flex flex-wrap gap-1 mt-3"><span class="tag">Sandstone</span><span
                        class="tag">Brick</span><span class="tag">Retaining walls</span></div>
                <div class="d-flex gap-2 flex-wrap mt-4"><a href="/services/masonry" class="btn btn-navy btn-arrow">View
                        Service Details</a><a href="./contact.html" class="btn btn-outline-navy">Request a Quote</a>
                </div>
            </div>
        </div>
        <div class="row g-5 align-items-center reveal anchor-offset pt-5 mt-5 border-top is-visible" id="snow-melt">
            <div class="col-lg-6"><img src="<?php echo e(asset('assets/images/snowmelt/064-25f.jpeg')); ?>" alt="Snow Melt Systems"
                    class="ratio-4-3 img-treat"></div>
            <div class="col-lg-6"><span class="num-eyebrow">05 / 05</span>
                <h2 class="ff-display display-md mt-2">Snow Melt Systems</h2>
                <p class="lede mt-3">Hydronic snow-melt for entries, ADA ramps, drive courts, and walkways — embedded
                    during the original pour.</p>
                <div class="d-flex flex-wrap gap-1 mt-3"><span class="tag">Hydronic</span><span
                        class="tag">Entries</span><span class="tag">ADA ramps</span></div>
                <div class="d-flex gap-2 flex-wrap mt-4"><a href="/services/snow-melt"
                        class="btn btn-navy btn-arrow">View Service Details</a><a href="/contact"
                        class="btn btn-outline-navy">Request a Quote</a></div>
            </div>
        </div>
        
        <!-- <div class="row g-5 align-items-center reveal anchor-offset pt-5 mt-5 border-top is-visible"
            id="concrete-finishes">
            <div class="col-lg-6 order-lg-2"><img src="<?php echo e(asset('assets/images/finish.jpg')); ?>"
                    alt="Concrete Finishes" class="ratio-4-3 img-treat"></div>
            <div class="col-lg-6 order-lg-1"><span class="num-eyebrow">06 / 05</span>
                <h2 class="ff-display display-md mt-2">Concrete Finishes</h2>
                <p class="lede mt-3">Broom, exposed aggregate, stamped, and integral color finishes for entrances,
                    plazas, and feature flatwork.</p>
                <div class="d-flex flex-wrap gap-1 mt-3"><span class="tag">Broom</span><span
                        class="tag">Stamped</span><span class="tag">Exposed</span></div><a href="<?php echo e(route('contact')); ?>"
                    class="btn btn-outline-navy btn-arrow mt-4">Request a Quote</a>
            </div>
        </div> -->
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

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
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
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\andraosconstruction\resources\views/pages/services.blade.php ENDPATH**/ ?>