@extends('layouts.auth')
@section('content')
<form method="POST" action="{{ route('login') }}">
@csrf
<h4 class="main-heading sm mb-5">Login</h4>

<div class="form-group mb-3">
    <input id="email" type="email" class="form-control rux-input @error('email') is-invalid @enderror" name="email" placeholder="@lang('app.email')" value="{{ old('email') }}" autocomplete="email" autofocus>
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group mb-3">
    <input id="password" type="password" class="form-control rux-input @error('password') is-invalid @enderror" name="password" placeholder="@lang('app.password')" autocomplete="current-password">
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group mb-3">
  <div class="custom-control custom-checkbox mr-sm-2">
    <input type="checkbox" name="remember" id="remember"
            class="custom-control-input"
            {{ old('remember') ? 'checked' : '' }} >
    <label class="custom-control-label" for="remember">Remember me</label>
  </div>
</div>

<div class="form-group">
    <button type="submit" class="submit-btn btn btn-primary rux-btn">Submit <i class="material-icons">arrow_forward</i></button>
</div>

<div class="text-center d-none">
    @if (Route::has('password.request'))
        <a class="small text-muted btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif
</div>
</form>
@endsection
