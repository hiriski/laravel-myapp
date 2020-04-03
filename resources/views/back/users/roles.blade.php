@extends('back.layouts.app')
@section('content')
@include('back.layouts.page-header.blog')

@push('swal')
<script src="{{ asset('libs/sweetalert2@9.js') }}"></script>
@endpush

<div class="container-fluid">
    <div class="row justify-content-center">


        @if (Session::has('success'))
        <script>
            showSwal('Yey!!', '{{ session('success') }}');
        </script>
        @endif

        <div class="col-sm-12 col-md-8">
            <div class="card">

                <div class="text-center">
                    <h3>Set Role</h3>
                </div>
                <div class="card-body block-padding-lg">
                    <form action="{{ route('admin.user.set_role', $user->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="table-responsive">
                            <table class="table table-dark table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <td>:</td>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>:</td>
                                        <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                    </tr>
                                    <tr>
                                        <th>Role</th>
                                        <td>:</td>
                                        <td>
                                            @foreach ($roles as $row)
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="radio" value="{{ $row }}" name="role" id="role-{{ $row }}"
                                                        class="custom-control-input"
                                                        {{ $user->hasRole($row) ? 'checked':'' }} >
                                                <label class="custom-control-label" for="role-{{ $row }}">{{ $row }}</label>
                                            </div>

                                            {{-- <input type="radio" name="role" 
                                                {{ $user->hasRole($row) ? 'checked':'' }}
                                                value="{{ $row }}"> {{  $row }} <br> --}}
                                            @endforeach
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm float-right">
                                    Set Role
                                </button>
                            </div>
                        </div>
                    </form>
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