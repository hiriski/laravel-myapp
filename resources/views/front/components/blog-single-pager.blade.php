@isset($blog_pager)
<div id="_bsp">
    <div class="inner">
        <div class="y">
            <div class="i">
                @if($blog_pager["previous"])
                    <div class="q">
                        <div>
                            <a href="{{ route('blog.show', $blog_pager["previous"]->slug) }}">
                                <p>Prev</p>
                                <h5>{{ $blog_pager["previous"]->title }}</h5>
                                <svg viewBox="0 0 25.995 11.574"><defs></defs><path class="a" d="M29.995,9.064H6.771L10.814,5.02,9.787,4,4,9.787l5.787,5.787,1.02-1.02L6.771,10.51H29.995Z" transform="translate(-4 -4)"/></svg>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
            <div class="i">
                @if($blog_pager["next"])
                    <div class="q">
                        <div>
                            <a href="{{ route('blog.show', $blog_pager["next"]->slug) }}">
                                <p>Next</p>
                                <h5>{{ $blog_pager["next"]->title }}</h5>
                                <svg viewBox="0 0 25.995 11.574"><defs></defs><path id="ic_arrow_back_24px" class="cls-1" d="M29.995,9.064H6.771L10.814,5.02,9.787,4,4,9.787l5.787,5.787,1.02-1.02L6.771,10.51H29.995Z" transform="translate(29.995 15.574) rotate(180)"/></svg>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endisset