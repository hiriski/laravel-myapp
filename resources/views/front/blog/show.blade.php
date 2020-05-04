@extends('front.layouts.app')
{{-- Json LD --}}
@isset($post)
	@section('single-blog-json-ld')
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "BlogPosting",
		"mainEntityOfPage": {
			"@type": "WebPage",
			"@id": "{{ route('blog.show', $post->slug) }}"
		},
		"headline": "{{ $post->title }}",
		"image": [
			"{{ $post->image }}",
		],  
		"author": {
			"@type": "Person",
			"name": "Riski"
		},  
		"publisher": {
			"@type": "Organization",
			"name": "Riski Web ID",
			"logo": {
				"@type": "ImageObject",
				"url": "https://riski.web.id/logo-sm.png",
				"width": 300,
				"height": 60
			}
		},
		"datePublished": "{{ date('Y-m-d', strtotime($post->created_at)) }}",
		"dateModified": "{{ date('Y-m-d', strtotime($post->updated_at)) }}"
	}
	</script>
	@endsection
		
	{{-- Breadcrum JSON ld --}}
	@section('breadcrumbs-json-ld')
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "BreadcrumbList",
			"itemListElement": [{
				"@type": "ListItem",
				"position": 1,
				"name": "Blog",
				"item": "{{ route('blog.index') }}"
			},{
				"@type": "ListItem",
				"position": 2,
				"name": "{{ $post->category->name }}",
				"item": "{{ route('blog.show', $post->category->slug) }}"
			},{
				"@type": "ListItem",
				"position": 3,
				"name": "{{ $post->title }}",
				"item": "{{ route('blog.show', $post->slug) }}"
			}]
		}
	</script>
	@endsection
@endisset

@section('content')

<div class="Anh">

{{-- Subscribe message response --}}
@if(Session::has('subscribe_message'))
  <h1>{{ Session('subscribe_message') }} </h1>
@endif

  @include('front.components.navigation')
  <div class="__o__">
  <div class="__">
    @include('front.layouts.single-blog-v2')
    @include('front.components.blog-single-pager')
    @include('front.components.newsletter')
    @include('front.components.share-button')
    @if($post->show_author)
    @include('front.components.post-author')
    @endif
    @include('front.layouts.related-post')
  </div>
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