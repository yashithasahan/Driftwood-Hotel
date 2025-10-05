<!-- bg-[#806d5c] -->
<?php
$page_title = 'Driftwood Hotel - Your Seaside Home';
$page_description = 'Welcome to Driftwood Hotel, a coastal sanctuary where every moment is comfort, every detail is considered and every guest is family.';
include 'includes/header.php';
?>

<main class="bg-stone-50 text-gray-800 font-sans">
  <section
    class="relative h-[70vh] bg-cover bg-center"
     style="background-image: url('/assets/images/banner.jpg');"

  >
    <div class="absolute inset-0 "></div>
    <div
      class="relative z-10 container mx-auto px-4 h-full flex flex-col items-center justify-center text-center text-white"
    >
      
      <a
        href="#availability"
        class="mt-8 h-12 bg-[#806d5c] text-white px-10 py-3 font-semibold hover:bg-teal-700 transition-colors duration-300 rounded-full absolute bottom-[-24px]"
      >
        CHECK AVAILABILITY
      </a>
    </div>
  </section>
  </section>

  <section class="pt-16 md:pt-24  mb-20 relative">
    <div  class="absolute inset-x-0 top-0 h-4/5 bg-[#ece9e0] z-0"></div>
    <div class="container relative mx-auto px-4 z-10">
      <h2 class="text-3xl md:text-4xl  text-teal-600 mb-8 text-center">
        Welcome to Your Seaside Home
      </h2>
      <div class="grid md:grid-cols-3 overflow-hidden">
        <div class=" col-span-1 text-center md:text-left h-2/3 overflow-hidden text-ellipsis">
     
          <p class="text-gray-600 leading-relaxed ">
            At Driftwood, we believe in creating an atmosphere of relaxed
            luxury. Our boutique hotel is designed to be your personal
            sanctuary, a place to unwind from the bustle ofAt 
            Driftwood, we believe in creating an atmosphere of relaxed
            luxury. Our boutique hotel is designed to be your personal
            sanctuary, a place to unwind from the bustle of
          </p>
          <br> 
          <p class="text-gray-600 leading-relaxed">
            At Driftwood, we believe in creating an atmosphere of relaxed
            luxury. Our boutique hotel is desAt Driftwood, we 
            believe in creating an atmosphere of relaxed
            luxury. Our boutique hotel is designed to be your personal
            sanctuary, a place to unwind from the bustle of
          </p>
        </div>
        <div class="col-span-2 relative">
          <img
            src="./assets/images/welcome.png"
            alt="Hotel Poolside"
            class="w-full "
          />
        </div>
      </div>
    </div>
  </section>

  <section class="pb-16 md:pb-24 ">
    <div class="container mx-auto px-4 text-center">
      <h2
        class="text-3xl md:text-4xl font-semibold text-teal-600 mb-4"
      >
        The Driftwood Experience
      </h2>
      <p class="max-w-3xl mx-auto text-gray-600 leading-relaxed mb-8">
        We've curated every aspect of your stay to ensure unparalleled comfort
        and unforgettable moments. From our rooms to our services, every detail
        is infused with a touch of coastal charm.
      </p>
      <ul class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 text-left">
        <li class="flex items-start space-x-3">
          <svg
            class="w-6 h-6 text-teal-600 flex-shrink-0 mt-1"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M5 13l4 4L19 7"
            ></path>
          </svg>
          <div>
            <h3 class="font-semibold">Spacious, Modern Rooms</h3>
            <p class="text-gray-600 text-sm">
              Air-conditioned suites with private balconies and ocean views.
            </p>
          </div>
        </li>
        <li class="flex items-start space-x-3">
          <svg
            class="w-6 h-6 text-teal-600 flex-shrink-0 mt-1"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M5 13l4 4L19 7"
            ></path>
          </svg>
          <div>
            <h3 class="font-semibold">Gourmet Dining</h3>
            <p class="text-gray-600 text-sm">
              Locally-sourced ingredients crafted into exquisite culinary
              delights.
            </p>
          </div>
        </li>
        <li class="flex items-start space-x-3">
          <svg
            class="w-6 h-6 text-teal-600 flex-shrink-0 mt-1"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M5 13l4 4L19 7"
            ></path>
          </svg>
          <div>
            <h3 class="font-semibold">Rejuvenating Spa</h3>
            <p class="text-gray-600 text-sm">
              A range of treatments designed to relax and revitalize your
              senses.
            </p>
          </div>
        </li>
        <li class="flex items-start space-x-3">
          <svg
            class="w-6 h-6 text-teal-600 flex-shrink-0 mt-1"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M5 13l4 4L19 7"
            ></path>
          </svg>
          <div>
            <h3 class="font-semibold">Bespoke Excursions</h3>
            <p class="text-gray-600 text-sm">
              Explore local culture and nature with our guided tours.
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="pb-16 md:pb-24">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-1 md:gap-2">
        <img
          src="./assets/images/gallery1.jpg"
          alt="Gallery Image 1"
          class=" w-full h-full object-cover col-span-2"
        />
        <img
          src="./assets/images/gallery2.jpg"
          alt="Gallery Image 2"
          class=" w-full h-full object-cover"
        />
        <img
          src="./assets/images/gallery3.jpg"
          alt="Gallery Image 3"
          class=" w-full h-full object-cover"
        />
        <img
          src="./assets/images/gallery4.jpg"
          alt="Gallery Image 4"
          class=" w-full h-full object-cover"
        />
        <img
          src="./assets/images/gallery5.jpg"
          alt="Gallery Image 5"
          class=" w-full h-full object-cover"
        />
        <img
          src="./assets/images/gallery6.jpg"
          alt="Gallery Image 6"
          class=" w-full h-full object-cover"
        />
        <img
          src="./assets/images/gallery7.jpg"
          alt="Gallery Image 7"
          class=" w-full h-full object-cover"
        />
    
      </div>
    </div>
  </section>

  <section class="bg-[#806d5c] py-16">
    <div class="container mx-auto px-4 text-center text-white">
      <p class="text-2xl md:text-3xl font-serif italic max-w-4xl mx-auto">
        "...a coastal sanctuary where every moment is comfort, every detail is
        considered and every guest is family."
      </p>
    </div>
  </section>

  <section class="py-16 md:py-24">
    <div class="container mx-auto ">
      <div class="grid md:grid-cols-5  items-center bg-[#eaeade]">
        
        <div class=" text-center md:text-left col-span-2 px-16">
          <h2
            class="text-3xl md:text-4xl font-serif font-semibold text-teal-600 mb-4 "
          >
            Sleep to the Sound of the Sea
          </h2>
          <p class="text-gray-600 leading-relaxed mb-6">
            Each of our rooms and suites is a testament to comfort, designed
            with natural materials and expansive windows that frame breathtaking
            ocean vistas. Wake up to the gentle sound of waves and the soft glow
            of sunrise over the water.
          </p>
          <p class="text-gray-600 leading-relaxed mb-8">
            Each of our rooms and suites is a testament to comfort, designed
            with natural materials and expansive windows that frame breathtaking
            ocean vistas. Wake up to the gentle sound of waves and the soft glow
            of sunrise over the water.
          </p>
      <a
        href="#availability"
        class=" mt-8 h-12 bg-[#806d5c] text-white px-10 py-3 font-semibold hover:bg-teal-700 transition-colors duration-300 rounded-full "
      >
       VIEW ALL ROOMS
      </a>
        </div>
        <div class="col-span-3 mt-8 md:mt-0">
          <img
            src="./assets/images/window.jpg"
            alt="Hotel Room View"
            class=" shadow-xl w-full"
          />
        </div>
      </div>
    </div>
  </section>

  <section class="bg-stone-100 py-16 md:py-24">
    <div class="container mx-auto px-4 text-center">
      <h2
        class="text-3xl md:text-4xl font-serif font-semibold text-gray-800 mb-12"
      >
        What guests are saying...
      </h2>
      <div class="grid md:grid-cols-3 gap-12 text-left">
        <div class="bg-[#e0e0d4] p-6  shadow-md relative">
          <img
            src="https://picsum.photos/seed/guest1/100/100"
            alt="Guest Avatar"
            class="w-16 h-16 rounded-full mx-auto -mt-12 border-4 border-white absolute md:md:-left-8"
          />
          <p class="text-gray-600 italic mt-4">
            "Absolutely breathtaking. The service was impeccable and the views
            were to die for. We will be back!"
          </p>
          <p class="font-semibold text-teal-600 mt-4">- Sarah L.</p>
        </div>
        <div class="bg-[#e0e0d4] p-6  shadow-md relative">
          <img
            src="https://picsum.photos/seed/guest2/100/100"
            alt="Guest Avatar"
                        class="w-16 h-16 rounded-full mx-auto -mt-12 border-4 border-white absolute md:-left-8"

          />
          <p class="text-gray-600 italic mt-4">
            "The perfect getaway. Peaceful, beautiful, and utterly relaxing. The
            food was also a highlight."
          </p>
          <p class="font-semibold text-teal-600 mt-4">- Michael B.</p>
        </div>
        <div class="bg-[#e0e0d4] p-6  shadow-md relative">
          <img
            src="https://picsum.photos/seed/guest3/100/100"
            alt="Guest Avatar"
                        class="w-16 h-16 rounded-full mx-auto -mt-12 border-4 border-white absolute md:-left-8"

          />
          <p class="text-gray-600 italic mt-4">
            "A true gem on the coast. The staff made us feel like family from
            the moment we arrived."
          </p>
          <p class="font-semibold text-teal-600 mt-4">- Jane & Tom P.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-[#82705c] text-white">
    <div class="container mx-auto px-4 py-16 md:py-0">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="text-center lg:text-left" >
          <h2 class="text-3xl md:text-4xl font-serif font-semibold mb-6 ">
            Whether you're here to unwind or explore, we're here to make you
            feel completely at ease.
          </h2>
          <a 
            href="/contact"
            class="w-min text-nowrap bg-teal-600 text-white px-10 py-3 font-semibold shadow-lg hover:bg-teal-700 transition-colors duration-300 inline-block rounded-full "
          >
            GET IN TOUCH
          </a>
          <p>Reach out we'd be honoured to host you.</p> <a class="underline text-lg" href="/contact ">Contact</a>
        </div>
       
        <!-- <div class="hidden lg:block ">
          <img
            src="./assets/images/outdoor.jpg"
            alt="Hotel at evening"
            class=" object-cover col-span-1 "
          />
        </div> -->
      <div class="hidden lg:block relative">
  <!-- Image -->
  <img
    src="./assets/images/outdoor.jpg"
    alt="Hotel at evening"
    class="object-cover col-span-1 w-full h-full"
  />

  <!-- Dark overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-75"></div>
</div>

 

      </div>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
