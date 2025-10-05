<?php
$page_title = 'Book a Service - Drift Wood';
$page_description = 'Book your custom wood service with Drift Wood. Professional craftsmanship and quality guaranteed.';
include '../includes/header.php';
?>

<main class="min-h-screen py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Book Your Service</h1>
            <p class="text-center text-gray-600 mb-12">Fill out the form below to schedule your custom wood service consultation.</p>
            
            <div class="bg-white rounded-lg shadow-lg p-8">
                <form action="process_booking.php" method="POST" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                            <input type="text" id="first_name" name="first_name" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                        <input type="email" id="email" name="email" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="service_type" class="block text-sm font-medium text-gray-700 mb-2">Service Type *</label>
                        <select id="service_type" name="service_type" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Select a service</option>
                            <option value="custom_furniture">Custom Furniture</option>
                            <option value="wood_art">Wood Art</option>
                            <option value="restoration">Restoration</option>
                            <option value="consultation">Consultation</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="preferred_date" class="block text-sm font-medium text-gray-700 mb-2">Preferred Date</label>
                        <input type="date" id="preferred_date" name="preferred_date" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="budget" class="block text-sm font-medium text-gray-700 mb-2">Budget Range</label>
                        <select id="budget" name="budget" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Select budget range</option>
                            <option value="under_500">Under $500</option>
                            <option value="500_1000">$500 - $1,000</option>
                            <option value="1000_2500">$1,000 - $2,500</option>
                            <option value="2500_5000">$2,500 - $5,000</option>
                            <option value="over_5000">Over $5,000</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Project Details *</label>
                        <textarea id="message" name="message" rows="5" required 
                                  placeholder="Please describe your project in detail..."
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                    </div>
                    
                    <div class="flex items-center">
                        <input type="checkbox" id="newsletter" name="newsletter" 
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="newsletter" class="ml-2 block text-sm text-gray-700">
                            Subscribe to our newsletter for updates and special offers
                        </label>
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition-colors font-medium">
                        Submit Booking Request
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?>




