<div id="about">
    <div class="_r">
        <div class="_a">
            @isset($about)
            {{-- Background image area --}}
            <div class="_x">
                <div id="back">
                    <a href=""><i class="material-icons">arrow_back</i><span>Back</span></a>
                </div>
                <div class="img">
                    <img data-has-center="false" src="{{ $about->background_image }}" alt="Riski">
                    <div id="s" class="bottom">
                        {{-- Mencoba component --}}
                        @component('front.components.about-social-links')
                            
                        @endcomponent
                    </div>
                </div>
            </div>
    
            {{-- Content from database --}}
            <div class="c">
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="_">
                    <div class="rx">
                        <div class="_t">
                            <h1>{{ $about->title }}</h1>
                        </div>
                        <div class="_c">
                            {!! $about->content !!}
                        </div>
                    </div>
                </div>
            </div>
            @endisset
        </div>
    </div>
</div>