/* ==========================================================================
   ANDRAOS CONSTRUCTION — Site Behaviors (jQuery)
   --------------------------------------------------------------------------
   Requires : jQuery 3.7+, Bootstrap 5.3 bundle, and assets/js/site-data.js
              (all loaded before this file).

   Responsibilities
     1.  Resolve relative paths (root pages vs. /locations/ subfolder)
     2.  Inject the shared header (utility bar + navbar) and footer
     3.  Render data-driven components present on the current page
     4.  Wire shared behaviors: sticky-nav state, scroll reveal, mobile menu,
         gallery filter, review rotator, hero slideshow, contact form

   Each page opts into components simply by including the matching element id
   (e.g. an element with id="js-hero-slides" gets the slideshow). Missing
   elements are skipped safely.
   ========================================================================== */

(function ($) {
  "use strict";

  /* Run after the DOM is ready. */
  $(function () {

    var data = window.AndraosData;

    /* ----------------------------------------------------------------------
       1. PATH RESOLUTION
       Pages inside /locations/ set <body data-base="..">; root pages use ".".
       buildLink() and buildImage() return correct relative URLs either way.
       ---------------------------------------------------------------------- */
    var BASE = $("body").data("base") || ".";

    function buildLink(path)  { return BASE + "/" + path; }
    function buildImage(file) { return BASE + "/assets/images/" + file; }

    var PHONE_DISPLAY = "(303) 479-3181";
    var PHONE_HREF    = "tel:+13034793181";


    /* ----------------------------------------------------------------------
       2. SHARED HEADER (utility bar + main navigation)
       ---------------------------------------------------------------------- */
    function renderHeader() {
      var $header = $("#site-header");
      if (!$header.length) { return; }

      // Build the Service-Areas dropdown items from the locations data.
      var areaItems = $.map(data.LOCATIONS, function (loc) {
        return '<li><a class="dropdown-item" href="' +
          buildLink("locations/" + loc.slug + "") + '">' + loc.name + "</a></li>";
      }).join("");

      var html =
        // --- utility strip ---
        '<div class="utility-bar">' +
          '<div class="container d-flex justify-content-between align-items-center py-2">' +
            '<div class="d-none d-lg-block">' +
              '&#9719; Mon&ndash;Fri &middot; 6:00a &ndash; 6:00p &nbsp;&middot;&nbsp; ' +
              'Serving the Front Range &amp; Mountain Communities Since 1993' +
            '</div>' +
            '<div class="d-flex align-items-center gap-3">' +
              '<a href="' + PHONE_HREF + '" class="d-flex align-items-center gap-2 fw-semibold">' +
                '<span class="status-dot" aria-hidden="true"></span>' + PHONE_DISPLAY +
              '</a>' +
              '<a href="' + buildLink("contact.html") + '" class="utility-cta ps-3 border-start border-secondary">' +
                'Request Call Back</a>' +
            '</div>' +
          '</div>' +
        '</div>' +
        // --- main navbar ---
        '<nav class="navbar navbar-expand-lg" aria-label="Primary navigation">' +
          '<div class="container">' +
            '<a class="navbar-brand" href="' + buildLink("index.html") + '">' +
              '<img src="' + buildImage("andraos-logo-official.webp") +
                '" class="brand-logo" alt="Andraos Construction" width="160" height="42">' +
            '</a>' +
            '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" ' +
              'data-bs-target="#primaryNav" aria-controls="primaryNav" ' +
              'aria-expanded="false" aria-label="Toggle navigation">' +
              '<span></span><span></span><span></span>' +
            '</button>' +
            '<div class="collapse navbar-collapse justify-content-end" id="primaryNav">' +
              '<ul class="navbar-nav align-items-lg-center">' +
                // Services dropdown
                '<li class="nav-item dropdown">' +
                  '<a class="nav-link dropdown-toggle" href="' + buildLink("services.html") +
                    '" data-bs-toggle="dropdown" role="button" aria-expanded="false">Services</a>' +
                  '<ul class="dropdown-menu">' +
                    serviceDropdownItems() +
                  '</ul>' +
                '</li>' +
                navItem("gallery", "Gallery", "gallery.html") +
                navItem("about", "About", "about.html") +
                // Service Areas dropdown
                '<li class="nav-item dropdown">' +
                  '<a class="nav-link dropdown-toggle" data-page="areas" href="' +
                    buildLink("service-areas.html") +
                    '" data-bs-toggle="dropdown" role="button" aria-expanded="false">Service Areas</a>' +
                  '<ul class="dropdown-menu">' +
                    '<li><a class="dropdown-item fw-semibold" href="' +
                      buildLink("service-areas.html") + '">All Service Areas</a></li>' +
                    '<li><hr class="dropdown-divider"></li>' +
                    areaItems +
                  '</ul>' +
                '</li>' +
                navItem("contact", "Contact", "contact.html") +
                // Primary CTA
                '<li class="nav-item ms-lg-2">' +
                  '<a class="btn btn-light-navy" href="' + buildLink("contact.html") + '">Request a Quote</a>' +
                '</li>' +
              '</ul>' +
            '</div>' +
          '</div>' +
        '</nav>';

      $header.addClass("main-nav").html(html);

      // Mark the active top-level item for the current page.
      var page = $("body").data("page");
      if (page) { $('[data-page="' + page + '"]').addClass("active"); }
    }

    // Build the Services dropdown list from data.
    function serviceDropdownItems() {
      return $.map(data.SERVICES, function (svc) {
        return '<li><a class="dropdown-item" href="' +
          buildLink("services.html#" + svc.slug) + '">' + stripHtml(svc.title) + "</a></li>";
      }).join("");
    }

    // Single top-level nav item helper.
    function navItem(pageKey, label, file) {
      return '<li class="nav-item"><a class="nav-link" data-page="' + pageKey +
        '" href="' + buildLink(file) + '">' + label + "</a></li>";
    }


    /* ----------------------------------------------------------------------
       3. SHARED FOOTER
       ---------------------------------------------------------------------- */
    function renderFooter() {
      var $footer = $("#site-footer");
      if (!$footer.length) { return; }

      // Split the locations into two balanced columns.
      var locs = data.LOCATIONS;
      var half = Math.ceil(locs.length / 2);
      var col1 = footerAreaLinks(locs.slice(0, half));
      var col2 = footerAreaLinks(locs.slice(half));

      var serviceLinks = $.map(data.SERVICES, function (svc) {
        return '<a class="footer-link" href="' + buildLink("services.html#" + svc.slug) + '">' +
          stripHtml(svc.title) + "</a>";
      }).join("");

      var html =
        '<div class="container">' +
          '<div class="row g-4 pb-5">' +
            // Brand column
            '<div class="col-lg-4 col-md-12">' +
              '<img src="' + buildImage("andraos-logo-official.webp") +
                '" class="brand-logo mb-3" alt="Andraos Construction" width="180" height="48">' +
              '<p class="ff-display fs-5 lh-sm maxw-30em text-white-50">' +
                'Commercial concrete, asphalt &amp; masonry for the Colorado Front Range since 1993.' +
              '</p>' +
            '</div>' +
            // Services column
            '<div class="col-lg-2 col-6">' +
              '<h2>Services</h2>' + serviceLinks +
            '</div>' +
            // Service areas column
            '<div class="col-lg-3 col-6">' +
              '<h2>Service Areas</h2>' +
              '<div class="row"><div class="col-6">' + col1 + '</div>' +
              '<div class="col-6">' + col2 + '</div></div>' +
            '</div>' +
            // Company column
            '<div class="col-lg-3 col-12">' +
              '<h2>Company</h2>' +
              '<a class="footer-link" href="' + PHONE_HREF + '">' + PHONE_DISPLAY + '</a>' +
              '<a class="footer-link" href="' + buildLink("about.html") + '">About</a>' +
              '<a class="footer-link" href="' + buildLink("gallery.html") + '">Gallery</a>' +
              '<a class="footer-link" href="' + buildLink("contact.html") + '">Request a Quote</a>' +
            '</div>' +
          '</div>' +
          // Legal bar
          '<div class="d-flex flex-wrap justify-content-between align-items-center pt-4 ' +
            'border-top border-secondary footer-legal">' +
            '<div>&copy; 2026 ANDRAOS CONSTRUCTION &middot; DENVER, CO &middot; ' +
              'LICENSED &amp; INSURED &middot; EST. 1993</div>' +
            '<div class="d-flex gap-3">' +
              '<a href="#" class="footer-link d-inline">Privacy</a>' +
              '<a href="#" class="footer-link d-inline">Terms</a>' +
            '</div>' +
          '</div>' +
        '</div>';

      $footer.addClass("site-footer").html(html);
    }

    function footerAreaLinks(list) {
      return $.map(list, function (loc) {
        return '<a class="footer-link" href="' + buildLink("locations/" + loc.slug + ".html") +
          '">' + loc.name + "</a>";
      }).join("");
    }


    /* ----------------------------------------------------------------------
       4. SHARED MOBILE STICKY CTA
       ---------------------------------------------------------------------- */
    function renderMobileCta() {
      var $cta = $("#mobile-cta");
      if (!$cta.length) { return; }
      $cta.addClass("mobile-cta").html(
        '<a href="' + PHONE_HREF + '">&#9743; Call</a>' +
        '<a href="sms:+13034793181">&#9993; Text</a>' +
        '<a href="' + buildLink("contact.html") + '" class="is-primary">&rarr; Quote</a>'
      );
    }


    /* ----------------------------------------------------------------------
       5. PAGE COMPONENTS (rendered only if their container exists)
       ---------------------------------------------------------------------- */

    /* 5a. Home hero — rotating background slideshow */
    function initHeroSlideshow() {
      var $slides = $("#js-hero-slides");
      if (!$slides.length) { return; }

      var images = [
        "andraos-construction-gallery-037-665h.jpg",
        "andraos-construction-hero-home-1920w.jpg",
        "andraos-construction-gallery-043-665h.jpg",
        "andraos-construction-gallery-001-665h.jpg",
        "andraos-construction-gallery-028-665h.jpg"
      ];

      var markup = $.map(images, function (file, i) {
        return '<div class="hero__slide' + (i === 0 ? " is-active" : "") +
          '" style="background-image:url(' + buildImage(file) + ')"></div>';
      }).join("");
      $slides.html(markup);

      // Cross-fade every 6.5s.
      var current = 0;
      var $all = $slides.children();
      setInterval(function () {
        $all.eq(current).removeClass("is-active");
        current = (current + 1) % $all.length;
        $all.eq(current).addClass("is-active");
      }, 6500);
    }

    /* 5b. Home hero — quick service shortcut cards */
    function initHeroQuick() {
      var $wrap = $("#js-hero-quick");
      if (!$wrap.length) { return; }

      var quick = [
        { label: "Concrete", meta: "Flatwork &middot; ADA &middot; Curb &amp; gutter", image: "andraos-construction-gallery-037-665h.jpg" },
        { label: "Asphalt",  meta: "Mill &amp; overlay &middot; Sealcoat",            image: "andraos-construction-gallery-040-665h.jpg" },
        { label: "Masonry",  meta: "Stone &middot; Brick &middot; Walls",             image: "andraos-construction-gallery-028-665h.jpg" }
      ];

      $wrap.html($.map(quick, function (q) {
        return '<div class="col-md-4">' +
          '<a href="' + buildLink("services.html") + '" class="hero__quick">' +
            '<img src="' + buildImage(q.image) + '" alt="' + q.label + ' services" width="56" height="56">' +
            '<span>' +
              '<span class="hero__quick-label d-block">' + q.label + '</span>' +
              '<span class="hero__quick-meta">' + q.meta + '</span>' +
            '</span>' +
          '</a></div>';
      }).join(""));
    }

    /* 5c. Services grid (home) */
    function initServiceGrid() {
      var $grid = $("#js-service-grid");
      if (!$grid.length) { return; }

      $grid.html($.map(data.SERVICES, function (svc) {
        return '<div class="col-lg-4 col-md-6">' +
          '<a href="' + buildLink("services.html#" + svc.slug) + '" class="svc-card d-block text-decoration-none">' +
            '<img src="' + buildImage(svc.image) + '" alt="' + stripHtml(svc.title) + '">' +
            '<span class="num-eyebrow d-block mt-3">' + svc.number + ' / 06</span>' +
            '<h3 class="text-white">' + svc.title + '</h3>' +
            '<p class="text-white-50 small lh-base">' + svc.blurb + '</p>' +
            '<span class="d-flex flex-wrap gap-1">' + tagList(svc.tags) + '</span>' +
          '</a></div>';
      }).join(""));
    }

    /* 5d. Services detail (services page) — alternating image/text rows */
    function initServiceDetail() {
      var $wrap = $("#js-service-detail");
      if (!$wrap.length) { return; }

      $wrap.html($.map(data.SERVICES, function (svc, i) {
        var reversed = (i % 2 === 1);
        var topBorder = (i > 0) ? " pt-5 mt-5 border-top" : "";
        return '<div class="row g-5 align-items-center reveal anchor-offset' + topBorder +
            '" id="' + svc.slug + '">' +
            '<div class="col-lg-6' + (reversed ? " order-lg-2" : "") + '">' +
              '<img src="' + buildImage(svc.image) + '" alt="' + stripHtml(svc.title) +
                '" class="ratio-4-3 img-treat">' +
            '</div>' +
            '<div class="col-lg-6' + (reversed ? " order-lg-1" : "") + '">' +
              '<span class="num-eyebrow">' + svc.number + ' / 06</span>' +
              '<h2 class="ff-display display-md mt-2">' + svc.title + '</h2>' +
              '<p class="lede mt-3">' + svc.blurb + '</p>' +
              '<div class="d-flex flex-wrap gap-1 mt-3">' + tagList(svc.tags) + '</div>' +
              '<a href="' + buildLink("contact.html") + '" class="btn btn-outline-navy btn-arrow mt-4">' +
                'Request a Quote</a>' +
            '</div>' +
          '</div>';
      }).join(""));
    }

    /* 5e. Project gallery + filters */
    function initGallery() {
      var $grid = $("#js-project-grid");
      if (!$grid.length) { return; }

      var $filters = $("#js-gallery-filters");
      var limit = parseInt($grid.data("limit"), 10) || data.PROJECTS.length;

      // Render filter buttons (if a filter bar exists on this page).
      if ($filters.length) {
        $filters.html($.map(data.FILTERS, function (f, i) {
          return '<button type="button" class="filter-btn' + (i === 0 ? " active" : "") +
            '" data-filter="' + f.id + '">' + f.label + "</button>";
        }).join(""));
      }

      function render(filter) {
        var items = $.grep(data.PROJECTS, function (p) {
          return filter === "all" || p.category === filter;
        }).slice(0, limit);

        $grid.html($.map(items, function (p) {
          return '<div class="col-lg-4 col-md-6">' +
            '<figure class="proj m-0">' +
              '<img src="' + buildImage(p.image) + '" alt="' + p.name +
                ' &mdash; ' + stripHtml(p.meta) + '">' +
              '<figcaption class="proj__overlay">' +
                '<span class="proj__cat">' + p.category + '</span>' +
                '<span class="proj__name">' + p.name + '</span>' +
                '<span class="small text-white-50">' + p.meta + '</span>' +
              '</figcaption>' +
            '</figure></div>';
        }).join(""));
      }

      render("all");

      // Filter click handling (event delegation).
      $filters.on("click", ".filter-btn", function () {
        $filters.find(".filter-btn").removeClass("active");
        $(this).addClass("active");
        render($(this).data("filter"));
      });
    }

    /* 5f. Industry tiles */
    function initIndustryGrid() {
      var $grid = $("#js-industry-grid");
      if (!$grid.length) { return; }

      $grid.html($.map(data.INDUSTRIES, function (ind) {
        return '<div class="col-lg-3 col-md-4 col-6">' +
          '<div class="industry">' +
            '<img src="' + buildImage(ind.image) + '" alt="' + stripHtml(ind.name) + ' projects">' +
            '<div class="industry__overlay">' +
              '<span class="num-eyebrow">' + ind.number + '</span>' +
              '<h4>' + ind.name + '</h4>' +
            '</div>' +
          '</div></div>';
      }).join(""));
    }

    /* 5g. "Why Andraos" points */
    function initWhyPoints() {
      var $wrap = $("#js-why-points");
      if (!$wrap.length) { return; }

      $wrap.html($.map(data.WHY, function (point) {
        return '<div class="row g-3 py-3 border-top divider-top">' +
          '<div class="col-2 num-eyebrow pt-1">' + point.number + '</div>' +
          '<div class="col-10">' +
            '<h3 class="ff-display text-white mb-1 fs-5">' + point.title + '</h3>' +
            '<p class="mb-0 text-white-50 small">' + point.body + '</p>' +
          '</div>' +
        '</div>';
      }).join(""));
    }

    /* 5h. Service-area cards (index + home teaser) */
    function initAreaGrid() {
      var $grid = $("#js-area-grid");
      if (!$grid.length) { return; }

      var limit = parseInt($grid.data("limit"), 10) || data.LOCATIONS.length;
      var useCounty = ($grid.data("label") === "county");

      $grid.html($.map(data.LOCATIONS.slice(0, limit), function (loc) {
        return '<div class="col-lg-4 col-md-6">' +
          '<a href="' + buildLink("locations/" + loc.slug + ".html") + '" class="area-card">' +
            '<span>' +
              '<span class="area-card__name d-block">' + loc.name + '</span>' +
              '<span class="area-card__meta">' + (useCounty ? loc.county : loc.note) + '</span>' +
            '</span>' +
            '<span class="area-card__arrow" aria-hidden="true">&rarr;</span>' +
          '</a></div>';
      }).join(""));

      // Optional count label.
      $("#js-area-count").text(data.LOCATIONS.length + " active service areas");
    }

    /* 5i. Review rotator */
    function initReviews() {
      var $quote = $("#js-review-quote");
      if (!$quote.length) { return; }

      var $title = $("#js-review-title");
      var $name  = $("#js-review-name");
      var $role  = $("#js-review-role");
      var $dots  = $("#js-review-dots");
      var index  = 0;

      // Build pagination dots.
      $dots.html($.map(data.REVIEWS, function (review, i) {
        return '<button type="button" class="review-dot' + (i === 0 ? " is-active" : "") +
          '" data-index="' + i + '" aria-label="Show review ' + (i + 1) + '"></button>';
      }).join(""));

      function show(i) {
        var r = data.REVIEWS[i];
        $title.html(r.title);
        $quote.html("&ldquo;" + r.quote + "&rdquo;");
        $name.html(r.name);
        $role.html(r.role);
        $dots.find(".review-dot").removeClass("is-active").eq(i).addClass("is-active");
        index = i;
      }

      show(0);

      $dots.on("click", ".review-dot", function () {
        show($(this).data("index"));
      });

      // Auto-advance every 8s.
      setInterval(function () {
        show((index + 1) % data.REVIEWS.length);
      }, 8000);
    }


    /* ----------------------------------------------------------------------
       6. GLOBAL BEHAVIORS
       ---------------------------------------------------------------------- */

    /* 6a. Sticky-nav background state on scroll */
    function initStickyNav() {
      var $nav = $(".main-nav");
      if ($("body").data("nav-solid") === true) { $nav.addClass("is-solid"); }
      $(window).on("scroll", function () {
        $nav.toggleClass("is-scrolled", $(window).scrollTop() > 40);
      });
    }

    /* 6b. Scroll-reveal via IntersectionObserver (graceful fallback) */
    function initScrollReveal() {
      var $items = $(".reveal");
      if (!$items.length) { return; }

      if (!("IntersectionObserver" in window)) {
        $items.addClass("is-visible"); // no observer: just show everything
        return;
      }

      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            $(entry.target).addClass("is-visible");
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.08, rootMargin: "0px 0px -60px 0px" });

      $items.each(function () { observer.observe(this); });
    }

    /* 6c. Close the mobile menu after tapping a link */
    function initMobileMenuClose() {
      $(document).on("click", "#primaryNav .nav-link:not(.dropdown-toggle), #primaryNav .dropdown-item",
        function () {
          var el = document.getElementById("primaryNav");
          if (el && el.classList.contains("show")) {
            bootstrap.Collapse.getOrCreateInstance(el).hide();
          }
        });
    }

    /* 6d. Contact form — front-end success state (wire to a real handler later) */
    function initContactForm() {
      var $form = $("#js-quote-form");
      if (!$form.length) { return; }
      $form.on("submit", function (e) {
        e.preventDefault();
        $form.addClass("d-none");
        $("#js-form-success").removeClass("d-none");
      });
    }

    /* 6e. Smooth-scroll to an in-page anchor on load (e.g. services.html#asphalt) */
    function initHashScroll() {
      if (!window.location.hash) { return; }
      var target = document.querySelector(window.location.hash);
      if (target) {
        setTimeout(function () { target.scrollIntoView({ behavior: "smooth" }); }, 250);
      }
    }

    /* 6f. Apply background images from data-bg attributes (keeps markup
           free of inline styles). Value is a path relative to the page. */
    function initDataBackgrounds() {
      $("[data-bg]").each(function () {
        $(this).css("background-image", "url('" + $(this).attr("data-bg") + "')");
      });
    }


    /* ----------------------------------------------------------------------
       7. HELPERS
       ---------------------------------------------------------------------- */
    function tagList(tags) {
      return $.map(tags, function (t) { return '<span class="tag">' + t + "</span>"; }).join("");
    }

    // Strip HTML entities/markup for use in alt text and plain-text contexts.
    function stripHtml(str) {
      return $("<span>").html(str).text();
    }


    /* ----------------------------------------------------------------------
       8. BOOTSTRAP THE PAGE
       ---------------------------------------------------------------------- */
    // Shared chrome
    renderHeader();
    renderFooter();
    renderMobileCta();

    // Page components (each is a no-op if its container is absent)
    initHeroSlideshow();
    initHeroQuick();
    initServiceGrid();
    initGallery();
    initIndustryGrid();
    initWhyPoints();
    initAreaGrid();
    initReviews();

    // Global behaviors
    initStickyNav();
    initScrollReveal();
    initMobileMenuClose();
    initContactForm();
    initHashScroll();
    initDataBackgrounds();
  });

})(jQuery);
