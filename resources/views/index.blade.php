<x-app>
    
    <script src="{{ asset('/js/slideshow.js') }}"></script>
    
    {{-- show featured movies --}}
    <x-featured-movies :movies="$movies"/>

    <div class="game_background">
        
        {{-- show featured games --}}
        <x-featured-games :games="$games"/>
    
    </div>
    
</x-app>
