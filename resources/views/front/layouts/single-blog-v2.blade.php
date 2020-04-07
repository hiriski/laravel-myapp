<div id="single" data-blog="single" data-version="two">
    <div class="__q__">
        <div class="_cn_">
            @isset($post)

            {{-- Parent post --}}
            <div class="_io_">
                <div class="c_">
                    
                    {{-- Post Content Inner --}}
                    <div class="_xo">

                        {{-- Post Image --}}
                        <div class="__">
                            <div class="_img_">
                            @if(!empty($post->image))
                                <img class="blurry-load"
                                    src="{{ getBlogImage($post->image_xs) }}"
                                    data-large="{{ getBlogImage($post->image) }}" alt="{{ $post->title }}">
                            @endif
                            </div>
                        </div>

                        {{-- Post Meta --}}
                        <div class="_m_">
                            <div class="_ad_">
                                <div class="_pic">
                                    <img src="{{ asset('images/profiles/' . $post->user->profile->image_sm) }}" alt="">
                                </div>
                                <div class="_a">
                                    <a href="{{ route('index') }}"><span>{{ $post->user->profile->first_name }}</span></a>
                                    <span class="_d">{{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMMM Do, YYYY') }}</span>
                                </div>
                            </div>
                            <a href="{{ route('blog.category.show', $post->category->slug) }}" class="__c">
                                {{-- Sample icon  --}}
                                <div class="_ic">
                                    @if($post->category->name === "Uncategory")
                                    @else
                                    @include(getsvg($post->category->name))
                                    @endif
                                </div>
                                <span>{{ $post->category->name }}</span>
                            </a>
                        </div>

                        {{-- Post Title --}}
                        <div class="_t">
                            <a href="{{ route('blog.show', $post->slug) }}"><h2>{{ $post->title }}</h2></a>
                        </div>

                        {{-- Main for content --}}
                        <div class="_ps_">
                            <div>{!! $post->content !!}</div>
                            @include('front.components.blog-tags')
                        </div>
                    </div>
                </div>
            </div>
            @endisset
        </div>
    </div>
</div>