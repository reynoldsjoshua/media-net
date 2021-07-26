<section class="movie_section relative mt-28 mb-24 overflow-hidden" style="height: 550px;">
    <div class="next_buttons1 top-0 rounded-xl opacity-0 absolute z-50  h-full cursor-pointer text-9xl text-white flex items-center" style="left: 291px;" onclick="moveRight(event)">
        <i class="fa fa-chevron-left mb-20" aria-hidden="true"></i>
    </div>
    <div class="next_buttons2 top-0 rounded-xl opacity-0 absolute z-50 h-full cursor-pointer text-9xl text-white flex items-center" style="right: 230px;" onclick="moveLeft(event)">
        <i class="fa fa-chevron-right mb-20" aria-hidden="true"></i>
    </div>
    <div class="wrapper flex absolute left-0 top-0" style="left: 300px;">
        @foreach ($games as $i => $game)
            @if ($game->genre == 'Strategy')
                <div class="movies_card ml-6 mr-6 text-white flex relative">
                    <div class="main_card relative z-10">
                        <div class="h-full bg-center bg-no-repeat bg-cover cursor-pointer rounded-lg" style="width: 274px; height: 430px; background-image: url('{{ $game->image_cover }}')"></div>
                        <h5 class="font-bold text-2xl mt-4">{{ $game->title }}</h5>
                        <p class="font-normal">{{ substr($game->release_date, 0,10) }}</p>
                    </div>
                    <div class="hidden_card opacity-0 absolute left-0 bg-darker-blue rounded-lg overflow-hidden py-6 px-8 flex flex-col" style="width: 311px; height: 430px;">
                        <p class="font-bold text-base flex-grow">{{ substr($game->description, 0, 250) }}&#8230;</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img class="w-9 h-9 mr-4 mt-3 cursor-pointer" src="{{ asset('/storage/svg/play_button.svg') }}" alt="star"><span class="mt-4 font-bold text-lg cursor-pointer">Play</span>
                            </div>
                            <p class="text-xs font-thin mt-7">{{ $game->duration }}min</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section>