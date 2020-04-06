@extends('front.layouts.app')
@isset($post)
    @section('title', "$post->title")
    @section('description', "$post->description")
    @section('keywords', "$post->keywords")
    @section('og-image', getBlogImage($post->featured_image))
@endisset
@section('content')
<div class="Anh">
    <div class="__o__">
        <div class="__">
            @include('front.layouts.single-blog-v2')
        </div>
    </div>
</div>
@endsection

@push('script')
<script src="{{ asset('js/prism.js') }}"></script>
@endpush