@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">

        {{-- @if( count($errors) > 0)
        <ul>
            @foreach($errors->all() as $err)
            <li class="alert alert-danger">{{ $err }}</li>
            @endforeach
        </ul>
        @endif --}}
        
        <div class="col-sm-12 col-md-10">
            <div class="card">
                <div class="card-body block-padding-lg">
                    {{ Form::open(['url' => route('admin.blog.store')]) }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title" value="{{ old('title') }}" autofocus>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Slug</label>
                            <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" placeholder="Slug" value="">
                            @error('slug')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Categrory</label>
                            {{ Form::select('category_id', $categories, 1, 
                                array('class' =>'form-control', 'placeholder' => 'Select category', 'id' => 'category_id')) }}
                            @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            {{ Form::textarea('description', null, array('class' =>'form-control' )) }}
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="keywords">Keyword</label>
                            {{ Form::textarea('keywords', null, array('class' =>'form-control' )) }}
                            @error('keyword')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="keywords">Content</label>
                            <textarea name="content" id="blogContent" clsas="@error('content') is-invalid @enderror"></textarea>
                            @error('content')
                        </div>
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-group text-center">
                            {{ Form::submit('Submit', array('class' => 'btn btn-primary' )) }}
                        </div>
                        
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection