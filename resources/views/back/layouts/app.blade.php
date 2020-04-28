<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $page_title ?? config('app.name', 'Laravel') }}</title>
    
    <!-- JQuery -->
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    
    <!-- buat siapa aja yang membutuhkan -->
    @stack('swal')
    @stack('swal-script')

    <!-- Tinymce -->
    <script src="{{ asset('libs/tinymce/tinymce.min.js') }}"></script>

    <!-- Admin Script (for blade version) -->
    <script src="{{ asset('js/admin.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/back/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/back/app.css') }}" rel="stylesheet">

    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
</head>
<body class="admin-area">
    <div id="admin-area">
        <main id="main">
            @include('back.layouts.sidebar')
            @include('back.partials/to-vue')
            @yield('content')
        </main> 
        {{-- @include('layouts.lang') --}}
    </div>
</body>
</html>
