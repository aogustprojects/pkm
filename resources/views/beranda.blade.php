<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
<div id="default-carousel" class="relative w-full" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
       <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="img/akre3.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="img/akre1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="img/akre2.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
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

<div class="flex flex-col lg:flex-row justify-center items-center gap-2 lg:gap-5 px-4 py-3 lg:py-3">
    <a class="my-2 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 min-h-[250px] min-w-[400px]">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Waktu Pelayanan</h5>
      <hr class="mb-3">
      <div class="font-normal text-gray-700 dark:text-gray-400 ">
        <li>Senin s/d Jumat : </li>
        <p>07.30 s/d 12.00</p>
        <li>Sabtu : </li>
        <p>07.30 s/d 10.30</p>
        <p>Nb : Waktu Pendaftaran Pelayanan di Tutup 30 Menit Sebelum Tutup Waktu Pelayanan</p>
      </div>
    </a>
    <a class="my-2 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 min-h-[250px] min-w-[400px]">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Syarat Pelayanan</h5>
      <hr class="mb-3">
      <div class="font-normal text-gray-700 dark:text-gray-400 ">
        <li>Umum : </li>
        <p>Membayar biaya Pelayanan Rp. 15.000</p>
        <p>Membawa KTP/KK</p>
        <li>BPJS : </li>
        <p>Membawa kartu BPJS</p>
        <p>Membawa KTP/KK</p>
      </div>
    </a>
    <a class="my-2 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 min-h-[250px] min-w-[400px]">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Jadwal Pelayanan</h5>
      <hr class="mb-3">
      <div class="font-normal text-gray-700 dark:text-gray-400 ">
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
          <div class="grid place-items-center">
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
              <i class="fa-solid fa-stethoscope"></i>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Pemeriksaan Umum</h3>
            <p class="text-gray-500 dark:text-gray-400 text-center">Pemeriksaan umum adalah proses evaluasi kesehatan dasar yang dilakukan oleh tenaga medis (seperti dokter atau perawat) untuk menilai kondisi kesehatan seseorang secara menyeluruh.</p>
          </div>
          <div class="grid place-items-center">
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                <i class="fa-solid fa-blind"></i>
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Pemeriksaan Lansia</h3>
              <p class="text-gray-500 dark:text-gray-400 text-center">Pemeriksaan lansia di Puskesmas adalah layanan kesehatan yang ditujukan khusus untuk orang lanjut usia (lansia) dengan tujuan memantau dan menjaga kesehatan mereka.</p>
          </div>
          <div class="grid place-items-center">
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                <i class="fa-solid fa-tooth"></i>                
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Pemeriksaan Gigi & Mulut</h3>
              <p class="text-gray-500 dark:text-gray-400 text-center">Pemeriksaan gigi dan mulut di Puskesmas (Pusat Kesehatan Masyarakat) adalah layanan kesehatan yang disediakan untuk memeriksa, mendiagnosis, dan memberikan perawatan dasar terkait kesehatan gigi dan mulut.</p>
          </div>
          <div class="grid place-items-center">
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                <i class="fa-solid fa-baby"></i>
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Pemeriksaan KIA & KB</h3>
              <p class="text-gray-500 dark:text-gray-400 text-center">Pemeriksaan KIA (Kesehatan Ibu dan Anak) dan KB (Keluarga Berencana) adalah layanan kesehatan yang ditujukan untuk menjaga dan meningkatkan kesehatan ibu, anak, serta merencanakan kehamilan dan pengaturan jarak kelahiran.</p>
          </div>
          <div class="grid place-items-center">
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                <i class="fa-solid fa-child"></i>
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Pemeriksaan MTBS & MTBM</h3>
              <p class="text-gray-500 dark:text-gray-400 text-center">Pemeriksaan MTBS (Manajemen Terpadu Balita Sakit) dan MTBM (Manajemen Terpadu Bayi Muda) adalah pendekatan terintegrasi yang dirancang oleh Organisasi Kesehatan Dunia (WHO) untuk menangani masalah kesehatan pada balita (anak di bawah 5 tahun) dan bayi muda (bayi di bawah 2 bulan).</p>
          </div>
          <div class="grid place-items-center">
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                <i class="fa-solid fa-lungs-virus"></i>
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Pemeriksaan TB</h3>
              <p class="text-gray-500 dark:text-gray-400 text-center">Pemeriksaan TB (Tuberkulosis) adalah serangkaian prosedur diagnostik yang dilakukan untuk mendeteksi dan memastikan adanya infeksi bakteri Mycobacterium tuberculosis, penyebab penyakit tuberkulosis.</p>
          </div>
          <div class="grid place-items-center">
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
              <i class="fa-brands fa-nutritionix"></i>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Konseling Gizi</h3>
            <p class="text-gray-500 dark:text-gray-400 text-center">Konseling Gizi adalah proses interaktif antara seorang ahli gizi (nutritionist atau dietisien) dengan individu atau kelompok untuk memberikan panduan, edukasi, dan dukungan terkait pola makan dan gizi.</p>
          </div>
          <div class="grid place-items-center">
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
              <i class="fa-solid fa-hand-holding-droplet"></i>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Konseling Sanitasi</h3>
            <p class="text-gray-500 dark:text-gray-400 text-center">Konseling Sanitasi adalah proses edukasi dan bimbingan yang diberikan kepada individu, keluarga, atau masyarakat tentang pentingnya menjaga kebersihan dan sanitasi lingkungan untuk mencegah penyakit dan meningkatkan kualitas hidup.</p>
          </div>
          <div class="grid place-items-center">
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
              <i class="fa-solid fa-hands-holding"></i>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Promosi Kesehatan</h3>
            <p class="text-gray-500 dark:text-gray-400 text-center">Promosi Kesehatan adalah upaya yang dilakukan untuk meningkatkan kesadaran, pengetahuan, dan kemampuan masyarakat dalam mengendalikan faktor-faktor yang memengaruhi kesehatan, sehingga mereka dapat hidup lebih sehat.</p>
          </div>
          <div class="grid place-items-center">
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
              <i class="fa-solid fa-microscope"></i>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Laboratorium</h3>
            <p class="text-gray-500 dark:text-gray-400 text-center">Laboratorium adalah unit atau fasilitas yang menyediakan layanan pemeriksaan medis untuk mendukung diagnosis, pengobatan, dan pencegahan penyakit. Laboratorium ini dilengkapi dengan peralatan dan tenaga ahli (seperti analis kesehatan atau teknisi laboratorium) yang bertugas melakukan berbagai tes dan analisis terhadap sampel biologis, seperti darah, urine, feses, atau jaringan tubuh.</p>
          </div>
          <div class="grid place-items-center">
            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
              <i class="fa-solid fa-prescription-bottle-medical"></i>
            </div>
            <h3 class="mb-2 text-xl font-bold dark:text-white">Farmasi</h3>
            <p class="text-gray-500 dark:text-gray-400 text-center">Farmasi adalah unit atau bagian yang bertanggung jawab untuk mengelola obat-obatan dan memberikan pelayanan kefarmasian kepada masyarakat. Unit ini dikelola oleh apoteker dan tenaga teknis kefarmasian yang memastikan bahwa pasien mendapatkan obat yang tepat, aman, dan efektif sesuai dengan resep dokter.</p>
          </div>
      </div>
  </div>
</section>



</x-layout>