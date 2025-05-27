<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <!-- Main Container -->
  <div class="min-h-screen">
    <!-- Search Form -->
    <div class="py-8 mx-auto max-w-screen-xl">
      <div class="mx-auto max-w-screen-md text-center">
        <h1 class="text-4xl font-extrabold text-gray-800 mb-6">Postingan Terbaru</h1>
        <div class="w-24 h-1 bg-teal-500 mx-auto rounded-full mb-8"></div>

        @if(request('search') || request('category') || request('author'))
        <div class="mb-6 flex flex-wrap items-center justify-center gap-2">
          @if(request('search'))
          <div class="inline-flex items-center px-3 py-1 rounded-lg bg-teal-50 text-teal-700 text-sm">
            <span class="mr-2">Pencarian:</span>
            <span class="font-medium">{{ request('search') }}</span>
          </div>
          @endif
          
          @if(request('category'))
          <div class="inline-flex items-center px-3 py-1 rounded-lg bg-blue-50 text-blue-700 text-sm">
            <span class="mr-2">Kategori:</span>
            <span class="font-medium">{{ request('category') }}</span>
          </div>
          @endif
          
          @if(request('author'))
          <div class="inline-flex items-center px-3 py-1 rounded-lg bg-purple-50 text-purple-700 text-sm">
            <span class="mr-2">Penulis:</span>
            <span class="font-medium">{{ request('author') }}</span>
          </div>
          @endif
        </div>
        @endif

        <form class="relative">
          @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
          <div class="items-center mx-auto mb-6 space-y-4 max-w-screen-sm sm:flex sm:space-y-0 sm:space-x-4">
            <div class="relative w-full">
              <label for="search" class="hidden mb-2 text-sm font-medium text-gray-800">Search</label>
              <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                </svg>
              </div>
              <input class="block p-4 pl-10 w-full text-sm text-gray-800 bg-white/90 backdrop-blur-lg rounded-xl border border-teal-500/30 focus:ring-teal-500 focus:border-teal-500 placeholder-gray-500 shadow-lg transition-all duration-300" placeholder="Cari Postingan..." name="search" type="search" id="search" value="{{ request('search') }}" autocomplete="off">
            </div>
            <div class="flex space-x-2">
              <button type="submit" class="py-4 px-6 text-sm font-medium text-white rounded-xl border border-teal-500/30 bg-teal-500 hover:bg-teal-600 focus:ring-4 focus:ring-teal-300 shadow-lg hover:shadow-xl transition-all duration-300">
                <span class="flex items-center justify-center">
                  <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                  </svg>
                  Cari
                </span>
              </button>
              @if(request('search') || request('category') || request('author'))
              <a href="/postingan" class="inline-flex items-center justify-center py-4 px-6 text-sm font-medium text-teal-700 rounded-xl border border-teal-500/30 bg-white hover:bg-teal-50 focus:ring-4 focus:ring-teal-300 shadow-lg hover:shadow-xl transition-all duration-300">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                Reset
              </a>
              @endif
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Pagination -->
    <div class="max-w-screen-xl mx-auto mb-8">
      {{ $postingan->links() }}
    </div>

    <!-- Blog Posts Grid -->
    <div class="py-4 mx-auto max-w-screen-xl lg:py-8">
      <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2">
        @forelse ($postingan as $post)
        <article class="group bg-white/90 backdrop-blur-lg rounded-2xl shadow-lg border border-gray-200/20 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 flex flex-col h-full overflow-hidden animate-fade-in">
          <div class="relative overflow-hidden">
            @if ($post->image)
            <img class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105" src="{{ asset('storage/' . $post->image) }}" alt="" />
            @else
            <img class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105" src="{{ asset('img/logo pkm h.png') }}" alt="" />
            @endif
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </div>
          
          <div class="p-6 flex flex-col flex-grow">
            <div class="flex justify-between items-center mb-4">
              <a href="/postingan?category={{ $post->category->slug }}" class="transform hover:scale-105 transition-transform duration-300">
                <span class="bg-{{ $post->category->color }}-100 text-{{ $post->category->color }}-800 text-xs font-medium px-3 py-1.5 rounded-full hover:bg-{{ $post->category->color }}-200 transition-colors duration-300">
                  {{ $post->category->name }}
                </span>
              </a>
              <span class="text-xs text-gray-600">{{ $post->created_at->diffForHumans() }}</span>
            </div>
            
            <a href="/postingan/{{ $post->slug }}" class="group-hover:text-teal-600 transition-colors duration-300">
              <h2 class="mb-3 text-2xl font-bold tracking-tight text-gray-800">{{ $post->title }}</h2>
            </a>
            
            <p class="mb-5 font-light text-gray-600 text-sm flex-grow">{!! Str::limit($post->body, 100) !!}</p>
            
            <div class="flex justify-between items-center pt-4 border-t border-gray-200/50">
              <a href="/postingan?author={{ $post->author->username }}" class="flex items-center space-x-3 group/author">
                <div class="relative">
                  <img class="w-8 h-8 rounded-full border-2 border-teal-500/30 transition-transform duration-300 group-hover/author:scale-110" src="{{ asset('img/logo pkm.png') }}" alt="{{ $post->author->name }}" />
                  <div class="absolute inset-0 rounded-full ring-2 ring-teal-500/30 ring-offset-2 ring-offset-white opacity-0 group-hover/author:opacity-100 transition-opacity duration-300"></div>
                </div>
                <span class="font-medium text-sm text-gray-800 group-hover/author:text-teal-600 transition-colors duration-300">
                  {{ $post->author->name }}
                </span>
              </a>
              <a href="/postingan/{{ $post->slug }}" class="inline-flex items-center text-sm font-medium text-teal-600 hover:text-teal-500 transition-colors duration-300">
                Selengkapnya
                <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
              </a>
            </div>
          </div>
        </article>
        @empty
        <div class="col-span-full text-center py-12">
          <div class="bg-white/90 backdrop-blur-lg rounded-2xl p-8 shadow-lg border border-gray-200/20 max-w-md mx-auto">
            <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <p class="text-xl font-semibold text-gray-800 mb-4">Postingan tidak ditemukan</p>
            <a href="/postingan" class="inline-flex items-center text-teal-600 hover:text-teal-500 transition-colors duration-300">
              <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
              </svg>
              Kembali ke Postingan
            </a>
          </div>
        </div>
        @endforelse
      </div>
    </div>
  </div>

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