<?php
// Header include file
$page_title = isset($page_title) ? $page_title : 'DRIFTWOOD';
$page_description = isset($page_description) ? $page_description : 'Your luxury hotel destination for unforgettable experiences';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    
    <!-- Tailwind CSS CDN for development -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between md:justify-start  items-center gap-8">
                <div class="logo">
                    <h1 class="text-2xl font-bold text-black">DRIFTWOOD</h1>
                </div>
                <ul class="hidden md:flex space-x-8">
                    <li><a href="../index.php" class="  transition-colors">Home</a></li>
                    <li><a href="about.html" class="  transition-colors">About</a></li>
                    <li><a href="rooms.html" class="  transition-colors">Rooms</a></li>
                    <li><a href="experiences.html" class="  transition-colors">Experiences</a></li>
                    <li><a href="dining.html" class="  transition-colors">Dining</a></li>
                    <li><a href="information.html" class="  transition-colors">Information</a></li>
                    <li><a href="gallery.html" class="  transition-colors">Gallery</a></li>
                   
                </ul>
                <!-- Mobile menu button -->
               <button class="md:hidden text-black" id="mobile-menu-btn">
  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
  </svg>
</button>

            </div>
            <!-- Mobile menu -->
            <div class="md:hidden hidden" id="mobile-menu">
                <ul class="py-4 space-y-2">
                    <li><a href="../index.php" class="block   py-2">Home</a></li>
                    <li><a href="about.html" class="block   py-2">About</a></li>
                    <li><a href="rooms.html" class="block   py-2">Rooms & Suites</a></li>
                    <li><a href="experiences.html" class="block   py-2">Experiences</a></li>
                    <li><a href="dining.html" class="block   py-2">Dining</a></li>
                    <li><a href="information.html" class="block   py-2">Information</a></li>
                    <li><a href="gallery.html" class="block   py-2">Gallery</a></li>
                    <li><a href="contact.html" class="block   py-2">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>