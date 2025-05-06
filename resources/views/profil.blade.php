<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
  
    <!-- Main Container -->
    <div class="min-h-screen">
      <!-- Visi & Misi Section -->
      <section class="bg-gray-900 py-16 rounded-3xl shadow-2xl max-w-7xl mx-auto mt-12">
        <div class="px-6 text-center">
          <h3 class="mb-6 text-4xl font-extrabold tracking-tight text-white">Visi & Misi</h3>
          <hr class="border-white/20 mb-6 max-w-md mx-auto">
          <div class="max-w-screen-md mx-auto text-white/90 space-y-4">
            <p><strong class="text-white">Visi:</strong></p>
            <p class="leading-relaxed text-sm">Terwujudnya Kota Bandung yang Unggul, Nyaman, Sejahtera dan Agamis</p>
            <p><strong class="text-white">Misi:</strong></p>
            <p class="leading-relaxed text-sm">Membangun Masyarakat yang Humanis, Agamis dan Berdaya Saing</p>
          </div>
        </div>
      </section>
  
      <!-- Tata Nilai Section -->
      <section class="bg-gray-900 py-16 rounded-3xl shadow-2xl max-w-7xl mx-auto mt-12">
        <div class="px-6 text-center">
          <h3 class="mb-6 text-4xl font-extrabold tracking-tight text-white">Tata Nilai</h3>
          <hr class="border-white/20 mb-6 max-w-md mx-auto">
          <p class="text-2xl font-semibold text-white mb-6">C.E.R.D.I.K</p>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 place-items-center">
            <div class="w-full h-36 p-6 bg-white/10 backdrop-blur-lg rounded-xl shadow-lg border border-white/20 hover:scale-105 transition-all duration-300 flex flex-col items-center text-center">
              <p class="font-bold text-teal-500 mb-2">Cekatan</p>
              <p class="text-sm leading-relaxed text-white/90">Melaksanakan pelayanan dengan cepat, tanggap dan profesional</p>
            </div>
            <div class="w-full h-36 p-6 bg-white/10 backdrop-blur-lg rounded-xl shadow-lg border border-white/20 hover:scale-105 transition-all duration-300 flex flex-col items-center text-center">
              <p class="font-bold text-teal-500 mb-2">Edukatif</p>
              <p class="text-sm leading-relaxed text-white/90">Memberikan edukasi kepada masyarakat</p>
            </div>
            <div class="w-full h-36 p-6 bg-white/10 backdrop-blur-lg rounded-xl shadow-lg border border-white/20 hover:scale-105 transition-all duration-300 flex flex-col items-center text-center">
              <p class="font-bold text-teal-500 mb-2">Ramah</p>
              <p class="text-sm leading-relaxed text-white/90">Bertutur kata dan bersikap baik dalam memberikan pelayanan kepada masyarakat</p>
            </div>
            <div class="w-full h-36 p-6 bg-white/10 backdrop-blur-lg rounded-xl shadow-lg border border-white/20 hover:scale-105 transition-all duration-300 flex flex-col items-center text-center">
              <p class="font-bold text-teal-500 mb-2">Disiplin</p>
              <p class="text-sm leading-relaxed text-white/90">Patuh kepada peraturan dan tata tertib</p>
            </div>
            <div class="w-full h-36 p-6 bg-white/10 backdrop-blur-lg rounded-xl shadow-lg border border-white/20 hover:scale-105 transition-all duration-300 flex flex-col items-center text-center">
              <p class="font-bold text-teal-500 mb-2">Inovatif</p>
              <p class="text-sm leading-relaxed text-white/90">Bekerja dengan giat serta mampu menciptakan ide baru dalam meningkatkan mutu pelayanan masyarakat</p>
            </div>
            <div class="w-full h-36 p-6 bg-white/10 backdrop-blur-lg rounded-xl shadow-lg border border-white/20 hover:scale-105 transition-all duration-300 flex flex-col items-center text-center">
              <p class="font-bold text-teal-500 mb-2">Konsisten</p>
              <p class="text-sm leading-relaxed text-white/90">Memberikan pelayanan terbaik kepada masyarakat secara terus menerus</p>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Struktur Organisasi Section -->
      <section class="bg-gray-900 py-16 rounded-3xl shadow-2xl max-w-7xl mx-auto mt-12">
        <div class="px-6 text-center">
          <h3 class="mb-6 text-4xl font-extrabold tracking-tight text-white">Struktur Organisasi</h3>
          <hr class="border-white/20 mb-6 max-w-md mx-auto">
          <div class="flex justify-center items-center">
            <a href="{{ asset('img/struktur1.png') }}" target="_blank" data-lightbox="image-1" data-title="Struktur Organisasi" class="block overflow-hidden rounded-2xl hover:scale-105 transition-transform duration-300 border border-white/20 shadow-lg">
              <img src="{{ asset('img/struktur1.png') }}" alt="Struktur Organisasi" class="w-full max-w-md rounded-2xl object-cover">
            </a>
          </div>
        </div>
      </section>
    </div>
  
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
      html, body {
        height: 100%;
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
      }
      ::-webkit-scrollbar {
        width: 8px;
      }
      ::-webkit-scrollbar-track {
        background: #1a1a2e;
      }
      ::-webkit-scrollbar-thumb {
        background: #00d4ff;
        border-radius: 4px;
      }
      ::-webkit-scrollbar-thumb:hover {
        background: #00b7d4;
      }
    </style>
  </x-layout>