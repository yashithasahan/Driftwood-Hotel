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

  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Source+Sans+Pro:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/main.css?v=<?php echo time(); ?>">
  
  <link rel="icon" type="image/x-icon" href="<?php echo $base_path; ?>assets/images/favicon.ico">
</head>
<body class="bg-gray-50">
  <header class="fixed w-full top-0 bg-gray-50/80 backdrop-blur-sm z-50"> <nav class="container mx-auto px-4 py-4 relative">
      <div class="flex justify-between md:justify-start items-center gap-8 ">
        <div class="logo">
          <a href="<?php echo $base_path; ?>index.php">
            <img src="<?php echo $base_path; ?>assets/site/logodwv.PNG" class="w-100% max-h-6 md:max-h-8" alt="Driftwood Logo">
          </a>
          </div>

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

        <button class="md:hidden text-black z-20 group" id="mobile-menu-btn" aria-label="Open Menu">
          <div class="space-y-1.5">
            <span class="block w-6 h-0.5 bg-black transition-transform duration-300 ease-in-out group-[.open]:rotate-45 group-[.open]:translate-y-2"></span>
            <span class="block w-6 h-0.5 bg-black transition-opacity duration-300 ease-in-out group-[.open]:opacity-0"></span>
            <span class="block w-6 h-0.5 bg-black transition-transform duration-300 ease-in-out group-[.open]:-rotate-45 group-[.open]:-translate-y-2"></span>
          </div>
        </button>
      </div>

      <div id="mobile-menu"
           class="md:hidden hidden  z-10 relative w-full  left-0 top-0">
        <ul class="px-4 py-4 space-y-2">
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

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const menuBtn = document.getElementById('mobile-menu-btn');
      const mobileMenu = document.getElementById('mobile-menu');

      if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
          menuBtn.classList.toggle('open');
          
          mobileMenu.classList.toggle('open');
        });
      }
    });
  </script>
</body>
</html>