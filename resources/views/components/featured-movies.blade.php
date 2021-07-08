<style>
  body {
    font-family: Arial;
    margin: 0;
  }
  
  * {
    box-sizing: border-box;
  }
  
  img {
    vertical-align: middle;
  }
  
  /* Position the image container (needed to position the left and right arrows) */
  .container {
    position: relative;
  }
  
  /* Hide the images by default */
  .mySlides {
    display: none;
  }
  
  /* Add a pointer when hovering over the thumbnail images */
  .cursor {
    cursor: pointer;
  }
  
  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 40%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
  }
  
  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }
  
  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  
  /* Container for image text */
  .caption-container {
    text-align: center;
    background-color: #222;
    padding: 2px 16px;
    color: white;
  }
  
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Six columns side by side */
  .column {
    float: left;
    width: 16.66%;
  }
  
  /* Add a transparency effect for thumnbail images */
  .demo {
    opacity: 0.6;
  }
  
  .active,
  .demo:hover {
    opacity: 1;
  }
  </style>
  <body>
  

  

  <div class="container">
    @foreach ($movies as $i => $movie)
  @if ($i < 5)
    <div class="mySlides">
      <img src="{{ $movie->url }}" style="width:100%">
      <p>{{ $movie->name }}</p>
      <p>{{ $movie->rating }}</p>
      <p>{{ $movie->genre }}</p>
      <p>{{ $movie->duration }}</p>
      <p>{{ $movie->director->name }}</p>
    </div>
      
    @endif
    @endforeach

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
  

    @foreach ($movies as $i => $movie)
    @if ($i < 5)
    <div class="">
      <div class="column">
        <img class="demo cursor" src="{{ $movie->url }}" style="width:100%" onclick="currentSlide({{ $i + 1 }})" alt="The Woods">
        <p>{{ $movie->name }}</p>
      </div>
    </div>
    @endif
    @endforeach
  </div>