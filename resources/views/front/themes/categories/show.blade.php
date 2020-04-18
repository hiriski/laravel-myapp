@extends('front.layouts.app')
@section('content')
{{-- Blog Category Background Color --}}
@include('front.components.blog-category-top')
<div class="Anh">
    @include('front.components.navigation')
    <div class="__o__">
        <div class="__">
        @include('front.layouts.category-theme')
        @include('front.components.category-blog-pager')
        </div>
    </div>
</div>
@endsection
@push('script')
<script src="{{ asset('js/blurry-load.min.js') }}"></script>
@endpush