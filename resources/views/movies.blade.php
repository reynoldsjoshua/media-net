<x-app title="Movies">

    <script src="{{ asset('/js/thumbnailSlider.js') }}"></script>

    <div class="relative bg-dark-blue">
        <x-side-nav />
        
        <x-hero-section :movies="$movies"/>
    
        <x-action-genre :movies="$movies"/>
        
        <x-horror-genre :movies="$movies"/>
    
        <x-comedy-genre :movies="$movies"/>
    
        <x-drama-genre :movies="$movies"/>
    
        <x-scyfy-genre :movies="$movies"/>
    </div>
    
</x-app>