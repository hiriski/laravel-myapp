@extends('front.layouts.app')
@section('content')
<div class="Anh">
    <div id="_c-s_" @if(Session::has("contact_success")) class='show' @endif>
        <div class="ms">
            <div class="_c_">
                @if(Session::has('contact_success'))
                    <p>Thank you!</p>
                    <h3>{{ Session::get("message") }}</h3>
                    <a href="{{ route('index') }}"><i class="material-icons">arrow_back</i> <span>Back to homepage</span></a>
                @endif
            </div>
        </div>
    </div>
    <div class="__o__">
        <div class="__">
            @include('front.layouts.contact')
        </div>
    </div>
</div>
@endsection