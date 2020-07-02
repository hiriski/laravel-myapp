<div id="cbh">
    <div class="inner">
        <div class="x">
            <div class="blade_svg">
                @include(getsvg($category->name))
            </div>
            <div class="t">
                @if(!empty($category->color))
                    <h1 style="color: {{ $category->color }}">{{ $category->name }}</h1>
                @else
                    <h1>{{ $category->name }}</h1>
                @endif
            </div>
        </div>
    </div>
</div>