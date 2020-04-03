@extends('back.layouts.app')
@section('content')
@include('back.layouts.page-header.blog')

@push('swal')
<script src="{{ asset('libs/sweetalert2@9.js') }}"></script>
@endpush
<div class="container-fluid">

    @if (Session::has('success'))
    <script>
        showSwal('Yey!!', '{{ session('success') }}');
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
                <h2>Management User</h2>
                <a href="{{ route('admin.user.create') }}" class="btn btn-primary"><i class="material-icons">arrow_forward</i> Add new User</a>
            </div>
        </div>
    </div>


    <div class="row justify-content-center mt-5">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <div class="card">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Role</td>
                            {{-- <td>Status</td> --}}
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                            @foreach ($user->getRoleNames() as $role)
                                <label for="" class="badge badge-info">{{ $role }}</label>
                            @endforeach
                            </td>
                            {{-- <td>{{ $user->status }}</td> --}}
                            <td>
                                <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <a href="{{ route('admin.user.roles', $user->id) }}" class="btn btn-info btn-sm"><i class="material-icons">lock</i></a>
                                    <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-warning btn-sm"><i class="material-icons">edit</i></a>
                                    <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                </form>
                            <td>
                        </tr>
                    @empty
                        <td colspan="4">Nothing to see here</td>
                    @endforelse
                    </tbody>
                </table>
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

@include('back.partials/to-vue')
@endsection