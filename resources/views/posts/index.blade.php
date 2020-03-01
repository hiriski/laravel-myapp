@extends('layouts.app')
@section('content')
<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center">List blog</h3>
            </div>
        </div>
        <div class="row">
            @foreach($posts as $item)
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $item->title }}</h3>
                        <p>{{ $item->description }} </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection