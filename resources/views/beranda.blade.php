<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
  
    <!-- Main Container -->
    <div class="min-h-screen">
      <!-- Carousel -->
      <div id="default-carousel" class="relative w-full" data-carousel="slide">
          <!-- Carousel wrapper -->
          <div class="relative h-64 md:h-[36rem] overflow-hidden rounded-3xl shadow-2xl">
              <!-- Item 1 -->
              <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                  <img src="img/akre3.png" class="absolute block w-full h-full object-cover top-0 left-0 transition-transform duration-1000 hover:scale-105" alt="Puskesmas Pasir Jati Image 1" loading="lazy">
                  <div class="absolute inset-0 bg-gradient-to-t from-gray-800/70 to-transparent"></div>
                  <div class="absolute bottom-8 left-8 text-white">
                      <h2 class="text-3xl font-bold tracking-wide">Puskesmas Pasir Jati</h2>
                      <p class="text-lg opacity-80">Pelayanan Kesehatan Terpercaya</p>
                  </div>
              </div>
              <!-- Item 2 -->
              <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                  <img src="img/akre1.jpg" class="absolute block w-full h-full object-cover top-0 left-0 transition-transform duration-1000 hover:scale-105" alt="Puskesmas Pasir Jati Image 2" loading="lazy">
                  <div class="absolute inset-0 bg-gradient-to-t from-gray-800/70 to-transparent"></div>
                  <div class="absolute bottom-8 left-8 text-white">
                      <h2 class="text-3xl font-bold tracking-wide">Layanan Lengkap</h2>
                      <p class="text-lg opacity-80">Untuk Kesehatan Anda</p>
                  </div>
              </div>
              <!-- Item 3 -->
              <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                  <img src="img/akre2.jpeg" class="absolute block w-full h-full object-cover top-0 left-0 transition-transform duration-1000 hover:scale-105" alt="Puskesmas Pasir Jati Image 3" loading="lazy">
                  <div class="absolute inset-0 bg-gradient-to-t from-gray-800/70 to-transparent"></div>
                  <div class="absolute bottom-8 left-8 text-white">
                      <h2 class="text-3xl font-bold tracking-wide">Kesehatan Masyarakat</h2>
                      <p class="text-lg opacity-80">Membangun Kesejahteraan</p>
                  </div>
              </div>
          </div>
          <!-- Slider indicators -->
          <div class="absolute z-30 flex -translate-x-1/2 bottom-4 left-1/2 space-x-2">
              <button type="button" class="w-3 h-3 rounded-full bg-gray-400/40 hover:bg-gray-600/80 transition-all duration-300" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
              <button type="button" class="w-3 h-3 rounded-full bg-gray-400/40 hover:bg-gray-600/80 transition-all duration-300" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
              <button type="button" class="w-3 h-3 rounded-full bg-gray-400/40 hover:bg-gray-600/80 transition-all duration-300" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
          </div>
          <!-- Slider controls -->
          <button type="button" class="absolute top-1/2 -translate-y-1/2 start-4 z-30 flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/50 hover:bg-teal-600/70 transition-all duration-300" data-carousel-prev aria-label="Previous slide">
              <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
              </svg>
          </button>
          <button type="button" class="absolute top-1/2 -translate-y-1/2 end-4 z-30 flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/50 hover:bg-teal-600/70 transition-all duration-300" data-carousel-next aria-label="Next slide">
              <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
          </button>
          </div>
  
      <!-- Service Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6 py-12 max-w-7xl mx-auto">
          <div class="p-6 bg-white/90 backdrop-blur-lg rounded-2xl shadow-xl border border-gray-200/20 hover:scale-105 transition-all duration-300">
              <h5 class="mb-4 text-2xl font-semibold text-gray-800 text-center">Waktu Pelayanan</h5>
              <hr class="border-gray-200/20 mb-4">
              <div class="text-gray-700 space-y-2 text-sm">
                  <p><strong>Senin s/d Jumat:</strong> 07.30 - 12.00</p>
                  <p><strong>Sabtu:</strong> 07.30 - 10.30</p>
                  <p class="text-xs italic opacity-80">Catatan: Pendaftaran ditutup 30 menit sebelum waktu pelayanan berakhir.</p>
              </div>
          </div>
          <div class="p-6 bg-white/90 backdrop-blur-lg rounded-2xl shadow-xl border border-gray-200/20 hover:scale-105 transition-all duration-300">
              <h5 class="mb-4 text-2xl font-semibold text-gray-800 text-center">Syarat Pelayanan</h5>
              <hr class="border-gray-200/20 mb-4">
              <div class="text-gray-700 space-y-2 text-sm">
                  <p><strong>Umum:</strong></p>
                  <p>Biaya pelayanan Rp. 15.000</p>
                  <p>Membawa KTP/KK</p>
                  <p><strong>BPJS:</strong></p>
                  <p>Membawa kartu BPJS</p>
                  <p>Membawa KTP/KK</p>
              </div>
          </div>
          <div class="p-6 bg-white/90 backdrop-blur-lg rounded-2xl shadow-xl border border-gray-200/20 hover:scale-105 transition-all duration-300">
              <h5 class="mb-4 text-2xl font-semibold text-gray-800 text-center">Jadwal Pelayanan</h5>
              <hr class="border-gray-200/20 mb-4">
              <div class="text-gray-700 space-y-2 text-sm">
                  <p>Pelayanan Umum: Senin s/d Sabtu</p>
                  <p>Pelayanan Imunisasi: Senin & Kamis</p>
                  <p>Pelayanan KB: Rabu & Jumat</p>
                  <p>Pelayanan Ibu Hamil: Selasa & Sabtu</p>
                  <p>Pelayanan Gigi & Mulut: Senin s/d Sabtu</p>
                  <p>Pelayanan Gizi: Jumat</p>
              </div>
          </div>
      </div>
  
      <!-- Jenis Layanan Section -->
      <section class="bg-gray-100 py-16 rounded-3xl shadow-2xl max-w-7xl mx-auto mt-12">
          <div class="px-6">
              <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-12 tracking-tight">Jenis Layanan Puskesmas Pasir Jati</h2>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 place-items-center">
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:scale-105 transition-all duration-300 flex flex-col items-center text-center cursor-pointer" onclick="openModal('Pemeriksaan Umum', 'Pemeriksaan umum adalah proses evaluasi kesehatan dasar yang dilakukan oleh tenaga medis (seperti dokter atau perawat) untuk menilai kondisi kesehatan seseorang secara menyeluruh.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white">
                          <i class="fa-solid fa-stethoscope text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800">Pemeriksaan Umum</h3>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:scale-105 transition-all duration-300 flex flex-col items-center text-center cursor-pointer" onclick="openModal('Pemeriksaan Lansia', 'Pemeriksaan lansia di Puskesmas adalah layanan kesehatan yang ditujukan khusus untuk orang lanjut usia (lansia) dengan tujuan memantau dan menjaga kesehatan mereka.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white">
                          <i class="fa-solid fa-blind text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800">Pemeriksaan Lansia</h3>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:scale-105 transition-all duration-300 flex flex-col items-center text-center cursor-pointer" onclick="openModal('Pemeriksaan Gigi & Mulut', 'Pemeriksaan gigi dan mulut di Puskesmas adalah layanan kesehatan yang disediakan untuk memeriksa, mendiagnosis, dan memberikan perawatan dasar terkait kesehatan gigi dan mulut.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white">
                          <i class="fa-solid fa-tooth text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800">Pemeriksaan Gigi & Mulut</h3>
                      <a href="/poli-gigi" class="mt-3 bg-teal-500 text-white py-1 px-3 rounded-md text-sm hover:bg-teal-600 transition-colors duration-300">Link Daftar Poli Gigi</a>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:scale-105 transition-all duration-300 flex flex-col items-center text-center cursor-pointer" onclick="openModal('Pemeriksaan KIA & KB', 'Pemeriksaan KIA (Kesehatan Ibu dan Anak) dan KB (Keluarga Berencana) adalah layanan kesehatan yang ditujukan untuk menjaga dan meningkatkan kesehatan ibu, anak, serta merencanakan kehamilan.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white">
                          <i class="fa-solid fa-baby text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800">Pemeriksaan KIA & KB</h3>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:scale-105 transition-all duration-300 flex flex-col items-center text-center cursor-pointer" onclick="openModal('Pemeriksaan MTBS & MTBM', 'Pemeriksaan MTBS (Manajemen Terpadu Balita Sakit) dan MTBM (Manajemen Terpadu Bayi Muda) adalah pendekatan terintegrasi untuk menangani masalah kesehatan pada balita dan bayi muda.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white">
                          <i class="fa-solid fa-child text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800">Pemeriksaan MTBS & MTBM</h3>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:scale-105 transition-all duration-300 flex flex-col items-center text-center cursor-pointer" onclick="openModal('Pemeriksaan TB', 'Pemeriksaan TB (Tuberkulosis) adalah serangkaian prosedur diagnostik untuk mendeteksi infeksi bakteri Mycobacterium tuberculosis.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white">
                          <i class="fa-solid fa-lungs-virus text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800">Pemeriksaan TB</h3>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:scale-105 transition-all duration-300 flex flex-col items-center text-center cursor-pointer" onclick="openModal('Konseling Gizi', 'Konseling Gizi adalah proses interaktif untuk memberikan panduan, edukasi, dan dukungan terkait pola makan dan gizi.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white">
                          <i class="fa-brands fa-nutritionix text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800">Konseling Gizi</h3>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:scale-105 transition-all duration-300 flex flex-col items-center text-center cursor-pointer" onclick="openModal('Konseling Sanitasi', 'Konseling Sanitasi adalah edukasi tentang menjaga kebersihan dan sanitasi lingkungan untuk mencegah penyakit.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white">
                          <i class="fa-solid fa-hand-holding-droplet text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800">Konseling Sanitasi</h3>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:scale-105 transition-all duration-300 flex flex-col items-center text-center cursor-pointer" onclick="openModal('Promosi Kesehatan', 'Promosi Kesehatan adalah upaya untuk meningkatkan kesadaran dan kemampuan masyarakat dalam mengendalikan faktor-faktor yang memengaruhi kesehatan.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white">
                          <i class="fa-solid fa-hands-holding text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800">Promosi Kesehatan</h3>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:scale-105 transition-all duration-300 flex flex-col items-center text-center cursor-pointer" onclick="openModal('Laboratorium', 'Laboratorium adalah fasilitas yang menyediakan layanan pemeriksaan medis untuk mendukung diagnosis, pengobatan, dan pencegahan penyakit.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white">
                          <i class="fa-solid fa-microscope text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800">Laboratorium</h3>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:scale-105 transition-all duration-3400 flex flex-col items-center text-center cursor-pointer" onclick="openModal('Farmasi', 'Farmasi adalah unit yang mengelola obat-obatan dan memberikan pelayanan kefarmasian untuk memastikan pasien mendapatkan obat yang tepat.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white">
                          <i class="fa-solid fa-prescription-bottle-medical text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800">Farmasi</h3>
                  </div>
              </div>
          </div>
  
          <!-- Modal -->
          <div id="serviceModal" class="fixed inset-0 bg-gray-800/70 backdrop-blur-sm hidden items-center justify-center z-50 transition-opacity duration-500">
              <div class="bg-white/90 backdrop-blur-lg rounded-2xl shadow-2xl max-w-lg w-full p-8 relative border border-teal-500/50 transform scale-90 transition-transform duration-500">
                  <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-800 hover:text-teal-600 transition-colors duration-300" aria-label="Close modal">
                      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                  </button>
                  <h3 id="modalTitle" class="text-2xl font-semibold text-gray-800 mb-4"></h3>
                  <p id="modalDescription" class="text-gray-700 leading-relaxed text-sm"></p>
              </div>
          </div>
      </section>
    </div>
  
    <script>
        function openModal(title, description) {
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalDescription').textContent = description;
            const modal = document.getElementById('serviceModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            setTimeout(() => {
                modal.querySelector('.transform').classList.remove('scale-90');
            }, 10);
        }
  
        function closeModal() {
            const modal = document.getElementById('serviceModal');
            modal.querySelector('.transform').classList.add('scale-90');
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }, 500);
        }
    </script>
  
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
    </style>
</x-layout>