<div class="main-nav" id="mainNav">
    <div class="utility-bar">
      <div class="container d-flex justify-content-between align-items-center py-2">
        <div class="d-none d-lg-block">◷ Mon–Fri · 6:00am – 6:00pm &nbsp;·&nbsp; Serving the Front Range &amp; Mountain Communities Since 1993</div>
        <div class="d-flex align-items-center gap-3">
          <a href="tel:+13034793181" class="d-flex align-items-center gap-2 fw-semibold"><span class="dot"></span>(303) 479-3181</a>
          <a href="/contact" class="utility-cta ps-3 border-start border-secondary">Request Call Back</a>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Andraos Construction"  class="brand-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"><span></span><span></span><span></span></button>
        <div class="collapse navbar-collapse justify-content-end" id="navMenu">
            <ul class="navbar-nav align-items-lg-center">

                {{-- Concrete --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                       href="{{ route('services') }}"
                       data-bs-toggle="dropdown"
                       data-navigate-on-click
                       role="button"
                       aria-expanded="false">
                        Services
                    </a>
            
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('services') }}#commercial-concrete">
                                Commercial Concrete
                            </a>
                        </li>
            
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('services') }}#asphalt">
                                Asphalt Paving &amp; Repair
                            </a>
                        </li>
            
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('services') }}#masonry">
                                Commercial Masonry
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('services') }}#snow-melt">
                                Snow Melt Systems
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('services') }}#hoa-property-management">
                                HOA &amp; Property Management
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('services') }}#concrete-finishes">
                                Concrete Finishes
                            </a>
                        </li>
                    </ul>
                </li>
                       
                {{-- Gallery --}}
                <li class="nav-item">
                    <a class="nav-link"
                       href="/gallery">
                        Gallery
                    </a>
                </li>

                {{-- About --}}
                <li class="nav-item">
                    <a class="nav-link"
                       href="/about">
                        About
                    </a>
                </li> 
            
                {{-- Service Areas --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                       href="{{ route('service-areas') }}"
                       data-bs-toggle="dropdown">
                        Service Areas
                    </a>
            
                    <ul class="dropdown-menu service-area-dropdown">
                        <li><a class="dropdown-item" href="{{ route('service-areas') }}">All Service Areas</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="{{ route('locations.denver') }}">Denver</a></li>
                        <li><a class="dropdown-item" href="{{ route('locations.aurora') }}">Aurora</a></li>
                        <li><a class="dropdown-item" href="{{ route('locations.littleton') }}">Littleton</a></li>
                        <li><a class="dropdown-item" href="{{ route('locations.highlands-ranch') }}">Highlands Ranch</a></li>
                        <li><a class="dropdown-item" href="{{ route('locations.castle-rock') }}">Castle Rock</a></li>
                        <li><a class="dropdown-item" href="{{ route('locations.parker') }}">Parker</a></li>
                        <li><a class="dropdown-item" href="{{ route('locations.englewood') }}">Englewood</a></li>
                        <li><a class="dropdown-item" href="{{ route('locations.broomfield') }}">Broomfield</a></li>
                        <li><a class="dropdown-item" href="{{ route('locations.boulder') }}">Boulder</a></li>
                        <li><a class="dropdown-item" href="{{ route('locations.westminster') }}">Westminster</a></li>
                        <li><a class="dropdown-item" href="{{ route('locations.thornton') }}">Thornton</a></li>
                        <li><a class="dropdown-item" href="{{ route('locations.arvada') }}">Arvada</a></li>
                        <li><a class="dropdown-item" href="{{ route('locations.longmont') }}">Longmont</a></li>
                    </ul>
                </li> 
            
                {{-- Contact --}}
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>

                <li class="nav-item ms-lg-2"><a class="btn btn-light-navy" href="../contact">Request a Quote</a></li>
            
            </ul>
        </div>
      </div>
    </nav>
  </div>