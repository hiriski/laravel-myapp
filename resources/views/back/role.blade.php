@extends('back.layouts.app')
@section('content')
@include('back.layouts.page-header.blog')

@push('swal')
<script src="{{ asset('libs/sweetalert2@9.js') }}"></script>
@endpush
<div class="container-fluid">

    @if (Session::has('success'))
    <script>
        showSwal('Yey!!', '{!! session('success') !!}');
    </script>
    @endif

    @if( count($errors) > 0)
    <script>
    showSwal('Ada kesalahan!', 'Mohon diperiksa lagi ya', 'error');
    </script>
    @endif


    <div class="row mt-5">
        <div class="container">
            <div class="text-center">
                <h2>Management Role</h2>
            </div>
        </div>
    </div>

    <div class="row">
            
        {{-- Form to create role --}}
        <div class="col-md-12 col-lg-4">
            <div class="card">
                <div class="card-body">
                    {{ Form::open(['url' => route('admin.role.store')]) }}
                        <div class="form-group">
                            <label for="name">Role</label>
                            <input id="name" type="text" class="form-control rux-input  @error('name') is-invalid @enderror" name="name" placeholder="Name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="submit-btn btn btn-lg btn-primary rux-btn">Save<i class="material-icons">arrow_forward</i></button>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>

        {{-- list roles user --}}
        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Role</td>
                                    <td>Guard</td>
                                    <td>Created At</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $nomor = 1;
                                @endphp
                                
                                @forelse($roles as $role)
                                <tr>
                                    <td>{{ $nomor++ }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->guard_name }}</td>
                                    <td>{{ $role->created_at }}</td>
                                    <td>
                                        {{ Form::open(['url' => route('admin.role.destroy', $role->id)]) }}
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>

                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Nothing to see here</td>
                                    </tr>
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Paginations --}}
    <div class="row mb-5 mt-3 justify-content-center">
        {{ $roles->links() }}
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

@include('back.partials/to-vue')
@endsection