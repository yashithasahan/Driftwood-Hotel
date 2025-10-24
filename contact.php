<?php
$page_title = 'Contact — DRIFTWOOD';
$page_description = 'Get in touch with Driftwood Villa: contact form, phone, email, and location.';
include 'includes/header.php';
?>

<main class="bg-white">
  <!-- Hero Image -->
  <section class="relative w-full h-[400px] md:h-[500px] overflow-hidden">
    <img src="./assets/images/banner.webp" alt="Driftwood Villa View" class="w-full h-full object-cover">
  </section>

  <!-- Contact Form and Info -->
  <section class="container mx-auto px-4 -mt-20 md:-mt-24 relative z-10">
    <div class="grid md:grid-cols-2 gap-8">
      <!-- Left: Form -->
      <div class="bg-[#eaeade] text-gray-800 rounded-[2rem] shadow-xl p-8 md:p-10">
        <div class="text-center mb-8">
          <img src="./assets/site/logodwv.PNG" class="w-100% max-h-12 md:max-h-14 mx-auto" alt="Driftwood Villa Logo">
        </div>

        <form id="contactForm" class="space-y-6" novalidate>
          <!-- First & Last Name -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label for="first_name" class="block text-xs font-semibold mb-1 tracking-wide">FIRST NAME</label>
              <input type="text" id="first_name" name="first_name" required
                class="w-full bg-transparent border-b border-gray-400 focus:border-gray-800 focus:outline-none py-2">
            </div>
            <div>
              <label for="last_name" class="block text-xs font-semibold mb-1 tracking-wide">LAST NAME</label>
              <input type="text" id="last_name" name="last_name" required
                class="w-full bg-transparent border-b border-gray-400 focus:border-gray-800 focus:outline-none py-2">
            </div>
          </div>

          <!-- Email -->
          <div>
            <label for="email" class="block text-xs font-semibold mb-1 tracking-wide">EMAIL</label>
            <input type="email" id="email" name="email" required
              class="w-full bg-transparent border-b border-gray-400 focus:border-gray-800 focus:outline-none py-2">
          </div>

          <!-- Inquiry Type -->
          <div>
            <label for="inquiry_type" class="block text-xs font-semibold mb-1 tracking-wide">INQUIRY TYPE</label>
            <select id="inquiry_type" name="inquiry_type"
              class="w-full bg-transparent border-b border-gray-400 focus:border-gray-800 focus:outline-none py-2 appearance-none">
              <option value="Rates" selected>Rates</option>
              <option value="General">General</option>
            </select>
          </div>

          <!-- Conditional Fields -->
          <div id="ratesFields" class="space-y-6">
            <div>
              <label for="rate_option" class="block text-xs font-semibold mb-1 tracking-wide">SELECT OPTION</label>
              <select id="rate_option" name="rate_option"
                class="w-full bg-transparent border-b border-gray-400 focus:border-gray-800 focus:outline-none py-2 appearance-none">
                <option value="Option 1">Option 1</option>
                <option value="Option 2">Option 2</option>
              </select>
            </div>

            <div>
              <label for="date" class="block text-xs font-semibold mb-1 tracking-wide">SELECT DATE</label>
              <input type="text" id="date" name="date" placeholder="Select"
                class="w-full bg-transparent border-b border-gray-400 focus:border-gray-800 focus:outline-none py-2 cursor-pointer">
            </div>
          </div>

          <!-- Message -->
          <div>
            <label for="message" class="block text-xs font-semibold mb-1 tracking-wide">MESSAGE</label>
            <textarea id="message" name="message" rows="3" required
              class="w-full bg-transparent border-b border-gray-400 focus:border-gray-800 focus:outline-none py-2 resize-none"></textarea>
          </div>

          <!-- Submit -->
          <div class="text-center pt-2">
            <button type="submit"
              class="bg-emerald-700 text-white px-8 py-2 rounded-full text-sm tracking-widest font-semibold hover:bg-emerald-800 transition-all duration-300">
              SUBMIT
            </button>
          </div>
        </form>
      </div>

      <!-- Right: Contact Info -->
      <div class="bg-[#7a6a58] text-white rounded-[2rem] shadow-lg p-8 md:p-10 flex flex-col justify-center h-min mt-8">
        <h2 class="text-2xl font-semibold mb-4 text-center md:text-left">Contact</h2>
        <p class="text-gray-100 mb-6 leading-relaxed text-sm">
          We’re here to welcome you! Have a question, planning your stay, or ready to book the entire villa?
          Whether it’s a weekend or a longer retreat, our team is happy to assist you every step of the way.
        </p>
        <ul class="space-y-3 text-sm">
          <li><strong>Call / WhatsApp:</strong> <a href="tel:+94777699542" class="text-white hover:underline">+94 77 769
              9542</a></li>
          <li><strong>Email:</strong> <a href="mailto:driftwoodvilla@gmail.com"
              class="text-white hover:underline">driftwoodvilla@gmail.com</a></li>
          <li><strong>Address:</strong> Driftwood Villa,<br>304 C Uswetakeiyawa – Epamulla – Pamunugama, Sri Lanka</li>
          <li class="flex items-center space-x-2 pt-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span>Check-in: From 2:00 PM</span>
          </li>
          <li class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span>Check-out: Until 12:00 PM</span>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Google Map Section -->
  <section class="container mx-auto px-4 py-16">
    <h2 class="text-2xl font-semibold text-emerald-700 mb-3">Find Us Easily</h2>
    <p class="text-gray-700 mb-6 max-w-2xl">
      Driftwood Villa is just 8.7 km from Bandaranaike International Airport, with easy access to the expressway and
      main roads leading to Colombo.
    </p>

    <div class="rounded-xl overflow-hidden shadow-lg border border-gray-200">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.2902620530745!2d79.84713420000001!3d7.0923142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f77244ace2bd%3A0xa3ea131d6b28c5a2!2sDriftwood%20Villa%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1759938266245!5m2!1sen!2slk"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>
</main>

<!-- Flatpickr -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


<script>
  document.addEventListener('DOMContentLoaded', () => {
    const inquiryType = document.getElementById('inquiry_type');
    const ratesFields = document.getElementById('ratesFields');
    const form = document.getElementById('contactForm');

    // Toggle fields based on selection
    inquiryType.addEventListener('change', () => {
      if (inquiryType.value === 'Rates') {
        ratesFields.classList.remove('hidden');
      } else {
        ratesFields.classList.add('hidden');
      }
    });

    // Initialize Flatpickr
    flatpickr("#date", {
      altInput: true,
      altFormat: "F j, Y",
      dateFormat: "Y-m-d",
      minDate: "today"
    });

    // Form validation + console output
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const data = {
        first_name: form.first_name.value.trim(),
        last_name: form.last_name.value.trim(),
        email: form.email.value.trim(),
        inquiry_type: form.inquiry_type.value,
        rate_option: form.rate_option?.value || null,
        date: form.date?.value || null,
        message: form.message.value.trim()
      };

      if (!data.first_name || !data.last_name || !data.email || !data.message) {
        alert('Please fill all required fields.');
        return;
      }

      console.log('Form Data:', data);
      alert('Form submitted successfully (check console)');
      form.reset();
      inquiryType.value = 'Rates';
      ratesFields.classList.remove('hidden');
    });
  });
</script>

<?php include 'includes/footer.php'; ?>