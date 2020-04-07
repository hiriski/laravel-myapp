@extends('front.layouts.app')
@section('content')
<div class="Anh">
    @include('front.components.navigation')
    <div class="__o__">
        <div class="__">
            {{-- Sebaiknya buat layouts category index --}}
            @foreach($categories as $item)
            <li>
                <a href="{{ route('blog.category.show', $item->slug)}}">{{ $item->name }}</a>
            </li>
            @endforeach
        </div>
    </div>
</div>
@endsection