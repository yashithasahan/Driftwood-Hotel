<?php
$page_title = 'Booking — DRIFTWOOD';
$page_description = 'Book your stay at Driftwood Villa: choose your room, check availability, and plan your getaway.';
include 'includes/header.php';
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
<main class="bg-white">
    <!-- Hero Image -->
    <section class="relative w-full h-[400px] md:h-[500px] overflow-hidden">
        <img src="./assets/images/exp1.webp" alt="Driftwood Villa Poolside View" class="w-full h-full object-cover">
    </section>

    <!-- Booking Form -->


    <section class="container mx-auto px-4 -mt-20 md:-mt-18 relative z-10">
        <div class="container mx-auto px-4">
            <div
                class="w-full bg-[#f9f9f9] shadow-lg rounded-3xl flex flex-col md:flex-row items-stretch overflow-hidden">
                <!-- Room -->
                <div
                    class="flex-1 flex flex-col items-start justify-center px-6 py-4 border-b md:border-b-0 md:border-r border-gray-200">
                    <label class="text-gray-700 font-medium text-base mb-1">Room</label>
                    <select class="w-full text-gray-400 text-lg bg-transparent focus:outline-none cursor-pointer">
                        <option selected disabled>Select</option>
                        <option>A2</option>
                        <option>A4</option>
                        <option>A7</option>
                    </select>
                </div>

                <!-- Check In -->
                <div
                    class="flex-1 flex flex-col items-start justify-center px-6 py-4 border-b md:border-b-0 md:border-r border-gray-200">
                    <label class="text-gray-700 font-medium text-base mb-1">Check In</label>
                    <input id="checkin" type="text" placeholder="Select"
                        class="w-full text-gray-400 text-lg bg-transparent focus:outline-none cursor-pointer" />
                </div>

                <!-- Check Out -->
                <div
                    class="flex-1 flex flex-col items-start justify-center px-6 py-4 border-b md:border-b-0 md:border-r border-gray-200">
                    <label class="text-gray-700 font-medium text-base mb-1">Check Out</label>
                    <input id="checkout" type="text" placeholder="Select"
                        class="w-full text-gray-400 text-lg bg-transparent focus:outline-none cursor-pointer" />
                </div>

                <!-- Number of Person -->
                <div
                    class="flex-1 flex flex-col items-start justify-center px-6 py-4 border-b md:border-b-0 md:border-r border-gray-200">
                    <label class="text-gray-700 font-medium text-base mb-1">Number Of Person</label>
                    <select class="w-full text-gray-400 text-lg bg-transparent focus:outline-none cursor-pointer">
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <!-- BOOK ROOM Button -->
                <div class="flex-shrink-0 w-full md:w-auto">
                    <button
                        class="bg-[#2CA593] hover:bg-[#23927f] text-white font-semibold text-lg h-full w-full md:px-10 py-6 transition-all duration-300">
                        BOOK ROOM
                    </button>
                </div>
            </div>
        </div>
    </section>


    <!-- Available Rooms Section -->
    <section class="container mx-auto px-4 py-16">
        <h2 class="text-center text-xl md:text-2xl font-semibold mb-10">Available for your dates</h2>

        <div class="space-y-8">
            <!-- Room Card 1 -->
            <div class="flex flex-col md:flex-row items-center bg-[#f8f8f6] rounded-3xl shadow-sm p-6 md:p-8 gap-6">
                <div class="md:w-1/3 w-full">
                    <img src="./assets/images/room1.webp" alt="Deluxe Ocean View Room"
                        class="rounded-xl w-full object-cover">
                </div>
                <div class="flex-1">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Deluxe Ocean View Rooms</h3>
                    <ul class="list-disc list-inside text-gray-700 mb-3 text-sm leading-relaxed">
                        <li>Up to 2 people</li>
                        <li>1 King size bed</li>
                        <li>En suite bathroom</li>
                        <li>Ocean view</li>
                    </ul>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Our Deluxe rooms comprise of ocean views that can be enjoyed on large balconies. The rooms are
                        spacious and comfortable and include super luxury bedding and mattresses.
                    </p>
                </div>
            </div>

            <!-- Room Card 2 -->
            <div class="flex flex-col md:flex-row items-center bg-[#f8f8f6] rounded-3xl shadow-sm p-6 md:p-8 gap-6">
                <div class="md:w-1/3 w-full">
                    <img src="./assets/images/gallery1.webp" alt="2 Bedroom Sunset Penthouse Apartment"
                        class="rounded-xl w-full object-cover">
                </div>
                <div class="flex-1">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">2 Bedroom Sunset Penthouse Apartment</h3>
                    <ul class="list-disc list-inside text-gray-700 mb-3 text-sm leading-relaxed">
                        <li>Up to 5 people</li>
                        <li>2 Superior rooms with King beds</li>
                        <li>Private living and dining area</li>
                        <li>Private balcony/entertainment area overlooking the ocean</li>
                        <li>Self-contained kitchen with breakfast counter</li>
                        <li>Laundry facilities</li>
                    </ul>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        The Penthouse offers expansive views, luxurious space, and the perfect blend of home-like
                        comfort with elegant coastal charm.
                    </p>
                </div>
            </div>

            <!-- Room Card 3 -->
            <div class="flex flex-col md:flex-row items-center bg-[#f8f8f6] rounded-3xl shadow-sm p-6 md:p-8 gap-6">
                <div class="md:w-1/3 w-full">
                    <img src="./assets/images/room3.webp" alt="Deluxe Garden View Room"
                        class="rounded-xl w-full object-cover">
                </div>
                <div class="flex-1">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Deluxe Garden View Rooms</h3>
                    <ul class="list-disc list-inside text-gray-700 mb-3 text-sm leading-relaxed">
                        <li>Up to 2 people</li>
                        <li>1 King size bed</li>
                        <li>En suite bathroom</li>
                        <li>Garden view and partial ocean view</li>
                    </ul>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        These rooms offer views of our expansive garden with partial views of the ocean, a mini
                        courtyard, and easy access to the pool and dining facilities. Spacious, elegant, and designed
                        for comfort.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    // Initialize Flatpickr for both check-in and check-out
    const checkIn = flatpickr("#checkin", {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        minDate: "today",
        disableMobile: true,
        onChange: function (selectedDates, dateStr, instance) {
            // Update checkout minDate
            checkout.set("minDate", dateStr);
        },
    });

    const checkout = flatpickr("#checkout", {
        altInput: true,
        disableMobile: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        minDate: "today",
    });
</script>

<?php include 'includes/footer.php'; ?>