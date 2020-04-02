<div id="BlogIndex">
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
            @if(Route::getCurrentRoute()->uri === "blog")
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
                        @if(!empty($item->image))
                            <img src="{{ asset('uploads/blog/' . $item->image_md )}}" alt="{{ $item->title }}">
                        @else
                            <img src="{{ asset('images/md.jpg') }}" alt="No image">
                        @endif
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
                                    <a href="" class="__c">
                                        {{-- Sample icon  --}}
                                        <div class="_ic">
                                            @include('front.components.laravel-svg')
                                        </div>
                                        <span>{{ $item->category->name }}</span>
                                    </a>
                                    <div class="d_">
                                        <span>{{ date('M d, Y', strtotime($item->created_at)) }}</span>
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