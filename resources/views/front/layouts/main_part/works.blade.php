<div class="works">
	<div class="inner">
		<div class="c_">

			{{-- Head title --}}
			<div class="h">
				<div class="_ha">
					<div class="_hb">
						<span class="dot"></span>
						<h2>Works</h2>
					</div>
				</div>
			</div>

			<div class="p">
				@isset($works)
					@foreach($works as $item)
					<div class="i">
						<div class="_ia">

							{{-- Work thumbnail --}}
							<div class="thumb">
								<a href="{{ route('work.show', $item->slug) }}">
								@if(!empty($item->image) || !empty($item->image_md))
								<img class="blurry-load"
									src="{{ getWorkImage($item->image_xs) }}"
									data-large="{{ getWorkImage($item->image_md) }}" alt="{{ $item->name }}">
								@else
								<img src="{{ asset('images/md.jpg') }}" alt="No image">
								@endif
								</a>
							</div>

							
							{{-- Work Content --}}
							<div class="c">
								<div class="_ci">
									<div class="_x">
										<div class="_t_">
											<a href="{{ route('work.show', $item->slug) }}"><h2>{{ $item->name }}</h2></a>
										</div>
										<a href="">{{ $item->category->name }}</a>
									</div>
									<a href="{{ route('work.show', $item->slug) }}">
										<svg viewBox="0 0 12.866 10.993"><defs></defs><path class="a" d="M16.866,8.81H6.632l3.841-3.841L9.5,4,4,9.5l5.5,5.5.969-.969L6.632,10.184H16.866Z" transform="translate(16.866 14.993) rotate(180)"/></svg>
									</a>
								</div>
							</div>
							
						</div>
					</div>
					@endforeach
				@endisset
				@empty($works)
					<div class="nothing">
						<span>Nothing to see here..</span>
					</div>
				@endempty
			</div>
		</div>
	</div>

	{{-- Jika ini di load oleh index dan jika jumlah postnya lebih dari 6 --}}
	@if(count($works) > 6)
		@if(Route::currentRouteName() === "index")
		<div class="__l_m">
		<a href="{{ route('blog.index') }}?page=2"  class="anhoi-btn" data-size="lg"><span>Show more</span> <i class="material-icons">loop</i></a>
		</div>
		@endif
	@endif

</div>