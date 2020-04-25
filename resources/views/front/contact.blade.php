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
    <div class="_wave_">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e6e9ed" fill-opacity="1" d="M0,96L48,117.3C96,139,192,181,288,186.7C384,192,480,160,576,176C672,192,768,256,864,277.3C960,299,1056,277,1152,245.3C1248,213,1344,171,1392,149.3L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    </div>
    <div class="__o__">
        <div class="__">
            @include('front.layouts.contact')
        </div>
    </div>
</div>
@endsection