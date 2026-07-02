@extends('layouts.app')

@php
    $seo = getPageSeoByKey('home');
    $title = $seo->meta_title ?? 'Concrete Flatwork Contractors Denver | Andraos Construction';
    $description = $seo->meta_description ?? 'Looking for concrete flatwork contractors in Denver, CO? Andraos Construction offers expert concrete and asphalt services. Call or text us to learn more!';
@endphp

@section('meta_title', $title)
@section('meta_description', $description)

@section('content')
    
<!-- ════ HERO ════ -->
<section class="hero" id="home">
  <div id="heroSlides2" style="position:absolute; inset:0; overflow:hidden; z-index:0;">
    <video
        autoplay
        muted
        loop
        playsinline
        style="width:100%; height:100%; object-fit:cover;"
    >
        <source src="{{ asset('/assets/images/banner.mp4') }}" type="video/mp4">
    </video>
</div>
  <div class="hero-scrim"></div>
  <div class="container hero-inner">
    <a href="#reviews"><div class="hero-rating">
      <div class="stars">★★★★★</div>
      <div><div class="ff-display fw-semibold fs-5 lh-1" style="color: #fff;">5.0</div><div class="ff-mono text-uppercase" style="font-size:9px;letter-spacing:.16em;color:rgba(255,255,255,.65)">Industry-rated reviews</div></div>
    </div></a>
    <h1>Trusted Commercial &amp; Residential Concrete Contractor</h1>
    <div class="d-flex gap-2 mt-4 flex-wrap">
      <a href="/contact" class="btn btn-light-navy btn-arrow">Request a Quote</a>
      <a href="tel:+3039153703" class="btn btn-outline-light btn-arrow">(303) 915-3703</a>
    </div>
  </div>
  <div class="hero-foot">
    <div class="container">
      <div class="row g-4 align-items-end">
        <div class="col-lg-4">
          <div class="d-flex align-items-center gap-3">
            <div class="hero-tag-line"></div>
            <div>
              <div class="ff-mono text-uppercase mb-2" style="font-size:16px;letter-spacing:.18em;color:rgba(255,255,255,.75)">Serving the Front Range for Over 30 Years</div>
              <div class="ff-display text-white" style="font-size:24px;letter-spacing:-0.01em">Concrete &nbsp;·&nbsp; Asphalt &nbsp;·&nbsp; Masonry</div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row g-2">
            <div class="col-md-4"><a href="/services#commercial-concrete" class="hero-quick"><img src="{{ asset('/assets/images/commercial.jpeg') }}" alt="Services"><div><div class="ql">Concrete</div><div class="qm">Flatwork · ADA · Curb &amp; gutter</div></div></a></div>
            <div class="col-md-4"><a href="/services#asphalt" class="hero-quick"><img src="{{ asset('assets/images/asphalt.jpg') }}" alt="Services"><div><div class="ql">Asphalt</div><div class="qm">Mill &amp; overlay · Sealcoat</div></div></a></div>
            <div class="col-md-4"><a href="/services#masonry" class="hero-quick"><img src="{{ asset('assets/images/masonary.jpg') }}" alt="Services"><div><div class="ql">Masonry</div><div class="qm">Stone · Brick · Walls</div></div></a></div>
          </div>
        </div>
      </div>
    </div>  
  </div>
</section>

    
<section class="section--tight border-bottom" aria-labelledby="brands-heading">
    <div class="container">
        <div class="text-center mb-5 reveal is-visible">
            <p class="eyebrow">Trusted By</p>
            <h2 id="brands-heading" class="ff-display display-lg mt-3">Companies We’ve Worked With</h2>
            <p class="lede mx-auto maxw-58 mt-3">
                For over 30 years, property managers, developers, and general contractors across the Front Range
                have trusted Andraos Construction with their commercial concrete, asphalt, and masonry.
            </p>
        </div>
        <!-- Brand tiles injected by site.js -->
        <div class="row g-3 reveal is-visible" id="js-brand-grid">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-tile"><span class="brand-wordmark">Gart Properties</span></div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-tile"><span class="brand-wordmark">Marriott</span></div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-tile"><span class="brand-wordmark">Mc2 Enterprises</span></div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-tile"><span class="brand-wordmark">ASR Companies</span></div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-tile"><span class="brand-wordmark">CQL-2000 Constructors</span></div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-tile"><span class="brand-wordmark">Whole Foods Market</span></div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-tile"><span class="brand-wordmark">Chase</span></div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-tile"><span class="brand-wordmark">McGuckin Hardware</span></div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-tile"><span class="brand-wordmark">Sal's Carpentry</span></div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-tile"><span class="brand-wordmark">Rocky Mountain Kids</span></div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-tile"><span class="brand-wordmark">Shea Properties</span></div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-tile"><span class="brand-wordmark">Alterra</span></div>
            </div>
        </div>
    </div>
</section>


 <!-- 
Google Reviews -->
        
    <div class="Google reviews">
        <div class="eyebrow on-dark text-center mt-5">Reviews</div>
        <h2 class="ff-display display-lg mt-3 mb-4 text-black text-center">In Their Words</h2>
        <!-- Elfsight Google Reviews | Untitled Google Reviews -->
        <script src="https://elfsightcdn.com/platform.js" async></script>
        <div class="elfsight-app-db0f5b6a-6e3e-47d4-a4f6-009ef91c06ea" data-elfsight-app-lazy></div>
    </div>

    <!-- 
<aside class="py-4 border-bottom" aria-label="Selected clients">
    <div class="container d-flex flex-wrap justify-content-between align-items-center gap-3">
        <p class="eyebrow m-0">A selection of clients we&rsquo;ve delivered for &middot; 1993&ndash;2026</p>
        <ul class="list-unstyled d-flex flex-wrap gap-4 m-0 ff-display fw-semibold text-slate">
            <li>Gart Properties</li>
            <li>Marriott</li>
            <li>Mc2 Enterprises</li>
            <li>ASR Companies</li>
            <li>CQL-2000</li>
        </ul>
    </div>
</aside>
 -->
    
<!-- ABOUT TEASER -->
    
    <section class="section" aria-labelledby="about-heading">
      <div class="container">
        <div class="row g-5 align-items-center reveal">
          <div class="col-lg-6">
            <figure class="position-relative m-0 and-abt">
              <img src="{{ asset('assets/images/home-about.jpg') }}" class="ratio-4-5 img-treat obj-pos-top" style="object-fit:fill; aspect-ratio: 5 / 4.7;"/>
              <figcaption class="position-absolute bottom-0 start-0 end-0 p-4 text-white about-caption">
                <span class="ff-display fw-medium fs-5 d-block">The Andraos Construction Team</span>
                <span class="ff-mono text-uppercase text-white-50">Denver, Colorado &middot; Family-owned since 1993</span>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-6">
            <p class="eyebrow">About Andraos Construction</p>
            <h2 id="about-heading" class="ff-display display-lg mt-3">
              Trusted Commercial Concrete Contractor in Denver and the Colorado Front Range
            </h2>
            <p class="lede mt-4">
              Established in 1993, Andraos Construction is a Denver-based commercial concrete, asphalt, and
              masonry contractor serving property managers, HOAs, general contractors, and developers across
              the Front Range. We self-perform every scope. Fully licensed, bonded, and insured.
            </p>
            <div class="row g-4 mt-3 pt-4 border-top divider-top">
              <div class="col-4">
                <p class="stat-num m-0">32<span class="unit">yrs</span></p>
                <p class="stat-label">In business</p>
              </div>
              <div class="col-4">
                <p class="stat-num m-0">1<span class="unit">yr</span></p>
                <p class="stat-label">Warranty</p>
              </div>
              <div class="col-4">
                <p class="stat-num m-0">100<span class="unit">%</span></p>
                <p class="stat-label">Licensed</p>
              </div>
            </div>
            <a href="/about" class="btn btn-outline-navy btn-arrow mt-4">More About Us</a>
          </div>
        </div>
      </div>
    </section>

    
<section class="section bg-navy text-white" id="services">
    <div class="container">
        <div class="row g-5 mb-5 reveal in">
            <div class="col-lg-6">
                <div class="eyebrow on-dark">Services</div>
                <h2 class="ff-display display-lg mt-3 text-white">Concrete. Asphalt. Masonry. Snow Melt.</h2>
            </div>
            <div class="col-lg-6 d-flex align-items-end">
                <p class="lede" style="color:var(--slate-300)">Self-performed by Andraos crews from estimate to punch
                    list.</p>
            </div>
        </div>
        <div class="row g-4" id="svcGrid">
            <div class="col-lg-4 col-md-6">
                <a href="./services/commercial-concrete" class="svc-card d-block text-decoration-none">
                    <div class="svc-card" id="commercial-concrete"><img
                            src="{{ asset('assets/images/commercial.jpeg') }}" alt="Commercial Concrete">
                        <div class="num-eyebrow mt-3">01 / 05</div>
                        <h3 class="text-white">Commercial Concrete</h3>
                        <p style="color:var(--slate-300);font-size:14px;line-height:1.6">Flatwork, curb &amp; gutter,
                            drain pans, dock
                            ramps, ADA sidewalks, and structural slabs for commercial properties.</p>
                        <div class="d-flex flex-wrap gap-1"><span class="tag">Flatwork</span><span class="tag">Curb
                                &amp;
                                gutter</span><span class="tag">ADA</span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="./services/hoa-property-management" class="svc-card d-block text-decoration-none">
                    <div class="svc-card" id="hoa-property-management"><img src="{{ asset('assets/images/residential/IMG_0079.jpeg') }}"
                            alt="HOA &amp; Property Management">
                        <div class="num-eyebrow mt-3">02 / 05</div>
                        <h3 class="text-white">HOA &amp; Residential Concrete</h3>
                        <p style="color:var(--slate-300);font-size:14px;line-height:1.6">Community-wide capital renewal:
                            sidewalks,
                            drive lanes, curb &amp; gutter, parking lots, and asphalt maintenance.</p>
                        <div class="d-flex flex-wrap gap-1"><span class="tag">Capital renewal</span><span
                                class="tag">Sidewalks</span><span class="tag">Repair</span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="./services/asphalt" class="svc-card d-block text-decoration-none">
                    <div class="svc-card" id="asphalt"><img src="{{ asset('assets/images/asphalt/168-25.jpg') }}"
                            alt="Asphalt Paving &amp; Repair">
                        <div class="num-eyebrow mt-3">03 / 05</div>
                        <h3 class="text-white">Asphalt Paving &amp; Repair</h3>
                        <p style="color:var(--slate-300);font-size:14px;line-height:1.6">Mill &amp; overlay, full-depth
                            removal &amp;
                            replacement, crackfilling, sealcoating, and striping for parking lots.</p>
                        <div class="d-flex flex-wrap gap-1"><span class="tag">Mill &amp; overlay</span><span
                                class="tag">Sealcoat</span><span class="tag">Striping</span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="./services/masonry" class="svc-card d-block text-decoration-none">
                    <div class="svc-card" id="masonry"><img src="{{ asset('assets/images/masonry/IMG_1450.jpg') }}"
                            alt="Commercial Masonry">
                        <div class="num-eyebrow mt-3">04 / 05</div>
                        <h3 class="text-white">Commercial Masonry</h3>
                        <p style="color:var(--slate-300);font-size:14px;line-height:1.6">Architectural stone walls,
                            sandstone
                            seat-walls, brick veneer, retaining walls, and structural CMU site work.</p>
                        <div class="d-flex flex-wrap gap-1"><span class="tag">Sandstone</span><span
                                class="tag">Brick</span><span class="tag">Retaining walls</span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="./services/snow-melt" class="svc-card d-block text-decoration-none">
                    <div class="svc-card" id="snow-melt"><img src="{{ asset('assets/images/snowmelt/064-25f.jpeg') }}"
                            alt="Snow Melt Systems">
                        <div class="num-eyebrow mt-3">05 / 05</div>
                        <h3 class="text-white">Snow Melt Systems</h3>
                        <p style="color:var(--slate-300);font-size:14px;line-height:1.6">Hydronic snow-melt for entries,
                            ADA ramps,
                            drive courts, and walkways — embedded during the original pour.</p>
                        <div class="d-flex flex-wrap gap-1"><span class="tag">Hydronic</span><span
                                class="tag">Entries</span><span class="tag">ADA ramps</span></div>
                    </div>
                </a>
            </div>
            
            <!-- <div class="col-lg-4 col-md-6">
                <a href="./services#concrete-finishes" class="svc-card d-block text-decoration-none">
                    <div class="svc-card" id="concrete-finishes"><img src="{{ asset('assets/images/finish.jpg') }}"
                            alt="Concrete Finishes">
                        <div class="num-eyebrow mt-3">06 / 06</div>
                        <h3 class="text-white">Concrete Finishes</h3>
                        <p style="color:var(--slate-300);font-size:14px;line-height:1.6">Broom, exposed aggregate,
                            stamped, and
                            integral color finishes for entrances, plazas, and feature flatwork.</p>
                        <div class="d-flex flex-wrap gap-1"><span class="tag">Broom</span><span
                                class="tag">Stamped</span><span class="tag">Exposed</span></div>
                    </div>
                </a>
            </div> -->
        </div>
        <div class="text-center mt-5">
            <a href="{{ route('services') }}" class="btn btn-light-navy btn-arrow">View All Services</a>
        </div>
    </div>
</section>

 
    
<section class="section bg-navy text-white pt-0" aria-labelledby="gallery-heading">
    <div class="container">
        <div class="row g-5 mb-5 reveal is-visible">
            <div class="col-lg-6">
                <p class="eyebrow on-dark">Project Gallery</p> 
                <h2 id="gallery-heading" class="ff-display display-lg mt-3 text-white">Recent Projects</h2>
            </div>
            <div class="col-lg-6 d-flex align-items-end">
                <p class="lede on-dark">A short list of recent commercial work across the Front Range.</p>
            </div>
        </div>
        <!-- Limit to 4 items on the home page -->
        <div class="row g-3" id="projGrid" data-limit="4">
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/andraos-construction37.jpg') }}"
                        alt="Shadow Canyon HOA — Community renewal · Front Range">
                    <figcaption class="ov"><span class="cat">hoa</span><span class="nm">Shadow
                            Canyon HOA</span><span class="small text-white-50">Community renewal · Front Range</span>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/andraos-construction1.jpg') }}"
                        alt="Marriott Boulder — Drive court · Boulder">
                    <figcaption class="ov"><span class="cat">hospitality</span><span
                            class="proj__name">Marriott Boulder</span><span class="small text-white-50">Drive court ·
                            Boulder</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/andraos-construction2.jpg') }}"
                        alt="Boulder Village Plaza — Streetscape masonry">
                    <figcaption class="ov"><span class="cat">retail</span><span
                            class="proj__name">Boulder Village Plaza</span><span class="small text-white-50">Streetscape
                            masonry</span></figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6">
                <figure class="proj m-0"><img src="{{ asset('assets/images/andraos-construction8.jpg') }}"
                        alt="Rocky Mountain Kids — Boulder · Sandstone">
                    <figcaption class="ov"><span class="cat">retail</span><span
                            class="proj__name">Rocky Mountain Kids</span><span class="small text-white-50">Boulder ·
                            Sandstone</span></figcaption>
                </figure>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="gallery" class="btn btn-light-navy btn-arrow">View Full Gallery</a>
        </div>
    </div>
</section>

    
<!-- SERVICE AREAS  -->

    <section class="section" aria-labelledby="areas-heading">
      <div class="container">
        <div class="row g-5 mb-5 reveal">
          <div class="col-lg-6">
            <p class="eyebrow">Service Areas</p>
            <h2 id="areas-heading" class="ff-display display-lg mt-3">Front Range Service Area</h2>
          </div>
          <div class="col-lg-6 d-flex align-items-end">
            <p class="lede">Denver to Longmont, Boulder to Castle Rock. Each city has its own dedicated service page.</p>
          </div>
        </div>
        <!-- Area cards injected by site.js (limited to 6) -->
         <div class="row g-3" id="js-area-grid" data-limit="6">
          <div class="col-lg-4 col-md-6"><a href="/service-areas/denver" class="area-card"><span><span
                  class="area-card__name d-block">Denver</span><span class="area-card__meta">HQ · Metro
                  Core</span></span><span class="area-card__arrow" aria-hidden="true">→</span></a></div>
          <div class="col-lg-4 col-md-6"><a href="/service-areas/aurora" class="area-card"><span><span
                  class="area-card__name d-block">Aurora</span><span class="area-card__meta">East
                  Metro</span></span><span class="area-card__arrow" aria-hidden="true">→</span></a></div>
          <div class="col-lg-4 col-md-6"><a href="/service-areas/littleton" class="area-card"><span><span
                  class="area-card__name d-block">Littleton</span><span class="area-card__meta">South
                  Metro</span></span><span class="area-card__arrow" aria-hidden="true">→</span></a></div>
          <div class="col-lg-4 col-md-6"><a href="/service-areas/highlands-ranch" class="area-card"><span><span
                  class="area-card__name d-block">Highlands Ranch</span><span class="area-card__meta">Douglas
                  County</span></span><span class="area-card__arrow" aria-hidden="true">→</span></a></div>
          <div class="col-lg-4 col-md-6"><a href="/service-areas/castle-rock" class="area-card"><span><span
                  class="area-card__name d-block">Castle Rock</span><span class="area-card__meta">Douglas
                  County</span></span><span class="area-card__arrow" aria-hidden="true">→</span></a></div>
          <div class="col-lg-4 col-md-6"><a href="/service-areas/parker" class="area-card"><span><span
                  class="area-card__name d-block">Parker</span><span class="area-card__meta">Douglas
                  County</span></span><span class="area-card__arrow" aria-hidden="true">→</span></a></div>
        </div>
        <div class="text-center mt-5">
          <a href="service-areas" class="btn btn-outline-navy btn-arrow">All Service Areas</a>
        </div>
      </div>
    </section>

    
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

    
<!-- GET IN TOUCH -->
    
    <section class="section bg-navy-deep text-white text-center" aria-labelledby="cta-heading">
      <div class="container reveal">
        <p class="eyebrow on-dark">Get in Touch</p>
        <h2 id="cta-heading" class="ff-display display-xl mt-3 text-white mx-auto maxw-18">Start the Conversation</h2>
        <p class="lede on-dark mt-3 mx-auto maxw-50">
          Quotes in 3&ndash;5 business days. Emergencies same-day. Call us or request a proposal online.
        </p>
        <div class="d-flex gap-2 justify-content-center mt-4 flex-wrap">
          <a href="contact" class="btn btn-light-navy btn-arrow">Request a Quote</a>
          <a href="tel:+3039153703" class="btn btn-outline-light btn-arrow">(303)&nbsp;915-3703</a>
        </div>
      </div>
    </section>


    
@endsection