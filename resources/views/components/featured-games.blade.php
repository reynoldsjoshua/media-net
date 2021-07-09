<div class="featured_movies">
  <h1>Featured Games</h1>
  <div class="movie_wrapper">
    @foreach ($games as $i => $game)
      @if ($i < 5)
        <div class="mySlides">
          <div class="image relative overflow-hidden flex justify-center items-center" style="background-image: url({{ $game->url }})">
            <h2 class="relative -right-full">{{ $game->title }}</h2>
            <div class="layover"></div>
          </div>
          <div class="slide_info flex">
            <p><span class="movie_info">Rating: </span>{{ $game->rating }}</p>
            <p><span class="movie_info">Duration: </span>{{ $game->genre }}</p>
            <p><span class="movie_info">Genre: </span>{{ $game->duration }}</p>
          </div>
        </div>
      @endif
    @endforeach
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
  </div>
  
  <div class="grid grid-cols-5 gap-4">
    @foreach ($games as $i => $game)
      @if ($i < 5)
        <div class="small_image_wrapper relative overflow-hidden" onclick="currentSlide({{ $i + 1 }})">
          <img class="small_images slider_image" src="{{ $game->url }}" alt="The Woods">
          <h3 class="absolute">{{ $game->title }}</h3>
          <div class="layover"></div>
        </div>
      @endif
    @endforeach
  </div>
</div>