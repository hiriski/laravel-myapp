@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4 mx-auto">
            {!! Form::open(['url' => route('sentence.store')]) !!}
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
                <label for="level">Level</label>
                {{ Form::select('level', $levels, null,
                ['class' => $class, 'placeholder' => 'Select Level', 'id' => 'level', 'required']) }}
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                {{ Form::select('category', $categories, null,
                ['class' => $class, 'placeholder' => 'Select Category', 'id' => 'category', 'required']) }}
            </div>
            <div class="form-group text-center">
                {{ Form::submit('Submit', ['class' => 'btn btn-primary btn-submit'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection