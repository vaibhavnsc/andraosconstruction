<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('meta_title', 'Andraos Construction')</title>
<meta name="description" content="@yield('meta_description', '')">

<link rel="canonical" href="@yield('canonical_url', request()->fullUrl())">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logon.ico') }}">
<link rel="shortcut icon" href="{{ asset('assets/images/logon.ico') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link
    href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,400;0,6..72,500;0,6..72,600&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap"
    rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
<link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/site.css') }}">
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="{{ asset('assets/js/script.js') }}" defer></script>
<script src="{{ asset('assets/js/site-data.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="{{ asset('assets/js/site.js') }}" defer></script>

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@graph": [{
        "@type": "LocalBusiness",
        "name": "Andraos Construction",
        "url": "https://andraosconstruction.com/",
        "description": "Andraos Construction is a commercial concrete, asphalt, and masonry contractor serving Denver and the Colorado Front Range, delivering durable construction solutions with expert craftsmanship, reliable project management, and a commitment to quality.",
        "telephone": "(303)915-3703",
        "logo": "https://andraosconstruction.com/assets/images/logo.png",
        "@id": "https://andraosconstruction.com/contact",
        "image": "https://andraosconstruction.com/assets/images/About.jpg",
        "identifier": [
            "https://www.google.com/search?q=andraos+construction&oq=Andra&gs_lcrp=EgZjaHJvbWUqCAgCEEUYJxg7MgYIABBFGDsyBggBEEUYOTIICAIQRRgnGDsyBggDEEUYOzIGCAQQIxgnMgcIBRAAGIAEMgcIBhAAGIAEMgcIBxAAGIAEMg4ICBAuGAoYCxixAxiABDIHCAkQABiABNIBCTQ4ODVqMGoxNagCCLACAfEFWbqPHcaxRg0&sourceid=chrome&source=chrome.rb&ie=UTF-8"
        ],
        "alternateName": [
            "Concrete Contractor Denver",
            "Commercial Concrete Contractor",
            "HOA Concrete Contractor",
            "Concrete Repair Services",
            "Commercial Concrete Repair",
            "Commercial Concrete Contractor in Denver",
            "Commercial Concrete Contractor in the Colorado Front Range",
            "Commercial Concrete Contractor",
            "Commercial Concrete Services",
            "Denver Commercial Concrete",
            "Concrete Services for Property Managers"
        ],
        "hasMap": "https://maps.app.goo.gl/yMdLNWAhG4gEUgTp8",
        "currenciesAccepted": "USD",
        "priceRange": "$$",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "9331 Commerce Center St Unit A2",
            "addressLocality": "Highlands Ranch",
            "addressRegion": "Colorado",
            "postalCode": "80129",
            "addressCountry": "US"
        },
        "openingHours": ["Mon 00:08-17:00", "Tus 00:08-17:00", "Wed 00:08-17:00", "Thurs 00:08-17:00",
            "Fri 00:08-17:00"
        ],
        "disambiguatingDescription": "Andraos Construction provides commercial concrete, asphalt, masonry, and site development services for businesses and property owners throughout Denver, CO, and the Colorado Front Range.",
        "mainEntityOfPage": "https://andraosconstruction.com/",
        "sameAs": [
            "https://www.linkedin.com/in/andraos-construction-057074a7/",
            "https://www.yelp.com/biz/andraos-construction-highlands-ranch",
            "https://maps.app.goo.gl/yMdLNWAhG4gEUgTp8"
        ],
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 39.5465276,
            "longitude": -105.0377399
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "5.0",
            "reviewCount": "17"
        },
        "areaServed": ["Colorado", "Denver", "Highlands Ranch", "Englewood", "Westminster", "Longmont",
            "Thornton", "Lakewood", "Castle Rock", "Broomfield", "Littleton", "Parker", "Boulder", "Arvada"
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Commercial Concrete Services,Denver CO",
            "@id": "https://andraosconstruction.com/contact",
            "additionalType": "Commercial Concrete Services",
            "url": "https://andraosconstruction.com/contact",
            "itemListElement": [{
                "@type": "Offer",
                "itemOffered": [{
                        "@type": "Service",
                        "name": "Commercial Concrete Services",
                        "@id": "https://andraosconstruction.com/commercial-concrete-services",
                        "url": "https://andraosconstruction.com/commercial-concrete-services",
                        "description": "Andraos Construction provides professional commercial concrete services in Denver, CO, and throughout the Colorado Front Range, specializing in concrete flatwork, sidewalks, curbs, gutters, ADA ramps, foundations, loading docks, parking lots, concrete repair, excavation, and site preparation for commercial, industrial, HOA, and municipal projects."
                    },
                    {
                        "@type": "Service",
                        "name": "HOA & Property Management",
                        "@id": "https://andraosconstruction.com/hoa-and-residential-services",
                        "url": "https://andraosconstruction.com/hoa-and-residential-services",
                        "description": "Andraos Construction provides professional HOA and property management construction services in Denver, CO, and throughout the Colorado Front Range, specializing in concrete repairs, asphalt maintenance, sidewalks, curbs, parking lots, drainage improvements, and community infrastructure projects that enhance safety, functionality, and long-term property value."
                    },
                    {
                        "@type": "Service",
                        "name": "Asphalt Paving & Repair",
                        "@id": "https://andraosconstruction.com/asphalt-services",
                        "url": "https://andraosconstruction.com/asphalt-services",
                        "description": "Andraos Construction provides expert asphalt paving and pavement maintenance services in Denver, CO, and across the Colorado Front Range, specializing in asphalt paving, milling and overlay, sealcoating, crack sealing, infrared asphalt repair, striping, signage, and full-depth pavement replacement for commercial, HOA, municipal, and industrial properties."
                    },
                    {
                        "@type": "Service",
                        "name": "Commercial Masonry Services",
                        "@id": "https://andraosconstruction.com/masonry-services",
                        "url": "https://andraosconstruction.com/masonry-services",
                        "description": "Andraos Construction provides expert commercial masonry services in Denver, CO, and throughout the Colorado Front Range, specializing in brick, block, stone, CMU construction, retaining walls, planters, architectural masonry, tuckpointing, masonry restoration, and structural sitework for commercial, HOA, industrial, and municipal properties."
                    },
                    {
                        "@type": "Service",
                        "name": "Snow Melt Systems",
                        "@id": "https://andraosconstruction.com/snow-melt-services",
                        "url": "https://andraosconstruction.com/snow-melt-services",
                        "description": "Andraos Construction provides professional hydronic snow melt system design and installation services in Denver, CO, and throughout the Colorado Front Range, delivering energy-efficient heated driveways, sidewalks, stairs, ramps, and commercial walkways that improve safety and eliminate snow and ice buildup during Colorado winters."
                    },
                    {
                        "@type": "WebSite",
                        "publisher": {
                            "@id": "https://maps.app.goo.gl/yMdLNWAhG4gEUgTp8"
                        },
                        "name": "Andraos Construction",
                        "@id": "https://andraosconstruction.com/",
                        "url": "https://andraosconstruction.com/",
                        "keywords": [
                            "Commercial Concrete Work",
                            "HOA/property Managers",
                            "General Contractors",
                            "Commercial Property Managers",
                            "Concrete Commercial Contractors Denver Co",
                            "Concrete Contractor in Denver Colorado",
                            "Local Asphalt Contractor Broomfield",
                            "Asphalt Contractor Contractor Broomfield",
                            "Asphalt Contractor Company Boulder",
                            "Asphalt Contractor in Aurora Co",
                            "Asphalt Contractor Thornton Co",
                            "Paving Contractor Near Thornton",
                            "Thornton Asphalt Contractors",
                            "Asphalt Contractor Services Longmont",
                            "Concrete Concreting",
                            "Boulder Asphalt Contractors",
                            "Commercial Concreting",
                            "Concrete Contractors Colorado",
                            "Concrete Flatwork Contractor",
                            "Asphalt Contractor Contractor Longmont"
                        ]
                    }
                ]
            }]
        }
    }]
}
</script>