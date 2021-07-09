<x-app>
    
    <script src="{{ asset('/js/slideshow.js') }}"></script>
    <script src="{{ asset('/js/slideshow2.js') }}"></script>
    
    {{-- show featured movies --}}
    <x-featured-movies :movies="$movies"/>

    {{-- show featured games --}}
    <x-featured-games :games="$games"/>
    
</x-app>
