<div id="single" data-blog="single">
    <div class="__q__">
        <div class="_cn_">
            @isset($post)

            {{-- Parent post --}}
            <div class="_io_">
                <div class="c_">
                    
                    {{-- Post Content Inner --}}
                    <div class="_xo">
                        {{-- Post Title --}}
                        <div class="_t">
                            <a href="{{ route('blog.show', $post->slug) }}"><h2>{{ $post->title }}</h2></a>
                        </div>

                        {{-- Post Meta --}}
                        <div class="_m_">
                            <div class="_ad_">
                                <div class="_pic">
                                    <img src="{{ asset('images/profiles/' . $post->user->profile->image_sm) }}" alt="">
                                </div>
                                <div class="_a">
                                    <span>{{ $post->user->profile->first_name }}</span>
                                    <span class="_d">{{ date('M d, Y', strtotime($post->created_at)) }}</span>
                                </div>
                            </div>
                            <a href="" class="__c">
                                {{-- Sample icon  --}}
                                <div class="_ic">
                                    @include('front.components.vue-svg')
                                </div>
                                <span>{{ $post->category->name }}</span>
                            </a>
                        </div>

                        {{-- Post Image --}}
                        <div class="__">
                            <div class="_img_">
                            @if(!empty($post->image))
                                <img src="{{ asset('uploads/blog/' . $post->image )}}" alt="{{ $post->title }}">
                            @endif
                            </div>
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