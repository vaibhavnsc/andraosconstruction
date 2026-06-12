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
  var PROJECTS = [
    { name: "Shadow Canyon HOA",      category: "hoa",         meta: "Community renewal &middot; Front Range", image: "andraos-construction-gallery-037-665h.jpg" },
    { name: "Marriott Boulder",       category: "hospitality", meta: "Drive court &middot; Boulder",           image: "andraos-construction-gallery-001-665h.jpg" },
    { name: "Boulder Village Plaza",  category: "retail",      meta: "Streetscape masonry",                    image: "andraos-construction-gallery-022-665h.jpg" },
    { name: "Rocky Mountain Kids",    category: "retail",      meta: "Boulder &middot; Sandstone",             image: "andraos-construction-gallery-018-665h.jpg" },
    { name: "Cherry Creek Pedway",    category: "civic",       meta: "Sidewalk replacement &middot; Denver",   image: "andraos-construction-gallery-006-665h.jpg" },
    { name: "Logan Reserve Drives",   category: "hoa",         meta: "Aurora &middot; 14 drive lanes",         image: "andraos-construction-gallery-043-665h.jpg" },
    { name: "Sloan Crossing Lot",     category: "retail",      meta: "Westminster &middot; Mill &amp; overlay", image: "andraos-construction-gallery-040-665h.jpg" },
    { name: "The Village Sandstone",  category: "retail",      meta: "Boulder &middot; Architectural masonry", image: "andraos-construction-gallery-028-665h.jpg" }
  ];

  /* ---- Gallery filters -------------------------------------------------- */
  var FILTERS = [
    { id: "all",         label: "All Work" },
    { id: "hoa",         label: "Property &amp; HOA" },
    { id: "hospitality", label: "Hospitality" },
    { id: "retail",      label: "Retail" },
    { id: "civic",       label: "Civic" }
  ];

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

  /* ---- Service areas / locations (SINGLE SOURCE OF TRUTH) --------------- */
  var LOCATIONS = [
    {
      slug: "denver", name: "Denver", county: "City &amp; County of Denver", note: "HQ &middot; Metro Core",
      title: "Commercial Concrete Contractors in Denver, CO | Andraos Construction",
      metaDesc: "Commercial concrete, asphalt & masonry contractor serving Denver, Colorado since 1993. Flatwork, ADA sidewalks, parking lots. Licensed & insured. Call (303) 479-3181.",
      h1: "Commercial Concrete Contractors in Denver, Colorado",
      intro: "Andraos Construction has delivered commercial concrete, asphalt, and masonry across Denver since 1993. From downtown sidewalk replacement to industrial flatwork and parking lot rehabilitation, we serve commercial property owners, HOA boards, general contractors, and municipal clients throughout the City and County of Denver.",
      image: "andraos-construction-gallery-037-665h.jpg"
    },
    {
      slug: "aurora", name: "Aurora", county: "Arapahoe County", note: "East Metro",
      title: "Commercial Concrete & Asphalt in Aurora, CO | Andraos Construction",
      metaDesc: "Commercial concrete & asphalt contractor in Aurora, Colorado. Multifamily drive lanes, retail parking lots, ADA sidewalks. Serving Arapahoe County since 1993.",
      h1: "Commercial Concrete & Asphalt Services in Aurora, Colorado",
      intro: "Aurora property managers, retail developers, and apartment communities rely on Andraos Construction for full-scope concrete and asphalt work &mdash; multifamily drive-lane replacement, retail parking lot maintenance, and ADA-compliant sidewalk installation across Aurora and Arapahoe County.",
      image: "andraos-construction-gallery-043-665h.jpg"
    },
    {
      slug: "littleton", name: "Littleton", county: "Jefferson &amp; Arapahoe Counties", note: "South Metro",
      title: "Commercial Concrete Contractor in Littleton, CO | Andraos Construction",
      metaDesc: "Commercial concrete services in Littleton, Colorado. Capital renewal, ADA flatwork, parking lot resurfacing, snow-melt. Serving Jefferson & Arapahoe Counties.",
      h1: "Commercial Concrete Contractor Serving Littleton, Colorado",
      intro: "Andraos Construction provides commercial concrete services to Littleton property managers, retail centers, and HOA communities throughout Jefferson and Arapahoe Counties &mdash; capital renewal programs, ADA flatwork, parking lot resurfacing, and snow-melt integration.",
      image: "andraos-construction-gallery-001-665h.jpg"
    },
    {
      slug: "highlands-ranch", name: "Highlands Ranch", county: "Douglas County", note: "Douglas County",
      title: "Concrete & Asphalt Services in Highlands Ranch, CO | Andraos Construction",
      metaDesc: "Concrete & asphalt for Highlands Ranch HOAs and commercial properties. Sidewalk replacement, drive-lane rebuilds, mill & overlay. Douglas County since 1993.",
      h1: "Concrete & Asphalt Services in Highlands Ranch, Colorado",
      intro: "Highlands Ranch homeowner associations, master-planned communities, and commercial property managers retain Andraos for resident-occupied capital renewal: concrete sidewalk replacement, drive-lane rebuilds, asphalt mill &amp; overlay, and curb &amp; gutter work.",
      image: "andraos-construction-gallery-040-665h.jpg"
    },
    {
      slug: "castle-rock", name: "Castle Rock", county: "Douglas County", note: "Douglas County",
      title: "Castle Rock Commercial Concrete & Asphalt Contractor | Andraos Construction",
      metaDesc: "Commercial concrete, asphalt & masonry contractor in Castle Rock, CO. Retail, hospitality & HOA capital renewal across Douglas County since 1993.",
      h1: "Castle Rock Commercial Concrete and Asphalt Contractor",
      intro: "Serving Castle Rock retail developers, hospitality properties, and HOA communities since 1993, Andraos delivers commercial flatwork, asphalt repair, masonry site work, and full-site capital renewal across Douglas County.",
      image: "andraos-construction-gallery-022-665h.jpg"
    },
    {
      slug: "parker", name: "Parker", county: "Douglas County", note: "Douglas County",
      title: "Commercial Concrete Contractors in Parker, CO | Andraos Construction",
      metaDesc: "Self-performed commercial concrete, asphalt & masonry in Parker, Colorado. Multifamily renewal, retail rehab, municipal sidewalks. Douglas County since 1993.",
      h1: "Commercial Concrete Contractors in Parker, Colorado",
      intro: "Andraos Construction serves Parker commercial property managers, HOA boards, and general contractors with self-performed concrete, asphalt, and masonry &mdash; multifamily renewal, retail center rehab, and municipal sidewalk work throughout Parker and Douglas County.",
      image: "andraos-construction-gallery-038-665h.jpg"
    },
    {
      slug: "englewood", name: "Englewood", county: "Arapahoe County", note: "South Metro",
      title: "Englewood Commercial Concrete & Asphalt Services | Andraos Construction",
      metaDesc: "Commercial concrete & asphalt in Englewood, CO. Healthcare campuses, retail, full-site capital renewal sequenced around active tenants. Since 1993.",
      h1: "Englewood Commercial Concrete and Asphalt Services",
      intro: "Englewood and CityCenter Englewood commercial properties, healthcare campuses, and retail developments engage Andraos for concrete flatwork, asphalt maintenance, and full-site capital renewal sequenced around active tenants.",
      image: "andraos-construction-gallery-006-665h.jpg"
    },
    {
      slug: "broomfield", name: "Broomfield", county: "Broomfield County", note: "Northwest Metro",
      title: "Broomfield Commercial Concrete Contractor | Andraos Construction",
      metaDesc: "Commercial concrete, asphalt & masonry in Broomfield, CO. Mixed-use developments, office parks, HOA communities. Capital renewal & tenant improvement.",
      h1: "Broomfield Commercial Concrete Contractor",
      intro: "Andraos Construction provides commercial concrete, asphalt, and masonry services across Broomfield's mixed-use developments, office parks, and HOA communities &mdash; full-scope capital renewal and tenant improvement support.",
      image: "andraos-construction-gallery-027-665h.jpg"
    },
    {
      slug: "boulder", name: "Boulder", county: "Boulder County", note: "Boulder County",
      title: "Commercial Concrete & Masonry Contractors in Boulder, CO | Andraos Construction",
      metaDesc: "Commercial concrete & sandstone masonry in Boulder, Colorado. Hospitality, retail districts & historic properties. Marriott drive court, The Village. Since 1993.",
      h1: "Commercial Concrete & Masonry Contractors in Boulder, Colorado",
      intro: "Boulder hospitality groups, retail districts, and historic property owners trust Andraos for commercial concrete and sandstone masonry work. The Boulder Marriott drive-court, The Village retail district masonry, and downtown sidewalk programs are among our recent local engagements.",
      image: "andraos-construction-gallery-017-665h.jpg"
    },
    {
      slug: "westminster", name: "Westminster", county: "Jefferson &amp; Adams Counties", note: "North Metro",
      title: "Westminster Commercial Concrete & Asphalt Services | Andraos Construction",
      metaDesc: "Commercial concrete & asphalt in Westminster, CO. Retail centers, multifamily, full-site parking lot rehabilitation. Jefferson & Adams Counties since 1993.",
      h1: "Westminster Commercial Concrete and Asphalt Services",
      intro: "Westminster retail centers, multifamily communities, and commercial property managers retain Andraos for concrete flatwork, asphalt mill &amp; overlay, and full-site parking lot rehabilitation across Jefferson and Adams Counties.",
      image: "andraos-construction-gallery-044-665h.jpg"
    },
    {
      slug: "thornton", name: "Thornton", county: "Adams County", note: "North Metro",
      title: "Commercial Concrete Contractor in Thornton, CO | Andraos Construction",
      metaDesc: "Commercial concrete & asphalt in Thornton, Colorado. Tenant-occupied programs, ADA sidewalks, parking lot maintenance. Capital renewal since 1993.",
      h1: "Commercial Concrete Contractor in Thornton, Colorado",
      intro: "Thornton property managers, retail developers, and HOA communities engage Andraos for resident- and tenant-occupied concrete and asphalt programs &mdash; capital renewal, ADA sidewalk installation, and parking lot maintenance.",
      image: "andraos-construction-gallery-041-665h.jpg"
    },
    {
      slug: "arvada", name: "Arvada", county: "Jefferson County", note: "Northwest Metro",
      title: "Arvada Commercial Concrete & Asphalt Services | Andraos Construction",
      metaDesc: "Self-performed concrete, asphalt & masonry in Arvada, CO. Olde Town retail district, HOA communities, commercial properties. Jefferson County since 1993.",
      h1: "Arvada Commercial Concrete & Asphalt Services",
      intro: "Arvada commercial properties, the Olde Town retail district, and HOA communities engage Andraos Construction for self-performed concrete flatwork, asphalt repair, and masonry site work throughout Jefferson County.",
      image: "andraos-construction-gallery-042-665h.jpg"
    },
    {
      slug: "longmont", name: "Longmont", county: "Boulder &amp; Weld Counties", note: "Boulder County",
      title: "Commercial Concrete & Asphalt Contractor in Longmont, CO | Andraos Construction",
      metaDesc: "Commercial concrete & asphalt in Longmont, Colorado. Manufacturing campuses, HOA communities, property management. Boulder & Weld Counties since 1993.",
      h1: "Commercial Concrete and Asphalt Contractor in Longmont, Colorado",
      intro: "Longmont commercial property managers, manufacturing campuses, and HOA communities retain Andraos for full-scope concrete and asphalt programs across Boulder and Weld Counties &mdash; capital renewal and tenant improvement support.",
      image: "andraos-construction-gallery-045-665h.jpg"
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
