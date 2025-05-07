<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <!-- Main Container -->
  <div class="min-h-screen">
    <!-- Search Form -->
    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-6">
      <div class="mx-auto max-w-screen-md sm:text-center">
        <form>
          @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
          <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
            <div class="relative w-full">
              <label for="search" class="hidden mb-2 text-sm font-medium text-gray-800">Search</label>
              <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                </svg>
              </div>
              <input class="block p-3 pl-10 w-full text-sm text-gray-800 bg-white/90 backdrop-blur-lg rounded-lg border border-teal-500/50 focus:ring-teal-500 focus:border-teal-500 placeholder-gray-500" placeholder="Cari Postingan" name="search" type="search" id="search" autocomplete="off">
            </div>
            <div>
              <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border border-teal-500/50 bg-teal-500 hover:bg-teal-600 focus:ring-4 focus:ring-teal-300 transition-all duration-300">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    {{ $postingan->links() }}

    <!-- Blog Posts Grid -->
    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-0">
      <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2">
        @forelse ($postingan as $post)
        <article class="p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 hover:scale-105 transition-all duration-300 flex flex-col h-full">
          @if ($post->image)
          <img class="w-full h-64 object-cover rounded-lg border border-gray-200/20" src="{{ asset('storage/' . $post->image) }}" alt="" />
          @else
          <img class="w-full h-64 object-cover rounded-lg border border-gray-200/20" src="{{ asset('img/logo pkm h.png') }}" alt="" />
          @endif
          <div class="flex justify-between items-center py-5 text-gray-700">
            <a href="/postingan?category={{ $post->category->slug }}">
              <span class="bg-{{ $post->category->color }}-100 text-{{ $post->category->color }}-800 text-xs font-medium px-3 py-1 rounded-full dark:bg-{{ $post->category->color }}-200 dark:text-{{ $post->category->color }}-800 hover:bg-{{ $post->category->color }}-200 transition-colors duration-200">
                {{ $post->category->name }}
            </span>
            </a>
            <span class="text-xs items-center">{{ $post->created_at->diffForHumans() }}</span>
          </div>
          <a href="/postingan/{{ $post->slug }}" class="hover:underline">
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-800">{{ $post->title }}</h2>
          </a>
          <p class="mb-5 font-light text-gray-700 text-sm">{!! Str::limit($post->body, 100) !!}</p>
          <div class="mt-auto flex justify-between items-center">
            <a href="/postingan?author={{ $post->author->username }}">
              <div class="flex items-center space-x-4">
                <img class="w-7 h-7 rounded-full border border-teal-500/50" src="{{ asset('img/logo pkm.png') }}" alt="{{ $post->author->name }}" />
                <span class="font-medium text-sm text-gray-800">
                  {{ $post->author->name }}
                </span>
              </div>
            </a>
            <a href="/postingan/{{ $post->slug }}" class="text-sm inline-flex items-center font-medium text-teal-600 hover:text-teal-500 transition-colors duration-300">
              Selengkapnya
              <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </a>
          </div>
        </article>
        @empty
        <div>
          <p class="font-semibold text-xl my-4 text-gray-800">Postingan tidak ditemukan</p>
          <a href="/postingan" class="block text-teal-600 hover:text-teal-500 transition-colors duration-300">« Kembali ke Postingan</a>
        </div>
        @endforelse
      </div>
    </div>
  </div>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f0f4f8 0%, #e2e8f0 100%);
    }
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #e2e8f0;
    }
    ::-webkit-scrollbar-thumb {
      background: #38b2ac;
      border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #2c8c89;
    }
  </style>
</x-layout>