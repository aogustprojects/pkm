<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
  
    <!-- Main Container -->
    <div class="min-h-screen pt-8">
      <!-- Visi & Misi Section -->
      <section class="bg-gradient-to-br from-gray-50 to-gray-100 py-20 rounded-[2rem] shadow-2xl max-w-7xl mx-auto mb-12">
        <div class="px-6">
          <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-4">Visi & Misi</h2>
            <div class="w-24 h-1 bg-teal-500 mx-auto rounded-full"></div>
          </div>
          <div class="max-w-4xl mx-auto">
            <div class="bg-white/80 backdrop-blur-lg rounded-2xl p-8 shadow-xl border border-gray-200/20 hover:shadow-2xl transition-all duration-300 mb-8">
              <div class="flex items-center mb-6">
                <div class="w-12 h-12 rounded-full bg-teal-500 flex items-center justify-center mr-4">
                  <i class="fas fa-eye text-xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">Visi</h3>
              </div>
              <p class="text-gray-700 leading-relaxed">Terwujudnya Kota Bandung yang Unggul, Nyaman, Sejahtera dan Agamis</p>
            </div>
            
            <div class="bg-white/80 backdrop-blur-lg rounded-2xl p-8 shadow-xl border border-gray-200/20 hover:shadow-2xl transition-all duration-300">
              <div class="flex items-center mb-6">
                <div class="w-12 h-12 rounded-full bg-teal-500 flex items-center justify-center mr-4">
                  <i class="fas fa-bullseye text-xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">Misi</h3>
              </div>
              <p class="text-gray-700 leading-relaxed">Membangun Masyarakat yang Humanis, Agamis dan Berdaya Saing</p>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Tata Nilai Section -->
      <section class="bg-gradient-to-br from-gray-50 to-gray-100 py-20 rounded-[2rem] shadow-2xl max-w-7xl mx-auto mb-12">
        <div class="px-6">
          <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-4">Tata Nilai</h2>
            <div class="w-24 h-1 bg-teal-500 mx-auto rounded-full mb-6"></div>
            <p class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-teal-400 mb-12">C.E.R.D.I.K</p>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
              <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-teal-500 flex items-center justify-center mr-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                  <i class="fas fa-bolt text-xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-teal-600">Cekatan</h3>
              </div>
              <p class="text-gray-700 leading-relaxed">Melaksanakan pelayanan dengan cepat, tanggap dan profesional</p>
            </div>
            <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
              <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-teal-500 flex items-center justify-center mr-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                  <i class="fas fa-graduation-cap text-xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-teal-600">Edukatif</h3>
              </div>
              <p class="text-gray-700 leading-relaxed">Memberikan edukasi kepada masyarakat</p>
            </div>
            <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
              <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-teal-500 flex items-center justify-center mr-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                  <i class="fas fa-smile text-xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-teal-600">Ramah</h3>
              </div>
              <p class="text-gray-700 leading-relaxed">Bertutur kata dan bersikap baik dalam memberikan pelayanan kepada masyarakat</p>
            </div>
            <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
              <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-teal-500 flex items-center justify-center mr-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                  <i class="fas fa-clock text-xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-teal-600">Disiplin</h3>
              </div>
              <p class="text-gray-700 leading-relaxed">Patuh kepada peraturan dan tata tertib</p>
            </div>
            <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
              <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-teal-500 flex items-center justify-center mr-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                  <i class="fas fa-lightbulb text-xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-teal-600">Inovatif</h3>
              </div>
              <p class="text-gray-700 leading-relaxed">Bekerja dengan giat serta mampu menciptakan ide baru dalam meningkatkan mutu pelayanan masyarakat</p>
            </div>
            <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
              <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-teal-500 flex items-center justify-center mr-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                  <i class="fas fa-check-circle text-xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-teal-600">Konsisten</h3>
              </div>
              <p class="text-gray-700 leading-relaxed">Memberikan pelayanan terbaik kepada masyarakat secara terus menerus</p>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Struktur Organisasi Section -->
      <section class="bg-gradient-to-br from-gray-50 to-gray-100 py-20 rounded-[2rem] shadow-2xl max-w-7xl mx-auto mb-12">
        <div class="px-6">
          <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-4">Struktur Organisasi</h2>
            <div class="w-24 h-1 bg-teal-500 mx-auto rounded-full"></div>
          </div>
          <div class="flex justify-center items-center">
            <div class="group relative overflow-hidden rounded-2xl border border-gray-200/20 shadow-xl hover:shadow-2xl transition-all duration-300">
              <a href="{{ asset('img/struktur1.png') }}" target="_blank" data-lightbox="image-1" data-title="Struktur Organisasi" class="block">
                <img src="{{ asset('img/struktur1.png') }}" alt="Struktur Organisasi" class="w-full max-w-4xl rounded-2xl object-cover transform transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                  <p class="text-sm font-medium">Klik untuk memperbesar</p>
                </div>
              </a>
            </div>
          </div>
        </div>
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
    </style>
</x-layout>