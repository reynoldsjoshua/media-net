@foreach ($games as $i => $games)
      @if ($i == 16)
            <main style="background-image: url('{{ $games->url }}');" class=" movie_hero bg-center bg-no-repeat bg-cover text-white py-40 px-6 max-w-1920 relative">
                  <div class="h-full w-full absolute bg-black opacity-40 top-0 left-0 z-10"></div>
                  <div class="max-w-1200 mx-auto relative z-20">
                        <div class="flex items-center font-medium mb-8">
                              <h1 class="text-6xl mr-7"><span class="text-7xl font-bold">{{ $games->title }}</span> ({{ substr($games->release_date, 0,  4) }})</h1>
                              <img class="w-7 h-7 mr-2 mt-4" src="{{ asset('/storage/svg/star.svg') }}" alt="star"><span class="text-3xl mt-4">80&#37;</span>
                        </div>
                        <div class="font-medium text-3xl mb-14">
                              <h3 class="mr-4">Rated: {{ $games->rating }} - {{ $games->genre }}</h3>
                        </div>
                        <h4 class="font-bold text-3xl mb-4">Overview</h4>
                        <p class="font-medium text-3xl mb-16">{{ $games->description }}</p>
                        <div class="flex items-center mt-24 font-bold text-3xl">
                              <img class="w-14 h-14 mr-4 mt-3 cursor-pointer" src="{{ asset('/storage/svg/play_button.svg') }}" alt="star"><span class="mt-4 cursor-pointer">Play</span>
                        </div>
                  </div>
            </main>
      @endif
@endforeach