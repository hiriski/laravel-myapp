<div id="rp">
    <div class="_q">
        <div class="_cn_">

            <div class="_g">
                <div class="_gi">
                    <h3>Related Posts</h3>
                </div>
            </div>

            <div class="_sa">
                @isset($related_post)
                @foreach($related_post as $item)
                <div class="i">
                    <div class="in_">
    
                        {{-- Post Image --}}
                        <div class="_img_">
                        <a href="{{ route('blog.show', $item->slug) }}">
                        @if(!empty($item->image) || !empty($item->image_md))
                            <img class="lz_" 
                                src="{{ getBlogImage($item->image_xs) }}"
                                data-src="{{ getBlogImage($item->image_md) }}"
                                alt="{{ $item->title }}">
                        @else
                            <img class="lz_" src="{{ asset('images/md.jpg') }}" alt="No image">
                        @endif
                        </a>
                        </div>
    
                        
                        {{-- Post Content --}}
                        <div class="c_">
                            
                            {{-- Post Content Inner --}}
                            <div class="_xo">
                                {{-- Post Title --}}
                                <div class="_t_">
                                    <a href="{{ route('blog.show', $item->slug) }}"><h4>{{ $item->title }}</h4></a>
                                </div>
                                
                                {{-- Post Meta --}}
                                <div class="_m_">
                                    <div class="d_">
                                        <span>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('MMMM Do, YYYY') }}</span>
                                    </div>
                                    <a href="{{ route('blog.show', $item->slug) }}" class="read_more">
                                        <svg viewBox="0 0 25.995 11.574"><defs></defs><path id="ic_arrow_back_24px" class="cls-1" d="M29.995,9.064H6.771L10.814,5.02,9.787,4,4,9.787l5.787,5.787,1.02-1.02L6.771,10.51H29.995Z" transform="translate(29.995 15.574) rotate(180)"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endisset
            </div>
        </div>
    </div>
</div>