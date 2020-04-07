{{-- Main Heading For Category Blog --}}
<div id="_H_Cb">
    <div class="_">
        <div class="_x0">
            <div class="_blade_svg">
                @include(getsvg($category->name))
            </div>
            <div class="__t">
            @if(!empty($category->color))
                <h1 style="color: {{ $category->color }}">{{ $category->name }}</h1>
            @else
                <h1>{{ $category->name }}</h1>
            @endif
            </div>
        </div>
        @if(!empty($category->description))
        <p>{{ $category->description }}</p>
        @endif
    </div>
</div>