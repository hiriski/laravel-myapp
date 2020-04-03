@extends('back.layouts.app')
@section('content')
@include('back.layouts.page-header.blog')

@push('swal')
<script src="{{ asset('libs/sweetalert2@9.js') }}"></script>
@endpush
<div class="container-fluid">

    @if ($message = Session::has('blog_create_success'))
    <script>
        showSwal('Yey!', 'Blog berhasil dibuat!');
    </script>
    @endif


    <div class="row mt-5">
        <div class="container">
            <div class="text-center">
                <h2>Role Permission</h2>
            </div>
        </div>
    </div>

    <div class="row mt-4">
            
        {{-- Form to create role --}}
        <div class="col-md-12 col-lg-4">
            <div class="card">
                <div class="card-header">Add New Permission</div>
                <div class="card-body">
                    <form action="{{ route('admin.user.add_permission') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="permission-name">Name</label>
                            <input type="text" name="name" id="permission-name" class="form-control rux-input @error('name') is-invalid @enderror">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary rux-btn">
                                Add New
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-header">Add Permission to Role</div>
                <div class="card-body">

                    @if (Session::has('success'))
                    <script>
                        showSwal('Yey!!', '{{ session('success') }}');
                    </script>
                    @endif
                    
                    <form action="{{ route('admin.user.roles_permission') }}" method="GET">
                        <div class="form-group">
                            <label for="roles">Roles</label>
                            <div class="input-group">
                                <select name="role" id="roles" class="form-control rux-input">
                                    @foreach ($roles as $value)
                                        <option value="{{ $value }}" {{ request()->get('role') == $value ? 'selected':'' }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                                <span class="input-group-btn">
                                    <button class="btn btn-danger">Check!</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-12">
            {{-- jika $permission tidak bernilai kosong --}}
            @if (!empty($permissions))
            <form action="{{ route('admin.user.setRolePermission', request()->get('role')) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                @php $no = 1; @endphp
                @foreach ($permissions as $key => $row)
                <div class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" name="permission[]" id="remember-{{$key}}"
                            value="{{ $row }}"
                            class="custom-control-input"
                            {{--  Check, jika permission tersebut sudah di set, maka checked --}}
                            {{ in_array($row, $hasPermission) ? 'checked':'' }} >
                    <label class="custom-control-label" for="remember-{{$key}}">{{ $row }}</label>
                </div>
                @endforeach
                </div>
                
                <div class="pull-right">
                    <button class="btn btn-primary btn-sm">
                        <i class="material-icons">done_all</i> Set Permission
                    </button>
                </div>

            </form>
            @endif
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

@include('back.partials/to-vue')
@endsection