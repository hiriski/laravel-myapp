{{-- Main Heading For Tag Blog --}}
<div id="_H_Cb">
    <div class="_">
        <div class="_x0">
            <div class="_blade_svg">
                #
            </div>
            <div class="__t">
            @if(!empty($tag->color))
                <h1 style="color: {{ $tag->color }}">{{ $tag->name }}</h1>
            @else
                <h1>{{ $tag->name }}</h1>
            @endif
            </div>
        </div>
        @if(!empty($tag->description))
        <p>{{ $category->description }}</p>
        @endif
    </div>
</div>