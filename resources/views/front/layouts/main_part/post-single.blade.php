<div class="post">
	<div class="inner">

			@isset($post)
	
			{{-- Parent post --}}
			<div class="_io_">
					
				{{-- Post Content Inner --}}
				<div class="_xo">
	
					{{-- Post featured image (thumbnail) --}}
					<div class="_thumb">
						<div class="_img">
						@if(!empty($post->image))
							<img class="blurry-load"
								src="{{ getBlogImage($post->image_xs) }}"
								data-large="{{ getBlogImage($post->image) }}" alt="{{ $post->title }}">
						@endif
						</div>
					</div>
	
					{{-- Post Meta --}}
					<div class="_m">
						<div class="_ma">

							<div class="avatar">
								<img src="{{ asset('images/profiles/' . $post->user->profile->image_sm) }}" alt="">
							</div>

							<div class="name">
								<span></span><a href="{{ route('index') }}"><span>{{ $post->user->profile->first_name }}</span></a>
							</div>

							<time>
								<span class="_d">{{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMMM Do, YYYY') }}</span>
							</time>

							<a href="{{ route('blog.category.show', $post->category->slug) }}" class="__c">
								<div class="ic">
									@if($post->category->name === "Uncategory")
									@else
										@include(getsvg($post->category->name))
									@endif
								</div>
								<span>{{ $post->category->name }}</span>
							</a>
							
						</div>
					</div>
		
					{{-- Post Title --}}
					<div class="_t">
						<a href="{{ route('blog.show', $post->slug) }}">
						<h1>{{ $post->title }}</h1>
						</a>
					</div>
		
					{{-- Main for content --}}
					<div class="_ps_">
						<div>{!! $post->content !!}</div>
						@include('front.components.blog-tags')
					</div>

				</div>

			</div>
			@endisset
	</div>
</div>