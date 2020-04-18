@extends('front.layouts.app')
@section('content')
{{-- @include('front.components.blog-category-top') --}}
<div class="Anh">
    @include('front.components.navigation')
    <div class="__o__">
        <div class="__">
        @include('front.layouts.tag-theme')
        </div>
    </div>
</div>
@endsection
@push('script')
<script src="{{ asset('js/blurry-load.min.js') }}"></script>
@endpush