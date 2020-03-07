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

        <div class="col-12 col-lg-4 mx-auto">
            {!! Form::open(['url' => route('phrase.store')]) !!}
            <div class="form-group">
                <label for="indonesia">ID</label>
                {{ Form::text('indonesia', null, ['class' => $class]) 
                }}
            </div>
            <div class="form-group">
                <label for="english">EN</label>
                {{ Form::text('english', null, ['class' => $class]) }}
            </div>
            <div class="form-group">
                <label for="vietnam">VN</label>
                {{ Form::text('vietnam', null, ['class' => $class]) }}
            </div>
            <div class="form-group">
                <label for="level">Notes</label>
                {{ Form::textarea('notes', null, ['class' => $class]) }}
            </div>
            <div class="form-group">
                <label for="level">Reference</label>
                {{ Form::textarea('reference', null, ['class' => $class]) }}
            </div>
            <div class="form-group">
                <label for="level_id">Level</label>
                {{ Form::select('level_id', $levels, null,
                ['class' => $class, 'placeholder' => 'Select Level', 'id' => 'level_id', 'required']) }}
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                {{ Form::select('category_id', $categories, null,
                ['class' => $class, 'placeholder' => 'Select Category', 'id' => 'category_id', 'required']) }}
            </div>
            <div class="form-group text-center">
                {{ Form::submit('Submit', ['class' => 'btn btn-primary btn-submit'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection