<div class="container">
    <div class="row">
        @foreach($feature_posts as $item)
        <div class="col-12 col-md-6 mb-3">
            <div class="card post">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $item->post->title }}
                    </h5>
                    <p>{{ date('M, d Y', strtotime($item->post->created_at)) }}</p>
                    <p>{{ $item->post->description }}</p>
                    <a href="{{ route('blog.show', $item->post->slug) }}" class="btn btn-sm btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>