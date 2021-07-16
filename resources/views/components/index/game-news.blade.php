<section class="news_container">
    <h1>Game Articles</h1>
    <div class="grid grid-cols-3 gap-6">
        @foreach ($gameNews as $i => $news)
            @if ($i < 6)
                <div class="news_wrapper flex cursor-pointer">
                    <div class="thumbnail">
                        <img src="{{ $news->url }}" alt="">
                    </div>
                    <div class="description">
                        <h2>{{ substr($news->title, 0,  17) }}&#8230;</h2>
                        <p>{{ substr($news->description, 0,  57) }}&#8230;</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section>