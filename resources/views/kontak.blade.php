<x-layout>
  <x-slot:title>{{ $title ?? 'Hubungi Kami' }}</x-slot:title>

  <!-- Main Container -->
  <div class="min-h-screen pt-8">
    <!-- Page Header -->
    <div class="text-center mb-12 px-4">
      <h1 class="text-4xl font-extrabold text-gray-800 mb-4">Hubungi Kami</h1>
      <div class="w-24 h-1 bg-teal-500 mx-auto rounded-full mb-4"></div>
      <p class="text-gray-600 max-w-2xl mx-auto">Kami siap melayani Anda. Silakan hubungi kami melalui form di bawah ini atau melalui kontak yang tersedia.</p>
    </div>

    <section class="flex flex-col md:flex-row gap-8 px-4 mx-auto max-w-screen-xl lg:px-6">
      <!-- Contact Form Section -->
      <section class="bg-white/90 backdrop-blur-lg rounded-2xl md:flex-[0.7] w-full shadow-xl border border-gray-200/20 hover:shadow-2xl transition-all duration-300">
        <div class="py-8 lg:py-12 px-4 mx-auto max-w-screen-md">
          <div class="text-center mb-8">
            <span class="inline-flex justify-center items-center w-12 h-12 rounded-full bg-teal-100 mb-4">
              <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
            </span>
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Kirim Pesan</h2>
            <p class="text-gray-600">Isi form di bawah ini untuk mengirim pesan kepada kami</p>
          </div>

          <!-- Success Message -->
          @if (session('success'))
          <div class="mb-6 p-4 bg-teal-500/20 backdrop-blur-lg text-gray-800 rounded-xl flex items-center gap-3 animate-fade-in border border-teal-500/30 shadow-lg">
            <div class="flex-shrink-0">
              <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <p class="text-sm"><span class="font-semibold">Sukses!</span> {{ session('success') }}</p>
          </div>
          @endif

          <!-- Error Messages -->
          @if ($errors->any())
          <div class="mb-6 p-4 bg-red-500/20 backdrop-blur-lg text-gray-800 rounded-xl flex items-start gap-3 animate-fade-in border border-red-500/30 shadow-lg">
            <div class="flex-shrink-0 mt-0.5">
              <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <ul class="text-sm space-y-1">
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          <form action="{{ route('send.email') }}" method="POST" class="space-y-6" aria-label="Contact form">
            @csrf
            <div class="group">
              <label for="name" class="block mb-2 text-sm font-medium text-gray-800">Nama Lengkap</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                  </svg>
                </div>
                <input type="text" id="name" name="name" class="block w-full pl-10 p-3 text-sm text-gray-800 bg-gray-50 rounded-xl border border-gray-200 focus:ring-2 focus:ring-teal-500 focus:border-transparent placeholder-gray-500 transition-all duration-300" placeholder="Masukkan nama lengkap" required aria-required="true">
              </div>
            </div>

            <div class="group">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-800">Email</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                  </svg>
                </div>
                <input type="email" id="email" name="email" class="block w-full pl-10 p-3 text-sm text-gray-800 bg-gray-50 rounded-xl border border-gray-200 focus:ring-2 focus:ring-teal-500 focus:border-transparent placeholder-gray-500 transition-all duration-300" placeholder="your.email@gmail.com" required aria-required="true">
              </div>
            </div>

            <div class="group">
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-800">Perihal</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                  </svg>
                </div>
                <input type="text" id="subject" name="subject" class="block w-full pl-10 p-3 text-sm text-gray-800 bg-gray-50 rounded-xl border border-gray-200 focus:ring-2 focus:ring-teal-500 focus:border-transparent placeholder-gray-500 transition-all duration-300" placeholder="Masukkan perihal pesan" required aria-required="true">
              </div>
            </div>

            <div class="group">
              <label for="emailMessage" class="block mb-2 text-sm font-medium text-gray-800">Pesan</label>
              <div class="relative">
                <div class="absolute top-3 left-3 text-gray-500 pointer-events-none">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                  </svg>
                </div>
                <textarea id="emailMessage" name="emailMessage" rows="6" class="block w-full pl-10 p-3 text-sm text-gray-800 bg-gray-50 rounded-xl border border-gray-200 focus:ring-2 focus:ring-teal-500 focus:border-transparent placeholder-gray-500 transition-all duration-300" placeholder="Tulis pesan Anda di sini"></textarea>
              </div>
            </div>

            <div class="flex justify-end">
              <button type="submit" class="inline-flex items-center py-3 px-6 text-sm font-medium text-white bg-teal-500 rounded-xl hover:bg-teal-600 focus:ring-4 focus:ring-teal-300 shadow-lg hover:shadow-xl transition-all duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                </svg>
                Kirim Pesan
              </button>
            </div>
          </form>
        </div>
      </section>

      <!-- Contact Info Section -->
      <section class="bg-white/90 backdrop-blur-lg rounded-2xl md:flex-[0.3] w-full shadow-xl border border-gray-200/20 hover:shadow-2xl transition-all duration-300">
        <div class="py-8 lg:py-12 px-6">
          <div class="text-center mb-8">
            <span class="inline-flex justify-center items-center w-12 h-12 rounded-full bg-teal-100 mb-4">
              <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
              </svg>
            </span>
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Informasi Kontak</h2>
            <p class="text-gray-600">Hubungi kami melalui kontak berikut</p>
          </div>

          <div class="space-y-6">
            <div class="group p-4 rounded-xl hover:bg-gray-50 transition-all duration-300">
              <div class="flex items-start gap-4">
                <div class="flex-shrink-0">
                  <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-600 group-hover:scale-110 transition-transform duration-300">
                    <i class="fa-solid fa-location-dot text-xl"></i>
                  </div>
                </div>
                <div>
                  <h3 class="font-semibold text-gray-800 mb-1">Alamat</h3>
                  <p class="text-sm text-gray-600">Puskesmas Pasir Jati</p>
                  <p class="text-sm text-gray-600">Jl Nagrog III RT.03 RW.08, Kelurahan Pasirjati, Kecamatan Ujungberung, Kota Bandung, 40616</p>
                </div>
              </div>
            </div>

            <div class="group p-4 rounded-xl hover:bg-gray-50 transition-all duration-300">
              <a href="https://wa.me/62811222753" target="_blank" class="flex items-start gap-4" aria-label="Contact via WhatsApp">
                <div class="flex-shrink-0">
                  <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-600 group-hover:scale-110 transition-transform duration-300">
                    <i class="fa-brands fa-whatsapp text-xl"></i>
                  </div>
                </div>
                <div>
                  <h3 class="font-semibold text-gray-800 mb-1">WhatsApp</h3>
                  <p class="text-sm text-gray-600">0811-222-753</p>
                </div>
              </a>
            </div>

            <div class="group p-4 rounded-xl hover:bg-gray-50 transition-all duration-300">
              <a href="mailto:uptpuskesmaspasirjati@gmail.com" class="flex items-start gap-4" aria-label="Contact via Email">
                <div class="flex-shrink-0">
                  <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-600 group-hover:scale-110 transition-transform duration-300">
                    <i class="fa-solid fa-envelope text-xl"></i>
                  </div>
                </div>
                <div>
                  <h3 class="font-semibold text-gray-800 mb-1">Email</h3>
                  <p class="text-sm text-gray-600">uptpuskesmaspasirjati@gmail.com</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    
    html {
      scroll-behavior: smooth;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f0f4f8 0%, #e2e8f0 100%);
    }
    
    /* Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 10px;
    }
    
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
      border-radius: 5px;
    }
    
    ::-webkit-scrollbar-thumb {
      background: #38b2ac;
      border-radius: 5px;
      transition: all 0.3s ease;
    }
    
    ::-webkit-scrollbar-thumb:hover {
      background: #2c8c89;
    }

    /* Animations */
    @keyframes fade-in {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .animate-fade-in {
      animation: fade-in 0.6s ease-out forwards;
    }

    /* Form Focus Styles */
    .group:focus-within label {
      color: #38b2ac;
    }
  </style>
</x-layout>