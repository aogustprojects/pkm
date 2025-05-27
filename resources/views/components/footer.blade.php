<footer class="bg-white/90 backdrop-blur-lg border-t border-gray-200/20 shadow-lg">
    <div class="mx-auto w-full max-w-screen-xl px-4 py-12">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-3">
            <!-- Quick Links -->
            <div class="animate-fade-in" style="--delay: 0.1s">
                <h2 class="relative mb-6 text-lg font-bold text-gray-800 flex items-center">
                    <span class="absolute -left-4 h-full w-1 bg-teal-500 rounded-full"></span>
                    Menu Utama
                </h2>
                <ul class="space-y-4">
                    <li>
                        <a href="/" class="group flex items-center text-gray-600 hover:text-teal-600 transition-colors duration-300">
                            <i class="fa-solid fa-home w-5 h-5 mr-2 transform group-hover:scale-110 transition-transform duration-300"></i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="/profil" class="group flex items-center text-gray-600 hover:text-teal-600 transition-colors duration-300">
                            <i class="fa-solid fa-building w-5 h-5 mr-2 transform group-hover:scale-110 transition-transform duration-300"></i>
                            <span>Profil</span>
                        </a>
                    </li>
                    <li>
                        <a href="/postingan" class="group flex items-center text-gray-600 hover:text-teal-600 transition-colors duration-300">
                            <i class="fa-solid fa-newspaper w-5 h-5 mr-2 transform group-hover:scale-110 transition-transform duration-300"></i>
                            <span>Postingan</span>
                        </a>
                    </li>
                    <li>
                        <a href="/kontak" class="group flex items-center text-gray-600 hover:text-teal-600 transition-colors duration-300">
                            <i class="fa-solid fa-envelope w-5 h-5 mr-2 transform group-hover:scale-110 transition-transform duration-300"></i>
                            <span>Kontak</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="animate-fade-in" style="--delay: 0.2s">
                <h2 class="relative mb-6 text-lg font-bold text-gray-800 flex items-center">
                    <span class="absolute -left-4 h-full w-1 bg-teal-500 rounded-full"></span>
                    Informasi Kontak
                </h2>
                <div class="space-y-4">
                    <div class="group">
                        <div class="flex items-start space-x-3 text-gray-600">
                            <i class="fa-solid fa-location-dot w-5 h-5 mt-1 transform group-hover:scale-110 transition-transform duration-300 text-teal-500"></i>
                            <p class="text-sm leading-relaxed">
                                Jl Nagrog III RT.03 RW.08, Kelurahan Pasirjati, Kecamatan Ujungberung, Kota Bandung, 40616
                            </p>
                        </div>
                    </div>
                    <a href="https://wa.me/+62811222753" target="_blank" 
                        class="group flex items-center space-x-3 text-gray-600 hover:text-teal-600 transition-colors duration-300">
                        <i class="fa-brands fa-whatsapp w-5 h-5 transform group-hover:scale-110 transition-transform duration-300 text-teal-500"></i>
                        <span class="text-sm">WhatsApp: 0811-222-753</span>
                    </a>
                    <a href="mailto:uptpuskesmaspasirjati@gmail.com" 
                        class="group flex items-center space-x-3 text-gray-600 hover:text-teal-600 transition-colors duration-300">
                        <i class="fa-solid fa-envelope w-5 h-5 transform group-hover:scale-110 transition-transform duration-300 text-teal-500"></i>
                        <span class="text-sm">uptpuskesmaspasirjati@gmail.com</span>
                    </a>
                </div>
            </div>

            <!-- Map Location -->
            <div class="animate-fade-in" style="--delay: 0.3s">
                <h2 class="relative mb-6 text-lg font-bold text-gray-800 flex items-center">
                    <span class="absolute -left-4 h-full w-1 bg-teal-500 rounded-full"></span>
                    Lokasi Kami
                </h2>
                <div class="relative overflow-hidden rounded-xl shadow-lg border border-gray-200/20 hover:shadow-xl transition-all duration-300">
                    <div class="relative pb-[56.25%] h-0">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.840474421227!2d107.70859399999999!3d-6.909670299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dda315c6857d%3A0x956354f543e70654!2sUpt%20Puskesmas%20Pasirjati!5e0!3m2!1sen!2sid!4v1738386862605!5m2!1sen!2sid"
                            class="absolute top-0 left-0 w-full h-full border-0 rounded-xl"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="mt-12 pt-8 border-t border-gray-200/20">
            <div class="flex flex-col items-center justify-between space-y-4 md:flex-row md:space-y-0">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('img/logo pkm h.png') }}" alt="Logo Puskesmas" class="h-8 w-auto rounded-lg">
                    <p class="text-sm text-gray-600">
                        © {{ date('Y') }} <span class="font-semibold">UPTD Puskesmas Pasir Jati</span>. All Rights Reserved.
                    </p>
                </div>
                
                <div class="flex items-center space-x-4">
                    {{-- <a href="#" class="group p-2 rounded-full bg-gray-100 hover:bg-teal-50 transition-colors duration-300">
                        <i class="fa-brands fa-facebook text-gray-600 group-hover:text-teal-600 transition-colors duration-300"></i>
                    </a> --}}
                    <a href="https://www.instagram.com/puskesmas_pasirjati/" target="_blank" class="group p-2 rounded-full bg-gray-100 hover:bg-teal-50 transition-colors duration-300">
                        <i class="fa-brands fa-instagram text-gray-600 group-hover:text-teal-600 transition-colors duration-300"></i>
                    </a>
                    {{-- <a href="#" class="group p-2 rounded-full bg-gray-100 hover:bg-teal-50 transition-colors duration-300"> --}}
                        {{-- <i class="fa-brands fa-youtube text-gray-600 group-hover:text-teal-600 transition-colors duration-300"></i> --}}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .animate-fade-in {
            opacity: 0;
            animation: fadeIn 0.6s ease-out forwards;
            animation-delay: var(--delay, 0s);
        }

        @keyframes fadeIn {
            from { 
                opacity: 0;
                transform: translateY(20px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</footer>
