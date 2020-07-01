@extends('front.layouts.app')


@section('content')
<div id="r">
	<div class="r">

		@isset($posts)
			@empty(!$posts)
				@include('front.layouts.main_part.post-list')
			@endempty
		@endisset

	</div>
</div>
@endsection


@push('script')
	<script src="{{ asset('js/lazyload.min.js') }}"></script>
	<script>
		var lazyLoadInstance = new LazyLoad({
		elements_selector: ".lz_"
			// ... more custom settings?
		});
	</script>
	<script src="{{ asset('js/blurry-load.min.js') }}"></script>

	{{-- Disquss comment count --}}
	<script id="dsq-count-scr" src="//riskiwebid.disqus.com/count.js" async></script>
@endpush