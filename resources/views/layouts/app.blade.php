<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>WeatherAPP</title>
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('pub/logo.png') }}">

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body class="flex flex-col min-h-screen bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-white shadow-md">
    <div class="container mx-auto flex justify-between items-center px-4 py-3">
      
      <!-- Logo -->
      <a href="/" class="flex items-center gap-2">
        <img src="./pub/logo.png" alt="Logo" class="w-12 h-12" />
        <span class="text-xl font-bold text-gray-800">WeatherAPP</span>
      </a>

      <!-- Hamburger (mobil) -->
      <button id="menu-btn" class="md:hidden flex flex-col gap-1 focus:outline-none">
        <span class="w-6 h-0.5 bg-gray-800"></span>
        <span class="w-6 h-0.5 bg-gray-800"></span>
        <span class="w-6 h-0.5 bg-gray-800"></span>
      </button>

      <!-- Links + Search (desktop) -->
      <div class="hidden md:flex items-center gap-6">
        <ul class="flex gap-6 text-lg font-medium text-gray-700">
          <li><a href="/" class="hover:text-blue-600 transition">Home</a></li>
          <li><a href={{route('about')}} class="hover:text-blue-600 transition">About</a></li>
          <li><a href={{route('contact')}} class="hover:text-blue-600 transition">Contact</a></li>
        </ul>
        <form action={{route('search')}} class="flex items-center bg-gray-100 rounded-lg overflow-hidden shadow-sm ml-4">
          <input type="text" name="city" placeholder="Search city..."
            class="px-3 py-2 outline-none text-gray-700 w-40 md:w-56 bg-gray-100" />
          <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-2">
            🔍
          </button>
        </form>
      </div>
    </div>

    <!-- Menu mobil (ascuns implicit) -->
    <div id="mobile-menu" class="hidden md:hidden flex flex-col gap-4 bg-gray-50 border-t border-gray-200 px-4 py-4">
      <a href="/" class="text-gray-800 hover:text-blue-600 transition">Home</a>
      <a href="/about" class="text-gray-800 hover:text-blue-600 transition">About</a>
      <a href="/contact" class="text-gray-800 hover:text-blue-600 transition">Contact</a>
      <form action="#/weather" class="flex items-center bg-gray-100 rounded-lg overflow-hidden shadow-sm mt-2">
        <input type="text" name="city" placeholder="Search city..."
          class="px-3 py-2 outline-none text-gray-700 w-full bg-gray-100" />
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-2">
          🔍
        </button>
      </form>
    </div>
  </nav>

  <!-- Content -->
  <main class="flex-grow container mx-auto px-4 py-8">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 py-4 mt-8">
    <div class="container mx-auto text-center">
      <p>Copyright &copy; <span id="year"></span> WeatherAPP</p>
      <p class="mt-1">Made by <strong class="text-white">Soft88A</strong> with Laravel 12 and TailwindCSS</p>
    </div>
  </footer>

  <!-- JS -->
  <script>
    // schimb anul dinamic
    document.getElementById('year').innerText = new Date().getFullYear();

    // toggle meniul mobil
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
