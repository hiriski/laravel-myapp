@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach ($categories as $item)
        <div class="col-sm-6 col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="card-title">
                        {{ $item->name }}
                    </h3> 
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection