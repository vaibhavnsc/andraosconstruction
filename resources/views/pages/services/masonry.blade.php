@extends('layouts.app')

@php
    $seo = getPageSeoByKey('masonry');

    $title = $seo->meta_title ?? 'Masonry Services | Andraos Construction | Denver, CO Area';

    $description = $seo->meta_description
        ?? 'Get expert masonry services with detailed estimates. Learn more! Serving the Denver, CO Metro Area.';
@endphp 

@section('meta_title', $title)
@section('meta_description', $description)


@section('content')

<header class="page-hero">
    <div class="page-hero__bg" id="js-service-hero-bg" aria-hidden="true" data-bg="/assets/images/masonry.jpg"
        style="background-image: url(/assets/images/masonry.jpg;);"></div>
    <div class="page-hero__scrim" aria-hidden="true"></div>
    <div class="container">
        <nav class="breadcrumb-mono mb-3" aria-label="Breadcrumb">
            <a href="/">Home</a> &nbsp;/&nbsp;
            <a href="/services">Services</a> &nbsp;/&nbsp;
            <span class="js-service-name">Commercial Masonry</span>
        </nav>
        <h1 class="js-service-name">Commercial Masonry</h1>
    </div>
</header>

<!-- ====================== CONTENT + SIDEBAR ====================== -->

<section class="section" aria-label="Service detail">
    <div class="container">
        <div class="row g-5">

            <!-- Main column -->
            <div class="col-lg-8">
                <article class="reveal is-visible">
                    <img id="js-service-image" alt="Commercial Masonry" class="ratio-16-9 mb-4"
                        src="/assets/images/masonry/IMG_1450.jpg">

                    <p class="eyebrow">Overview</p>
                    <h2 class="ff-display display-md mt-2 mb-3">
                       Comprehensive Masonry Services by Andraos Construction
                    </h2>
                    <p class="lede" id="js-service-overview">Andraos Construction offers expert masonry services that cater to a wide range of needs in the Denver Metro area. Our team brings extensive experience and a commitment to quality, ensuring that your project is completed to the highest standards. Whether you're looking to enhance your home's exterior or add functional elements to your landscape, we provide a variety of masonry solutions to meet your specific requirements.</p>
                    <p class="lede" id="js-service-overview">Our masonry services include:
                        <ul>
                            <li>Stone</li>
                            <li>Brick</li>
                            <li>Blocks</li>
                            <li>Pavers</li>
                            <li>Sign</li>
                            <li>Frenchings</li>
                            <li>Planters</li>
                            <li>Retaining walls</li>
                            <li>Trash enclosures</li>
                            <li>Stucco</li>
                            <li>Columns</li>
                        </ul>
                    </p>
                    <p class="lede" id="js-service-overview"><a href="/contact">Call us today</a> to discuss your masonry project and discover how we can help you achieve your vision.</p>


                    <div class="d-flex flex-wrap gap-1 mt-3" id="js-service-tags"><span
                            class="tag">Sandstone</span><span class="tag">Brick</span><span class="tag">Retaining
                            walls</span></div>

                    <h2 class="ff-display display-md mt-5 mb-3">Why You Need Our Masonry Services</h2>
                    <p class="lede" id="js-service-overview">Investing in professional masonry services can significantly enhance the aesthetic and functional aspects of your property. At Andraos Construction, we understand the importance of using high-quality materials and skilled craftsmanship to deliver results that stand the test of time.</p>
                    <p class="lede" id="js-service-overview">
                        <ul>
                            <li>Enhance curb appeal with elegant stone and brick work</li>
                            <li>Increase property value through durable and attractive masonry features</li>
                            <li>Create functional outdoor spaces with retaining walls and planters</li>
                            <li>Ensure structural integrity with expertly constructed columns and enclosures</li>
                            <li>Personalize your property with custom signs and Frenchings</li>
                        </ul>
                    </p>
                    <p class="lede" id="js-service-overview"><a href="/contact">Reach out to us</a> to learn more about how our masonry services can benefit your property.</p>
                    <h2 class="ff-display display-md mt-5 mb-3">Benefits of Choosing Andraos Construction</h2>
                    <p class="lede" id="js-service-overview">Our commitment to excellence and customer satisfaction sets us apart in the industry. When you choose Andraos Construction, you can expect a seamless experience from start to finish.</p>
                    <p class="lede" id="js-service-overview">
                        <ul>
                            <li>Clear and consistent communication throughout your project</li>
                            <li>Timely estimates to help you plan your budget effectively</li>
                            <li>Fully licensed and insured for your peace of mind</li>
                            <li>Over 40 years of industry experience ensuring top-tier craftsmanship</li>
                            <li>Locally owned and operated, providing personalized service</li>
                            <li>100% customer satisfaction guarantee for all projects</li>
                            <li>1-year warranty on all masonry work</li>
                            <li>Competitive pricing without compromising quality</li>
                        </ul>
                    </p>
                    <p class="lede" id="js-service-overview"><a href="/contact">Contact us today</a> to experience the benefits of working with a trusted masonry contractor.</p>


                    <!-- What's included -->
                    <h2 class="ff-display display-md mt-5 mb-4">What’s Included</h2>
                    <ul class="included-list row row-cols-1 row-cols-md-2 g-0" id="js-service-included">
                        <li>Architectural stone &amp; sandstone</li>
                        <li>Brick veneer &amp; restoration</li>
                        <li>Structural CMU site work</li>
                        <li>Retaining &amp; screen walls</li>
                        <li>Seat-walls &amp; planters</li>
                        <li>Tuckpointing &amp; repair</li>
                    </ul>

                    <!-- CTA inline -->
                    <div class="d-flex gap-2 mt-5 flex-wrap">
                        <a href="contact" class="btn btn-navy btn-arrow">Request a Quote</a>
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
                                aria-hidden="true">→</span></a><a class="service-nav-link"
                            href="/services/asphalt">Asphalt Paving &amp; Repair<span
                                aria-hidden="true">→</span></a><a class="service-nav-link active"
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
            Let’s talk about your <span class="js-service-name">Commercial Masonry</span>.
        </h2>
        <div class="d-flex gap-2 justify-content-center mt-4 flex-wrap">
            <a href="/contact" class="btn btn-light-navy btn-arrow">Request a Quote</a>
            <a href="tel:+3039153703" class="btn btn-outline-light btn-arrow">(303)&nbsp;915-3703</a>
        </div>
    </div>
</section>
@endsection