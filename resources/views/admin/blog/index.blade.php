@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="pageTitle mb-4">
                <h4>{{ $pageTitle }}</h4>
            </div>
        </div>
    </div>

    {{-- Blog Card --}}
    <div class="row">
        @foreach($posts as $item)
        <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card blog-index">
                <div class="category position-absolute">
                    <span class="badge badge-primary">{{ $item->category->name }}</span>
                </div>
                <div class="edit position-absolute">
                    <a href="{{ route('admin.blog.edit', $item->id) }}" class="btn btn-sm btn-success"><i class="material-icons">edit</i> Edit</a>
                </div>
                <div class="post-img">
                    <img src="{{ asset('images/sm.jpg') }}" alt="Sample Image" class="card-img-top">
                </div>
                <div class="card-body">

                    <div class="post-title">
                        <h2 class="card-title"> {{ $item->title }}</h2>
                    </div>
                    <div class="post-summary">
                        <p>{{ $item->description }}</p>
                    </div>

                    <p>
                        <a href="" class="btn btn-sm  btn-primary">Read more.. <i class="material-icons">arrow_forward</i></a>
                    </p>

                </div>
                <div class="card-footer">
                    <div class="created_at">
                        <span>{{ date('M, d Y',strtotime($item->created_at)) }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Paginations --}}
    <div class="row mb-5 mt-3 justify-content-center">
        {{ $posts->links() }}
    </div>

</div>

@include('partials/to-vue')
@endsection