<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
<div id="default-carousel" class="relative w-full" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative h-56 md:h-96 overflow-hidden rounded-2xl shadow-md">
    <!-- Item 1 -->
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="img/akre3.png" class="absolute block w-full h-full object-cover top-0 left-0" alt="...">
    </div>
    <!-- Item 2 -->
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="img/akre1.jpg" class="absolute block w-full h-full object-cover top-0 left-0" alt="...">
    </div>
    <!-- Item 3 -->
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="img/akre2.jpeg" class="absolute block w-full h-full object-cover top-0 left-0" alt="...">
    </div>
  <!-- Slider indicators -->
  <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
  </div>
  <!-- Slider controls -->
  <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
          </svg>
          <span class="sr-only">Previous</span>
      </span>
  </button>
  <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <span class="sr-only">Next</span>
      </span>
  </button>
</div>

<div class="flex flex-col lg:flex-row justify-center items-center gap-2 lg:gap-5 px-0 py-3 lg:py-3">
  <a class="w-full lg:min-w-[393px] my-2 block p-6 bg-blue-400 rounded-2xl shadow-md dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 min-h-[250px]">
    <h5 class="mb-2 text-2xl font-bold drop-shadow-lg tracking-tight text-gray-900 dark:text-white text-center">Waktu Pelayanan</h5>
    <hr class="mb-3">
    <div class="font-normal drop-shadow-lg text-gray-900 dark:text-gray-400 ">
      <li>Senin s/d Jumat : </li>
      <p>07.30 s/d 12.00</p>
      <li>Sabtu : </li>
      <p>07.30 s/d 10.30</p>
      <p>Nb : Waktu Pendaftaran Pelayanan di Tutup 30 Menit Sebelum Tutup Waktu Pelayanan</p>
    </div>
  </a>
  <a class="w-full lg:min-w-[393px] my-2 block p-6 bg-blue-400 rounded-2xl shadow-md dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 min-h-[250px]">
    <h5 class="mb-2 text-2xl font-bold drop-shadow-lg tracking-tight text-gray-900 dark:text-white text-center">Syarat Pelayanan</h5>
    <hr class="mb-3">
    <div class="font-normal drop-shadow-lg text-gray-900 dark:text-gray-400 ">
      <li>Umum : </li>
      <p>Membayar biaya Pelayanan Rp. 15.000</p>
      <p>Membawa KTP/KK</p>
      <li>BPJS : </li>
      <p>Membawa kartu BPJS</p>
      <p>Membawa KTP/KK</p>
    </div>
  </a>
  <a class="w-full lg:min-w-[393px] my-2 block p-6 bg-blue-400 rounded-2xl shadow-md dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 min-h-[250px]">
    <h5 class="mb-2 text-2xl font-bold drop-shadow-lg tracking-tight text-gray-900 dark:text-white text-center">Jadwal Pelayanan</h5>
    <hr class="mb-3">
    <div class="font-normal drop-shadow-lg text-gray-900 dark:text-gray-400 ">
      <li>Pelayanan Umum : Senin s/d Sabtu</li>
      <li>Pelayanan Imunisasi : Senin & Kamis</li>
      <li>Pelayanan KB : Rabu & Jumat</li>
      <li>Pelayanan Ibu Hamil : Selasa & Sabtu</li>
      <li>Pelayanan Gigi & Mulut : Senin s/d Sabtu</li>
      <li>Pelayanan Gizi : Jumat</li>
    </div>
  </a>
</div>

<section class="bg-white rounded-2xl dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
      <div class="mb-8 lg:mb-16">
          <h2 class="mb-4 text-4xl text-center tracking-tight font-extrabold text-gray-900 dark:text-white">Jenis Layanan Puskesmas Pasir Jati</h2>
      </div>
      <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0 place-items-center">
          <div class="w-full h-full p-6 bg-white hover:bg-gray-300 dark:bg-gray-800 rounded-lg shadow-md flex flex-col items-center text-center cursor-pointer" onclick="openModal('Pemeriksaan Umum', 'Pemeriksaan umum adalah proses evaluasi kesehatan dasar yang dilakukan oleh tenaga medis (seperti dokter atau perawat) untuk menilai kondisi kesehatan seseorang secara menyeluruh.')">
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
              <i class="fa-solid fa-stethoscope"></i>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Pemeriksaan Umum</h3>
          </div>
          <div class="w-full h-full p-6 bg-white  hover:bg-gray-300 dark:bg-gray-800 rounded-lg shadow-md flex flex-col items-center text-center cursor-pointer" onclick="openModal('Pemeriksaan Lansia', 'Pemeriksaan lansia di Puskesmas adalah layanan kesehatan yang ditujukan khusus untuk orang lanjut usia (lansia) dengan tujuan memantau dan menjaga kesehatan mereka.')">
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                <i class="fa-solid fa-blind"></i>
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Pemeriksaan Lansia</h3>
          </div>
          <div class="w-full h-full p-6 bg-white hover:bg-gray-300 dark:bg-gray-800 rounded-lg shadow-md flex flex-col items-center text-center cursor-pointer" onclick="openModal('Pemeriksaan Gigi & Mulut', 'Pemeriksaan gigi dan mulut di Puskesmas adalah layanan kesehatan yang disediakan untuk memeriksa, mendiagnosis, dan memberikan perawatan dasar terkait kesehatan gigi dan mulut.')">
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                <i class="fa-solid fa-tooth"></i>                
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Pemeriksaan Gigi & Mulut</h3>
              <a href="/poli-gigi" class="hover:text-blue-700 hover:underline mt-3 bg-primary-100 py-2 px-2 rounded-md text-black text-sm hover:">Link Daftar Poli Gigi</a>
          </div>
          <div class="w-full h-full p-6 bg-white hover:bg-gray-300 dark:bg-gray-800 rounded-lg shadow-md flex flex-col items-center text-center cursor-pointer" onclick="openModal('Pemeriksaan KIA & KB', 'Pemeriksaan KIA (Kesehatan Ibu dan Anak) dan KB (Keluarga Berencana) adalah layanan kesehatan yang ditujukan untuk menjaga dan meningkatkan kesehatan ibu, anak, serta merencanakan kehamilan.')">
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                <i class="fa-solid fa-baby"></i>
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Pemeriksaan KIA & KB</h3>
          </div>
          <div class="w-full h-full p-6 bg-white hover:bg-gray-300 dark:bg-gray-800 rounded-lg shadow-md flex flex-col items-center text-center cursor-pointer" onclick="openModal('Pemeriksaan MTBS & MTBM', 'Pemeriksaan MTBS (Manajemen Terpadu Balita Sakit) dan MTBM (Manajemen Terpadu Bayi Muda) adalah pendekatan terintegrasi untuk menangani masalah kesehatan pada balita dan bayi muda.')">
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                <i class="fa-solid fa-child"></i>
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Pemeriksaan MTBS & MTBM</h3>
          </div>
          <div class="w-full h-full p-6 bg-white hover:bg-gray-300 dark:bg-gray-800 rounded-lg shadow-md flex flex-col items-center text-center cursor-pointer" onclick="openModal('Pemeriksaan TB', 'Pemeriksaan TB (Tuberkulosis) adalah serangkaian prosedur diagnostik untuk mendeteksi infeksi bakteri Mycobacterium tuberculosis.')">
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                <i class="fa-solid fa-lungs-virus"></i>
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Pemeriksaan TB</h3>
          </div>
          <div class="w-full h-full p-6 bg-white hover:bg-gray-300 dark:bg-gray-800 rounded-lg shadow-md flex flex-col items-center text-center cursor-pointer" onclick="openModal('Konseling Gizi', 'Konseling Gizi adalah proses interaktif untuk memberikan panduan, edukasi, dan dukungan terkait pola makan dan gizi.')">
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
              <i class="fa-brands fa-nutritionix"></i>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Konseling Gizi</h3>
          </div>
          <div class="w-full h-full p-6 bg-white hover:bg-gray-300 dark:bg-gray-800 rounded-lg shadow-md flex flex-col items-center text-center cursor-pointer" onclick="openModal('Konseling Sanitasi', 'Konseling Sanitasi adalah edukasi tentang menjaga kebersihan dan sanitasi lingkungan untuk mencegah penyakit.')">
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
              <i class="fa-solid fa-hand-holding-droplet"></i>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Konseling Sanitasi</h3>
          </div>
          <div class="w-full h-full p-6 bg-white hover:bg-gray-300 dark:bg-gray-800 rounded-lg shadow-md flex flex-col items-center text-center cursor-pointer" onclick="openModal('Promosi Kesehatan', 'Promosi Kesehatan adalah upaya untuk meningkatkan kesadaran dan kemampuan masyarakat dalam mengendalikan faktor-faktor yang memengaruhi kesehatan.')">
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
              <i class="fa-solid fa-hands-holding"></i>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Promosi Kesehatan</h3>
          </div>
          <div class="w-full h-full p-6 bg-white hover:bg-gray-300 dark:bg-gray-800 rounded-lg shadow-md flex flex-col items-center text-center cursor-pointer" onclick="openModal('Laboratorium', 'Laboratorium adalah fasilitas yang menyediakan layanan pemeriksaan medis untuk mendukung diagnosis, pengobatan, dan pencegahan penyakit.')">
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
              <i class="fa-solid fa-microscope"></i>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Laboratorium</h3>
          </div>
          <div class="w-full h-full p-6 bg-white hover:bg-gray-300 dark:bg-gray-800 rounded-lg shadow-md flex flex-col items-center text-center cursor-pointer" onclick="openModal('Farmasi', 'Farmasi adalah unit yang mengelola obat-obatan dan memberikan pelayanan kefarmasian untuk memastikan pasien mendapatkan obat yang tepat.')">
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
              <i class="fa-solid fa-prescription-bottle-medical"></i>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Farmasi</h3>
          </div>
      </div>
  </div>

  <!-- Modal -->
  <div id="serviceModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg max-w-lg w-full p-6 relative">
      <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-100">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
      <h3 id="modalTitle" class="text-xl font-bold text-gray-900 dark:text-white mb-4"></h3>
      <p id="modalDescription" class="text-gray-500 dark:text-gray-400"></p>
    </div>
  </div>
</section>

<script>
function openModal(title, description) {
  document.getElementById('modalTitle').textContent = title;
  document.getElementById('modalDescription').textContent = description;
  const modal = document.getElementById('serviceModal');
  modal.classList.remove('hidden');
  modal.classList.add('flex');
}

function closeModal() {
  const modal = document.getElementById('serviceModal');
  modal.classList.add('hidden');
  modal.classList.remove('flex');
}
</script>
</x-layout>