@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 my-5">
            <h3 class="text-center">Sentence</h3>
        </div>
        @foreach ($sentence as $item)
        <div class="col-12 col-md-6 col-lg-4 mb-3">
            <div class="card sentence">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="flag">
                            <span class="id"></span>
                        </div>
                        <p class="item">{{ $item->indonesia }}</p>
                    </li>
                    <li class="list-group-item">
                        <div class="flag">
                            <span class="en"></span>
                        </div>
                        <p class="item">{{ $item->english }}</p>
                    </li>
                    <li class="list-group-item">
                    @if(!empty($item->vietnam))
                        <div class="flag">
                            <span class="vn"></span>
                        </div>
                        <p class="item">{{ $item->vietnam }}</p>
                    @else
                        <div class="flag">
                            <span class="vn"></span>
                        </div>
                        <p class="item">nothing..</p>
                    @endif
                    </li>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection