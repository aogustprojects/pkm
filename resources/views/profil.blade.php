<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <h1 class="mb-4 text-4xl text-center tracking-tight font-extrabold text-gray-900 dark:text-white">{{ $name }}</h1>
  <div class="grid place-items-center py-6">
    <img class="w-50 h-50 rounded-full mb-5" src="img/logo pkm.png" alt="logo-pkm">
  </div>
  <h3 class="mb-4 text-2xl text-center tracking-tight font-bold text-gray-900 dark:text-white">Struktur Organisasi</h3>
  <!-- Image with Lightbox -->
  <div class="d-flex justify-content-center align-items-center">
    <a href="img/struktur.jpg" data-lightbox="image-1" data-title="Struktur" id="lightboxLink">
        <img src="img/struktur.jpg" alt="struktur" class="rounded-2xl py-2">
    </a>
  </div>

  <section class="bg-white rounded-2xl mt-5 dark:bg-gray-900">
    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
        <figure class="max-w-screen-md mx-auto">
          <h3 class="mb-4 text-2xl text-center tracking-tight font-bold text-gray-900 dark:text-white">Visi & Misi</h3>
            <blockquote>
              <hr>

                <p class="text-2xl font-medium mt-4 text-gray-900 dark:text-white">
                  <p><strong>Visi : </strong>(Sesuai Visi Kota Bandung Tahun 2018-2023) - 
                      Terwujudnya Kota Bandung yang Unggul, Nyaman, Sejahtera dan Agamis
                  </p>
                  <p><strong>Misi : </strong>(Sesuai Misi Ke-1 Kota Bandung Tahun 2018-2023) - 
                      Membangun Masyarakat yang Humanis, Agamis dan Berdaya Saing
                  </p>
                </p>
            </blockquote>
        </figure>
    </div>
  </section>

  <section class="bg-white rounded-2xl mt-5 dark:bg-gray-900">
    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
        <figure class="max-w-screen-md mx-auto">
          <h3 class="mb-4 text-2xl text-center tracking-tight font-bold text-gray-900 dark:text-white">Tata Nilai</h3>
            <blockquote>
              <hr>

                <p class="text-2xl font-medium mt-4 text-gray-900 dark:text-white">
                  <p class="text-center"><strong> C.E.R.D.I.K </strong></p>
                  <p class="ms-5"><strong>C</strong>ekatan : Melaksanakan pelayanan dengan cepat, tanggap dan professional</p>
                  <p class="ms-5"><strong>E</strong>dukatif : Memberikan edukasi kepada masyarakat</p>
                  <p class="ms-5"><strong>R</strong>amah : Bertutur kata dan bersikap baik dalam memberikan pelayanan kepada masyarakat</p>
                  <p class="ms-5"><strong>D</strong>isiplin : Patuh kepada peraturan dan tata tertib</p>
                  <p class="ms-5"><strong>I</strong>novatif : Bekerja dengan giat serta mampu menciptakan ide baru dalam meningkatkan mutu pelayanan masyarakat</p>
                  <p class="ms-5"><strong>K</strong>onsisten : Memberikan pelayanan terbaik kepada masyarakat secara terus menerus</p>
                </p>
            </blockquote>
        </figure>
    </div>
  </section>
</x-layout>