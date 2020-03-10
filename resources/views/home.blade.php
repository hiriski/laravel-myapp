@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="box login-box">
                <div class="box-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @lang('app.welcome')
                    <div class="col-sm-8 col-md-5 mx-auto">
                        <div class="img">
                            <img src="{{ url('') }}/{{ Auth::user()->profile->image_url }}" alt="" class="img-fluid img-rounded">
                        </div>
                    </div>
                    <h2>@lang('app.hello') {{ Auth::user()->profile->first_name }} 👋</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
