<nav x-data="{ isOpen: false }" class="sticky top-0 z-50 bg-white/90 backdrop-blur-lg shadow-lg border-b border-gray-200/20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-20 items-center justify-between">
        <!-- Logo and Desktop Navigation -->
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <a href="/" class="block relative group">
              <img class="h-16 w-auto rounded-xl transition-all duration-300 group-hover:shadow-lg" 
                src="{{ asset('img/logo pkm h.png') }}" alt="Puskesmas Logo">
              <div class="absolute inset-0 rounded-xl ring-2 ring-teal-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </a>
          </div>
          
          <!-- Desktop Navigation -->
          <div class="hidden md:block">
            <div class="ml-10 flex items-center space-x-4">
              <x-nav-link href="/" :active="request()->is('/')">
                <i class="fa-solid fa-home mr-2"></i>Beranda
              </x-nav-link>
              
              <x-nav-link href="/profil" :active="request()->is('profil')">
                <i class="fa-solid fa-building mr-2"></i>Profil
              </x-nav-link>
              
              <x-nav-link href="/postingan" :active="request()->is('postingan')">
                <i class="fa-solid fa-newspaper mr-2"></i>Postingan
              </x-nav-link>
              
              <x-nav-link href="/kontak" :active="request()->is('kontak')">
                <i class="fa-solid fa-envelope mr-2"></i>Kontak
              </x-nav-link>
              
              @auth
                <x-nav-link href="/dashboard" :active="request()->is('dashboard')">
                  <i class="fa-solid fa-gauge mr-2"></i>Dashboard
                </x-nav-link>
                
                <form action="/logout" method="POST" class="inline">
                  @csrf
                  <x-nav-link href="/logout" :active="request()->is('login')" 
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="fa-solid fa-right-from-bracket mr-2"></i>Logout
                  </x-nav-link>
                </form>
              @else
                <x-nav-link href="/login" :active="request()->is('login')">
                  <i class="fa-solid fa-right-to-bracket mr-2"></i>Login
                </x-nav-link>
              @endauth
            </div>
          </div>
        </div>

        <!-- Mobile menu button -->
        <div class="flex md:hidden">
          <button @click="isOpen = !isOpen" type="button" 
            class="relative inline-flex items-center justify-center p-2 rounded-xl text-gray-700 
            hover:bg-teal-50 hover:text-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 
            transition-all duration-300" 
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Toggle menu</span>
            
            <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="h-6 w-6" fill="none" viewBox="0 0 24 24" 
              stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            
            <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="h-6 w-6" fill="none" viewBox="0 0 24 24" 
              stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="isOpen" 
      x-transition:enter="transition ease-out duration-200"
      x-transition:enter-start="opacity-0 -translate-y-2"
      x-transition:enter-end="opacity-100 translate-y-0"
      x-transition:leave="transition ease-in duration-150"
      x-transition:leave-start="opacity-100 translate-y-0"
      x-transition:leave-end="opacity-0 -translate-y-2"
      class="md:hidden bg-white/90 backdrop-blur-lg border-t border-gray-200/20" 
      id="mobile-menu">
      <div class="space-y-2 px-4 py-4">
        <x-nav-link href="/" :active="request()->is('/')" class="flex items-center">
          <i class="fa-solid fa-home mr-2"></i>Beranda
        </x-nav-link>
        
        <x-nav-link href="/profil" :active="request()->is('profil')" class="flex items-center">
          <i class="fa-solid fa-building mr-2"></i>Profil
        </x-nav-link>
        
        <x-nav-link href="/postingan" :active="request()->is('postingan')" class="flex items-center">
          <i class="fa-solid fa-newspaper mr-2"></i>Postingan
        </x-nav-link>
        
        <x-nav-link href="/kontak" :active="request()->is('kontak')" class="flex items-center">
          <i class="fa-solid fa-envelope mr-2"></i>Kontak
        </x-nav-link>
        
        @auth
          <x-nav-link href="/dashboard" :active="request()->is('dashboard')" class="flex items-center">
            <i class="fa-solid fa-gauge mr-2"></i>Dashboard
          </x-nav-link>
          
          <form action="/logout" method="POST">
            @csrf
            <x-nav-link href="/logout" :active="request()->is('login')" 
              onclick="event.preventDefault(); this.closest('form').submit();" 
              class="flex items-center w-full">
              <i class="fa-solid fa-right-from-bracket mr-2"></i>Logout
            </x-nav-link>
          </form>
        @else
          <x-nav-link href="/login" :active="request()->is('login')" class="flex items-center">
            <i class="fa-solid fa-right-to-bracket mr-2"></i>Login
          </x-nav-link>
        @endauth
      </div>
    </div>
  </nav>