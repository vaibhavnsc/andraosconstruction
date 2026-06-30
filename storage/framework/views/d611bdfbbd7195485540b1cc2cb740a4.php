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
            <img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="Andraos Construction"  class="brand-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"><span></span><span></span><span></span></button>
        <div class="collapse navbar-collapse justify-content-end" id="navMenu">
            <ul class="navbar-nav align-items-lg-center">


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle<?php echo e(request()->is('services*') || request()->is('commercial-concrete*') || request()->is('residential-concrete*') || request()->is('concrete-finishes*') || request()->is('masonry*') || request()->is('asphalt*') || request()->is('snow-melt*') ? ' active' : ''); ?>"
                       href="<?php echo e(route('services')); ?>"
                       data-bs-toggle="dropdown"
                       data-navigate-on-click
                       role="button"
                       aria-expanded="false">
                         Services
                    </a>
             
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item<?php echo e(request()->is('commercial-concrete*') ? ' active' : ''); ?>"
                               href="<?php echo e(route('services')); ?>#commercial-concrete">
                                 Commercial Concrete
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item<?php echo e(request()->is('hoa-property-management*') ? ' active' : ''); ?>"
                               href="<?php echo e(route('services')); ?>#hoa-property-management">
                                 HOA &amp; Residential Concrete
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item<?php echo e(request()->is('asphalt*') ? ' active' : ''); ?>"
                               href="<?php echo e(route('services')); ?>#asphalt">
                                 Asphalt Paving &amp; Repair
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item<?php echo e(request()->is('masonry*') ? ' active' : ''); ?>"
                               href="<?php echo e(route('services')); ?>#masonry">
                                 Commercial Masonry
                            </a>
                        </li>
                        
                        <li>
                            <a class="dropdown-item<?php echo e(request()->is('snow-melt*') ? ' active' : ''); ?>"
                               href="<?php echo e(route('services')); ?>#snow-melt">
                                 Snow Melt Systems
                            </a>
                        </li>
                        
                        <!-- <li>
                            <a class="dropdown-item<?php echo e(request()->is('concrete-finishes*') ? ' active' : ''); ?>"
                               href="<?php echo e(route('services')); ?>#concrete-finishes">
                                 Concrete Finishes
                            </a>
                        </li> -->
                    </ul>
                </li>
                       

                <li class="nav-item">
                    <a class="nav-link<?php echo e(request()->is('gallery*') ? ' active' : ''); ?>"
                       href="/gallery">
                         Gallery
                     </a>
                 </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle<?php echo e(request()->is('about*') || request()->is('faq*') ? ' active' : ''); ?>"
                       href="<?php echo e(route('about')); ?>"
                       data-bs-toggle="dropdown"
                       role="button"
                       aria-expanded="false">
                          About
                     </a>

                     <ul class="dropdown-menu">
                         <li>
                             <a class="dropdown-item<?php echo e(request()->is('about*') ? ' active' : ''); ?>"
                                href="<?php echo e(route('about')); ?>">
                                  About Us
                             </a>
                         </li>
                         <li>
                             <a class="dropdown-item<?php echo e(request()->is('blog*') ? ' active' : ''); ?>"
                                href="<?php echo e(route('blog')); ?>">
                                  Blog
                             </a>
                         </li>
                         <li>
                             <a class="dropdown-item<?php echo e(request()->is('faq*') ? ' active' : ''); ?>"
                                href="<?php echo e(route('faq')); ?>">
                                  FAQs
                             </a>
                         </li>
                     </ul>
                 </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle<?php echo e(request()->is('service-areas*') ? ' active' : ''); ?>"
                       href="<?php echo e(route('service-areas')); ?>"
                       data-bs-toggle="dropdown">
                         Service Areas
                    </a>

                    <ul class="dropdown-menu service-area-dropdown">
                        <li><a class="dropdown-item<?php echo e(request()->is('service-areas') && !request()->segment(2) ? ' active' : ''); ?>" href="<?php echo e(route('service-areas')); ?>">All Service Areas</a></li>
                        <hr>
                        <li><a class="dropdown-item<?php echo e(request()->is('service-areas/denver*') ? ' active' : ''); ?>" href="<?php echo e(route('areas.denver')); ?>">Denver</a></li>
                        <li><a class="dropdown-item<?php echo e(request()->is('service-areas/aurora*') ? ' active' : ''); ?>" href="<?php echo e(route('areas.aurora')); ?>">Aurora</a></li>
                        <li><a class="dropdown-item<?php echo e(request()->is('service-areas/littleton*') ? ' active' : ''); ?>" href="<?php echo e(route('areas.littleton')); ?>">Littleton</a></li>
                        <li><a class="dropdown-item<?php echo e(request()->is('service-areas/highlands-ranch*') ? ' active' : ''); ?>" href="<?php echo e(route('areas.highlands-ranch')); ?>">Highlands Ranch</a></li>
                        <li><a class="dropdown-item<?php echo e(request()->is('service-areas/castle-rock*') ? ' active' : ''); ?>" href="<?php echo e(route('areas.castle-rock')); ?>">Castle Rock</a></li>
                        <li><a class="dropdown-item<?php echo e(request()->is('service-areas/parker*') ? ' active' : ''); ?>" href="<?php echo e(route('areas.parker')); ?>">Parker</a></li>
                        <li><a class="dropdown-item<?php echo e(request()->is('service-areas/englewood*') ? ' active' : ''); ?>" href="<?php echo e(route('areas.englewood')); ?>">Englewood</a></li>
                        <li><a class="dropdown-item<?php echo e(request()->is('service-areas/broomfield*') ? ' active' : ''); ?>" href="<?php echo e(route('areas.broomfield')); ?>">Broomfield</a></li>
                        <li><a class="dropdown-item<?php echo e(request()->is('service-areas/boulder*') ? ' active' : ''); ?>" href="<?php echo e(route('areas.boulder')); ?>">Boulder</a></li>
                        <li><a class="dropdown-item<?php echo e(request()->is('service-areas/westminster*') ? ' active' : ''); ?>" href="<?php echo e(route('areas.westminster')); ?>">Westminster</a></li>
                        <li><a class="dropdown-item<?php echo e(request()->is('service-areas/thornton*') ? ' active' : ''); ?>" href="<?php echo e(route('areas.thornton')); ?>">Thornton</a></li>
                        <li><a class="dropdown-item<?php echo e(request()->is('service-areas/arvada*') ? ' active' : ''); ?>" href="<?php echo e(route('areas.arvada')); ?>">Arvada</a></li>
                        <li><a class="dropdown-item<?php echo e(request()->is('service-areas/longmont*') ? ' active' : ''); ?>" href="<?php echo e(route('areas.longmont')); ?>">Longmont</a></li>
                    </ul>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link<?php echo e(request()->is('contact*') ? ' active' : ''); ?>"
                       href="<?php echo e(route('contact')); ?>">
                         Contact
                     </a>
                </li>

                <li class="nav-item ms-lg-2"><a class="btn btn-light-navy" href="../contact">Request a Quote</a></li>
            
            </ul>
        </div>
      </div>
    </nav>
  </div><?php /**PATH D:\andraosconstruction\resources\views/partials/header.blade.php ENDPATH**/ ?>