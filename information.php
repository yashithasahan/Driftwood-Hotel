<?php
$page_title = 'Information — DRIFTWOOD';
$page_description = 'Everything you need to know before booking your stay at Driftwood Villa Sri Lanka.';
include 'includes/header.php';
?>

<main class="bg-white">
  <!-- Hero Banner -->
  <section class="relative w-full h-[400px] md:h-[600px] overflow-hidden">
    <img src="./assets/images/outdoor.webp" alt="Driftwood Villa View" class="w-full h-full object-cover object-bottom">
  </section>

  <!-- Information Section -->
  <section class="container mx-auto px-4 pt-16">
    <div class="grid md:grid-cols-2 gap-10 md:gap-16 items-start">
      <!-- Left Column -->
      <div>
        <h2 class="text-3xl md:text-4xl font-semibold text-emerald-700 mb-6">
          Before You Book – Everything You Need to Know
        </h2>
        <p class="text-gray-700 mb-6 leading-relaxed">
          We want your stay at Driftwood Villa to feel effortless from the moment you plan it.
          Here are answers to common questions, along with helpful details for your arrival.
        </p>

        <div class="space-y-4 text-gray-800">
          <p><strong>Check-In & Check-Out</strong><br>
            Check-in: From 2:00 PM<br>
            Check-out: By 12:00 PM
          </p>

          <p>
            We understand that flight times can vary. Our team is happy to welcome you at any time of day or night –
            just let us know your expected arrival in advance.
          </p>

          <p>
            <strong>Family-Friendly Stays</strong><br>
            Yes, children are warmly welcome at Driftwood Villa. Interconnected rooms and suites with kitchenettes are available
            for families seeking more space and comfort.
          </p>

          <p>
            <strong>Is Breakfast Included?</strong><br>
            Guests at Driftwood Villa can enjoy a highly rated breakfast each morning,
            featuring options such as Continental, Vegetarian, and Sri Lankan dishes.
          </p>

          <p>
            Breakfast is freshly prepared by our in-house chef and can be served in your room, by the pool, or in our breezy dining area.
          </p>

          <p>
            <strong>Can I Book the Entire Villa?</strong><br>
            Yes! The full villa is available for private rental, including:<br>
            • The entire top floor<br>
            • Two superior king suites<br>
            • A private kitchen, dining and living area
          </p>

          <p>
            This is ideal for families, small groups, or guests seeking total privacy during their stay.
          </p>

          <div class="mt-8">
            <a href="./contact.php"
              class="bg-emerald-700 hover:bg-emerald-800 text-white text-sm tracking-wider px-6 py-3 rounded-full transition duration-300">
              Contact Us for Full Villa Booking
            </a>
          </div>
        </div> <!-- Other Questions -->
    <div class="mt-16 space-y-8">
      <h3 class="text-2xl md:text-3xl font-semibold text-emerald-700 mb-4">Other Common Questions</h3>

      <div class="space-y-4 text-gray-800 leading-relaxed">
        <p>
          <strong>Q: How much does it cost to stay at Driftwood Villa?</strong><br>
          A: Rates vary depending on room type, length of stay, and season. Please contact us directly or visit our booking page for the most accurate pricing.
        </p>

        <p>
          <strong>Q: What is there to do nearby?</strong><br>
          A: Guests at Driftwood Villa can enjoy a wide range of activities including hiking, cycling, and boat rides. The natural beachfront is perfect for relaxing,
          while swimmable beaches are just a 5-minute drive away.
        </p>

        <p>
          <strong>Q: Do rooms have Wi-Fi and air-conditioning?</strong><br>
          A: Yes, all rooms include free high-speed Wi-Fi, air-conditioning, ensuite bathrooms, and private balconies.
        </p>
      </div>

      <!-- Villa Policies -->
      <div class="py-8">
        <h3 class="text-2xl md:text-3xl font-semibold text-emerald-700 mb-4">Villa Policies</h3>
        <p class="text-gray-700 leading-relaxed">
          To ensure a peaceful and respectful environment for all our guests, we kindly ask that you note the following:
        </p>
        <ul class="list-disc list-inside text-gray-700 mt-4 space-y-1">
          <li>No smoking in rooms</li>
          <li>No pets allowed</li>
          <li>Parking is available on-site at guests’ own risk</li>
          <li>Cancellation and prepayment policies may vary by room type — please refer to your booking details or contact us directly for specifics</li>
        </ul>
      </div>
    </div>
      </div>

      <!-- Right Column: Image -->
      <div class="overflow-hidden shadow-lg bg-red-400 h-full">
        <img src="./assets/images/gallery6.webp" alt="Driftwood Villa Exterior" class="w-full h-full object-cover">
      </div>
    </div>

   
  </section>
</main>

<?php include 'includes/footer.php'; ?>
