var slideIndex = 1;

showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
};

function currentSlide(n) {
  showSlides(slideIndex = n);
};

function showSlides(n) {
  
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var slides2 = document.getElementsByClassName("mySlides2");
  
  if (n > slides.length) {
    slideIndex = 1
  } else if (n > slides2.length) {
    slideIndex = 1
  };

  if (n < 1) {
    slideIndex = slides.length
  };

  if (n < 1) {
    slideIndex = slides2.length
  };
  
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  };

  for (i = 0; i < slides2.length; i++) {
      slides2[i].style.display = "none";
  };

  slides[slideIndex-1].style.display = "block";
  slides2[slideIndex-1].style.display = "block";

};