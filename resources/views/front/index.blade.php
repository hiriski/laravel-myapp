@extends('front.layouts.app')

@section('index-json-ld')
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
@endsection

@section('content')
	<div class="Anh">
		<div class="__o__">
			<div class="__">

				@empty(!$works)
					@include('front.layouts.works')
				@endempty
				
				@empty(!$featured_posts)
					@include('front.layouts.featured-post')
				@endempty

				@empty(!$posts)
					@include('front.layouts.blog-index')
				@endempty

			</div>
		</div>
	</div>
@endsection
@push('script')
<script src="{{ asset('js/blurry-load.min.js') }}"></script>
<script src="{{ asset('js/typed.min.js') }}"></script>
@endpush