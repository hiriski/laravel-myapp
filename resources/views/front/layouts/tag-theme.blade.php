<div id="_Bx">
    <div class="__q__">
        @isset($tag)
        <div class="_cn_">

        {{-- Import tag blog heading --}}
        @include('front.components.tag-theme-heading')
        
            <div class="__sa">
                @foreach($tag->themes as $item)
                <div class="__i__">
                    <div class="in_">
    
                        {{-- Theme Image --}}
                        <div class="_img_">
                        <a href="{{ route('theme.show', $item->slug) }}">
                        @if(!empty($item->image) || !empty($item->image_md))
                            <img class="blurry-load"
                                src="{{ getBlogImage($item->image_xs) }}"
                                data-large="{{ getBlogImage($item->image_md) }}" alt="{{ $item->title }}">
                        @else
                            <img src="{{ asset('images/md.jpg') }}" alt="No image">
                        @endif
                        </a>
                        </div>
    
                        
                        {{-- Theme Content --}}
                        <div class="c_">
                            
                            {{-- Theme Content Inner --}}
                            <div class="_xo">
                                {{-- Theme Title --}}
                                <div class="_t_">
                                    <a href="{{ route('theme.show', $item->slug) }}"><h2>{{ $item->title }}</h2></a>
                                </div>
        
                                <div class="__">
                                    <p>{{ $item->description }}</p>
                                </div>
        
                                {{-- Theme Meta --}}
                                <div class="_m_">
                                    <a href="{{ route('theme.category.show', $item->category->slug) }}" class="__c">
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
            </div>
        </div>
        @endisset
    </div>

</div>