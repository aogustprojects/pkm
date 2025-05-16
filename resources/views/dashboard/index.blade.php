<x-main-dashboard></x-main-dashboard>
<div class="px-6 py-8 bg-gray-100 min-h-screen">
    <div class="bg-gradient-to-br from-indigo-900 via-gray-900 to-indigo-800 rounded-2xl py-12 shadow-xl transition-all duration-300 hover:shadow-2xl">
        <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
            <p class="mx-auto max-w-lg text-center text-3xl font-bold tracking-tight text-white lg:text-5xl transition-transform duration-300 hover:scale-105">
                Selamat Datang
            </p>
            <p class="mx-auto max-w-lg text-center text-3xl font-bold tracking-tight text-indigo-300 lg:text-5xl mt-4 transition-transform duration-300 hover:scale-105">
                {{ auth()->user()->name }}
            </p>
            <div class="mt-6 flex justify-center">
                <span class="inline-block h-2 w-24 bg-indigo-400 rounded-full animate-pulse"></span>
            </div>
        </div>
    </div>
    <div class="mt-8 flex flex-col sm:flex-row gap-6 justify-center">
        <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-md shadow-black/10 w-full md:w-[45vw] md:max-w-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
            <div class="flex justify-between mb-4">
                <div>
                    <div class="flex items-center mb-2">
                        <div class="text-4xl font-semibold text-gray-900 transition-transform duration-300 hover:scale-110">{{ $postCount }}</div>
                    </div>
                    <div class="text-sm font-medium text-gray-500">Postingan Minggu Ini</div>
                </div>
            </div>
            <a href="/dashboard/postingan" class="text-indigo-600 font-medium text-sm hover:text-indigo-800 transition-colors duration-200">Lihat</a>
        </div>
        <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-md shadow-black/10 w-full md:w-[45vw] md:max-w-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
            <div class="flex justify-between mb-4">
                <div>
                    <div class="flex items-center mb-2">
                        <div class="text-4xl font-semibold text-gray-900 transition-transform duration-300 hover:scale-110">{{ $poliGigiCount }}</div>
                    </div>
                    <div class="text-sm font-medium text-gray-500">Pasien Poli Gigi Hari Ini</div>
                </div>
            </div>
            <a href="/dashboard/poli-gigi" class="text-indigo-600 font-medium text-sm hover:text-indigo-800 transition-colors duration-200">Lihat</a>
        </div>
    </div>
</div>
<style>
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.6;
        }
    }
    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
</style>