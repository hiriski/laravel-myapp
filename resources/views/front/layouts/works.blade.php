<div id="_Bx" class="_works">
  <div class="__q__">
    <div class="_cn_">

      {{-- Main Heading with Icon --}}
      {{-- this is template for make main heading --}}
      <div class="_g_">
        <div class="_">
          <div class="_io">
            <span class="_icon"><i class="material-icons">work</i></span>
            <h3>Works</h3>
          </div>
        </div>
      </div>

      <div class="__sa">
        @isset($works)
        @foreach($works as $item)
        <div class="__i__">
          <div class="in_">
  
            {{-- Work Image --}}
            <div class="_img_">
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
            <div class="c_">
              
              {{-- Work Content Inner --}}
              <div class="_xo">
                {{-- Work Name --}}
                <div class="_t_">
                  <a href="{{ route('blog.show', $item->slug) }}"><h2>{{ $item->name }}</h2></a>
                </div>
    
                <div class="__">
                  <p>{{ $item->description }}</p>
                </div>
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