<div id="_bt_">
    <ul>
    @foreach($post->tags as $tag)
        <li>
            <a href="{{ route('blog.tag.show', $tag->slug) }}">{{ $tag->name }}</a>
        </li>
    @endforeach
    </ul>
</div>