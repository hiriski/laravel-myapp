{{-- inactive when development ->>> @include('front.hi') --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Front</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('fonts/hk-grotesk/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/material-icons/material-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body data-theme="light">
<div id="AnhOi">
    @include('front.layouts.hero')
    <main id="main">
        @yield('content')
    </main> 
</div>
</body>
</html>
