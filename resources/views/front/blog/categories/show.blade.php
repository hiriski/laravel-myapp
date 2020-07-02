@extends('front.layouts.app')

@section('content')
    {{-- Blog category waves --}}
    @include('front.components.blog-category-top')
    <div id="r">
        <div class="r">
            @include('front.components.category-blog-title')
            @include('front.layouts.main_part.post-list')
            @include('front.components.category-blog-pager')
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
	<script src="{{ asset('js/prism.js') }}"></script>
@endpush