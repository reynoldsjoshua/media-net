@foreach ($movies as $i => $movie)
      @if ($i == 16)
            <main style="background-image: url('{{ $movie->url }}');" class=" movie_hero bg-center bg-no-repeat bg-cover text-white py-40 px-6 max-w-1920 relative">
                  <div class="h-full w-full absolute bg-black opacity-40 top-0 left-0 z-10"></div>
                  <div class="max-w-1200 mx-auto relative z-20">
                        <div class="flex items-center font-medium mb-8">
                              <h1 class="text-6xl mr-7"><span class="text-7xl font-bold">{{ $movie->title }}</span> ({{ substr($movie->released_at, 0,  4) }})</h1>
                              <img class="w-7 h-7 mr-2 mt-4" src="{{ asset('/storage/svg/star.svg') }}" alt="star"><span class="text-3xl mt-4">{{ $movie->user_rating }}0&#37;</span>
                        </div>
                        <div class="flex font-medium text-3xl mb-14">
                              <h3 class="mr-4">{{ $movie->rating }} - {{ $movie->genre }}</h3>
                              <span>{{ $movie->duration }}min</span>
                        </div>
                        <h4 class="font-bold text-3xl mb-4">Overview</h4>
                        <p class="font-medium text-3xl mb-16">{{ $movie->description }}</p>
                        <p class="font-bold text-2xl mb-1.5">{{ $movie->director->name }}</p>
                        <p class="font-medium text-2xl">Director</p>
                        <div class="flex items-center mt-16 font-bold text-3xl">
                              <img class="w-14 h-14 mr-4 mt-3 cursor-pointer" src="{{ asset('/storage/svg/play_button.svg') }}" alt="star"><span class="mt-4 cursor-pointer">Play</span>
                        </div>
                  </div>
            </main>
      @endif
@endforeach