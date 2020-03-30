@extends('admin.layouts.app')
@section('content')
@include('admin.layouts.page-header.blog')

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
        
        <div class="col-sm-12 col-md-11">
            <div class="card">
                <div class="card-body block-padding-lg">
                    {{ Form::model($blog, ['url' => route('admin.blog.store')]) }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" type="text" class="form-control rux-input  @error('title') is-invalid @enderror" name="title" placeholder="Title" value="{{ $blog->title }}" autofocus>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Slug</label>
                            <input id="slug" type="text" class="form-control rux-input @error('slug') is-invalid @enderror" name="slug" placeholder="Slug" value="{{ $blog->slug }}">
                            @error('slug')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            <script>
                            showSwal('{{ $message }}', 'Kamu harus membuat slug yang unik', 'error');
                            </script>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category_id">Categrory</label>
                            {{ Form::select('category_id', $categories, 1, 
                                array('class' =>'form-control rux-input', 'placeholder' => 'Select category', 'id' => 'category_id')) }}
                            @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            {{ Form::textarea('description', null, array('class' =>'form-control rux-input default' )) }}
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="keywords">Keywords</label>
                            {{ Form::textarea('keywords', null, array('class' =>'form-control rux-input default' )) }}
                            @error('keyword')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Content</label>
                            {{ Form::textarea('content', null, array('class' =>'form-control' )) }}
                            @error('content')
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

@endsection