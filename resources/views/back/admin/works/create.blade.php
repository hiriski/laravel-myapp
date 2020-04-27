@extends('back.layouts.app')
@section('content')
@include('back.layouts.page-header.work')

@push('swal')
<script src="{{ asset('libs/sweetalert2@9.js') }}"></script>
@endpush

<div class="container-fluid">
    <div class="row justify-content-center">

        @if( count($errors) > 0)
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        <script>
        showSwal('Ada kesalahan!', 'Mohon diperiksa lagi ya', 'error');
        </script>
        @endif
        
        <div class="col-sm-12 col-md-11">
            <div class="card">
                <div class="card-body block-padding-lg">
                    {{ Form::open(['url' => route('admin.work.store'), 'files' => true]) }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control rux-input  @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" autofocus>
                            @error('name')
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
                            <label for="slug">Slug</label>
                            <input id="slug" type="text" class="form-control rux-input @error('slug') is-invalid @enderror" name="slug" placeholder="Slug" value="{{ old('slug') }}">
                            <small class="slug-helper font-weight-bold text-success"></small>
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
                            <label for="url">Url</label>
                            <input id="url" type="text" class="form-control rux-input @error('url') is-invalid @enderror" name="url" placeholder="url" value="{{ old('url') }}">
                            <small class="url-helper font-weight-bold text-success"></small>
                            @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
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
                            {{ Form::select('status_id', $status, 1, ['class' => 'form-control rux-input', 'id' => 'status_id']) }}
                            @error('status_id')
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