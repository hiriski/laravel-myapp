<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Global script for vue version -->
    <script src="{{ asset('js/app-vue.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="admin-area">
    <div id="admin-area">
        <main id="main">
            @include('admin.vue.layouts.sidebar')
            @include('partials/vue-icon')
            @include('partials/to-blade')
            @yield('content')
        </main> 
        {{-- @include('layouts.lang') --}}
    </div>
</body>
</html>
