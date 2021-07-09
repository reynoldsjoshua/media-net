<div class="featured_movies">
  <h1>Featured Movies</h1>
  <div class="movie_wrapper">
    @foreach ($movies as $i => $movie)
      @if ($i < 5)
        <div class="mySlides">
          <div class="image relative overflow-hidden flex justify-center items-center" style="background-image: url({{ $movie->url }})">
            <h2 class="relative -right-full">{{ $movie->name }}</h2>
            <div class="layover"></div>
          </div>
          <div class="slide_info flex">
            <p><span class="movie_info">Directed By: </span>{{ $movie->director->name }}</p>
            <p><span class="movie_info">Rating: </span>{{ $movie->rating }}</p>
            <p><span class="movie_info">Duration: </span>{{ $movie->genre }}</p>
            <p><span class="movie_info">Genre: </span>{{ $movie->duration }}</p>
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
        <div class="small_image_wrapper relative overflow-hidden" onclick="currentSlide({{ $i + 1 }})">
          <img class="small_images slider_image" src="{{ $movie->url }}" alt="The Woods">
          <h3 class="absolute">{{ $movie->name }}</h3>
          <div class="layover"></div>
        </div>
      @endif
    @endforeach
  </div>
</div>