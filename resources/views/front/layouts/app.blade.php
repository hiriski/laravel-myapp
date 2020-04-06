{{-- inactive when development ->>> @include('front.hi') --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- HTML Meta Tags --}}
    <title>@yield('title') | Riski Web ID</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="author" content="Riski, hi@riski.web.id"/>
    <meta name="copyright" content="Riski Web ID"/>
    <meta name="designer" content="Riski "/>
    <meta name="robots" content="max-snippet:120"/>
    <meta name="msapplication-TileColor" content="#f7f7f7"/>
    <meta name="theme-color" content="#f7f7f7"/>

    {{-- Meta Tags OpenGraph --}}
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:site_name" content="Riski Web ID"/>
    <meta property="og:type" content="Website"/>


    @if(Route::currentRouteName() === "blog.show")
        <meta name="og:image" content="@section('og-image')"/>
    @else
        {{-- <meta name="og:image" content="default-image-here"/> --}}
    @endif

    @if(Route::currentRouteName() === "blog.show")
        <meta name="og:type" content="blog.article"/>
    @else
        <meta name="og:type" content="website"/>
    @endif

    <meta name="og:title" content="@yield('title')"/>
    <meta name="og:url" content="{{ url()->current() }}"/>
    <meta name="og:site_name" content="Riski Web ID"/>
    <meta name="og:description" content="@yield('description')"/>
    
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