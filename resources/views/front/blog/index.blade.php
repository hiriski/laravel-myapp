@extends('front.layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-center">List blog</h3>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }} 
    </div>
    @endif

    <div class="row">
        @foreach($posts as $item)
        <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $item->title }}</h4>
                    <p>{{ $item->description }} </p>
                    <span class="badge badge-primary">{{ $item->category->name }}</span>
                </div>
                <div class="card-footer">
                    <a href="{{ route('blog.show', $item->slug) }}" class="btn btn-sm btn-block btn-primary">Read more.. <i class="material-icons">arrow_forward</i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="row justify-content-center">
    {{ $posts->links() }}
</div>
@endsection