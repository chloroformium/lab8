let currentSlide = 0;
const slides = document.querySelectorAll(".video");
const totalSlides = slides.length;
const slidesToShow = 2;
const slideWidth = slides[0].clientWidth;

function updateSlidePosition() {
  const videoSlide = document.getElementById("videoSlide");
  videoSlide.style.transform = `translateX(-${
    currentSlide * slideWidth
  }px)`;
}

function nextSlide() {
  if (currentSlide < totalSlides - slidesToShow) {
    currentSlide += slidesToShow;
  } else {
    currentSlide = 0;
  }
  updateSlidePosition();
}

function prevSlide() {
  if (currentSlide > 0) {
    currentSlide -= slidesToShow;
  } else {
    currentSlide = totalSlides - slidesToShow;
  }
  updateSlidePosition();
}

