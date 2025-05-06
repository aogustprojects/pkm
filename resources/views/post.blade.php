<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 min-h-screen">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
      <article class="mx-auto w-full max-w-4xl bg-white/10 backdrop-blur-lg rounded-xl shadow-lg border border-white/20 p-6">
        <header class="mb-4 lg:mb-6">
          <a href="/postingan" class="font-medium text-sm text-teal-400 hover:text-teal-300 transition-colors duration-300">« Kembali ke Postingan</a>
          <address class="flex items-center my-6">
            <div class="inline-flex items-center mr-3 text-sm text-white">
              <img class="mr-4 w-16 h-16 rounded-full border border-teal-500/50" src="{{ asset('img/logo pkm.png') }}" alt="{{ $post->author->name }}">
              <div>
                <a href="/postingan?author={{ $post->author->username }}" rel="author" class="text-xl font-bold text-white hover:text-teal-400 transition-colors duration-300">{{ $post->author->name }}</a>
                <p class="text-sm text-white/80 mb-1">{{ $post->created_at->diffForHumans() }}</p>
                <a href="/postingan?category={{ $post->category->slug }}">
                  <span class="bg-teal-500/20 text-teal-400 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded hover:bg-teal-500/30 transition-all duration-300">
                    {{ $post->category->name }}
                  </span>
                </a>
              </div>
            </div>
          </address>
          <a href="#">
            <img class="mb-5 w-full object-cover rounded-lg border border-white/20" src="{{ asset('storage/' . $post->image) }}" alt="" />
          </a>
          <h1 class="mb-4 text-3xl font-extrabold leading-tight text-white lg:mb-6 lg:text-4xl">{{ $post->title }}</h1>
        </header>
        <div class="text-white/90 leading-relaxed">{!! $post->body !!}</div>
      </article>
    </div>
  </main>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
    }
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #1a1a2e;
    }
    ::-webkit-scrollbar-thumb {
      background: #00d4ff;
      border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #00b7d4;
    }
  </style>
</x-layout>