@extends('back.layouts.app')
@section('content')
@include('back.layouts.page-header.work')

@push('swal')
<script src="{{ asset('libs/sweetalert2@9.js') }}"></script>
@endpush
<div class="container-fluid">

    @if ($message = Session::has('work_create_success'))
    <script>
        showSwal('Yey!', 'Work berhasil dibuat!');
    </script>
    @endif

    @if ($message = Session::has('work_update_success'))
    <script>
        showSwal('Yey!', 'Work berhasil diupdate!');
    </script>
    @endif

		@if ($message = Session::has('work_delete_success'))
    <script>
        showSwal('Yey!', 'Work berhasil dihapus!');
    </script>
		@endif
		
    {{-- Blog Card --}}
    <div class="row">
        @foreach($works as $item)
        <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card blog-index">
                <div class="category position-absolute">
                    <span class="badge badge-primary">{{ $item->category->name }}</span>
                </div>
                <div class="edit position-absolute">
                    <a href="{{ route('admin.work.edit', $item->id) }}" class="btn btn-sm btn-success"><i class="material-icons">edit</i> Edit</a>
                </div>
                <div class="delete position-absolute">
									{{ Form::open(['url' => route('admin.work.destroy', $item->id) ]) }}
									@method('DELETE')
										<button type="submit" role="button" class="btn btn-sm btn-danger"><i class="material-icons">delete</i> Delete</button>
									{{ Form::close() }}
                </div>
                @if(!empty($item->image) || !empty($item->image_md))
                <div class="post-img">
                    <img class="card-img-top" src="{{ getWorkImage($item->image_md) }}" alt="{{ $item->title }}">
                </div>
                @else
                <div class="post-img">
                    {{-- Show no image here --}}
                    <img src="{{ asset('images/sm.jpg') }}" alt="Sample Image" class="card-img-top">
                </div>
                @endif
                <div class="card-body">

                    <div class="post-title">
                        <h2 class="card-title"> {{ $item->name }}</h2>
                    </div>
                    <div class="post-summary">
                        <p>{{ $item->description }}</p>
                    </div>

                    <p>
                        <a href="" class="btn btn-sm  btn-primary">Read more.. <i class="material-icons">arrow_forward</i></a>
                    </p>

                </div>
                <div class="card-footer">
                    <div class="created_at">
                        <span>{{ date('M, d Y',strtotime($item->created_at)) }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Paginations --}}
    <div class="row mb-5 mt-3 justify-content-center">
        {{ $works->links() }}
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