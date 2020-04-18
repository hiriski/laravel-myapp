@extends('front.layouts.app')
@section('content')
<div class="Anh">
    @include('front.components.navigation')
    <div class="__o__">
        <div class="__">
            @include('front.layouts.theme-index')
        </div>
    </div>
</div>
@endsection
@push('script')
<script src="{{ asset('js/blurry-load.min.js') }}"></script>
@endpush