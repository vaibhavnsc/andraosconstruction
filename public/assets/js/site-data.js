/* ==========================================================================
   ANDRAOS CONSTRUCTION — Site Content Data
   --------------------------------------------------------------------------
   Single source of truth for repeated content (services, industries,
   projects, reviews) and for ALL service-area / location data.

   To add a new location page:
     1. Copy a LOCATIONS entry below and edit its fields.
     2. Re-run the location-page generator (see README → "Adding a location").
        New cities appear automatically in the nav dropdown, the footer, and
        the service-areas index because those are rendered from this file.
   ========================================================================== */

/* Wrap everything in a single global namespace to avoid polluting window. */
window.AndraosData = (function () {
  "use strict";

  /* ---- Services (also drives the Services page anchored sections) ------- */
  var SERVICES = [
    {
      slug: "commercial-concrete",
      number: "01",
      title: "Commercial Concrete",
      blurb: "Flatwork, curb &amp; gutter, drain pans, dock ramps, ADA sidewalks, and structural slabs for commercial properties.",
      image: "andraos-construction-gallery-037-665h.jpg",
      tags: ["Flatwork", "Curb &amp; gutter", "ADA"]
    },
    {
      slug: "asphalt",
      number: "02",
      title: "Asphalt Paving &amp; Repair",
      blurb: "Mill &amp; overlay, full-depth removal &amp; replacement, crackfilling, sealcoating, and striping for parking lots.",
      image: "andraos-construction-gallery-040-665h.jpg",
      tags: ["Mill &amp; overlay", "Sealcoat", "Striping"]
    },
    {
      slug: "masonry",
      number: "03",
      title: "Commercial Masonry",
      blurb: "Architectural stone walls, sandstone seat-walls, brick veneer, retaining walls, and structural CMU site work.",
      image: "andraos-construction-gallery-028-665h.jpg",
      tags: ["Sandstone", "Brick", "Retaining walls"]
    },
    {
      slug: "snow-melt",
      number: "04",
      title: "Snow Melt Systems",
      blurb: "Hydronic snow-melt for entries, ADA ramps, drive courts, and walkways &mdash; embedded during the original pour.",
      image: "andraos-construction-gallery-022-665h.jpg",
      tags: ["Hydronic", "Entries", "ADA ramps"]
    },
    {
      slug: "hoa-property-management",
      number: "05",
      title: "HOA &amp; Property Management",
      blurb: "Community-wide capital renewal: sidewalks, drive lanes, curb &amp; gutter, parking lots, and asphalt maintenance.",
      image: "andraos-construction-gallery-001-665h.jpg",
      tags: ["Capital renewal", "Sidewalks", "Repair"]
    },
    {
      slug: "concrete-finishes",
      number: "06",
      title: "Concrete Finishes",
      blurb: "Broom, exposed aggregate, stamped, and integral color finishes for entrances, plazas, and feature flatwork.",
      image: "andraos-construction-gallery-038-665h.jpg",
      tags: ["Broom", "Stamped", "Exposed"]
    }
  ];

  /* ---- Industries served ------------------------------------------------ */
  var INDUSTRIES = [
    { number: "01", name: "Property Management",   image: "andraos-construction-gallery-037-665h.jpg" },
    { number: "02", name: "HOA &amp; Multifamily", image: "andraos-construction-gallery-040-665h.jpg" },
    { number: "03", name: "Hospitality",           image: "andraos-construction-gallery-001-665h.jpg" },
    { number: "04", name: "Retail Centers",        image: "andraos-construction-gallery-022-665h.jpg" },
    { number: "05", name: "Medical &amp; Healthcare", image: "andraos-construction-gallery-038-665h.jpg" },
    { number: "06", name: "Municipal &amp; Civic", image: "andraos-construction-gallery-018-665h.jpg" },
    { number: "07", name: "Tenant Improvements",   image: "andraos-construction-gallery-006-665h.jpg" },
    { number: "08", name: "Mountain Communities",  image: "andraos-construction-gallery-043-665h.jpg" }
  ];

  /* ---- Featured projects (gallery) -------------------------------------- */
  // var PROJECTS = [
  //   { name: "Shadow Canyon HOA",      category: "hoa",         meta: "Community renewal &middot; Front Range", image: "andraos-construction-gallery-037-665h.jpg" },
  //   { name: "Marriott Boulder",       category: "hospitality", meta: "Drive court &middot; Boulder",           image: "andraos-construction-gallery-001-665h.jpg" },
  //   { name: "Boulder Village Plaza",  category: "retail",      meta: "Streetscape masonry",                    image: "andraos-construction-gallery-022-665h.jpg" },
  //   { name: "Rocky Mountain Kids",    category: "retail",      meta: "Boulder &middot; Sandstone",             image: "andraos-construction-gallery-018-665h.jpg" },
  //   { name: "Cherry Creek Pedway",    category: "civic",       meta: "Sidewalk replacement &middot; Denver",   image: "andraos-construction-gallery-006-665h.jpg" },
  //   { name: "Logan Reserve Drives",   category: "hoa",         meta: "Aurora &middot; 14 drive lanes",         image: "andraos-construction-gallery-043-665h.jpg" },
  //   { name: "Sloan Crossing Lot",     category: "retail",      meta: "Westminster &middot; Mill &amp; overlay", image: "andraos-construction-gallery-040-665h.jpg" },
  //   { name: "The Village Sandstone",  category: "retail",      meta: "Boulder &middot; Architectural masonry", image: "andraos-construction-gallery-028-665h.jpg" }
  // ];

  /* ---- Gallery filters -------------------------------------------------- */
  // var FILTERS = [
  //   { id: "all",         label: "All Work" },
  //   { id: "hoa",         label: "Property &amp; HOA" },
  //   { id: "hospitality", label: "Hospitality" },
  //   { id: "retail",      label: "Retail" },
  //   { id: "civic",       label: "Civic" }
  // ];

  /* ---- "Why Andraos" points --------------------------------------------- */
  var WHY = [
    { number: "01", title: "Single point of accountability", body: "One Andraos PM owns each job from walkthrough through warranty. No handoffs, no scope drift." },
    { number: "02", title: "All work self-performed",        body: "Concrete, asphalt, and masonry crews are full-time Andraos employees." },
    { number: "03", title: "Engineered for Colorado",        body: "Mix designs, cure schedules, and snow-melt calibrated for Front Range freeze-thaw." },
    { number: "04", title: "One-year workmanship warranty",  body: "Every job delivered under written warranty. Fully licensed, bonded, and insured." }
  ];

  /* ---- Client reviews --------------------------------------------------- */
  var REVIEWS = [
    {
      title: "A decade of satisfaction",
      quote: "Throughout the years of working with them, I have been pleased with the high quality work, competitive pricing and guarantee of the finished product. I am pleased to recommend Andraos Construction without hesitation.",
      name: "Stephen Chavez",
      role: "Vice President &middot; Gart Properties"
    },
    {
      title: "Say what they mean",
      quote: "We have had a long-term relationship with both Ray and Rob for over seven years. Their cost is competitive, their work is great, and they are one of the few companies that say what they mean and mean what they say.",
      name: "Don McGinnis",
      role: "President &middot; Mc2 Enterprises Inc."
    },
    {
      title: "Reliable",
      quote: "Andraos Construction has performed well as a trade partner. They are always responsive to our bidding requirements and can be relied upon to deliver a project in accordance with the agreed-upon schedule and scope.",
      name: "Jeff Chevalier",
      role: "ASR Companies Inc."
    },
    {
      title: "Timely, every time",
      quote: "We have used Andraos Construction as a sub-contractor for over ten years. They are very reliable, trustworthy, and have always completed their work in a timely fashion. I highly recommend them for any concrete project.",
      name: "Larry G. Potthoff",
      role: "President &middot; CQL-2000 Constructors"
    }
  ];



  /* Public API */
  return {
    SERVICES: SERVICES,
    INDUSTRIES: INDUSTRIES,
    PROJECTS: PROJECTS,
    FILTERS: FILTERS,
    WHY: WHY,
    REVIEWS: REVIEWS,
    LOCATIONS: LOCATIONS
  };
})();
