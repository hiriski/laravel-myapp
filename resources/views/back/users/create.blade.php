@extends('back.layouts.app')
@section('content')
@include('back.layouts.page-header.blog')

@push('swal')
<script src="{{ asset('libs/sweetalert2@9.js') }}"></script>
@endpush

<div class="container-fluid">
    <div class="row justify-content-center">

        @if( count($errors) > 0)
        <script>
        showSwal('Ada kesalahan!', 'Mohon diperiksa lagi ya', 'error');
        </script>
        @endif
        
        <div class="col-sm-12 col-md-8">
            <div class="card">

                <div class="text-center">
                    <h3>Add new user</h3>
                    <a href="{{ route('admin.user.index') }}" class="btn btn-primary">User All</a>
                </div>

                <div class="card-body block-padding-lg">
                    {{ Form::open(['url' => route('admin.user.store'), 'files' => true]) }}

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control rux-input  @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="text" class="form-control rux-input  @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control rux-input  @error('password') is-invalid @enderror" name="password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="role">Select Role</label>
                            <select name="role" id="role" class="form-control rux-input @error('role') is-invalid @enderror" value="{{ old('role') }}">
                                <option value="">Pilih Role</option>
                                @foreach($role as $row)
                                    <option value="{{ $row->name }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="submit-btn btn btn-lg btn-primary rux-btn">@lang('auth.submit') <i class="material-icons">arrow_forward</i></button>
                        </div>
                        
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

@push('swal-script')
<script>
    function showSwal(titleArg, textArg, iconArg = 'success') {
        Swal.fire({
            title: titleArg,
            text: textArg,
            icon: iconArg,
        });
    }
</script>
@endpush
<script>
$('#lfm').filemanager('file');
</script>

@endsection