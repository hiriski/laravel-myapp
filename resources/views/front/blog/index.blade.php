@extends('front.layouts.app')
@section('title', 'Blog')
@section('description', 'Blog index riski web id')
@section('keywords', 'Blog riski web id')
@section('content')
<div class="Anh">
    <div class="__o__">
        <div class="__">
            @include('front.layouts.blog-index')
            @include('front.components.blog-pager')
        </div>
    </div>
</div>
@endsection
@push('script')
<script src="{{ asset('js/blurry-load.min.js') }}"></script>
@endpush