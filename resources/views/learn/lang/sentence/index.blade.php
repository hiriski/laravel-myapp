@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>EN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sentence as $item)
                    <tr>
                        <td>{{ $item->indonesia }}</td>
                        <td>{{ $item->english }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection