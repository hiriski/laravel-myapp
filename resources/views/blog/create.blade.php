@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">

        @if( count($errors) > 0)
        <ul>
            @foreach($errors->all() as $err)
            <li class="alert alert-danger">{{ $err }}</li>
            @endforeach
        </ul>
        @endif
        
        <div class="col-sm-12 col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    {{ Form::open(['url' => route('blog.store')]) }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            {{ Form::text('title', null, array('class' => $class )) }}
                        </div>
                        <div class="form-group">
                            {{ Form::select('category_id', $categories, 1, 
                                array('class' => $class, 'placeholder' => 'Select category', 'id' => 'category_id')) }}
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            {{ Form::textarea('description', null, array('class' => $class )) }}
                        </div>
                        <div class="form-group">
                            <label for="keywords">Keyword</label>
                            {{ Form::textarea('keywords', null, array('class' => $class )) }}
                        </div>
                        <div class="form-group">
                            <label for="keywords">Content</label>
                            {{ Form::textarea('content', null, array('class' => $class )) }}
                        </div>
                        <div class="form-group">
                            {{ Form::submit('keywords', array('class' => 'btn btn-primary' )) }}
                        </div>
                        
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection