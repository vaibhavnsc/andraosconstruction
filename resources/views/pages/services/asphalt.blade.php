@extends('layouts.app')

@php
    $seo = getPageSeoByKey('asphalt');

    $title = $seo->meta_title ?? 'Asphalt Services | Andraos Construction | Denver, CO Area';

    $description = $seo->meta_description
        ?? 'Get expert asphalt services with detailed estimates. Learn more! Serving the Denver, CO Metro Area.';
@endphp 

@section('meta_title', $title)
@section('meta_description', $description)



@section('content')

<header class="page-hero">
    <div class="page-hero__bg" id="js-service-hero-bg" aria-hidden="true" data-bg="/assets/images/sloan.jpg"
        style="background-image: url(/assets/images/sloan.jpg;);"></div>
    <div class="page-hero__scrim" aria-hidden="true"></div>
    <div class="container">
        <nav class="breadcrumb-mono mb-3" aria-label="Breadcrumb">
            <a href="/">Home</a> &nbsp;/&nbsp;
            <a href="/services">Services</a> &nbsp;/&nbsp;
            <span class="js-service-name">Asphalt Paving &amp; Repair</span>
        </nav>
        <h1 class="js-service-name">Asphalt Paving &amp; Repair</h1>
    </div>
</header>


<!-- ====================== CONTENT + SIDEBAR ====================== -->

<section class="section" aria-label="Service detail">
    <div class="container">
        <div class="row g-5">

            <!-- Main column -->
            <div class="col-lg-8">
                <article class="reveal is-visible">
                    <img id="js-service-image" alt="Asphalt Paving &amp; Repair" class="ratio-16-9 mb-4"
                        src="/assets/images/asphalt/168-25.jpg">

                    <p class="eyebrow">Overview</p>
                    <h2 class="ff-display display-md mt-2 mb-3">
                        Exceptional Asphalt Services by Andraos Construction
                    </h2>
                    <p class="lede" id="js-service-overview">Looking for reliable asphalt services in the Denver Metro area? Andraos Construction, your trusted asphalt contractor, offers a comprehensive range of asphalt solutions tailored to meet your specific needs. Our expertise spans over four decades, ensuring your project is handled with precision and care. We pride ourselves on delivering high-quality results that stand the test of time.</p>
                    <p class="lede" id="js-service-overview">Whether it's a residential driveway or a commercial parking lot, our team is equipped to handle it all. Our asphalt services include:</p>
                    <p class="lede" id="js-service-overview">
                        <ul>
                            <li>Removal and replacement</li>
                            <li>Mill and overlay</li>
                            <li>Sealcoating</li>
                            <li>Crack sealing</li>
                            <li>Infrared solutions</li>
                            <li>Striping and signage</li>
                        </ul>
                    </p>
                    <p class="lede" id="js-service-overview"><a href="/contact">Call us today</a> to discuss your asphalt project and get started on a solution that fits your needs.</p>
                    <div class="d-flex flex-wrap gap-1 mt-3" id="js-service-tags"><span class="tag">Mill &amp;
                            overlay</span><span class="tag">Sealcoat</span><span class="tag">Striping</span></div>

                    <h2 class="ff-display display-md mt-5 mb-3">Professional Asphalt Surfaces Done Right</h2>
                    <p class="lede" id="js-service-overview">Asphalt services are essential for maintaining the integrity and appearance of your surfaces. Andraos Construction provides expert services that ensure your asphalt remains durable and functional. Here's why you might need our services:</p>
                    <p class="lede" id="js-service-overview">
                        <ul>
                            <li>Improve safety with crack sealing</li>
                            <li>Enhance appearance with seal coating</li>
                            <li>Extend the life of your asphalt with mill and overlay</li>
                            <li>Ensure proper drainage with removal and replacement</li>
                            <li>Maintain clear markings with striping and signage</li>
                            <li>Quick repairs with infrared technology</li>
                        </ul>
                    </p>
                    <p class="lede" id="js-service-overview"><a href="/contact">Reach out to us </a>to find the right asphalt service for your needs.</p>
                    <h2 class="ff-display display-md mt-5 mb-3">Our Commitment to You</h2>
                    <p class="lede" id="js-service-overview">Choosing Andraos Construction means choosing excellence. We are dedicated to providing services that not only meet but exceed your expectations. Here’s what sets us apart:</p>
                    <p class="lede" id="js-service-overview">
                        <ul>
                            <li>Great communication throughout the project</li>
                            <li>Timely estimates to keep your project on track</li>
                            <li>Fully licensed and insured for your peace of mind</li>
                            <li>Over 40 years of industry experience</li>
                            <li>Locally owned, serving the Denver Metro area</li>
                            <li>100% customer satisfaction guarantee</li>
                            <li>1-year warranty on all services</li>
                            <li>Competitive pricing to fit your budget</li>
                        </ul>
                    </p>
                    <p class="lede" id="js-service-overview"><a href="/contact">Contact us now</a>  to experience the difference our expertise can make for your asphalt needs.</p>





                    <!-- What's included -->
                    <h2 class="ff-display display-md mt-5 mb-4">What’s Included</h2>
                    <ul class="included-list row row-cols-1 row-cols-md-2 g-0" id="js-service-included">
                        <li>Asphalt mill &amp; overlay</li>
                        <li>Full-depth removal &amp; replacement</li>
                        <li>Crackfilling &amp; sealcoating</li>
                        <li>Pothole &amp; patch repair</li>
                        <li>Striping &amp; pavement marking</li>
                        <li>Parking lot maintenance programs</li>
                    </ul>

                    <!-- CTA inline -->
                    <div class="d-flex gap-2 mt-5 flex-wrap">
                        <a href="contact.html" class="btn btn-navy btn-arrow">Request a Quote</a>
                        <a href="tel:+3039153703" class="btn btn-outline-navy">Call (303) 915-3703</a>
                    </div>
                </article>
            </div>

            <!-- Sidebar -->
            <aside class="col-lg-4" aria-label="Service navigation">
                <div class="sidebar-card">
                    <h2 class="sidebar-card__title">All Services</h2>
                    <nav id="js-service-nav"><a class="service-nav-link"
                            href="/services/commercial-concrete">Commercial Concrete<span
                                aria-hidden="true">→</span></a><a class="service-nav-link active"
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
                    <a href="contact.html" class="btn btn-light-navy btn-arrow w-100">Request a Quote</a>
                </div>
            </aside>

        </div>
    </div>
</section>


<section class="section bg-warm section--tight" aria-labelledby="process-heading">
    <div class="container">
        <p class="eyebrow mb-2">How We Work</p>
        <h2 id="process-heading" class="ff-display display-md mb-4">From Site Walk to Warranty</h2>
        <div class="row g-3" id="js-service-process">
            <div class="col-md-6 col-lg-4">
                <div class="process-step h-100"><span class="num-eyebrow d-block mb-2">01</span>
                    <h3 class="ff-display fs-5 mb-2">Site Walk &amp; Assessment</h3>
                    <p class="text-slate small mb-0">We meet on site, review the scope, and document existing conditions
                        — no guesswork from a desk.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="process-step h-100"><span class="num-eyebrow d-block mb-2">02</span>
                    <h3 class="ff-display fs-5 mb-2">Detailed Estimate</h3>
                    <p class="text-slate small mb-0">A clear, line-item estimate in 3–5 business days, with scope,
                        schedule, and assumptions spelled out.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="process-step h-100"><span class="num-eyebrow d-block mb-2">03</span>
                    <h3 class="ff-display fs-5 mb-2">Scheduling &amp; Mobilization</h3>
                    <p class="text-slate small mb-0">We sequence the work around tenants, residents, and traffic, then
                        mobilize our own crews and equipment.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="process-step h-100"><span class="num-eyebrow d-block mb-2">04</span>
                    <h3 class="ff-display fs-5 mb-2">Self-Performed Execution</h3>
                    <p class="text-slate small mb-0">Andraos crews perform the work — concrete, asphalt, and masonry —
                        under one accountable project manager.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="process-step h-100"><span class="num-eyebrow d-block mb-2">05</span>
                    <h3 class="ff-display fs-5 mb-2">Punch &amp; Warranty</h3>
                    <p class="text-slate small mb-0">We walk the finished work with you and stand behind it with a
                        written one-year workmanship warranty.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="section bg-navy-deep text-white text-center" aria-labelledby="svc-single-cta">
    <div class="container reveal is-visible">
        <h2 id="svc-single-cta" class="ff-display display-xl text-white mx-auto maxw-20">
            Let’s talk about your <span class="js-service-name">Asphalt Paving & Repair.</span>.
        </h2>
        <div class="d-flex gap-2 justify-content-center mt-4 flex-wrap">
            <a href="/contact" class="btn btn-light-navy btn-arrow">Request a Quote</a>
            <a href="tel:+3039153703" class="btn btn-outline-light btn-arrow">(303)&nbsp;915-3703</a>
        </div>
    </div>
</section>
@endsection