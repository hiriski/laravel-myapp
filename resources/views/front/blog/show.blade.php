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