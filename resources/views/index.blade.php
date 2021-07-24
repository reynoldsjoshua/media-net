<x-app title="Home">
    
    <script src="{{ asset('/js/slideshow.js') }}"></script>
    
    <x-featured-movies :movies="$movies"/>

    <x-movie-news :movieNews="$movieNews"/>

    <x-featured-games :games="$games"/>

    <x-game-news :gameNews="$gameNews"/>

</x-app>
