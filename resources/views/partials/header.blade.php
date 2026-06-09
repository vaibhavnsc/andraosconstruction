<div class="main-nav" id="mainNav">
    <div class="utility-bar">
      <div class="container d-flex justify-content-between align-items-center py-2">
        <div class="d-none d-lg-block">◷ Mon–Fri · 6:00a – 6:00p &nbsp;·&nbsp; Serving the Front Range &amp; Mountain Communities Since 1993</div>
        <div class="d-flex align-items-center gap-3">
          <a href="tel:+13034793181" class="d-flex align-items-center gap-2 fw-semibold"><span class="dot"></span>(303) 479-3181</a>
          <a href="#contact" class="utility-cta ps-3 border-start border-secondary">Request Call Back</a>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#home">
            <img
            src="{{ asset('assets/images/logo.png') }}"
            alt="Andraos Construction"
            class="brand-logo"
        >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"><span></span><span></span><span></span></button>
        <div class="collapse navbar-collapse justify-content-end" id="navMenu">
            <ul class="navbar-nav align-items-lg-center">

                {{-- Concrete --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                       href="#"
                       data-bs-toggle="dropdown">
                        Services
                    </a>
            
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('commercial-concrete') }}">
                                Commercial Concrete
                            </a>
                        </li>
            
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('residential-concrete') }}">
                                Residential Concrete
                            </a>
                        </li>
            
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('concrete-finishes') }}">
                                Concrete Finishes
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('masonry') }}">
                                Masonry Concrete
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('asphalt') }}">
                                Asphalt Concrete 
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('snow-melt') }}">
                                Snow Melt Concrete 
                            </a>
                        </li>
                    </ul>
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
            
                        <li><a class="dropdown-item" href="{{ route('areas.denver') }}">Denver</a></li>
                        <li><a class="dropdown-item" href="{{ route('areas.aurora') }}">Aurora</a></li>
                        <li><a class="dropdown-item" href="{{ route('areas.littleton') }}">Littleton</a></li>
                        <li><a class="dropdown-item" href="{{ route('areas.highlands-ranch') }}">Highlands Ranch</a></li>
                        <li><a class="dropdown-item" href="{{ route('areas.castle-rock') }}">Castle Rock</a></li>
                        <li><a class="dropdown-item" href="{{ route('areas.parker') }}">Parker</a></li>
                        <li><a class="dropdown-item" href="{{ route('areas.englewood') }}">Englewood</a></li>
                        <li><a class="dropdown-item" href="{{ route('areas.broomfield') }}">Broomfield</a></li>
                        <li><a class="dropdown-item" href="{{ route('areas.boulder') }}">Boulder</a></li>
                        <li><a class="dropdown-item" href="{{ route('areas.westminster') }}">Westminster</a></li>
                        <li><a class="dropdown-item" href="{{ route('areas.thornton') }}">Thornton</a></li>
                        <li><a class="dropdown-item" href="{{ route('areas.arvada') }}">Arvada</a></li>
                        <li><a class="dropdown-item" href="{{ route('areas.longmont') }}">Longmont</a></li>
                    </ul>
                </li> 
            
                {{-- Contact --}}
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>
            
            </ul>
        </div>
      </div>
    </nav>
  </div>