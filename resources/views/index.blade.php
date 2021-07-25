<x-app title="Home">
    
    <script src="{{ asset('/js/slideshow.js') }}"></script>
    
    <div class="my-20">
        <x-featured-movies :movies="$movies"/>
    
        <x-movie-news :movieNews="$movieNews"/>
    
        <x-featured-games :games="$games"/>
    
        <x-game-news :gameNews="$gameNews"/>
    </div>

</x-app>
