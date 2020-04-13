@extends('front.layouts.app')
@section('content')
<div class="Anh">
    @include('front.components.navigation')
    <div class="__o__">
        <div class="__">
            @foreach($tags as $tag)
            <li>
                <a href="{{ route('blog.tag.show', $tag->slug)}}">{{ $tag->name }}</a>
            </li>
            @endforeach
        </div>
    </div>
</div>
@endsection