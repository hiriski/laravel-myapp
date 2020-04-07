@extends('front.layouts.app')
@isset($post)
    @section('headline', $post->title)
    @section('uri', route('blog.show', $post->slug))
    @section('image', $post->image)
    @section('datePublished', date('Y-m-d', strtotime($post->created_at)))
    @section('dateModified', date('Y-m-d', strtotime($post->created_at)))
@endisset
@section('content')
<div class="Anh">
    @include('front.components.navigation')
    <div class="__o__">
        <div class="__">
            @include('front.layouts.single-blog-v2')
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