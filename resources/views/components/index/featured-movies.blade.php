<div class="featured featured_movies">
  <h1>Featured Movies</h1>
  <div class="featured_wrapper">
    @foreach ($movies as $i => $movie)
      @if ($i < 5)
        <div class="mySlides">
          <div class="image relative cursor-pointer overflow-hidden flex justify-center items-center" style="background-image: url('{{ $movie->url }}')">
            <h2 class="relative -right-full">{{ $movie->title }}</h2>
            <div class="layover"></div>
          </div>
          <div class="slide_info flex">
            <p><span class="featured_info">Directed By: </span>{{ $movie->director->name }}</p>
            <p><span class="featured_info">Rating: </span>{{ $movie->rating }}</p>
            <p><span class="featured_info">Duration: </span>{{ $movie->duration }}min</p>
            <p><span class="featured_info">Genre: </span>{{ $movie->genre }}</p>
          </div>
        </div>
      @endif
    @endforeach
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
  </div>

  <div class="grid grid-cols-5 gap-4">
    @foreach ($movies as $i => $movie)
      @if ($i < 5)
        <div class="small_image_wrapper h- relative cursor-pointer overflow-hidden" style="background-image: url('{{ $movie->url }}')" onclick="currentSlide({{ $i + 1 }})">
          <h3 class="absolute">{{ $movie->title }}</h3>
          <div class="layover"></div>
        </div>
      @endif
    @endforeach
  </div>
</div>