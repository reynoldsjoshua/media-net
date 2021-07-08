<x-app>

    {{-- show featured movies --}}
    {{-- <x-featured-movies :movies="$movies"/> --}}

    @foreach ($movies as $i => $movie)
        @if ($i < 5)
        <br>
        <ul class="test-ul">
            <li>{{ $movie->name }}</li>
            <li>{{ $movie->genre }}</li>
            <li>{{ $movie->rating }}</li>
            <li>{{ $movie->duration }}</li>
            <li>{{ $movie->director->name }}</li>
        </ul>
        <br>
        @endif
    @endforeach

</x-app>
