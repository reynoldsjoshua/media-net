<x-app>
    
    
   
    @foreach ($movies as $i => $movie)
        @if ($i >= 5)
        <br>
        <li>{{ $movie->name }}</li>
        <li>{{ $movie->category }}</li>
        <li>{{ $movie->rating }}</li>
        <li>{{ $movie->duration }}</li>
        <br>
        @endif
    @endforeach
    @foreach ($directors as $i => $director)
        @if ($i >= 5)
        <br>
        <li>{{ $director->name }}</li>
        <br>
        @endif
    @endforeach
</x-app>