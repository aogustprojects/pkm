<x-layout>
    <x-slot:title>{{ $title ?? 'Default Title' }}</x-slot:title>

    <section class="flex flex-col md:flex-row">
        <!-- Contact Form Section -->
        <section class="bg-gradient-to-b from-green-500 to-green-200 dark:bg-gray-900 rounded-3xl md:flex-[0.7] w-full md:w-auto mb-8 md:mb-0">
          <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
              <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Hubungi Kami</h2>
              <hr>
              <!-- Success Message -->
            {{-- {{ dd(session()->all()) }}  <!-- Add this to check session data --> --}}
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-500 text-white rounded-lg">
                    <strong>Sukses!</strong> {{ session('success') }}
                </div>
            @endif
              <form action="{{ route('send.email') }}" method="POST" class="space-y-8 mt-10">
                @csrf
                  <div class="px-4 md:px-16">
                      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Lengkap</label>
                      <input type="text" id="name" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="" required>
                  </div>
                  <div class="px-4 md:px-16">
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                      <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="your.email@gmail.com" required>
                  </div>
                  <div class="px-4 md:px-16">
                      <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perihal</label>
                      <input type="text" id="subject" name="subject" class="block p-3 w-full text-sm text-gray-600 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="" required>
                  </div>
                  <div class="sm:col-span-2 px-4 md:px-16">
                      <label for="emailMessage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan</label>
                      <textarea id="emailMessage" name="emailMessage" rows="6" class="block p-2.5 w-full text-sm text-gray-600 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder=""></textarea>
                  </div>
                  <button type="submit" class="flex ml-auto py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
              </form>
          </div>
        </section>
    
        <!-- Contact Info Section -->
        <section class="bg-gradient-to-b from-green-500 to-green-200 dark:bg-gray-900 rounded-3xl md:flex-[0.3] w-full md:w-auto md:ml-8">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
              <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Kontak Kami</h2>
                <hr>
                    <div class="text-gray-900 dark:text-gray-400 font-medium text-md my-5 mt-10">
                        <p><i class="fa-solid fa-location-dot"></i> Puskesmas Pasir Jati</p>
                    </div>
                    <div class="text-gray-900 dark:text-gray-400 font-medium text-sm">
                        <p>Jl Nagrog III RT.03 RW.08, Kelurahan Pasirjati, Kecamatan Ujungberung, Kota Bandung, 40616</p>
                    </div>
                    <div class="text-gray-900 dark:text-gray-400 font-medium text-md my-5">
                        <p><i class="fa-brands fa-whatsapp"></i> Whasapp : 0811-222-753</p>
                    </div>
                    <div class="text-gray-900 dark:text-gray-400 font-medium text-sm my-5">
                        <p><i class="fa-solid fa-envelope"></i> Email : uptpuskesmaspasirjati@gmail.com</p>
                    </div>
            </div>
        </section>
    </section>
    

  </x-layout>