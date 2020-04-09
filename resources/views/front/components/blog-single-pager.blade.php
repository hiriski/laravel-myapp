@isset($blog_pager)
<div id="_bsp">
    <div class="_">
        <div class="l">
            @if($blog_pager["previous"])
            <div class="q">
                <div>
                    <a href="{{ route('blog.show', $blog_pager["previous"]->slug) }}">
                        <p>Previous Post</p>
                        <h5>{{ $blog_pager["previous"]->title }}</h5>
                        <span class="ic"><i class="material-icons">arrow_back</i></span>
                    </a>
                </div>
            </div>
            @endif
        </div>
        <div class="r">
            @if($blog_pager["next"])
            <div class="q">
                <div>
                    <a href="{{ route('blog.show', $blog_pager["next"]->slug) }}">
                        <p>Next Post</p>
                        <h5>{{ $blog_pager["next"]->title }}</h5>
                        <span class="ic"><i class="material-icons">arrow_forward</i></span>
                    </a>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endisset