<div id="RP">
    <div class="__q__">
        <div class="_cn_">

            {{-- Main Heading with Icon --}}
            {{-- this is template for make main heading --}}
            <div class="_g_">
                <div class="_">
                    <div class="_io">
                        <span class="_icon"><i class="material-icons">notes</i></span>
                        <h3>Related Post</h3>
                    </div>
                </div>
            </div>

            <div class="__sa">
                @isset($related_post)
                @foreach($related_post as $item)
                <div class="__i__">
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
                                    <a href="{{ route('blog.category.show', $item->category->slug) }}" class="__c">
                                        {{-- Dinamis Icon  --}}
                                        <div class="_ic">
                                            @if($item->category->name === "Uncategory")
                                            @else
                                            @include(getsvg($item->category->name))
                                            @endif
                                        </div>
                                        <span>{{ $item->category->name }}</span>
                                    </a>
                                    <div class="d_">
                                        <span>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('MMMM Do, YYYY') }}</span>
                                    </div>
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