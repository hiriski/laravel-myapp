@extends('front.layouts.app')
@isset($theme)
    @section('headline', $theme->title)
    @section('uri', route('theme.show', $theme->slug))
    @section('image', $theme->image)
    @section('datePublished', date('Y-m-d', strtotime($theme->created_at)))
    @section('dateModified', date('Y-m-d', strtotime($theme->created_at)))
@endisset
@section('content')
<div class="Anh">
    @include('front.components.navigation')
    <div class="__o__">
        @include('front.themes.themes.' . $theme->slug)
        @include('front.components.share-button')
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