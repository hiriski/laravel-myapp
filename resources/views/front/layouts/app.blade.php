@include('front.hi')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Auto Generate for SEO -->
{!! SEOMeta::generate() !!}
<meta name="msapplication-TileColor" content="#f7f7f7"/>
<meta name="theme-color" content="#f7f7f7"/>

<!-- Auto OpenGraph -->
{!! OpenGraph::generate() !!}
@if(Route::currentRouteName() === "blog.show")
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "@yield('uri')"
    },
    "headline": "@yield('headline')",
    "image": [
        "@yield('image')",
    ],  
    "author": {
        "@type": "Person",
        "name": "Riski"
    },  
    "publisher": {
        "@type": "Organization",
        "name": "Riski Web ID",
        "logo": {
            "@type": "ImageObject",
            "url": "https://riski.web.id/logo-sm.png",
            "width": 300,
            "height": 60
        }
    },
    "datePublished": "@yield('datePublished')",
    "dateModified": "@yield('dateModified')"
}
</script>
@endif
@if(Route::currentRouteName() === "index")
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "WebSite",
    "name": "Riski Web ID",
    "url": "https://riski.web.id",
    "potentialAction": {
        "@type": "SearchAction",
        "target": "https://riski.web.id/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
    }
}
</script>
@endif
@if(Route::currentRouteName() === 'about')
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Person",
        "name": "Riski Web ID",
        "url": "https://riski.web.id",
        "image": "picurl.jpg",
        "sameAs": [
            "https://facebook.com",
            "https://twitter.com",
            "https://instagram.com",
            "https://youtube.com/riskiwebid",
            "https://github.com",
            "https://riski.web.id"
        ]  
    }
    </script>
@endif
@if(Route::currentRouteName() === "Hanya untuk breadcrumb")
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Books",
            "item": "https://example.com/books"
        },{
            "@type": "ListItem",
            "position": 2,
            "name": "Authors",
            "item": "https://example.com/books/authors"
        },{
            "@type": "ListItem",
            "position": 3,
            "name": "Ann Leckie",
            "item": "https://example.com/books/authors/annleckie"
        }]
    }
</script>
@endif
@if(Route::currentRouteName() === "product.show")
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "Product",
    "name": "Executive Anvil",
    "image": [
        "https://example.com/photos/1x1/photo.jpg",
        "https://example.com/photos/4x3/photo.jpg",
        "https://example.com/photos/16x9/photo.jpg"
        ],
    "description": "Sleeker than ACME's Classic Anvil, the Executive Anvil is perfect for the business traveler looking for something to drop from a height.",
    "sku": "0446310786",
    "mpn": "925872",
    "brand": {
        "@type": "Brand",
        "name": "ACME"
    },
    "review": {
        "@type": "Review",
        "reviewRating": {
            "@type": "Rating",
            "ratingValue": "4",
            "bestRating": "5"
        },
        "author": {
            "@type": "Person",
            "name": "Fred Benson"
        }
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.4",
        "reviewCount": "89"
    },
    "offers": {
        "@type": "Offer",
        "url": "https://example.com/anvil",
        "priceCurrency": "USD",
        "price": "119.99",
        "priceValidUntil": "2020-11-20",
        "itemCondition": "https://schema.org/UsedCondition",
        "availability": "https://schema.org/InStock",
        "seller": {
            "@type": "Organization",
            "name": "Executive Objects"
        }
    }
}
</script>
@endif
{{-- Styles --}}
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('fonts/hk-grotesk/style.css') }}">
<link rel="stylesheet" href="{{ asset('fonts/material-icons/material-icons.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

@if(Route::currentRouteName() === "blog.index")
<body data-theme="light" data-page="blog-index">
@elseif(Route::currentRouteName() === "blog.show")
<body data-theme="light" data-page="blog-single">
@else
<body data-theme="light">
@endif

    <div id="AnhOi" data-version="one" data-version-name="anhoi-mot">
        @include('front.components.preload')
        @if( Route::getCurrentRoute()->uri === "/" || Route::getCurrentRoute()->uri === "blog")
            @include('front.layouts.hero')
        @endif
        <main id="main">
            @yield('content')
        </main>
        @include('front.layouts.footer')
    </div>

@stack('script')
</body>
</html>