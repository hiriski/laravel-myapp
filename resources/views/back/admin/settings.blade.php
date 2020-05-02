@extends('back.layouts.app')
@section('content')
{{-- @include('back.layouts.page-header.blog') --}}

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
		
		@if ($message = Session::has('status'))
    <script>
        showSwal('Yey!', '{{ Session("message") }}');
    </script>
    @endif

    <div class="col-sm-12 col-md-11">
      <div class="card">
        <div class="card-body block-padding-lg">
					{{ Form::model($settings, ['url' => route('admin.settings.update')]) }}
					@method('PUT')
					<div class="form-group">
						<label for="language_id">Language</label>
						{{ Form::select('language_id', $languages, null, 
							array('class' =>'form-control', 'placeholder' => 'Select language setting', 'id' => 'language_id')) }}
						@error('language_id')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
            <div class="form-group">
              <label for="title">Title</label>
              <input id="title" type="text" class="form-control  @error('title') is-invalid @enderror" name="title" placeholder="Title" value="{{ $settings->title }}" autofocus>
              @error('title')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="app_name">App name</label>
              <input id="app_name" type="text" class="form-control @error('slug') is-invalid @enderror" name="app_name" placeholder="Slug" value="{{ $settings->app_name }}">
              @error('app_name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
						</div>
						
						<div class="form-group">
              <label for="description">Description</label>
							{{ Form::textarea('description', null,
							['class' =>'form-control default', 'style' => 'height: 100px']) }}
              @error('description')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
						</div>

						<div class="form-group">
              <label for="keywords">Keywords</label>
							{{ Form::textarea('keywords', null, 
							['class' =>'form-control  default', 'style' => 'height: 100px']) }}
              @error('keyword')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group mb-2">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="show_featured_post" id="show_featured_post"
                  class="custom-control-input" value="1"
                  {{ $settings->show_featured_post ? 'checked' : '' }} >
                <label class="custom-control-label" for="show_featured_post">Show Featured Post ?</label>
              </div>
						</div>
						
						<div class="form-group mb-2">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="show_blog_homepage" id="show_blog_homepage"
                  class="custom-control-input" value="1"
                  {{ $settings->show_blog_homepage ? 'checked' : '' }} >
                <label class="custom-control-label" for="show_blog_homepage">Show Blog in Homepage</label>
              </div>
						</div>
						
						<div class="form-group mb-2">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="show_work_homepage" id="show_work_homepage"
                  class="custom-control-input" value="1"
                  {{ $settings->show_work_homepage ? 'checked' : '' }} >
                <label class="custom-control-label" for="show_work_homepage">Show Work in Homepage</label>
              </div>
						</div>
						
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group">
									<label for="blog_perpage">Blog Perpage</label>
									<input class="form-control" name="blog_perpage" type="number" placeholder="Blog perpage (int)" value="{{ $settings->blog_perpage }}">
									@error('blog_perpage')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="work_perpage">Work Perpage</label>
									<input class="form-control" name="work_perpage" type="number" placeholder="Blog perpage (int)" value="{{ $settings->work_perpage }}">
									@error('work_perpage')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
						</div>


            <div class="form-group mt-4">
              <button type="submit" class="submit-btn btn btn-lg btn-primary">Save <i class="material-icons">save</i></button>
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