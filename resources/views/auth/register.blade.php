@extends('auth.layouts.app')

@section('content')
<form method="POST" action="{{ route('register') }}">
@csrf
    <h4 class="main-heading heading-sm mb-5 text-primary">@lang('auth.register')</h4>
    <div class="form-group mb-4">
        <input id="name" type="text" class="form-control rux-input @error('name') is-invalid @enderror" name="name" placeholder="@lang('auth.name')" value="{{ old('name') }}" autocomplete="name" autofocus>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group mb-4">
        <input id="email" type="email" class="form-control rux-input @error('email') is-invalid @enderror" name="email" placeholder="@lang('auth.email_address')" value="{{ old('email') }}" autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group mb-4">
        <input id="password" type="password" class="form-control rux-input @error('password') is-invalid @enderror" name="password" placeholder="@lang('auth.password')" required autocomplete="new-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group mb-4">
        <input id="password-confirm" type="password" class="form-control rux-input" name="password_confirmation" placeholder="@lang('auth.confirm_password')" required autocomplete="new-password">
    </div>

    <div class="form-group">
        <button type="submit" class="submit-btn btn btn-primary rux-btn">@lang('auth.register') <i class="material-icons">arrow_forward</i></button>
    </div>

</form>
@endsection