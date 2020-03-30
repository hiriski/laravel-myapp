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
                    {{ Form::open(['url' => route('admin.blog.store'), 'files' => true]) }}



                        {{-- <div class="alert alert-warning">Texting File Manager</div>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="thumbnail" class="form-control" type="text" name="filepath">
                            </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;"> --}}


                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" type="text" class="form-control rux-input  @error('title') is-invalid @enderror" name="title" placeholder="Title" value="{{ old('title') }}" autofocus>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group form-image-upload">
                            {{ Form::file('image', ['id' => 'blogImage', 'accept' => 'image/*', 'onchange' => 'readImage(this)'])}}
                            @error('image')
                            <span id="errorImageUpload" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="d-flex justify-content-center align-items-center" for="blogImage" id="dragImageHere">

                                <div class="imageResult">
                                    <img src="#" alt="preview" id="imagePreview" class="d-none">
                                </div>

                                <div class="meta w-100 text-center mt-3 d-none">
                                    <p id="previewFileName"></p>
                                    <p id="previewFileSize"></p>
                                </div>

                                <div id="start" class="text-center">
                                    <i class="material-icons">cloud_upload</i>
                                    <div class="text my-2">Select or Drag Image Here</div>
                                    <span role="button" class="btn btn-primary btn-upload-image" id="uploadImageBtn">Choose Image</span>
                                </div>
                            </label>
                        </div>

                        <script>
                        function readImage(input) {
                            var tagImg = document.getElementById('imagePreview')
                            var tagFileName = document.getElementById('previewFileName');
                            var tagFileSize = document.getElementById('previewFileSize');
                            var tagStart = document.getElementById('start');
                            var tagErr = document.getElementById('errorImageUpload');
                            var tagClassMeta = document.querySelector('.form-image-upload label .meta');

                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function (event) {
                                    tagImg.setAttribute('src', event.target.result);
                                    tagFileName.textContent = input.files[0].name;
                                    tagFileSize.textContent = 'File size : ' + input.files[0].size;
                                };
                                reader.readAsDataURL(input.files[0]);
                                tagImg.className = 'preview-active';
                                tagStart.className = 'd-none';
                                tagClassMeta.classList += ' show';
                            }
                        }
                        </script>
                        <div class="form-group">
                            <label for="title">Slug</label>
                            <input id="slug" type="text" class="form-control rux-input @error('slug') is-invalid @enderror" name="slug" placeholder="Slug" value="{{ old('slug') }}">
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
<script>
$('#lfm').filemanager('file');
</script>

@endsection