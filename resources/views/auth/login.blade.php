@extends('layouts.auth')
@section('content')
{{ Form::open( array('url' => route('login'))) }}
<h3 class="main-heading sm text-center">Login</h3>

{{-- <label for="email">Email</label>
<div class="input-group mb-4">
    {{ Form::text('email', null, array('id' => 'login-form', 'class' => 'form-control form-control-lg'
        ))}}
    <div class="input-group-append">
        <span class="input-group-text">@riski.web.id</span>
    </div>
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div> --}}

<label for="email">Email</label>
<div class="form-group">
    {{ Form::text('email', null, array('id' => 'login-form', 'class' => 'form-control form-control-lg'
        ))}}
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<label for="password">Password</label>
<div class="form-group mb-4">
    {{ Form::password('password', array('class' => 'form-control form-control-lg')) }}
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    {{ Form::submit('Submit', array('id' => 'submit-btn', 'class' => 'btn btn-block btn-lg btn-primary submit-btn')) }}
</div>

{{-- @if (Route::has('password.request'))
    <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
    </a>
@endif --}}


{{ Form::close() }}
@endsection
