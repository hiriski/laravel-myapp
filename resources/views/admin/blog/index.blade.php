@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3 class="text-center">Admin (Blogs)</h3>
            <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">Add new</a>
        </div>
    </div>

    @if( session('status') && session('message'))
    <div class="alert alert-{{session('status')}}">
        {{ session('message') }} 
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
                    <a href="{{ route('blog.show', $item->slug) }}" class="btn btn-sm  btn-primary">Read more.. <i class="material-icons">arrow_forward</i></a>
                    <a href="{{ route('admin.blog.edit', $item->id) }}" class="btn btn-sm  btn-primary">Edit.. <i class="material-icons">arrow_forward</i></a>
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