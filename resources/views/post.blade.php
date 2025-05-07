<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 min-h-screen">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
      <article class="mx-auto w-full max-w-4xl bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 p-6">
        <header class="mb-4 lg:mb-6">
          <a href="/postingan" class="font-medium text-sm text-teal-600 hover:text-teal-500 transition-colors duration-300">« Kembali ke Postingan</a>
          <div class="flex items-center my-6 font-normal">
            <div class="inline-flex items-center mr-3 text-sm text-gray-800">
              <img class="mr-4 w-16 h-16 rounded-full border border-teal-500/50" src="{{ asset('img/logo pkm.png') }}" alt="{{ $post->author->name }}">
              <div>
                <a href="/postingan?author={{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-800 hover:text-teal-600 transition-colors duration-300">{{ $post->author->name }}</a>
                <p class="text-sm text-gray-600 mb-1">{{ $post->created_at->diffForHumans() }}</p>
                <a href="/postingan?category={{ $post->category->slug }}">
                  <span class="bg-{{ $post->category->color }}-100 text-{{ $post->category->color }}-800 text-xs font-medium px-3 py-1 rounded-full dark:bg-{{ $post->category->color }}-200 dark:text-{{ $post->category->color }}-800 hover:bg-{{ $post->category->color }}-200 transition-colors duration-200">
                    {{ $post->category->name }}
                </span>
                </a>
              </div>
            </div>
          </div>
          <a href="#">
            <img class="mb-5 w-full object-cover rounded-lg border border-gray-200/20" src="{{ asset('storage/' . $post->image) }}" alt="" />
          </a>
          <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-800 lg:mb-6 lg:text-4xl">{{ $post->title }}</h1>
        </header>
        <div class="text-gray-700 leading-relaxed">{!! $post->body !!}</div>
      </article>
    </div>
  </main>

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