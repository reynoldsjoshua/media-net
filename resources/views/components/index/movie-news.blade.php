<section class="news_container" style="margin-bottom: 80px;">
    <h1>Movie Articles</h1>
    <div class="grid grid-cols-3 gap-6">
        @foreach ($movieNews as $i => $news)
            @if ($i < 6)
                <div class="news_wrapper flex cursor-pointer">
                    <div class="thumbnail">
                        <img src="https://placekitten.com/75/75" alt="">
                    </div>
                    <div class="description">
                        <h2>{{ substr($news->title, 0,  25) }}</h2>
                        <p>{{ $news->description }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section>
