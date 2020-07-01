<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('favicon.ico') }}"/>

	@if(!empty(SEOMeta::generate()))
	{!! SEOMeta::generate() !!}
	@endif

	<!-- Generate theme color -->
	<meta name="msapplication-TileColor" content="{{ $tile_color ?? "#fbfbfb" }}"/>
	<meta name="theme-color" content="{{ $tile_color ?? "#fbfbfb" }}"/>

	@if(!empty(OpenGraph::generate()))
	{!! OpenGraph::generate() !!}
	@endif
	
	@yield('single-blog-json-ld')
	@yield('breadcrumbs-json-ld')
	@yield('index-json-ld')
	@yield('about-json-ld')

	<script> var currentRouteName = "{{ Route::currentRouteName() }}"; </script>

	{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
	<link rel="stylesheet" href="{{ asset('fonts/hk-grotesk/style.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/material-icons/material-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('css/rux.css') }}">
</head>

{{-- dinamic attribute data-page value --}}
<body class='default' data-page="{{ str_replace('.', '-', Route::currentRouteName()) }}">
	<div id="rux">
		@include('front.layouts.header')
		{{-- @include('front.components.preload') --}}
		@if( Route::currentRouteName() === "index")
			@include('front.layouts.hero')
		@endif
		<main>
			@yield('content')
		</main>
		@include('front.layouts.footer')
	</div>
	@stack('script')

	<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>