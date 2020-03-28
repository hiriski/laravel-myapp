@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">

        @if( count($errors) > 0)
        <ul>
            @foreach($errors->all() as $err)
            <li class="alert alert-danger">{{ $err }}</li>
            @endforeach
        </ul>
        @endif
        
        <div class="col-sm-12 col-md-11">
            <div class="card">
                <div class="card-body block-padding-lg">
                    <div class="card-title mb-5">
                        <h3>Edit blog</h3>
                    </div>
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
                            <div class="position-relative">
                                <input id="slug" type="text" class="form-control rux-input @error('slug') is-invalid @enderror" name="slug" placeholder="Slug" value="{{ $blog->slug }}" disabled>
                                <button onclick="forceChangeSlug(event)" id="btn-force-change-slug" class="btn-keep btn btn-sm btn-primary rux-btn"><i class="material-icons">edit</i> Force Change</button>
                            </div>
                            @error('slug')
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
@endsection