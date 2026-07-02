<?php
    $seo = getPageSeoByKey('about');

    $title = $seo->meta_title ?? 'About | Andraos Construction | Denver, CO Area';

    $description = $seo->meta_description
        ?? 'Andraos Construction has been serving Denver since 1993. Learn more about our services! Serving the Denver, CO Metro Area.';
?> 

<?php $__env->startSection('meta_title', $title); ?>
<?php $__env->startSection('meta_description', $description); ?>

<?php $__env->startSection('content'); ?>

<header class="page-hero">
  <div class="page-hero__bg" data-bg="<?php echo e(asset('/assets/images/andraos-about-hero.jpg')); ?>" aria-hidden="true"></div>
    <div class="page-hero__scrim" aria-hidden="true"></div>
    <div class="container">
        <nav class="breadcrumb-mono mb-3" aria-label="Breadcrumb">
            <a href="/">Home</a> &nbsp;/&nbsp; About
        </nav>
        <h1>Built on Concrete, Trust, and 30 Years on the Front Range</h1>
    </div>
</header>


<!-- ====================== COMPANY STORY ====================== -->
    <section class="section" aria-labelledby="story-heading">
      <div class="container">
        <div class="row g-5 align-items-center reveal">
          <div class="col-lg-6 abt-img">
            <img src="assets/images/andraos-about.jpg" alt="The Andraos Construction team on a Denver job site" class="ratio-4-5 img-treat obj-pos-top" style="height: 55vh;">
          </div>
          <div class="col-lg-6">
            <p class="eyebrow">Our Company</p>
            <h2 id="story-heading" class="ff-display display-lg mt-3">A Denver Commercial Contractor Since 1993</h2>
            <p class="lede mt-4">
              Andraos Construction is a family-owned commercial concrete, asphalt, and masonry contractor based
              in Denver, Colorado. For over three decades we have served property management companies, homeowner
              associations, general contractors, developers, and asset managers across the Colorado Front Range.
            </p>
            <p class="text-slate">
              We self-perform every scope of work &mdash; concrete flatwork, curb and gutter, ADA sidewalks,
              asphalt mill &amp; overlay, full-depth pavement replacement, masonry site work, and hydronic
              snow-melt installation. By holding our own crews, equipment, and project management in-house, we
              keep the schedule, the quality, and the warranty under one roof. Andraos Construction is fully
              licensed, bonded, and insured, and every engagement carries a one-year workmanship warranty.
            </p>
          </div>
        </div>

        <!-- Key stats -->
        <div class="row g-4 mt-4 pt-5 border-top divider-top reveal">
          <div class="col-md-3 col-6">
            <p class="stat-num m-0">32<span class="unit">yrs</span></p>
            <p class="stat-label">In business since 1993</p>
          </div>
          <div class="col-md-3 col-6">
            <p class="stat-num m-0">1<span class="unit">yr</span></p>
            <p class="stat-label">Workmanship warranty</p>
          </div>
          <div class="col-md-3 col-6">
            <p class="stat-num m-0">13<span class="unit">+</span></p>
            <p class="stat-label">Front Range service areas</p>
          </div>
          <div class="col-md-3 col-6">
            <p class="stat-num m-0">100<span class="unit">%</span></p>
            <p class="stat-label">Licensed, bonded &amp; insured</p>
          </div>
        </div>
      </div>
    </section>


<section class="section bg-warm" aria-labelledby="team-heading">
    <div class="container">
        <div class="row g-4 mb-5 reveal is-visible">
            <div class="col-lg-6">
                <p class="eyebrow">Team Bios</p>
                <h2 id="team-heading" class="ff-display display-lg mt-3">Meet the Team Behind the Work</h2>
            </div>
            <div class="col-lg-6 d-flex align-items-end">
                <p class="lede">
                    Andraos Construction is built on experienced people — the estimators, project managers,
                    and superintendents who own your project from the first site walk to the final punch.
                </p>
            </div>
        </div>
        <!-- Team cards injected by site.js -->
        <div class="row g-4 reveal is-visible" id="js-team-grid">
            <div class="col-md-6 col-lg-4">
                <figure class="team-card h-100 m-0">
                    <div class="team-card__monogram" aria-hidden="true"><img src="<?php echo e(asset('assets/images/teams/1.jpg')); ?>" style="width: inherit;"></div>
                    <figcaption class="team-card__body">
                        <h3 class="team-card__name">Project Manager</h3>
                        <!--<h3 class="team-card__name">Ray Andraos</h3>-->
                        <!--<p class="team-card__role">Founder &amp; President</p>-->
                        <p class="team-card__bio">Founded Andraos Construction in 1993 and still walks job sites. Three
                            decades of Front Range concrete, asphalt, and masonry experience.</p>
                    </figcaption>
                </figure>
            </div>
             <div class="col-md-6 col-lg-4">
                <figure class="team-card h-100 m-0">
                    <div class="team-card__monogram" aria-hidden="true"><img src="<?php echo e(asset('assets/images/teams/5.jpg')); ?>" style="width: inherit;"></div>
                    <figcaption class="team-card__body">
                        <h3 class="team-card__name">Project Manager</h3>
                        <!--<h3 class="team-card__name">Concrete Foreman</h3>-->
                        <!--<p class="team-card__role">Concrete Superintendent</p>-->
                        <p class="team-card__bio">Leads the self-performed concrete crews — flatwork, structural slabs,
                            and ADA-compliant work.</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6 col-lg-4">
                <figure class="team-card h-100 m-0">
                    <div class="team-card__monogram" aria-hidden="true"><img src="<?php echo e(asset('assets/images/teams/6.jpg')); ?>" style="width: inherit;"></div>
                    <figcaption class="team-card__body">
                        <h3 class="team-card__name">Project Manager</h3>
                        <!--<h3 class="team-card__name">Asphalt Foreman</h3>-->
                        <!--<p class="team-card__role">Asphalt Superintendent</p>-->
                        <p class="team-card__bio">Runs the paving division, from mill &amp; overlay to full-depth
                            reconstruction and maintenance programs.</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6 col-lg-4">
                <figure class="team-card h-100 m-0">
                    <div class="team-card__monogram" aria-hidden="true"><img src="<?php echo e(asset('assets/images/teams/2.jpg')); ?>" style="width: inherit;"></div>
                    <figcaption class="team-card__body">
                        <h3 class="team-card__name">Project Manager</h3>
                        <!--<h3 class="team-card__name">Rob Andraos</h3>-->
                        <!--<p class="team-card__role">Vice President of Operations</p>-->
                        <p class="team-card__bio">Oversees field operations and crew scheduling, keeping multi-phase
                            commercial programs on time and on spec.</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6 col-lg-4">
                <figure class="team-card h-100 m-0">
                    <div class="team-card__monogram" aria-hidden="true"><img src="<?php echo e(asset('assets/images/teams/3.jpg')); ?>" style="width: inherit;"></div>
                    <figcaption class="team-card__body">
                        <h3 class="team-card__name">Project Manager</h3>
                        <!--<p class="team-card__role">Senior Project Manager</p>-->
                        <p class="team-card__bio">Owns commercial engagements end to end — from the first site walk
                            through final punch and warranty.</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6 col-lg-4">
                <figure class="team-card h-100 m-0">
                    <div class="team-card__monogram" aria-hidden="true"><img src="<?php echo e(asset('assets/images/teams/4.jpg')); ?>" style="width: inherit;"></div>
                    <figcaption class="team-card__body">
                        <h3 class="team-card__name">Project Manager</h3>
                        <!--<h3 class="team-card__name">Estimating Lead</h3>-->
                        <!--<p class="team-card__role">Chief Estimator</p>-->
                        <p class="team-card__bio">Produces the detailed, line-item estimates that property managers and
                            GCs rely on for accurate budgeting.</p>
                    </figcaption>
                </figure>
            </div>
           
            
        </div>
    </div>
</section>

<!-- 
<!-- <section class="section bg-navy text-white" id="reviews">
    <div class="container">
        <div class="row g-5 reveal in">
            <div class="col-lg-5">
                <div class="eyebrow on-dark">Reviews</div>
                <h2 class="ff-display display-lg mt-3 text-white">In Their Words</h2>
            </div>
            <div class="col-lg-7">
                <p class="lede mb-4" style="color:var(--slate-300)">From the GCs and property firms we've worked with
                    for a decade or more.</p>
                <div id="revItems" class="d-none">
                    <div class="review-item">
                        <div class="ff-mono text-uppercase mb-3 title" style="font-size:11px;letter-spacing:.16em;color:var(--accent)">A decade of satisfaction</div>
                        <div class="pullquote quote">Throughout the years of working with them, I have been pleased with the high quality work, competitive pricing and guarantee of the finished product. I am pleased to recommend Andraos Construction without hesitation.</div>
                        <div class="fw-semibold name" style="color:#fff">Stephen Chavez</div>
                        <div class="ff-mono text-uppercase mt-1 role" style="font-size:11px;letter-spacing:.1em;color:var(--slate-400)">Vice President · Gart Properties</div>
                    </div>
                    <div class="review-item">
                        <div class="ff-mono text-uppercase mb-3 title" style="font-size:11px;letter-spacing:.16em;color:var(--accent)">Say what they mean</div>
                        <div class="pullquote quote">We have had a long-term relationship with both Ray and Rob for over seven years. Their cost is competitive, their work is great, and they are one of the few companies that say what they mean and mean what they say.</div>
                        <div class="fw-semibold name" style="color:#fff">Don McGinnis</div>
                        <div class="ff-mono text-uppercase mt-1 role" style="font-size:11px;letter-spacing:.1em;color:var(--slate-400)">President · Mc2 Enterprises Inc.</div>
                    </div>
                    <div class="review-item">
                        <div class="ff-mono text-uppercase mb-3 title" style="font-size:11px;letter-spacing:.16em;color:var(--accent)">Reliable</div>
                        <div class="pullquote quote">Andraos Construction has performed well as a trade partner. They are always responsive to our bidding requirements and can be relied upon to deliver a project in accordance with the agreed-upon schedule and scope.</div>
                        <div class="fw-semibold name" style="color:#fff">Jeff Chevalier</div>
                        <div class="ff-mono text-uppercase mt-1 role" style="font-size:11px;letter-spacing:.1em;color:var(--slate-400)">ASR Companies Inc.</div>
                    </div>
                    <div class="review-item">
                        <div class="ff-mono text-uppercase mb-3 title" style="font-size:11px;letter-spacing:.16em;color:var(--accent)">Timely, every time</div>
                        <div class="pullquote quote">We have used Andraos Construction as a sub-contractor for over ten years. They are very reliable, trustworthy, and have always completed their work in a timely fashion. I highly recommend them for any concrete project.</div>
                        <div class="fw-semibold name" style="color:#fff">Larry G. Potthoff</div>
                        <div class="ff-mono text-uppercase mt-1 role" style="font-size:11px;letter-spacing:.1em;color:var(--slate-400)">President · CQL-2000 Constructors</div>
                    </div>
                </div>
                <div class="ff-mono text-uppercase mb-3" style="font-size:11px;letter-spacing:.16em;color:var(--accent)"
                    id="revTitle">A decade of satisfaction</div>
                <p class="pullquote" id="revQuote">"Throughout the years of working with them, I have been pleased with
                    the high quality work, competitive pricing and guarantee of the finished product. I am pleased to
                    recommend Andraos Construction without hesitation."</p>
                <div class="d-flex justify-content-between align-items-center mt-4 pt-4 border-top"
                    style="border-color:rgba(255,255,255,.1)">
                    <div>
                        <div class="fw-semibold" id="revName" style="color:#fff">Stephen Chavez</div>
                        <div class="ff-mono text-uppercase mt-1" id="revRole"
                            style="font-size:11px;letter-spacing:.1em;color:var(--slate-400)">Vice President · Gart
                            Properties</div>
                    </div>
                    <div class="d-flex gap-2" id="revDots"><button data-i="0"
                            style="width: 28px; height: 2px; border: 0px; background: rgb(255, 255, 255);"></button><button
                            data-i="1"
                            style="width: 28px; height: 2px; border: 0px; background: rgba(255, 255, 255, 0.2);"></button><button
                            data-i="2"
                            style="width: 28px; height: 2px; border: 0px; background: rgba(255, 255, 255, 0.2);"></button><button
                            data-i="3"
                            style="width: 28px; height: 2px; border: 0px; background: rgba(255, 255, 255, 0.2);"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
 -->

<section class="section bg-navy text-white" aria-labelledby="why-heading">
    <div class="container">
        <div class="row g-5 align-items-center reveal is-visible">
            <div class="col-lg-6">
                <figure class="position-relative m-0">
                    <img src="assets/images/andraos-construction-hero-home-1920w.jpg"
                        alt="An Andraos Construction crew placing concrete on site" class="ratio-4-5 img-treat">
                    <figcaption class="position-absolute bottom-0 start-0 m-4 bg-white p-3 text-dark">
                        <span class="ff-display d-block lh-1 warranty-badge-num">1<span
                                class="text-accent warranty-badge-unit">yr</span></span>
                        <span class="ff-mono text-uppercase text-slate warranty-badge-label">Workmanship Warranty</span>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-6">
                <p class="eyebrow on-dark">Why Andraos</p>
                <h2 id="why-heading" class="ff-display display-lg mt-3 text-white">Built to Be Hired Twice.</h2>
                <p class="lede on-dark mt-4 pb-4">One PM. One crew. One warranty. One company, accountable from estimate to
                    final punch.</p>
                <!-- Why points injected by site.js -->
                <div class="mt-4" id="js-why-points">
                    <div class="row g-3 py-3 border-top divider-top">
                        <div class="col-2 num-eyebrow pt-1">01</div>
                        <div class="col-10">
                            <h3 class="ff-display text-white mb-1 fs-5">Single point of accountability</h3>
                            <p class="mb-4 text-white-50 small">One Andraos PM owns each job from walkthrough through
                                warranty. No handoffs, no scope drift.</p>
                        </div>
                    </div>
                    <div class="row g-3 py-3 border-top divider-top">
                        <div class="col-2 num-eyebrow pt-1">02</div>
                        <div class="col-10">
                            <h3 class="ff-display text-white mb-1 fs-5">All work self-performed</h3>
                            <p class="mb-4 text-white-50 small">Concrete, asphalt, and masonry crews are full-time
                                Andraos employees.</p>
                        </div>
                    </div>
                    <div class="row g-3 py-3 border-top divider-top">
                        <div class="col-2 num-eyebrow pt-1">03</div>
                        <div class="col-10">
                            <h3 class="ff-display text-white mb-1 fs-5">Engineered for Colorado</h3>
                            <p class="mb-4 text-white-50 small">Mix designs, cure schedules, and snow-melt calibrated
                                for Front Range freeze-thaw.</p>
                        </div>
                    </div>
                    <div class="row g-3 py-3 border-top divider-top">
                        <div class="col-2 num-eyebrow pt-1">04</div>
                        <div class="col-10">
                            <h3 class="ff-display text-white mb-1 fs-5">One-year workmanship warranty</h3>
                            <p class="mb-4 text-white-50 small">Every job delivered under written warranty. Fully
                                licensed, bonded, and insured.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Let's talk  -->

<section class="section bg-navy-deep text-white text-center" aria-labelledby="about-cta-heading">
      <div class="container reveal is-visible">
        <h2 id="about-cta-heading" class="ff-display display-xl text-white mx-auto maxw-20">Let’s talk about your project.</h2>
        <div class="d-flex gap-2 justify-content-center mt-4 flex-wrap">
          <a href="contact" class="btn btn-light-navy btn-arrow">Request a Quote</a>
          <a href="tel:+3039153703" class="btn btn-outline-light btn-arrow">(303)&nbsp;915-3703</a>
        </div>
      </div>
    </section>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-about');
});
</script>
<?php $__env->stopPush(); ?>



 

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\andraosconstruction\resources\views/pages/about.blade.php ENDPATH**/ ?>