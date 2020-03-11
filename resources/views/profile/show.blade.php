@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div id="profile-page">
        <div class="row">
            <div class="col-sm-10 col-md-7 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-image">
                            <img src="{{ url('') }}/{{$profile->image_url}}"
                                alt="{{ $profile->first_name }} {{ $profile->last_name }}" class="img-fluid rounded-circle">
                        </div>
                        <div class="text-center">
                            <h3 class="card-title profile-name">
                                {{ $profile->first_name }} {{ $profile->last_name }}
                            </h3>

                            @include('profile.social_link')

                            <div class="btn-edit-profile">
                                <a href="{{ route('profile.edit', $profile->id) }}" class="btn btn-primary">
                                    @lang('app.edit_my_profile')
                                    <i class="material-icons material-icon-sm">edit</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection