<header class="bg-blue-700">
  <div class="mx-auto w-full ml-11 py-2 sm:px-6 lg:px-8 flex justify-between items-center">
      <!-- Logo and Title -->
      <h1 class="font-medium text-sm tracking-tight text-white flex items-center">
          <i class="fa-solid fa-house-medical mr-1 text-xs"></i>
          <span class="block sm:inline">{{ $slot }}</span> <!-- Ensure text is block on mobile, inline on larger screens -->
      </h1>
      <!-- Contact Links -->
      <div class="mr-11 font-medium text-xs tracking-tight text-white flex flex-col sm:flex-row gap-2 sm:gap-6 pr-10">
          <a href="https://wa.me/+62811222753" target="_blank" class="bg-blue-700 hover:bg-blue-900 rounded-md px-2 py-1 flex items-center justify-center sm:justify-start">
              <i class="fa-brands fa-whatsapp mr-1"></i>
              <span class="block sm:inline">0811-222-753</span> <!-- Ensure text is block on mobile, inline on larger screens -->
          </a>
          <a href="/kontak" class="bg-blue-700 hover:bg-blue-900 rounded-md px-2 py-1 flex items-center justify-center sm:justify-start">
              <i class="fa-regular fa-envelope mr-1"></i>
              <span class="block sm:inline">Kontak</span> <!-- Ensure text is block on mobile, inline on larger screens -->
          </a>
      </div>
  </div>
</header>