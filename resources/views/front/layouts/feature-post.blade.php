<div id="Ftr_P">
    <div class="__f__">
        <div class="__">

            {{-- Main Heading with Icon --}}
            {{-- this is template for make main heading --}}
            <div class="_mh_">
                <div class="_">
                    <span class="_icon"><i class="material-icons">notes</i></span>
                    <h3>Feature Post</h3>
                </div>
            </div>

            <div class="_p_">
            @isset($feature_posts)
            @foreach($feature_posts as $item)
                <div class="__i__">
                    <div class="in_">

                        {{-- Post Image --}}
                        <div class="_img_">
                            @if(!empty($item->post->image) || !empty($item->post->featured_image))
                            <img src="{{ getBlogImage($item->post->featured_image) }}" alt="{{ $item->post->title }}">
                            @else
                            <img src="{{ asset('images/md.jpg') }}" alt="No image">
                            @endif
                        </div>

                        
                        {{-- Post Content --}}
                        <div class="c_">
                            
                            {{-- Post Title --}}
                            <div class="_t_">
                                <h2>
                                    <a href="{{ $item->post->slug }}">{{ $item->post->title }}</a>
                                </h2>
                            </div>

                            <div class="__">
                                <p>{{ $item->post->description }}</p>
                            </div>

                            {{-- Post Meta --}}
                            <div class="_m">
                                <div class="__c">
                                    <span>{{ $item->post->category->name }}</span>
                                </div>
                                <div class="d_">
                                    <span>{{ date('M d, Y', strtotime($item->post->created_at)) }}</span>
                                </div>
                            </div>

                        </div>
                        </h5>
                        <a href="{{ route('blog.show', $item->post->slug) }}" class="button">Read More</a>
                    </div>
                </div>
            @endforeach
            @endisset
            </div>
        </div>
    </div>
</div>