@extends('front.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <h3 class="card-header">
                    {{ $post->title }}
                </h3>
                <div class="card-body">
                    <p>{{ $post->description }} </p>
                    <span class="badge badge-primary">{{ $post->category->name }}</span>
                    <div>{!! $post->content !!}</div>
                </div>
                <div class="card-footer">
                    <p>Created At  : {{ $post->created_at }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection