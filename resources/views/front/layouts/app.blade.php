{{-- inactive when development ->>> @include('front.hi') --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @isset($title)
        <title>Front</title>
    @endisset

    @isset($description)
        <meta name="description" content="{{ $description }}">
    @endisset

    @isset($keywords)
        <meta name="keywords" content="{{ $keywords }}">
    @endisset

    <meta name="author" content="Riski">

    <meta property="og:site_name" content="Riski Web ID">
    <meta property="og:type" content="Website">

    @isset($title)
        <meta property="og:title" content="{{ $title }}"/>
    @endisset

    @isset($description)
        <meta property="og:description" content="{{ $description }}"/>
    @endisset

    <meta name="msapplication-TileColor" content="#f7f7f7">
    <meta name="theme-color" content="#f7f7f7">

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

@include('front.components.preload')

@if(Route::getCurrentRoute()->uri === "/")
    @include('front.layouts.hero')
@endif

@if(Route::getCurrentRoute()->uri === "blog")
    @include('front.layouts.hero')
@endif

    <div id="AnhOi">
        <main id="main">
            @yield('content')
        </main> 
    </div>
</body>
</html>