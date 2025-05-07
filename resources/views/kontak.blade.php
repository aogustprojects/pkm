<x-layout>
  <x-slot:title>{{ $title ?? 'Hubungi Kami' }}</x-slot:title>

  <!-- Main Container -->
  <div class="min-h-screen">
    <section class="flex flex-col md:flex-row gap-8 px-4 py-8 mx-auto max-w-screen-xl lg:px-6">
      <!-- Contact Form Section -->
      <section class="bg-gray-100 rounded-2xl md:flex-[0.7] w-full shadow-lg transition-all duration-300">
        <div class="py-8 lg:py-12 px-4 mx-auto max-w-screen-md">
          <h2 class="mb-6 text-4xl font-extrabold tracking-tight text-center text-gray-800">Hubungi Kami</h2>
          <hr class="border-gray-200/20 mb-8 max-w-md mx-auto">
          <!-- Success Message -->
          @if (session('success'))
          <div class="mb-6 p-4 bg-teal-500/20 backdrop-blur-lg text-gray-800 rounded-lg flex items-center gap-2 animate-fade-in border border-teal-500/50">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>Sukses!</strong> {{ session('success') }}</span>
          </div>
          @endif
          <!-- Error Messages -->
          @if ($errors->any())
          <div class="mb-6 p-4 bg-red-500/20 backdrop-blur-lg text-gray-800 rounded-lg flex items-center gap-2 animate-fade-in border border-red-500/50">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <ul class="list-disc list-inside">
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <form action="{{ route('send.email') }}" method="POST" class="space-y-6 mt-8" aria-label="Contact form">
            @csrf
            <div class="px-4 md:px-8">
              <label for="name" class="block mb-2 text-sm font-medium text-gray-800">Nama Lengkap</label>
              <input type="text" id="name" name="name" class="block w-full p-3 text-sm text-gray-800 bg-white/90 backdrop-blur-lg border border-teal-500/50 rounded-lg focus:ring-teal-500 focus:border-teal-500 placeholder-gray-500 transition-all duration-300" placeholder="Masukkan nama lengkap" required aria-required="true">
            </div>
            <div class="px-4 md:px-8">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-800">Email</label>
              <input type="email" id="email" name="email" class="block w-full p-3 text-sm text-gray-800 bg-white/90 backdrop-blur-lg border border-teal-500/50 rounded-lg focus:ring-teal-500 focus:border-teal-500 placeholder-gray-500 transition-all duration-300" placeholder="your.email@gmail.com" required aria-required="true">
            </div>
            <div class="px-4 md:px-8">
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-800">Perihal</label>
              <input type="text" id="subject" name="subject" class="block w-full p-3 text-sm text-gray-800 bg-white/90 backdrop-blur-lg border border-teal-500/50 rounded-lg focus:ring-teal-500 focus:border-teal-500 placeholder-gray-500 transition-all duration-300" placeholder="Masukkan perihal pesan" required aria-required="true">
            </div>
            <div class="px-4 md:px-8">
              <label for="emailMessage" class="block mb-2 text-sm font-medium text-gray-800">Pesan</label>
              <textarea id="emailMessage" name="emailMessage" rows="6" class="block w-full p-3 text-sm text-gray-800 bg-white/90 backdrop-blur-lg border border-teal-500/50 rounded-lg focus:ring-teal-500 focus:border-teal-500 placeholder-gray-500 transition-all duration-300" placeholder="Tulis pesan Anda di sini"></textarea>
            </div>
            <div class="flex justify-end px-4 md:px-8">
              <button type="submit" class="py-3 px-6 text-sm font-medium text-white bg-teal-500 rounded-lg hover:bg-teal-600 focus:ring-4 focus:ring-teal-300 transition-all duration-300">Kirim Pesan</button>
            </div>
          </form>
        </div>
      </section>

      <!-- Contact Info Section -->
      <section class="bg-gray-100 rounded-2xl md:flex-[0.3] w-full shadow-lg transition-all duration-300">
        <div class="py-8 lg:py-12 px-4 mx-auto max-w-screen-md">
          <h2 class="mb-6 text-4xl font-extrabold tracking-tight text-center text-gray-800">Kontak Kami</h2>
          <hr class="border-gray-200/20 mb-8 max-w-md mx-auto">
          <div class="space-y-6 text-gray-700">
            <div class="flex items-center gap-3 hover:text-teal-600 transition-colors duration-300">
              <i class="fa-solid fa-location-dot text-xl text-teal-500"></i>
              <div>
                <p class="font-semibold">Puskesmas Pasir Jati</p>
                <p class="text-sm">Jl Nagrog III RT.03 RW.08, Kelurahan Pasirjati, Kecamatan Ujungberung, Kota Bandung, 40616</p>
              </div>
            </div>
            <div class="flex items-center gap-3 hover:text-teal-600 transition-colors duration-300">
              <i class="fa-brands fa-whatsapp text-xl text-teal-500"></i>
              <a href="https://wa.me/62811222753" target="_blank" class="font-semibold" aria-label="Contact via WhatsApp">WhatsApp: 0811-222-753</a>
            </div>
            <div class="flex items-center gap-3 hover:text-teal-600 transition-colors duration-300">
              <i class="fa-solid fa-envelope text-xl text-teal-500"></i>
              <a href="mailto:uptpuskesmaspasirjati@gmail.com" class="font-semibold" aria-label="Contact via Email">Email: uptpuskesmaspasirjati@gmail.com</a>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f0f4f8 0%, #e2e8f0 100%);
    }
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #e2e8f0;
    }
    ::-webkit-scrollbar-thumb {
      background: #38b2ac;
      border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #2c8c89;
    }
    .animate-fade-in {
      animation: fadeIn 0.5s ease-in;
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
  </style>
</x-layout>