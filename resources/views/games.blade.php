<x-app title="Games">

     <script src="{{ asset('/js/thumbnailSlider.js') }}"></script>
 
     <div class="relative bg-dark-blue">
         <x-game-side-nav />
         
         <x-games-hero-section :games="$games"/>
     
         <x-games-action-genre :games="$games"/>
         
         <x-games-horror-genre :games="$games"/>
     
         <x-games-comedy-genre :games="$games"/>
     
         <x-games-drama-genre :games="$games"/>
     
         <x-games-scyfy-genre :games="$games"/>
     </div>
     
 </x-app>