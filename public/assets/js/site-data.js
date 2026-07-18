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
      title: "Retail Commercial Concrete",
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

  var PROJECTS = [];
  var FILTERS = [];

  /* ---- "Why Andraos" points --------------------------------------------- */
  var WHY = [
    { number: "01", title: "Single point of accountability", body: "One Andraos PM owns each job from walkthrough through warranty. No handoffs, no scope drift." },
    { number: "02", title: "One accountable team",           body: "Every concrete, asphalt, and masonry scope is managed in-house by Andraos — no finger-pointing, no dropped handoffs." },
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

  /* ---- Service Areas / Locations --------------------------------------- */
  var LOCATIONS = [
    {
      slug: "denver", name: "Denver", county: "Denver County", note: "Denver Metro",
      title: "Commercial Concrete Contractors Denver, CO | Andraos Construction",
      metaDesc: "Denver commercial concrete, asphalt paving & masonry contractor since 1993. Flatwork, parking lots, ADA sidewalks, snow-melt systems. Denver County.",
      h1: "Commercial Concrete Contractors Serving Denver, Colorado",
      intro: "Andraos Construction is Denver's trusted commercial concrete, asphalt, and masonry trade partner &mdash; delivering self-performed flatwork, parking lot pavement maintenance, structural site work, and full-site capital renewal.",
      image: "andraos-construction-gallery-037-665h.jpg"
    },
    {
      slug: "lakewood", name: "Lakewood", county: "Jefferson County", note: "West Metro",
      title: "Lakewood Commercial Concrete & Asphalt Contractor | Andraos Construction",
      metaDesc: "Lakewood commercial concrete, asphalt paving & masonry contractor. HOA capital renewal, retail rehab, municipal flatwork. Jefferson County since 1993.",
      h1: "Lakewood Commercial Concrete and Asphalt Contractor",
      intro: "Lakewood commercial properties, HOAs, and municipal projects rely on Andraos for concrete, asphalt, and masonry. We deliver flatwork, pavement overlays, stone site work, and capital renewal programs throughout Jefferson County.",
      image: "andraos-construction-gallery-028-665h.jpg"
    },
    {
      slug: "littleton", name: "Littleton", county: "Jefferson &amp; Arapahoe Counties", note: "South Metro",
      title: "Commercial Concrete Contractor Littleton, CO | Andraos Construction",
      metaDesc: "Commercial concrete contractor in Littleton, Colorado. Flatwork, curb & gutter, parking lot maintenance & snow-melt integration. Since 1993.",
      h1: "Commercial Concrete Contractor Serving Littleton, Colorado",
      intro: "Andraos Construction provides commercial concrete services to Littleton property managers, retail centers, and HOA communities throughout Jefferson and Arapahoe Counties &mdash; capital renewal programs, ADA flatwork, parking lot resurfacing, and snow-melt integration.",
      image: "andraos-construction-gallery-001-665h.jpg"
    },
    {
      slug: "highlands-ranch", name: "Highlands Ranch", county: "Douglas County", note: "Douglas County",
      title: "Concrete & Asphalt Contractor Highlands Ranch, CO",
      metaDesc: "Commercial concrete, asphalt, masonry & snow-melt in Highlands Ranch & Douglas County since 1993. Call (303) 915-3703.",
      h1: "Concrete & Asphalt Services in Highlands Ranch, Colorado",
      intro: "Highlands Ranch homeowner associations, master-planned communities, and commercial property managers retain Andraos for resident-occupied capital renewal: concrete sidewalk replacement, drive-lane rebuilds, asphalt mill &amp; overlay, and curb &amp; gutter work.",
      image: "andraos-construction-gallery-040-665h.jpg"
    },
    {
      slug: "castle-rock", name: "Castle Rock", county: "Douglas County", note: "Douglas County",
      title: "Concrete & Asphalt Contractor Castle Rock, CO",
      metaDesc: "Commercial concrete, asphalt, masonry & snow-melt in Castle Rock & Douglas County since 1993. Request an Estimate: (303) 915-3703.",
      h1: "Castle Rock Commercial Concrete and Asphalt Contractor",
      intro: "Serving Castle Rock retail developers, hospitality properties, and HOA communities since 1993, Andraos delivers commercial flatwork, asphalt repair, masonry site work, and full-site capital renewal across Douglas County.",
      image: "andraos-construction-gallery-022-665h.jpg"
    },
    {
      slug: "parker", name: "Parker", county: "Douglas County", note: "Douglas County",
      title: "Concrete & Asphalt Contractor Parker, CO | Andraos",
      metaDesc: "Commercial concrete, asphalt, masonry & snow-melt in Parker & Douglas County since 1993. One accountable contractor. (303) 915-3703.",
      h1: "Commercial Concrete Contractors in Parker, Colorado",
      intro: "Andraos Construction serves Parker commercial property managers, HOA boards, and general contractors with self-performed concrete, asphalt, and masonry &mdash; multifamily renewal, retail center rehab, and municipal sidewalk work throughout Parker and Douglas County.",
      image: "andraos-construction-gallery-038-665h.jpg"
    },
    {
      slug: "englewood", name: "Englewood", county: "Arapahoe County", note: "South Metro",
      title: "Concrete & Asphalt Contractor Englewood, CO",
      metaDesc: "Commercial concrete, asphalt, masonry & snow-melt in Englewood & the Denver metro since 1993. Request an estimate: (303) 915-3703.",
      h1: "Englewood Commercial Concrete and Asphalt Services",
      intro: "Englewood and CityCenter Englewood commercial properties, healthcare campuses, and retail developments engage Andraos for concrete flatwork, asphalt maintenance, and full-site capital renewal sequenced around active tenants.",
      image: "andraos-construction-gallery-006-665h.jpg"
    },
    {
      slug: "broomfield", name: "Broomfield", county: "Broomfield County", note: "Northwest Metro",
      title: "Concrete & Asphalt Contractor Broomfield, CO
",
      metaDesc: "Commercial concrete, asphalt, masonry & snow-melt in Broomfield & the north metro since 1993. Call or text (303) 915-3703.",
      h1: "Broomfield Commercial Concrete Contractor",
      intro: "Andraos Construction provides commercial concrete, asphalt, and masonry services across Broomfield's mixed-use developments, office parks, and HOA communities &mdash; full-scope capital renewal and tenant improvement support.",
      image: "andraos-construction-gallery-027-665h.jpg"
    },
    {
      slug: "boulder", name: "Boulder", county: "Boulder County", note: "Boulder County",
      title: "Concrete & Asphalt Contractor Boulder, CO | Andraos",
      metaDesc: "Commercial concrete, asphalt, masonry & snow-melt in Boulder & the surrounding area since 1993. Request an Estimate: (303) 915-3703.",
      h1: "Commercial Concrete & Masonry Contractors in Boulder, Colorado",
      intro: "Boulder hospitality groups, retail districts, and historic property owners trust Andraos for commercial concrete and sandstone masonry work. The Boulder Marriott drive-court, The Village retail district masonry, and downtown sidewalk programs are among our recent local engagements.",
      image: "andraos-construction-gallery-017-665h.jpg"
    },
    {
      slug: "westminster", name: "Westminster", county: "Jefferson &amp; Adams Counties", note: "North Metro",
      title: "Concrete & Asphalt Contractor Westminster, CO",
      metaDesc: "Commercial concrete, asphalt, masonry & snow-melt in Westminster & the north metro since 1993. Call (303) 915-3703.",
      h1: "Westminster Commercial Concrete and Asphalt Services",
      intro: "Westminster retail centers, multifamily communities, and commercial property managers retain Andraos for concrete flatwork, asphalt mill &amp; overlay, and full-site parking lot rehabilitation across Jefferson and Adams Counties.",
      image: "andraos-construction-gallery-044-665h.jpg"
    },
    {
      slug: "thornton", name: "Thornton", county: "Adams County", note: "North Metro",
      title: "Concrete & Asphalt Contractor Thornton, CO",
      metaDesc: "Commercial concrete, asphalt, masonry & snow-melt in Thornton & the north metro since 1993. Request an estimate: (303) 915-3703.",
      h1: "Commercial Concrete Contractor in Thornton, Colorado",
      intro: "Thornton property managers, retail developers, and HOA communities engage Andraos for resident- and tenant-occupied concrete and asphalt programs &mdash; capital renewal, ADA sidewalk installation, and parking lot maintenance.",
      image: "andraos-construction-gallery-041-665h.jpg"
    },
    {
      slug: "arvada", name: "Arvada", county: "Jefferson County", note: "Northwest Metro",
      title: "Concrete & Asphalt Contractor Arvada, CO | Andraos",
      metaDesc: "Commercial concrete, asphalt, masonry & snow-melt in Arvada & the northwest metro since 1993. Call or text (303) 915-3703.",
      h1: "Arvada Commercial Concrete & Asphalt Services",
      intro: "Arvada commercial properties, the Olde Town retail district, and HOA communities engage Andraos Construction for self-performed concrete flatwork, asphalt repair, and masonry site work throughout Jefferson County.",
      image: "andraos-construction-gallery-042-665h.jpg"
    },
    {
      slug: "longmont", name: "Longmont", county: "Boulder &amp; Weld Counties", note: "Boulder County",
      title: "Concrete & Asphalt Contractor Longmont, CO",
      metaDesc: "Commercial concrete, asphalt, masonry & snow-melt in Longmont & the north Front Range since 1993. Request an Estimate: (303) 915-3703.",
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
