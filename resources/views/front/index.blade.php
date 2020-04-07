@extends('front.layouts.app')

@section('content')
	<div class="Anh">
		<div class="__o__">
			<div class="__">
				@if($setting->show_featured_post)
					@include('front.layouts.feature-post')
				@elseif($setting->show_blog_homepage)
					@include('front.layouts.blog-index')
				@endif
			</div>
		</div>
	</div>
@endsection