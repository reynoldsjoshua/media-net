@foreach ($movies as $i => $movie)
    @if ($movie->genre == 'Comedy')
        <p><span>Movie Image: </span>{{ $movie->url }}</p>
        <p><span>Title: </span>{{ $movie->name }}</p>
        <p><span>Overview: </span>{{ $movie->description }}</p>
        <p><span>Directed By: </span>{{ $movie->director->name }}</p>
        <p><span>Rating: </span>{{ $movie->rating }}</p>
        <p><span>Duration: </span>{{ $movie->genre }}</p>
        <p><span>Genre: </span>{{ $movie->duration }}</p>
        <p><span>Release Date: </span>{{ $movie->released_at }}</p>
        <p><span>User Rating: </span>{{ $movie->user_rating }}</p>
    @endif
@endforeach