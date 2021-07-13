@foreach ($horror as $i => $scary)
        
            <p><span>Movie Image: </span>{{ $scary->url }}</p>
            <p><span>Title: </span>{{ $scary->name }}</p>
            <p><span>Overview: </span>{{ $scary->description }}</p>
            <p><span>Directed By: </span>{{ $scary->director->name }}</p>
            <p><span>Rating: </span>{{ $scary->rating }}</p>
            <p><span>Duration: </span>{{ $scary->genre }}</p>
            <p><span>Genre: </span>{{ $scary->duration }}</p>
            <p><span>Release Date: </span>{{ $scary->released_at }}</p>
            <p><span>User Rating: </span>{{ $scary->user_rating }}</p>
        
@endforeach