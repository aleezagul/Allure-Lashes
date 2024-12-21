


const slidess = document.querySelectorAll('.slide');
const navButtons = document.querySelectorAll('.nav-btn');
let currentSlide = 0;

function showSlide(index) {
  slidess.forEach((slide, i) => {
    slide.classList.toggle('active', i === index);
    navButtons[i].classList.toggle('active', i === index);
  });
  currentSlide = index;
}

function nextSlide() {
  const nextIndex = (currentSlide + 1) % slidess.length;
  showSlide(nextIndex);
}

// Auto-slide every 3 seconds
let slideInterval = setInterval(nextSlide, 3000);

// Manual navigation
navButtons.forEach((button, index) => {
  button.addEventListener('click', () => {
    clearInterval(slideInterval); // Stop auto-slide
    showSlide(index);
    slideInterval = setInterval(nextSlide, 3000); // Restart auto-slide
  });
});

/* Initialize first slide
showSlide(currentSlide);



let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;
const nextButton = document.querySelector('.next-btn');

nextButton.addEventListener('click', function() {
  // Increment the current index
  currentIndex = (currentIndex + 1) % totalSlides; // Loop back to the first image when reaching the last one
  updateSlider();
});

function updateSlider() {
  const offset = -currentIndex * 100; // Move slider left by 100% of the current index
  document.querySelector('.slider-container').style.transform = `translateX(${offset}%)`;
}

*/