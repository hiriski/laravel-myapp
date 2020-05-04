{{-- @include('front.hi') --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('favicon.ico') }}"/>

	@if(!empty(SEOMeta::generate()))
	<!-- Auto SEO Meta Tag -->
	{!! SEOMeta::generate() !!}
	@endif

	<!-- Generate theme color -->
	<meta name="msapplication-TileColor" content="{{ $tile_color ?? "#f7f7f7" }}"/>
	<meta name="theme-color" content="{{ $tile_color ?? "#f7f7f7" }}"/>

	@if(!empty(OpenGraph::generate()))
	<!-- Auto OpenGraph -->
	{!! OpenGraph::generate() !!}
	@endif

	{{-- JSON ld for single blog --}}
	@yield('single-blog-json-ld')
	@yield('breadcrumbs-json-ld')
	@yield('index-json-ld')
	@yield('about-json-ld')

	<script> var currentRouteName = "{{ Route::currentRouteName() }}"; </script>

	<script src="{{ asset('js/app.js') }}" defer></script>
	<link rel="stylesheet" href="{{ asset('fonts/hk-grotesk/style.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/material-icons/material-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

{{-- Value data page akan dinamis berdasarkan route masing2 --}}
<body data-theme="light" data-page="{{ str_replace('.', '-', Route::currentRouteName()) }}">
	<div id="AnhOi" data-version="one" data-version-name="anhoi-mot">
		{{-- @include('front.components.preload') --}}
		@if( Route::currentRouteName() === "index")
			@include('front.layouts.hero-v2')
		@endif
		<main id="main">
			@yield('content')
			@include('front.layouts.footer-v2')
		</main>
		<div class="___g--dark___" data-show="false"></div>
	</div>
	@stack('script')
</body>
</html>