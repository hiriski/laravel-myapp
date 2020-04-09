<div id="_Bx">
    <div class="__q__">
        <div class="_cn_">

            {{-- Main Heading with Icon --}}
            {{-- this is template for make main heading --}}
            <div class="_g_">
                <div class="_">
                    <div class="_io">
                        <span class="_icon"><i class="material-icons">notes</i></span>
                        <h3>Blog</h3>
                    </div>
                </div>
            </div>

            {{-- Perlu di uji jika di halaman pertama tampilkan quute ini --}}
            @if(Route::currentRouteName() === "blog.index" || Route::currentRouteName() === "index")
            <div class="__quote__">
                <blockquote>"Aku belajar dan membaca agar umur orang lain berguna bagiku, dan aku menulis agar orang lain mengambil manfaat atas umurku"
                    <cite>Ust. Felix Siauw</cite>
                </blockquote>
            </div>
            @endif

            <div class="__sa">
                @isset($posts)
                @foreach($posts as $item)
                <div class="__i__">
                    <div class="in_">
    
                        {{-- Post Image --}}
                        <div class="_img_">
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
                        <div class="c_">
                            
                            {{-- Post Content Inner --}}
                            <div class="_xo">
                                {{-- Post Title --}}
                                <div class="_t_">
                                    <a href="{{ route('blog.show', $item->slug) }}"><h2>{{ $item->title }}</h2></a>
                                </div>
        
                                <div class="__">
                                    <p>{{ $item->description }}</p>
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
                                        <i class="material-icons">access_time</i>
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

    {{-- Jika ini di load oleh index --}}
    @if(Route::currentRouteName() === "index")
    <div class="__l_m">
        <a href="{{ route('blog.index') }}?page=2"  class="anhoi-btn" data-size="lg"><span>Show more</span> <i class="material-icons">loop</i></a>
    </div>
    @endif

</div>