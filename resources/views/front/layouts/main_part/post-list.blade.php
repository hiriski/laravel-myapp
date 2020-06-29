<div class="posts">
	<div class="inner">
		<div class="_c_">

			{{-- Main Heading with Icon --}}
			{{-- this is template for make main heading --}}
			<div class="h">
				<div class="_ha">
					<div class="_hb">
						<span class="dot"></span>
						<h2>Coretan</h2>
					</div>
				</div>
			</div>

			{{-- Show quote only homepage and blog index --}}
			@if((Route::currentRouteName() === "index") || (Route::currentRouteName() === "blog.index"))
				<div class="quote">
					<blockquote>"Aku belajar dan membaca agar umur orang lain berguna bagiku, dan aku menulis agar orang lain mengambil manfaat atas umurku"
					<cite>Ust. Felix Siauw</cite>
					</blockquote>
				</div>
			@endif

			<div class="p">
				@isset($posts)
					@foreach($posts as $item)
					<div class="i">
						<div class="_ia">

							{{-- Post Image --}}
							<div class="thumb">
								<a href="{{ route('blog.show', $item->slug) }}">
								@if(!empty($item->image) || !empty($item->image_md))
								<img class="blurry-load"
									src="{{ getBlogImage($item->image_xs) }}"
									data-large="{{ getBlogImage($item->image_md) }}" alt="{{ $item->title }}">
								@else
								<img src="{{ asset('images/md.jpg') }}" alt="No image">
								@endif
								</a>
							</div>

							
							{{-- Post Content --}}
							<div class="c">
								
								{{-- Content inner --}}
								<div class="_ci">
									{{-- Post Title --}}
									<div class="_t_">
										<a href="{{ route('blog.show', $item->slug) }}"><h2>{{ $item->title }}</h2></a>
									</div>
						
									<div class="summary">
										<p>{{ $item->description }}</p>
									</div>
						
									{{-- Posts meta --}}
									<div class="foot">
										<div class="d_">
											<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm121.75 388.414062c-4.160156 4.160157-9.621094 6.253907-15.082031 6.253907-5.460938 0-10.925781-2.09375-15.082031-6.253907l-106.667969-106.664062c-4.011719-3.988281-6.25-9.410156-6.25-15.082031v-138.667969c0-11.796875 9.554687-21.332031 21.332031-21.332031s21.332031 9.535156 21.332031 21.332031v129.835938l100.417969 100.414062c8.339844 8.34375 8.339844 21.824219 0 30.164062zm0 0"/></svg>
											<time>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('MMMM Do, YYYY') }}</time>
										</div>
										<a href="{{ route('blog.show', $item->slug) }}">
											<span>Read more</span>
											<svg viewBox="0 0 25.995 11.574">
											<defs>
											</defs>
											<path id="ic_arrow_back_24px" class="cls-1" d="M29.995,9.064H6.771L10.814,5.02,9.787,4,4,9.787l5.787,5.787,1.02-1.02L6.771,10.51H29.995Z" transform="translate(29.995 15.574) rotate(180)"/>
											</svg>
										</a>
									</div>

									{{-- Category --}}
									<a class='category' data-category="laravel" href="">
										Laravel
									</a>

								</div>
							</div>
						</div>
					</div>
					@endforeach
				@endisset
						
				@empty($posts)
					<div class="nothing">
						<span>Nothing to see here..</span>
					</div>
				@endempty
			</div>
		</div>
	</div>


</div>


{{-- Jika ini di load oleh index dan jika jumlah postnya lebih dari 6 --}}
@if(Route::currentRouteName() === "index")
	<div class="__l_m">
		<a href="{{ route('blog.index') }}?page=2"  class="anhoi-btn" data-size="lg"><span>See more</span> <i class="material-icons">loop</i></a>
	</div>
@endif

{{-- Blog Pager --}}
@if(Route::currentRouteName() === "blog.index")
	<div id="__pg__">
		<div class="__">
			{{ $posts->links() }}
		</div>
	</div>
@endif