<?php

/**
 * User: bado
 * Date: 3/9/25
 * Time: 2:58 PM
 * @author Baderdine Ben Ibrahim <baderdinedev@gmail.com>
 * @package ${NAMESPACE}
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navbar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-blue-600 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Logo -->
      <a href="#" class="text-white text-2xl font-bold">MyLogo</a>

      <!-- Desktop Menu -->
      <div class="hidden md:flex space-x-6">
        <a href="/" class="text-white hover:text-gray-200">Home</a>
        <a href="/contact" class="text-white hover:text-gray-200">Contact</a>
      </div>

      <!-- Mobile Menu Button -->
      <button id="menu-btn" class="md:hidden text-white focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden flex flex-col bg-blue-600 space-y-2 p-4">
      <a href="/" class="text-white hover:text-gray-200">Home</a>
      <a href="/contact" class="text-white hover:text-gray-200">Contact</a>
    </div>
  </nav>

  {{content}}

  <!-- JavaScript for Menu Toggle -->
  <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>

</body>

</html>