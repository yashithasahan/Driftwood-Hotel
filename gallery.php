<?php
$page_title = 'Gallery — DRIFTWOOD';
$page_description = 'Explore the serene beauty of Driftwood Villa through our photo gallery.';
include 'includes/header.php';
?>

<main class="bg-white">
  <!-- Hero Section -->
  <section class="relative w-full h-[400px] md:h-[500px] overflow-hidden">
    <img src="./assets/images/window.webp" alt="Driftwood Villa view" class="w-full h-full object-cover">
  </section>

  <!-- Intro Section -->
  <section class="container mx-auto px-4 py-12 text-center">
    <h1 class="text-3xl md:text-4xl font-semibold text-emerald-700 mb-4">
      The Soul of Driftwood, in Pictures
    </h1>
    <p class="text-gray-700 max-w-2xl mx-auto leading-relaxed">
      Step into the serene world of Driftwood Villa — every corner is thoughtfully curated, every view frames the sea,
      and every space invites you to slow down and simply be.
    </p>
  </section>

  <!-- Slideshow Section -->
  <section class="relative container mx-auto px-4">
    <div class="relative overflow-hidden rounded-xl shadow-lg">
      <div id="gallery-slides" class="relative w-full h-[400px] md:h-[500px]">
        <?php
        // Add your images here
        $images = [
          './assets/images/gallery1.webp',
          './assets/images/gallery2.webp',
          './assets/images/gallery3.webp',
          './assets/images/gallery4.webp',
          './assets/images/gallery5.webp',
        ];

        foreach ($images as $index => $image) {
          $active = $index === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0';
          echo "<img src='$image' alt='Driftwood Villa Image $index' class='absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 ease-in-out $active'>";
        }
        ?>
      </div>

      <!-- Navigation Arrows -->
      <button id="prev-slide" class="absolute z-10 left-3 top-1/2 transform -translate-y-1/2 bg-white/70 hover:bg-white text-gray-800 p-3 rounded-full shadow-md focus:outline-none">
        &#10094;
      </button>
      <button id="next-slide" class="absolute z-10 right-3 top-1/2 transform -translate-y-1/2 bg-white/70 hover:bg-white text-gray-800 p-3 rounded-full shadow-md focus:outline-none">
        &#10095;
      </button>
    </div>
  </section>

  <!-- Thumbnails Section -->
  <section class="container mx-auto px-4 py-12">
    <div id="thumbnail-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3">
      <?php
      foreach ($images as $index => $image) {
        echo "<div class='overflow-hidden rounded-lg hover:scale-105 transition-transform duration-300 shadow-md cursor-pointer'>
                <img data-index='$index' src='$image' alt='Driftwood Villa Thumbnail $index' class='w-full h-40 object-cover thumbnail'>
              </div>";
      }
      ?>
    </div>
  </section>
</main>

<script>
// --- Slideshow Logic ---
const slides = document.querySelectorAll('#gallery-slides img');
const thumbnails = document.querySelectorAll('.thumbnail');
let current = 0;
let slideInterval;

// Function to show a specific slide
function showSlide(index) {
  slides[current].classList.remove('opacity-100', 'z-10');
  slides[current].classList.add('opacity-0', 'z-0');

  current = index;

  slides[current].classList.remove('opacity-0', 'z-0');
  slides[current].classList.add('opacity-100', 'z-10');
}

// Auto slideshow
function startSlideshow() {
  slideInterval = setInterval(() => {
    showSlide((current + 1) % slides.length);
  }, 4000);
}

// Manual controls
document.getElementById('next-slide').addEventListener('click', () => {
  clearInterval(slideInterval);
  showSlide((current + 1) % slides.length);
  startSlideshow();
});

document.getElementById('prev-slide').addEventListener('click', () => {
  clearInterval(slideInterval);
  showSlide((current - 1 + slides.length) % slides.length);
  startSlideshow();
});

// Clickable thumbnails
thumbnails.forEach((thumb) => {
  thumb.addEventListener('click', () => {
    clearInterval(slideInterval);
    const index = parseInt(thumb.dataset.index);
    showSlide(index);
    startSlideshow();
  });
});

// Start the automatic slideshow
startSlideshow();
</script>

<?php include 'includes/footer.php'; ?>
