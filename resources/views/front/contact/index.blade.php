@extends('front.layouts.app')

@section('content')

{{-- Blog category waves --}}
@include('front.components.contact-top')

<div id="r">
	<div class="r">

        <div id="_c-s_" @if(Session::has("contact_success")) class='show' @endif>
            <div class="ms">
                <div class="_c_">
                    @if(Session::has('contact_success'))
                        <p>Thank you!</p>
                        <h3>{{ Session::get("message") }}</h3>
                        <a href="{{ route('index') }}"><i class="material-icons">arrow_back</i> <span>Back to homepage</span></a>
                    @endif
                </div>
            </div>
        </div>

		<div id="_CxT">
			<div class="__s">

				<div class="top">
					<div id="back">
						<a href="{{ route('index') }}">
							<svg viewBox="0 0 25.995 11.574"><defs></defs><path class="a" d="M29.995,9.064H6.771L10.814,5.02,9.787,4,4,9.787l5.787,5.787,1.02-1.02L6.771,10.51H29.995Z" transform="translate(-4 -4)"/></svg>
						</a>
					</div>
					<div class="_h_">
						<h1>Wanna say hello ?</h1>
					</div>
				</div>
		
				<div class="_">
				{{ Form::open(['url' => route('contact.store')]) }}
				
					<div class="_f tp">
						<label for="topic" class="topic-label">
							<svg viewBox="0 0 20 20"><path d="M21,6H19v9H6v2a1,1,0,0,0,1,1H18l4,4V7A1,1,0,0,0,21,6Zm-4,6V3a1,1,0,0,0-1-1H3A1,1,0,0,0,2,3V17l4-4H16A1,1,0,0,0,17,12Z" transform="translate(-2 -2)"/></svg>
							<span>What are you inquiring about?</span>
						</label>
						{{ Form::select('topic_id', $topic, 1, array('id' => 'topic', 'class' => 'topic fi')) }}
						@error('category_id')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
		
					<div class="_f">
						<label for="name">
							<svg viewBox="0 0 16 16"><path d="M12,12A4,4,0,1,0,8,8,4,4,0,0,0,12,12Zm0,2c-2.67,0-8,1.34-8,4v2H20V18C20,15.34,14.67,14,12,14Z" transform="translate(-4 -4)"/></svg>
							<span>Name</span>
						</label>
						<input id="name" type="text" class="fi @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>
						@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
		
					<div class="_f">
						<label for="email">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 16"><path d="M20,4H4A2,2,0,0,0,2.01,6L2,18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2V6A2.006,2.006,0,0,0,20,4Zm0,4-8,5L4,8V6l8,5,8-5Z" transform="translate(-2 -4)"/></svg>
							<span>Email address</span>
						</label>
						<input id="email" type="email" class="fi @error('email') is-invalid @enderror" name="email" value={{ old('email') }}>
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
						<span class="spinner-validate" data-has-validate="false">
							<i class="material-icons"></i>
						</span>
					</div>
		
					<div class="_f">
						<label for="message">
							<svg viewBox="0 0 20 20"><path d="M20,2H4A2.006,2.006,0,0,0,2,4V22l4-4H20a2.006,2.006,0,0,0,2-2V4A2.006,2.006,0,0,0,20,2Z" transform="translate(-2 -2)"/></svg>
							<span>Write a message here..</span>
						</label>
						<textarea id="message" class="fi @error('message') is-invalid @enderror" name="message" maxlength="500" minlength="5">{{ old('message') }}</textarea>
						@error('message')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
		
					<div class="_f">
						<button id="submit" type="submit">
							<span>Send message</span>
							<svg id="Capa_1" enable-background="new 0 0 497 497"  viewBox="0 0 497 497" xmlns="http://www.w3.org/2000/svg"><g><path d="m115.693 438.678 74.647-68.935 74.647-12.265 232.013-299.156-190.653 60.857-190.654 49.825-34.434 77.627 43.04 59.391z" fill="#3a92ff"/><path d="m497 58.322-415.741 188.309-68.137-41.103c-21.142-12.758-15.622-44.831 8.57-49.794z" fill="#3a92ff"/><path d="m264.987 357.478-149.294 81.2 55.369-137.87z" fill="#0564da"/><path d="m497 58.322-122.926 327.501c-5.958 15.884-24.869 22.454-39.398 13.697l-69.689-42.043-93.925-56.67z" fill="#3a92ff"/><path d="m497 58.322-325.938 242.486-55.369 137.87-34.434-192.047z" fill="#0564da"/></g></svg>
						</button>
					</div>
		
				{{ Form::close() }}
				</div>
			</div>
		</div>

    </div>
</div>
@endsection