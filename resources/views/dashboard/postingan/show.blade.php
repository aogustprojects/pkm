<x-main-dashboard></x-main-dashboard>
<div class="px-6 lg:px-20 bg-gray-100 min-h-screen">
    <main class="pt-8 pb-16 lg:pt-12 lg:pb-24 bg-white dark:bg-gray-900 rounded-xl shadow-sm">
        <div class="mx-auto max-w-screen-xl px-4">
            <article class="mx-auto w-full max-w-4xl">
                <header class="mb-6 lg:mb-8">
                    <a href="/dashboard/postingan" class="inline-flex items-center text-sm font-medium text-indigo-600 hover:text-indigo-800 hover:underline transition-colors duration-200">
                        <i class="fa-solid fa-arrow-left mr-2"></i> Kembali ke Postingan
                    </a>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-12 h-12 rounded-full border border-gray-200 shadow-sm" src="{{ asset('img/logo pkm.png') }}" alt="{{ $post->author->name }}">
                            <div>
                                <a href="/postingan?author={{ $post->author->username }}" rel="author" class="text-lg font-semibold text-gray-900 dark:text-white hover:text-indigo-600 transition-colors duration-200">{{ $post->author->name }}</a>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">{{ $post->created_at->diffForHumans() }}</p>
                                <a href="/postingan?category={{ $post->category->slug }}" class="inline-flex items-center">
                                    <span class="bg-{{ $post->category->color }}-100 text-{{ $post->category->color }}-800 text-xs font-medium px-3 py-1 rounded-full dark:bg-{{ $post->category->color }}-200 dark:text-{{ $post->category->color }}-800 hover:bg-{{ $post->category->color }}-200 transition-colors duration-200">
                                        {{ $post->category->name }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </address>
                    @if ($post->image)
                        <div class="mb-6">
                            <img class="w-full h-auto max-h-96 object-cover rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" />
                        </div>
                    @endif
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:text-4xl dark:text-white animate-fade-in">{{ $post->title }}</h1>
                </header>
                <div id="item-view" class="prose prose-gray max-w-none dark:prose-invert">
                    {!! $post->body !!}
                </div>
            </article>
        </div>
    </main>
</div>
<style>
    .prose {
        line-height: 1.75;
    }
    .prose img {
        border-radius: 0.5rem;
        margin: 1rem 0;
    }
    .prose p {
        margin-bottom: 1.25rem;
    }
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .animate-fade-in {
        animation: fadeIn 0.5s ease-out;
    }
</style>