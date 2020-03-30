@extends('back.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="content">
        <div class="row">
            <div class="col-sm-12 col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h1 class="main-heading text-center">@lang('app.create_new_phrase')</h1>
                        @if( count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $err)
                            <li class="alert alert-danger">{{ $err }}</li>
                            @endforeach
                        </ul>
                        @endif
                        {!! Form::open(['url' => route('sentence.store'), 'class' => 'form-app']) !!}
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            {{ Form::select('category_id', $categories, null,
                            ['class' => $class, 'placeholder' => 'Select Category', 'id' => 'category_id', 'required']) }}
                        </div>
                        <div class="form-group">
                            <label for="vietnam">
                                <span class="flag-label flag-id">
                                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxjaXJjbGUgc3R5bGU9ImZpbGw6I0Q4MDAyNzsiIGN4PSIyNTYiIGN5PSIyNTYiIHI9IjI1NiIvPg0KPHBvbHlnb24gc3R5bGU9ImZpbGw6I0ZGREE0NDsiIHBvaW50cz0iMjU2LDEzMy41NjUgMjgzLjYyOCwyMTguNTk0IDM3My4wMzMsMjE4LjU5NCAzMDAuNzAyLDI3MS4xNDQgMzI4LjMzLDM1Ni4xNzQgMjU2LDMwMy42MjMgDQoJMTgzLjY3LDM1Ni4xNzQgMjExLjI5OCwyNzEuMTQ0IDEzOC45NjgsMjE4LjU5NCAyMjguMzcyLDIxOC41OTQgIi8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" alt="">
                                </span>
                                Vietnamese
                            </label>
                            {{ Form::text('vietnam', null, ['class' => $class]) }}
                        </div>
                        <div class="form-group">
                            <label for="english">
                                <span class="flag-label flag-id">
                                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxjaXJjbGUgc3R5bGU9ImZpbGw6I0YwRjBGMDsiIGN4PSIyNTYiIGN5PSIyNTYiIHI9IjI1NiIvPg0KPGc+DQoJPHBhdGggc3R5bGU9ImZpbGw6IzAwNTJCNDsiIGQ9Ik01Mi45MiwxMDAuMTQyYy0yMC4xMDksMjYuMTYzLTM1LjI3Miw1Ni4zMTgtNDQuMTAxLDg5LjA3N2gxMzMuMTc4TDUyLjkyLDEwMC4xNDJ6Ii8+DQoJPHBhdGggc3R5bGU9ImZpbGw6IzAwNTJCNDsiIGQ9Ik01MDMuMTgxLDE4OS4yMTljLTguODI5LTMyLjc1OC0yMy45OTMtNjIuOTEzLTQ0LjEwMS04OS4wNzZsLTg5LjA3NSw4OS4wNzZINTAzLjE4MXoiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojMDA1MkI0OyIgZD0iTTguODE5LDMyMi43ODRjOC44MywzMi43NTgsMjMuOTkzLDYyLjkxMyw0NC4xMDEsODkuMDc1bDg5LjA3NC04OS4wNzVMOC44MTksMzIyLjc4NEw4LjgxOSwzMjIuNzg0DQoJCXoiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojMDA1MkI0OyIgZD0iTTQxMS44NTgsNTIuOTIxYy0yNi4xNjMtMjAuMTA5LTU2LjMxNy0zNS4yNzItODkuMDc2LTQ0LjEwMnYxMzMuMTc3TDQxMS44NTgsNTIuOTIxeiIvPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiMwMDUyQjQ7IiBkPSJNMTAwLjE0Miw0NTkuMDc5YzI2LjE2MywyMC4xMDksNTYuMzE4LDM1LjI3Miw4OS4wNzYsNDQuMTAyVjM3MC4wMDVMMTAwLjE0Miw0NTkuMDc5eiIvPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiMwMDUyQjQ7IiBkPSJNMTg5LjIxNyw4LjgxOWMtMzIuNzU4LDguODMtNjIuOTEzLDIzLjk5My04OS4wNzUsNDQuMTAxbDg5LjA3NSw4OS4wNzVWOC44MTl6Ii8+DQoJPHBhdGggc3R5bGU9ImZpbGw6IzAwNTJCNDsiIGQ9Ik0zMjIuNzgzLDUwMy4xODFjMzIuNzU4LTguODMsNjIuOTEzLTIzLjk5Myw4OS4wNzUtNDQuMTAxbC04OS4wNzUtODkuMDc1VjUwMy4xODF6Ii8+DQoJPHBhdGggc3R5bGU9ImZpbGw6IzAwNTJCNDsiIGQ9Ik0zNzAuMDA1LDMyMi43ODRsODkuMDc1LDg5LjA3NmMyMC4xMDgtMjYuMTYyLDM1LjI3Mi01Ni4zMTgsNDQuMTAxLTg5LjA3NkgzNzAuMDA1eiIvPg0KPC9nPg0KPGc+DQoJPHBhdGggc3R5bGU9ImZpbGw6I0Q4MDAyNzsiIGQ9Ik01MDkuODMzLDIyMi42MDloLTIyMC40NGgtMC4wMDFWMi4xNjdDMjc4LjQ2MSwwLjc0NCwyNjcuMzE3LDAsMjU2LDANCgkJYy0xMS4zMTksMC0yMi40NjEsMC43NDQtMzMuMzkxLDIuMTY3djIyMC40NHYwLjAwMUgyLjE2N0MwLjc0NCwyMzMuNTM5LDAsMjQ0LjY4MywwLDI1NmMwLDExLjMxOSwwLjc0NCwyMi40NjEsMi4xNjcsMzMuMzkxDQoJCWgyMjAuNDRoMC4wMDF2MjIwLjQ0MkMyMzMuNTM5LDUxMS4yNTYsMjQ0LjY4MSw1MTIsMjU2LDUxMmMxMS4zMTcsMCwyMi40NjEtMC43NDMsMzMuMzkxLTIuMTY3di0yMjAuNDR2LTAuMDAxaDIyMC40NDINCgkJQzUxMS4yNTYsMjc4LjQ2MSw1MTIsMjY3LjMxOSw1MTIsMjU2QzUxMiwyNDQuNjgzLDUxMS4yNTYsMjMzLjUzOSw1MDkuODMzLDIyMi42MDl6Ii8+DQoJPHBhdGggc3R5bGU9ImZpbGw6I0Q4MDAyNzsiIGQ9Ik0zMjIuNzgzLDMyMi43ODRMMzIyLjc4MywzMjIuNzg0TDQzNy4wMTksNDM3LjAyYzUuMjU0LTUuMjUyLDEwLjI2Ni0xMC43NDMsMTUuMDQ4LTE2LjQzNQ0KCQlsLTk3LjgwMi05Ny44MDJoLTMxLjQ4MlYzMjIuNzg0eiIvPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiNEODAwMjc7IiBkPSJNMTg5LjIxNywzMjIuNzg0aC0wLjAwMkw3NC45OCw0MzcuMDE5YzUuMjUyLDUuMjU0LDEwLjc0MywxMC4yNjYsMTYuNDM1LDE1LjA0OGw5Ny44MDItOTcuODA0DQoJCVYzMjIuNzg0eiIvPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiNEODAwMjc7IiBkPSJNMTg5LjIxNywxODkuMjE5di0wLjAwMkw3NC45ODEsNzQuOThjLTUuMjU0LDUuMjUyLTEwLjI2NiwxMC43NDMtMTUuMDQ4LDE2LjQzNWw5Ny44MDMsOTcuODAzDQoJCUgxODkuMjE3eiIvPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiNEODAwMjc7IiBkPSJNMzIyLjc4MywxODkuMjE5TDMyMi43ODMsMTg5LjIxOUw0MzcuMDIsNzQuOTgxYy01LjI1Mi01LjI1NC0xMC43NDMtMTAuMjY2LTE2LjQzNS0xNS4wNDcNCgkJbC05Ny44MDIsOTcuODAzVjE4OS4yMTl6Ii8+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" alt="">
                                </span>
                                English</label>
                            {{ Form::text('english', null, ['class' => $class]) }}
                        </div>
                        <div class="form-group">
                            <label for="indonesia">
                                <span class="flag-label flag-id">
                                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxjaXJjbGUgc3R5bGU9ImZpbGw6I0YwRjBGMDsiIGN4PSIyNTYiIGN5PSIyNTYiIHI9IjI1NiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0Q4MDAyNzsiIGQ9Ik01MTIsMjU2YzAsMTQxLjM4NC0xMTQuNjE2LDI1Ni0yNTYsMjU2UzAsMzk3LjM4NCwwLDI1NiIvPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" alt="">
                                </span>
                                Indonesia</label>
                            {{ Form::text('indonesia', null, ['class' => $class]) 
                            }}
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
                        <div class="form-group text-center">
                            {{ Form::submit('Submit', ['class' => 'btn btn-primary btn-submit'])}}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection