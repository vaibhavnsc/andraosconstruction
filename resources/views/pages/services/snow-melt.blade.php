@extends('layouts.app')

@section('content')

<header class="page-hero">
    <div class="page-hero__bg" id="js-service-hero-bg" aria-hidden="true" data-bg="/assets/images/snowmelt/064-25f.jpeg"
        style="background-image: url(/assets/images/snowmelt/064-25f.jpeg);"></div>
    <div class="page-hero__scrim" aria-hidden="true"></div>
    <div class="container">
        <nav class="breadcrumb-mono mb-3" aria-label="Breadcrumb">
            <a href="/">Home</a> &nbsp;/&nbsp;
            <a href="/services">Services</a> &nbsp;/&nbsp;
            <span class="js-service-name">Snow Melt Systems</span>
        </nav>
        <h1 class="js-service-name">Snow Melt Systems</h1>
    </div>
</header>

<!-- ====================== CONTENT + SIDEBAR ====================== -->

<section class="section" aria-label="Service detail">
    <div class="container">
        <div class="row g-5">

            <!-- Main column -->
            <div class="col-lg-8">
                <article class="reveal is-visible">
                    <img id="js-service-image" alt="Snow Melt Systems" class="ratio-16-9 mb-4"
                        src="/assets/images/snowmelt/064-25f.jpeg">

                    <p class="eyebrow">Overview</p>
                    <h2 class="ff-display display-md mt-2 mb-3">
                        Eliminate the Hassle of Shoveling and Salting
                    </h2>
                    <p class="lede" id="js-service-overview">Discover the convenience and efficiency of hydronic snowmelt systems, the ideal solution for keeping driveways, walkways, stairs, and commercial spaces free of snow and ice. With over 30 years of specialized experience, Andraos Construction designs and installs custom-engineered snowmelt systems that are built to perform in the harshest winter conditions. Call us today to discuss your snow melting system options.</p>

                    <div class="d-flex flex-wrap gap-1 mt-3" id="js-service-tags"><span class="tag">Hydronic</span><span
                            class="tag">Entries</span><span class="tag">ADA ramps</span></div>

                    <h2 class="ff-display display-md mt-5 mb-3">Why Choose Our Hydronic Snow Melting Systems?</h2>
                    <p class="lede" id="js-service-overview">
                        <ul>
                            <li><b>Fully Automated:</b> Our systems use advanced snow sensors—either aerial or pavement-mounted—to detect precipitation and temperature changes. This ensures the system activates only when needed, conserving energy and reducing wear.</li>
                            <li><b>Energy Efficient:</b> The heated liquid circulating through the system retains warmth long after the boiler shuts off, delivering extended performance with minimal energy use.</li>
                            <li><b>Cost-Effective Operation:</b> Hydronic systems are ideal for large-scale snowmelt applications due to their lower operating costs compared to electric systems. Choose from natural gas, propane, electricity, or oil—whichever is most affordable in your area. (Natural gas is highly recommended.)</li>
                            <li><b>Safe and Reliable:</b> Our systems are fully grounded and certified by Intertek SEMKO, meeting IEC / EN 60335, UL, and GOST standards for safety and reliability.</li>
                            <li><b>Smart Zone Synchronization:</b> Each tekmarNet Thermostat communicates with others to synchronize start times, improving boiler efficiency and reducing cycling.</li>
                            <li><b>Zone Post Purge:</b> After each heating cycle, zones remain active while the boiler shuts off, pushing residual heat into the pavement where it’s needed most.</li>
                            <li><b>Automatic Boiler Differential:</b> The system automatically adjusts to changing conditions, ensuring longer run times and reduced boiler short cycling.</li>
                        </ul>
                    </p>

                    <h2 class="ff-display display-md mt-5 mb-3">Our Commitment to You</h2>
                    <p class="lede" id="js-service-overview">In areas where natural gas isn’t available, our electric hydronic snowmelt systems offer a powerful, sustainable alternative. These systems use electric boilers to deliver consistent, maintenance-free heating—ideal for both residential and commercial applications.</p>
                    <h2 class="ff-display display-md mt-5 mb-3">Built for Colorado Winters</h2>
                    <p class="lede" id="js-service-overview">Whether you're upgrading a commercial property or enhancing your home, our snowmelt systems are engineered to improve safety, boost property value, and perform reliably through Colorado’s toughest winters.</p>
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
                    <p class="lede" id="js-service-overview"><a href="/contact">Contact us now</a> to experience the difference our expertise can make for your asphalt needs.</p>



                    <!-- What's included -->
                    <h2 class="ff-display display-md mt-5 mb-4">What’s Included</h2>
                    <ul class="included-list row row-cols-1 row-cols-md-2 g-0" id="js-service-included">
                        <li>Hydronic system design</li>
                        <li>In-slab tubing installation</li>
                        <li>Entry &amp; walkway zones</li>
                        <li>ADA ramp protection</li>
                        <li>Drive court &amp; loading areas</li>
                        <li>Boiler &amp; manifold coordination</li>
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
                                aria-hidden="true">→</span></a><a class="service-nav-link"
                            href="/services/masonry">Commercial Masonry<span
                                aria-hidden="true">→</span></a><a class="service-nav-link active"
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
                    <a href="/contact" class="btn btn-light-navy btn-arrow w-100">Request a Quote</a>
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
            Let’s talk about your Snow<span class="js-service-name">Melt Systems.</span>.
        </h2>
        <div class="d-flex gap-2 justify-content-center mt-4 flex-wrap">
            <a href="/contact" class="btn btn-light-navy btn-arrow">Request a Quote</a>
            <a href="tel:+3039153703" class="btn btn-outline-light btn-arrow">(303)&nbsp;915-3703</a>
        </div>
    </div>
</section>
@endsection