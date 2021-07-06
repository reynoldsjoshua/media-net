<x-app>

    {{-- show featured movies --}}
    {{-- <x-featured-movies :movies="$movies"/> --}}

    {{-- @foreach ($games as $i => $game)
        @if ($i < 5)
        <br>
        <h1>Game</h1>
        <li>{{ $game->title }}</li>
        <br>
        @endif
    @endforeach --}}

    {{-- @foreach ($gameNews as $i => $news)
        @if ($i < 6)
        <br>
        <h1>Game News</h1>
        <li>{{ $news->title }}</li>
        <br>
        @endif
    @endforeach

    @foreach ($movieNews as $i => $news)
        @if ($i < 6)
        <br>
        <h1>Movie News</h1>
        <li>{{ $news->title }}</li>
        <br>
        @endif
    @endforeach --}}

    @foreach ($directors as $i => $director)
        @if ($i >= 5)
        <br>
        <li>{{ $director->name }}</li>
        <br>
        @endif
    @endforeach


</x-app>