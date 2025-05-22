<header class="bg-gradient-to-r from-teal-600 to-teal-500 shadow-lg">
  <div class="mx-auto max-w-7xl py-3 px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between">
      <div class="flex items-center space-x-2">
        <i class="fa-solid fa-house-medical text-white/90"></i>
        <h1 class="text-sm font-medium text-white/90">{{ $slot }}</h1>
      </div>
      
      <div class="flex items-center space-x-4">
        <a href="https://wa.me/+62811222753" target="_blank" 
          class="inline-flex items-center px-3 py-1.5 text-sm text-white/90 hover:text-white rounded-xl 
          hover:bg-white/10 transition-all duration-300 group">
          <i class="fa-brands fa-whatsapp mr-2 group-hover:scale-110 transition-transform duration-300"></i>
          <span class="hidden sm:inline">0811-222-753</span>
        </a>
        
        <a href="/kontak" 
          class="inline-flex items-center px-3 py-1.5 text-sm text-white/90 hover:text-white rounded-xl 
          hover:bg-white/10 transition-all duration-300 group">
          <i class="fa-regular fa-envelope mr-2 group-hover:scale-110 transition-transform duration-300"></i>
          <span class="hidden sm:inline">Kontak</span>
        </a>
      </div>
    </div>
  </div>
</header>