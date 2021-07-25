<section class="movie_section mt-28 mb-24 flex overflow-hidden" style="height: 550px;">
    @foreach ($movies as $i => $movie)
        @if ($movie->genre == 'Drama')
            <div class="movies_card ml-6 mr-6 text-white flex relative">
                <div class="main_card relative z-10">
                    <div class="h-full bg-center bg-no-repeat bg-cover cursor-pointer rounded-lg" style="width: 274px; height: 430px; background-image: url('{{ $movie->image_cover }}')"></div>
                    <h5 class="font-bold text-2xl mt-4">{{ $movie->title }}</h5>
                    <p class="font-normal">{{ substr($movie->released_at, 0,10) }}</p>
                </div>
                <div class="hidden_card opacity-0 absolute left-0 bg-darker-blue rounded-lg overflow-hidden py-6 px-8 flex flex-col" style="width: 311px; height: 430px;">
                    <p class="font-bold text-base flex-grow">{{ substr($movie->description, 0, 250) }}&#8230;</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="w-9 h-9 mr-4 mt-3 cursor-pointer" src="{{ asset('/storage/svg/play_button.svg') }}" alt="star"><span class="mt-4 font-bold text-lg cursor-pointer">Play</span>
                        </div>
                        <p class="text-xs font-thin mt-7">{{ $movie->duration }}min</p>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</section>