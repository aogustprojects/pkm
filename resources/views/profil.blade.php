<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <section class="bg-gradient-to-b from-green-500 rounded-2xl mt-5 dark:bg-gray-900 max-w-4xl mx-auto">
      <div class="max-w-screen-xl px-4 py-3 mx-auto text-center lg:py-8 lg:px-3">
          <figure class="max-w-screen-md mx-auto">
            <h3 class="mb-4 text-2xl text-center tracking-tight font-bold text-gray-900 dark:text-white">Visi & Misi</h3>
              <blockquote>
                <hr>
  
                  <p class="text-2xl font-medium mt-4 text-gray-900 dark:text-white">
                    <p><strong>Visi : </strong></p>
                    <p class="mb-5 text-gray-900">Terwujudnya Kota Bandung yang Unggul, Nyaman, Sejahtera dan Agamis</p>
                    <p><strong>Misi : </strong></p>
                    <p class="mb-5 text-gray-900">Membangun Masyarakat yang Humanis, Agamis dan Berdaya Saing</p>
                  </p>
              </blockquote>
          </figure>
      </div>
    </section>

    <section class="bg-gradient-to-b from-green-500 rounded-2xl mt-5 dark:bg-gray-900 max-w-4xl mx-auto">
      <div class="max-w-screen-xl px-4 py-3 mx-auto text-center lg:py-8 lg:px-3">
          <figure class=" mx-auto">
            <h3 class="mb-4 text-2xl text-center tracking-tight font-bold text-gray-900 dark:text-white">Tata Nilai</h3>
              <blockquote>
                <hr>
                <p class="mt-4"><strong>C.E.R.D.I.K</strong></p>
                  <p class="text-2xl font-medium mt-4 text-gray-900 dark:text-white">
                    <p><strong>C</strong>ekatan</p>
                    <p>Melaksanakan pelayanan dengan cepat, tanggap dan profesional</p>
                    <p><strong>E</strong>dukatif</p>
                    <p>Memberikan edukasi kepada masyarakat</p>
                    <p><strong>R</strong>amah</p>
                    <p>Bertutur kata dan bersikap baik dalam memberikan pelayanan kepada masyarakat</p>
                    <p><strong>D</strong>isiplin</p>
                    <p>Patuh kepada peraturan dan tata tertib</p>
                    <p><strong>I</strong>novatif</p>
                    <p>Bekerja dengan giat serta mampu menciptakan ide baru dalam meningkatkan mutu pelayanan masyarakat</p>
                    <p><strong>K</strong>onsisten</p>
                    <p>Memberikan pelayanan terbaik kepada masyarakat secara terus menerus</p>
              </blockquote>
          </figure>
      </div>
    </section>

    <section class="bg-gradient-to-b from-green-500 rounded-2xl mt-5 dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
          <h3 class="mb-4 text-2xl text-center tracking-tight font-bold text-gray-900 dark:text-white">Struktur Organisasi</h3>
          <hr>
          <!-- Image with Lightbox -->
          <div class="d-flex justify-content-center align-items-center">
            <a href="{{ asset('img/struktur1.png') }}" data-lightbox="image-1" data-title="Struktur" id="lightboxLink">
                <img src="{{ asset('img/struktur1.png') }}" alt="struktur" class="rounded-2xl py-2">
            </a>
          </div>
        </div>
      </section>
</x-layout>