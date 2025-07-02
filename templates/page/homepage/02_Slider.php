<section>
  <div class="w-full">
    <div id="carousel" class="relative overflow-hidden" style="height: 70vh;">
      <!-- Slides -->
      <div class="relative w-full h-full">
        <div class="slide fade absolute w-full h-full transition-opacity duration-1000">
          <img src="/assets/images/cyber01.png" class="w-full h-full object-cover" alt="Image 1">
        </div>
        <div class="slide fade absolute w-full h-full transition-opacity duration-1000 opacity-0">
          <img src="/assets/images/cyber02.png" class="w-full h-full object-cover" alt="Image 2">
        </div>
        <div class="slide fade absolute w-full h-full transition-opacity duration-1000 opacity-0">
          <img src="/assets/images/cyber03.png" class="w-full h-full object-cover" alt="Image 3">
        </div>
      </div>
      <!-- Navigation -->
      <button type="button" id="prev" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
        <span class="inline-flex items-center justify-center w-10 h-10 text-white bg-gray-800 rounded-full sm:w-16 sm:h-16 sm:text-2xl">
          <svg aria-hidden="true" class="w-5 h-5 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
        </span>
      </button>
      <button type="button" id="next" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
        <span class="inline-flex items-center justify-center w-10 h-10 text-white bg-gray-800 rounded-full sm:w-16 sm:h-16 sm:text-2xl">
          <svg aria-hidden="true" class="w-5 h-5 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </span>
      </button>
    </div>
  </div>
</section>

<script>
  const slides = document.querySelectorAll('.slide');
  const prevButton = document.getElementById('prev');
  const nextButton = document.getElementById('next');

  let currentSlideIndex = 0;
  
  // Fonction pour changer de slide
  const changeSlide = (index) => {
    slides.forEach((slide, i) => {
      if (i === index) {
        slide.classList.remove('opacity-0');
        slide.classList.add('opacity-100');
      } else {
        slide.classList.remove('opacity-100');
        slide.classList.add('opacity-0');
      }
    });
  };

  // Changer à la prochaine image
  const nextSlide = () => {
    currentSlideIndex = (currentSlideIndex + 1) % slides.length;
    changeSlide(currentSlideIndex);
  };

  // Revenir à l'image précédente
  const prevSlide = () => {
    currentSlideIndex = (currentSlideIndex - 1 + slides.length) % slides.length;
    changeSlide(currentSlideIndex);
  };

  // Initialiser le slider
  changeSlide(currentSlideIndex);

  // Evénements de clic
  nextButton.addEventListener('click', nextSlide);
  prevButton.addEventListener('click', prevSlide);

  // Optionnel: Automatiser le changement de slide toutes les 5 secondes
  setInterval(nextSlide, 5000);
</script>
