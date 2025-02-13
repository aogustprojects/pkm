<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

  <section class="flex">
    <section class="bg-white dark:bg-gray-900 rounded-3xl flex-[0.7]">
      <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Hubungi Kami</h2>
          <form action="#" class="space-y-8 mt-10">
              <div class="px-16">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Lengkap</label>
                  <input type="text" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="" required>
              </div>
              <div class="px-16">
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                  <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="your.email@gmail.com" required>
              </div>
              <div class="px-16">
                  <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perihal</label>
                  <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-600 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="" required>
              </div>
              <div class="sm:col-span-2 px-16">
                  <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan</label>
                  <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-600 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder=""></textarea>
              </div>
              <button type="submit" class="flex ml-auto py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
          </form>
      </div>
    </section>

    <section class="bg-white dark:bg-gray-900 rounded-3xl flex-[0.3] ml-8">
      <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Kontak Kami</h2>
          <p class="text-gray-600 dark:text-gray-300"><h2 class="mb-6 text-md font-semibold text-gray-900 uppercase dark:text-white">Alamat & Kontak Hotline</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium text-sm">
                <li class="mb-4">
                    <p>Jl Nagrog III RT.03 RW.08, Kelurahan Pasirjati, Kecamatan Ujungberung, Kota Bandung, 40616</p>
                </li>
                <li class="mb-4">
                    <i class="fa-brands fa-whatsapp"></i>
                    <a href="#" class="hover:underline">Whasapp : 0811-222-753</a>
                </li>
            </ul></p>
      </div>
    </section>


  </section>
    

  </x-layout>