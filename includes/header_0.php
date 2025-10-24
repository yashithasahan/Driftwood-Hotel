<?php
// Header include file
$page_title = isset($page_title) ? $page_title : 'DRIFTWOOD';
$page_description = isset($page_description) ? $page_description : 'Your luxury hotel destination for unforgettable experiences';

// Detect current page and base path
$current_page = basename($_SERVER['SCRIPT_NAME']);
$is_in_pages_folder = basename(dirname($_SERVER['SCRIPT_NAME'])) === 'pages';
$base_path = $is_in_pages_folder ? '../' : '';
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
  <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/main.css">
  
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?php echo $base_path; ?>assets/images/favicon.ico">
</head>
<body class="bg-gray-50">
  <!-- Header -->
  <header>
    <nav class="container mx-auto px-4 py-4">
      <div class="flex justify-between md:justify-start items-center gap-8">
        <!-- Logo -->
        <div class="logo">
          <a href="<?php echo $base_path; ?>">
            <img src="./assets/site/logodwv.PNG" class="h-8" alt="Driftwood Logo">
          </a>
          </div>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex space-x-8">
          <li>
            <a href="<?php echo $base_path; ?>index.php"
              class="transition-all duration-300 <?php echo ($current_page == 'index.php') ? 'underline underline-offset-4 decoration-2 decoration-gray-800' : 'hover:underline hover:underline-offset-4 hover:decoration-gray-500'; ?>">
              Home
            </a>
          </li>
          <li>
            <a href="<?php echo $base_path; ?>about.php"
              class="transition-all duration-300 <?php echo ($current_page == 'about.php') ? 'underline underline-offset-4 decoration-2 decoration-gray-800' : 'hover:underline hover:underline-offset-4 hover:decoration-gray-500'; ?>">
              About
            </a>
          </li>
          <li>
            <a href="<?php echo $base_path; ?>rooms.php"
              class="transition-all duration-300 <?php echo ($current_page == 'rooms.php') ? 'underline underline-offset-4 decoration-2 decoration-gray-800' : 'hover:underline hover:underline-offset-4 hover:decoration-gray-500'; ?>">
              Rooms
            </a>
          </li>
          <li>
            <a href="<?php echo $base_path; ?>experiences.php"
              class="transition-all duration-300 <?php echo ($current_page == 'experiences.php') ? 'underline underline-offset-4 decoration-2 decoration-gray-800' : 'hover:underline hover:underline-offset-4 hover:decoration-gray-500'; ?>">
              Experiences
            </a>
          </li>
          <li>
            <a href="<?php echo $base_path; ?>dining.php"
              class="transition-all duration-300 <?php echo ($current_page == 'dining.php') ? 'underline underline-offset-4 decoration-2 decoration-gray-800' : 'hover:underline hover:underline-offset-4 hover:decoration-gray-500'; ?>">
              Dining
            </a>
          </li>
          <li>
            <a href="<?php echo $base_path; ?>information.php"
              class="transition-all duration-300 <?php echo ($current_page == 'information.php') ? 'underline underline-offset-4 decoration-2 decoration-gray-800' : 'hover:underline hover:underline-offset-4 hover:decoration-gray-500'; ?>">
              Information
            </a>
          </li>
          <li>
            <a href="<?php echo $base_path; ?>gallery.php"
              class="transition-all duration-300 <?php echo ($current_page == 'gallery.php') ? 'underline underline-offset-4 decoration-2 decoration-gray-800' : 'hover:underline hover:underline-offset-4 hover:decoration-gray-500'; ?>">
              Gallery
            </a>
          </li>
          <li>
            <a href="<?php echo $base_path; ?>contact.php"
              class="transition-all duration-300 <?php echo ($current_page == 'contact.php') ? 'underline underline-offset-4 decoration-2 decoration-gray-800' : 'hover:underline hover:underline-offset-4 hover:decoration-gray-500'; ?>">
              Contact
            </a>
          </li>
          </ul>

        <!-- Mobile menu button -->
        <button class="md:hidden text-black" id="mobile-menu-btn">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>

      <!-- Mobile Menu -->
      <div class="md:hidden hidden z-10" id="mobile-menu">
        <ul class="py-4 space-y-2">
          <li><a href="<?php echo $base_path; ?>index.php"
              class="block transition-all duration-300 <?php echo ($current_page == 'index.php') ? 'underline decoration-gray-800' : 'hover:underline hover:decoration-gray-500'; ?>">Home</a>
          </li>
          <li><a href="<?php echo $base_path; ?>about.php"
              class="block transition-all duration-300 <?php echo ($current_page == 'about.php') ? 'underline decoration-gray-800' : 'hover:underline hover:decoration-gray-500'; ?>">About</a>
          </li>
          <li><a href="<?php echo $base_path; ?>rooms.php"
              class="block transition-all duration-300 <?php echo ($current_page == 'rooms.php') ? 'underline decoration-gray-800' : 'hover:underline hover:decoration-gray-500'; ?>">Rooms</a>
          </li>
          <li><a href="<?php echo $base_path; ?>experiences.php"
              class="block transition-all duration-300 <?php echo ($current_page == 'experiences.php') ? 'underline decoration-gray-800' : 'hover:underline hover:decoration-gray-500'; ?>">Experiences</a>
          </li>
          <li><a href="<?php echo $base_path; ?>dining.php"
              class="block transition-all duration-300 <?php echo ($current_page == 'dining.php') ? 'underline decoration-gray-800' : 'hover:underline hover:decoration-gray-500'; ?>">Dining</a>
          </li>
          <li><a href="<?php echo $base_path; ?>information.php"
              class="block transition-all duration-300 <?php echo ($current_page == 'information.php') ? 'underline decoration-gray-800' : 'hover:underline hover:decoration-gray-500'; ?>">Information</a>
          </li>
          <li><a href="<?php echo $base_path; ?>gallery.php"
              class="block transition-all duration-300 <?php echo ($current_page == 'gallery.php') ? 'underline decoration-gray-800' : 'hover:underline hover:decoration-gray-500'; ?>">Gallery</a>
          </li>
          <li><a href="<?php echo $base_path; ?>contact.php"
              class="block transition-all duration-300 <?php echo ($current_page == 'contact.php') ? 'underline decoration-gray-800' : 'hover:underline hover:decoration-gray-500'; ?>">Contact</a>
          </li>
          </ul>
          </div>
          </nav>
          </header>

  <!-- Optional: Mobile menu toggle script -->
  <script>
    const menuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('block');
    });
  </script>
