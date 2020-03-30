@extends('back.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 my-3">
            <h3 class="text-center">@lang('app.sentence')</h3>
        </div>
        <div class="col-12 text-center mb-3">
            <a href="{{ route('sentence.create') }}" class="btn btn-primary">Create Sentence</a>
        </div>
        <div class="col-sm-10 col-md-6 offset-md-3 mb-2">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ $message }}</strong>
            </div>
            @endif
        </div>
        @foreach ($sentence as $item)
        <div class="col-12 col-md-6 col-lg-4 mb-3">
            <div class="card learn phrase">
                <ul class="list-group">
                    <li class="list-group-item">
                    @if(!empty($item->english))
                        <div class="flag">
                            <span class="en"></span>
                        </div>
                        <p class="item">{{ $item->english }}</p>
                    @else
                        <div class="flag">
                            <span class="en"></span>
                        </div>
                        <p class="item">...</p>
                    @endif
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
                        <p class="item">...</p>
                    @endif
                    </li>
                    <li class="list-group-item">
                    @if(!empty($item->indonesia))
                        <div class="flag">
                            <span class="id"></span>
                        </div>
                        <p class="item">{{ $item->indonesia }}</p>
                    @else
                        <div class="flag">
                            <span class="id"></span>
                        </div>
                        <p class="item">...</p>
                    @endif
                    </li>
                    <div class="list-group-footer d-flex">
                        <div class="edit-btn">
                            <a href="{{ route('phrase.edit', $item->id) }}" class="btn btn-sm btn-primary"><i class="material-icons material-icon-sm">edit</i> Edit</a>
                        </div>
                        <div class="author">
                            @if($item->user_id === $item->updated_by)
                            <div class="creator d-inline">
                                <a href="{{ route('profile.show', $item->user->slug ) }}"
                                    data-toggle="tooltip" data-placement="top" title="{{ $item->user->name }}">
                                    <img src="{{ getUserPic($item->user->id, 'sm') }}" alt="" class="rounded-circle">
                                </a>
                            </div>
                            @else
                            <div class="creator d-inline">
                                <a href="{{ route('profile.show', $item->user->slug ) }}">
                                    <img src="{{ getUserPic($item->user->id, 'sm') }}" alt="" class="rounded-circle">
                                </a>
                            </div>
                                @if(!empty($item->updated_by))
                                <div class="updator d-inline">
                                    <a href="{{ route('profile.show', $item->updator->slug ) }}">
                                        <img src="{{ getUserPic($item->updator->id, 'sm') }}" alt="" class="rounded-circle">
                                    </a>
                                </div>
                                @endif
                            @endif
                        </div>
                        
                    </div>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection