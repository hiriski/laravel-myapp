<div id="feature_post">
    <div class="_s">
        <div class="_">
            <div class="_grid">
            @isset($feature_posts)
            @foreach($feature_posts as $item)
                {{ $item->post->title }}
                </h5>
                <p>{{ date('M d, Y', strtotime($item->post->created_at)) }}</p>
                <p>{{ $item->post->description }}</p>
                <a href="{{ route('blog.show', $item->post->slug) }}" class="button">Read More</a>
            @endforeach
            @endisset
            </div>
        </div>
    </div>
</div>