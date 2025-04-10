<header class="sticky top-0 z-50 bg-header">
  <div class="mx-auto w-full ml-3 py-2 lg:ml-11 lg:px-8 flex justify-between items-center">
      <h1 class="font-medium text-sm tracking-tight text-white flex items-center">
          <i class="fa-solid fa-house-medical mr-1 text-xs"></i>{{ $slot }} <!-- Ensure text is block on mobile, inline on larger screens -->
      </h1>
      <!-- Contact Links -->
      <div class="mr-4 lg:mr-16 font-medium text-xs tracking-tight text-white flex sm:flex-row gap-2 sm:gap-6">
          <a href="https://wa.me/+62811222753" target="_blank" class="bg-header hover:bg-blue-500 rounded-md px-2 py-1 flex items-center justify-center sm:justify-start">
              <i class="fa-brands fa-whatsapp mr-1"></i> 0811-222-753
          </a>
          <a href="/kontak" class="bg-header hover:bg-blue-500 rounded-md px-2 py-1 flex items-center justify-center sm:justify-start">
              <i class="fa-regular fa-envelope mr-1"></i>Kontak
          </a>
          
      </div>
  </div>
</header>