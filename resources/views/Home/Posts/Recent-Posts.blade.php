<div class="widget popular-feeds">
    <h5 class="widget-title">Recent Posts</h5>
    <div class="popular-feed-loop">
        @foreach($recentPosts as $post)
            <div class="single-popular-feed">
                <div class="post-image">
                    <a href="{{ route('blog.show', $post->id) }}"><img src="{{ asset($post->image) }}" alt="#"></a>
                </div>
                <div class="feed-desc">
                    <h6 class="post-title"><a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a></h6>
                    <span class="time"><i class="lni lni-calendar"></i> {{ $post->created_at->format('dS M Y') }}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>
