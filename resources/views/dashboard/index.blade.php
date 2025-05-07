<x-main-dashboard></x-main-dashboard>
<div class="p-5">
    <div class="bg-gradient-to-br from-slate-800 via-slate-900 to-gray-800 rounded-2xl py-12 shadow-xl transition-all duration-300 hover:shadow-2xl">
        <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
            <p class="mx-auto max-w-lg text-center text-3xl font-bold tracking-tight text-white lg:text-5xl transition-transform duration-300 hover:scale-105">
                Selamat Datang
            </p>
            <p class="mx-auto max-w-lg text-center text-3xl font-bold tracking-tight text-white lg:text-5xl mt-4 transition-transform duration-300 hover:scale-105">
                {{ auth()->user()->name }}
            </p>
            <div class="mt-6 flex justify-center">
                <span class="inline-block h-2 w-24 bg-indigo-400 rounded-full animate-pulse"></span>
            </div>
        </div>
    </div>
</div>
<style>
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
    }
    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
</style>