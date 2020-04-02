@extends('front.layouts.app')
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