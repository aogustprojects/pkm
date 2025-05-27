<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
  
    <!-- Main Container -->
    <div class="min-h-screen pt-6">
                <!-- Carousel -->
        <div id="default-carousel" class="relative w-full max-w-7xl mx-auto px-4" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-96 md:h-96 overflow-hidden rounded-[2rem] shadow-2xl group">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/akre3.png" class="absolute block w-full h-full object-cover top-0 left-0 transition-all duration-700 group-hover:scale-105 filter brightness-95" alt="Puskesmas Pasir Jati Image 1" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                    <div class="absolute bottom-12 left-12 text-white transform transition-transform duration-500 translate-y-0 group-hover:-translate-y-2">
                        <h1 class="text-4xl md:text-4xl font-bold tracking-wide mb-4">Puskesmas Pasir Jati</h1>
                        <p class="text-xl opacity-90">Pelayanan Kesehatan Terpercaya</p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/akre1.jpg" class="absolute block w-full h-full object-cover top-0 left-0 transition-all duration-700 group-hover:scale-105 filter brightness-95" alt="Puskesmas Pasir Jati Image 2" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                    <div class="absolute bottom-12 left-12 text-white transform transition-transform duration-500 translate-y-0 group-hover:-translate-y-2">
                        <h1 class="text-4xl md:text-4xl font-bold tracking-wide mb-4">Layanan Lengkap</h1>
                        <p class="text-xl opacity-90">Untuk Kesehatan Anda</p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/akre2.jpeg" class="absolute block w-full h-full object-cover top-0 left-0 transition-all duration-700 group-hover:scale-105 filter brightness-95" alt="Puskesmas Pasir Jati Image 3" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                    <div class="absolute bottom-12 left-12 text-white transform transition-transform duration-500 translate-y-0 group-hover:-translate-y-2">
                        <h1 class="text-4xl md:text-4xl font-bold tracking-wide mb-4">Kesehatan Masyarakat</h1>
                        <p class="text-xl opacity-90">Membangun Kesejahteraan</p>
                    </div>
                </div>
            </div>
                      <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3">
                <button type="button" class="w-4 h-4 rounded-full bg-white/30 border-2 border-white transition-all duration-300 hover:bg-white" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-4 h-4 rounded-full bg-white/30 border-2 border-white transition-all duration-300 hover:bg-white" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-4 h-4 rounded-full bg-white/30 border-2 border-white transition-all duration-300 hover:bg-white" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-1/2 -translate-y-1/2 start-4 z-30 flex items-center justify-center w-12 h-12 rounded-full bg-black/30 backdrop-blur-sm hover:bg-teal-600/70 transition-all duration-300 group" data-carousel-prev>
                <svg class="w-5 h-5 text-white transition-transform duration-300 group-hover:scale-125" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
            </button>
            <button type="button" class="absolute top-1/2 -translate-y-1/2 end-4 z-30 flex items-center justify-center w-12 h-12 rounded-full bg-black/30 backdrop-blur-sm hover:bg-teal-600/70 transition-all duration-300 group" data-carousel-next>
                <svg class="w-5 h-5 text-white transition-transform duration-300 group-hover:scale-125" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
            </button>
        </div>
  
      <!-- Service Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-6 py-12 max-w-7xl mx-auto">
          <div class="p-8 bg-white/90 backdrop-blur-lg rounded-2xl shadow-xl border border-gray-200/20 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
              <div class="flex items-center mb-6">
                  <div class="w-12 h-12 rounded-full bg-teal-500 flex items-center justify-center mr-4">
                      <i class="fas fa-clock text-xl text-white"></i>
                  </div>
                  <h5 class="text-2xl font-semibold text-gray-800">Waktu Pelayanan</h5>
              </div>
              <hr class="border-gray-200/20 mb-6">
              <div class="text-gray-700 space-y-3">
                  <div class="flex justify-between items-center">
                      <span class="font-medium">Senin s/d Jumat:</span>
                      <span>07.30 - 12.00</span>
                  </div>
                  <div class="flex justify-between items-center">
                      <span class="font-medium">Sabtu:</span>
                      <span>07.30 - 10.30</span>
                  </div>
                  <p class="text-sm italic text-teal-600 mt-4">* Pendaftaran ditutup 30 menit sebelum waktu pelayanan berakhir.</p>
              </div>
          </div>

          <div class="p-8 bg-white/90 backdrop-blur-lg rounded-2xl shadow-xl border border-gray-200/20 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
              <div class="flex items-center mb-6">
                  <div class="w-12 h-12 rounded-full bg-teal-500 flex items-center justify-center mr-4">
                      <i class="fas fa-file-medical text-xl text-white"></i>
                  </div>
                  <h5 class="text-2xl font-semibold text-gray-800">Syarat Pelayanan</h5>
              </div>
              <hr class="border-gray-200/20 mb-6">
              <div class="text-gray-700 space-y-3">
                  <div class="mb-4">
                      <h6 class="font-medium text-teal-600 mb-2">Umum:</h6>
                      <ul class="list-disc list-inside space-y-1 text-sm">
                          <li>Biaya pelayanan Rp. 15.000</li>
                          <li>Membawa KTP/KK</li>
                      </ul>
                  </div>
                  <div>
                      <h6 class="font-medium text-teal-600 mb-2">BPJS:</h6>
                      <ul class="list-disc list-inside space-y-1 text-sm">
                          <li>Membawa kartu BPJS</li>
                          <li>Membawa KTP/KK</li>
                      </ul>
                  </div>
              </div>
          </div>

          <div class="p-8 bg-white/90 backdrop-blur-lg rounded-2xl shadow-xl border border-gray-200/20 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
              <div class="flex items-center mb-6">
                  <div class="w-12 h-12 rounded-full bg-teal-500 flex items-center justify-center mr-4">
                      <i class="fas fa-calendar-check text-xl text-white"></i>
                  </div>
                  <h5 class="text-2xl font-semibold text-gray-800">Jadwal Pelayanan</h5>
              </div>
              <hr class="border-gray-200/20 mb-6">
              <div class="text-gray-700 space-y-2 text-sm">
                  <div class="flex items-center space-x-2">
                      <i class="fas fa-check-circle text-teal-500"></i>
                      <span>Pelayanan Umum: Senin s/d Sabtu</span>
                  </div>
                  <div class="flex items-center space-x-2">
                      <i class="fas fa-check-circle text-teal-500"></i>
                      <span>Pelayanan Imunisasi: Senin & Kamis</span>
                  </div>
                  <div class="flex items-center space-x-2">
                      <i class="fas fa-check-circle text-teal-500"></i>
                      <span>Pelayanan KB: Rabu & Jumat</span>
                  </div>
                  <div class="flex items-center space-x-2">
                      <i class="fas fa-check-circle text-teal-500"></i>
                      <span>Pelayanan Ibu Hamil: Selasa & Sabtu</span>
                  </div>
                  <div class="flex items-center space-x-2">
                      <i class="fas fa-check-circle text-teal-500"></i>
                      <span>Pelayanan Gigi & Mulut: Senin s/d Sabtu</span>
                  </div>
                  <div class="flex items-center space-x-2">
                      <i class="fas fa-check-circle text-teal-500"></i>
                      <span>Pelayanan Gizi: Jumat</span>
                  </div>
              </div>
          </div>
      </div>
  
      <!-- Jenis Layanan Section -->
      <section class="bg-gradient-to-br from-gray-50 to-gray-100 py-20 rounded-[3rem] shadow-2xl max-w-7xl mx-auto mb-6">
          <div class="px-6">
              <div class="text-center mb-16">
                  <h2 class="text-4xl font-extrabold text-gray-800 mb-4 tracking-tight">Jenis Layanan</h2>
                  <p class="text-gray-600 max-w-2xl mx-auto">Kami menyediakan berbagai layanan kesehatan yang komprehensif untuk memenuhi kebutuhan masyarakat</p>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 place-items-center">
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center cursor-pointer group" onclick="openModal('Pemeriksaan Umum', 'Pemeriksaan umum adalah proses evaluasi kesehatan dasar yang dilakukan oleh tenaga medis (seperti dokter atau perawat) untuk menilai kondisi kesehatan seseorang secara menyeluruh.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                          <i class="fa-solid fa-stethoscope text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800 mb-2">Pemeriksaan Umum</h3>
                      <p class="text-gray-600 text-sm">Klik untuk informasi lebih lanjut</p>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center cursor-pointer group" onclick="openModal('Pemeriksaan Lansia', 'Pemeriksaan lansia di Puskesmas adalah layanan kesehatan yang ditujukan khusus untuk orang lanjut usia (lansia) dengan tujuan memantau dan menjaga kesehatan mereka.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                          <i class="fa-solid fa-blind text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800 mb-2">Pemeriksaan Lansia</h3>
                      <p class="text-gray-600 text-sm">Klik untuk informasi lebih lanjut</p>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center cursor-pointer group" onclick="openModal('Pemeriksaan Gigi & Mulut', 'Pemeriksaan gigi dan mulut di Puskesmas adalah layanan kesehatan yang disediakan untuk memeriksa, mendiagnosis, dan memberikan perawatan dasar terkait kesehatan gigi dan mulut.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                          <i class="fa-solid fa-tooth text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800 mb-2">Pemeriksaan Gigi & Mulut</h3>
                      <div class="flex space-x-2">
                          <p class="text-gray-600 text-sm">Klik untuk informasi lebih lanjut</p>
                          <a href="/poli-gigi" class="text-teal-500 hover:text-teal-600 transition-colors duration-300 text-sm">Daftar →</a>
                      </div>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center cursor-pointer group" onclick="openModal('Pemeriksaan KIA & KB', 'Pemeriksaan KIA (Kesehatan Ibu dan Anak) dan KB (Keluarga Berencana) adalah layanan kesehatan yang ditujukan untuk menjaga dan meningkatkan kesehatan ibu, anak, serta merencanakan kehamilan.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                          <i class="fa-solid fa-baby text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800 mb-2">Pemeriksaan KIA & KB</h3>
                      <p class="text-gray-600 text-sm">Klik untuk informasi lebih lanjut</p>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center cursor-pointer group" onclick="openModal('Pemeriksaan MTBS & MTBM', 'Pemeriksaan MTBS (Manajemen Terpadu Balita Sakit) dan MTBM (Manajemen Terpadu Bayi Muda) adalah pendekatan terintegrasi untuk menangani masalah kesehatan pada balita dan bayi muda.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                          <i class="fa-solid fa-child text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800 mb-2">Pemeriksaan MTBS & MTBM</h3>
                      <p class="text-gray-600 text-sm">Klik untuk informasi lebih lanjut</p>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center cursor-pointer group" onclick="openModal('Pemeriksaan TB', 'Pemeriksaan TB (Tuberkulosis) adalah serangkaian prosedur diagnostik untuk mendeteksi infeksi bakteri Mycobacterium tuberculosis.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                          <i class="fa-solid fa-lungs-virus text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800 mb-2">Pemeriksaan TB</h3>
                      <p class="text-gray-600 text-sm">Klik untuk informasi lebih lanjut</p>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center cursor-pointer group" onclick="openModal('Konseling Gizi', 'Konseling Gizi adalah proses interaktif untuk memberikan panduan, edukasi, dan dukungan terkait pola makan dan gizi.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                          <i class="fa-brands fa-nutritionix text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800 mb-2">Konseling Gizi</h3>
                      <p class="text-gray-600 text-sm">Klik untuk informasi lebih lanjut</p>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center cursor-pointer group" onclick="openModal('Konseling Sanitasi', 'Konseling Sanitasi adalah edukasi tentang menjaga kebersihan dan sanitasi lingkungan untuk mencegah penyakit.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                          <i class="fa-solid fa-hand-holding-droplet text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800 mb-2">Konseling Sanitasi</h3>
                      <p class="text-gray-600 text-sm">Klik untuk informasi lebih lanjut</p>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center cursor-pointer group" onclick="openModal('Promosi Kesehatan', 'Promosi Kesehatan adalah upaya untuk meningkatkan kesadaran dan kemampuan masyarakat dalam mengendalikan faktor-faktor yang memengaruhi kesehatan.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                          <i class="fa-solid fa-hands-holding text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800 mb-2">Promosi Kesehatan</h3>
                      <p class="text-gray-600 text-sm">Klik untuk informasi lebih lanjut</p>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center cursor-pointer group" onclick="openModal('Laboratorium', 'Laboratorium adalah fasilitas yang menyediakan layanan pemeriksaan medis untuk mendukung diagnosis, pengobatan, dan pencegahan penyakit.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                          <i class="fa-solid fa-microscope text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800 mb-2">Laboratorium</h3>
                      <p class="text-gray-600 text-sm">Klik untuk informasi lebih lanjut</p>
                  </div>
                  <div class="w-full h-48 p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center text-center cursor-pointer group" onclick="openModal('Farmasi', 'Farmasi adalah unit yang mengelola obat-obatan dan memberikan pelayanan kefarmasian untuk memastikan pasien mendapatkan obat yang tepat.')">
                      <div class="flex justify-center items-center mb-4 w-12 h-12 rounded-full bg-teal-500 text-white transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                          <i class="fa-solid fa-prescription-bottle-medical text-xl"></i>
                      </div>
                      <h3 class="text-lg font-semibold text-gray-800 mb-2">Farmasi</h3>
                      <p class="text-gray-600 text-sm">Klik untuk informasi lebih lanjut</p>
                  </div>
              </div>
          </div>
  
          <!-- Enhanced Modal -->
          <div id="serviceModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50 transition-all duration-300">
              <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full p-8 relative border border-teal-500/20 transform scale-95 transition-all duration-300 hover:scale-100">
                  <button onclick="closeModal()" class="absolute -top-4 -right-4 bg-white w-8 h-8 rounded-full shadow-lg flex items-center justify-center text-gray-800 hover:text-teal-600 transition-colors duration-300" aria-label="Close modal">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                  </button>
                  <div class="mb-6">
                      <h3 id="modalTitle" class="text-2xl font-bold text-gray-800 mb-2"></h3>
                      <div class="w-16 h-1 bg-teal-500 rounded-full"></div>
                  </div>
                  <p id="modalDescription" class="text-gray-700 leading-relaxed"></p>
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
                modal.querySelector('.transform').classList.remove('scale-95');
            }, 10);
        }
  
        function closeModal() {
            const modal = document.getElementById('serviceModal');
            modal.querySelector('.transform').classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }, 300);
        }

        // Close modal when clicking outside
        document.getElementById('serviceModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Add keyboard support for closing modal
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });
    </script>
  
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