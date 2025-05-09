<x-main-dashboard></x-main-dashboard>
<div class="px-6 py-8 lg:px-20 bg-gray-100 min-h-screen">
    @if ($errors->any())
        <div class="mb-6 p-4 bg-red-500 text-white rounded-lg flex items-center space-x-2 animate-slide-in">
            <i class="fa-solid fa-exclamation-circle"></i>
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="mb-6 mt-6 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Tambah Kegiatan</h1>
        <a href="/dashboard/kegiatan" class="bg-indigo-600 rounded-lg px-3 py-2 text-white hover:bg-indigo-700 transition-all duration-200 flex items-center space-x-2 shadow-sm hover:shadow-md">
            <i class="fa-solid fa-x"></i>
            <span class="text-sm">Kembali</span>
        </a>
    </div>
    <hr class="border-gray-300 mb-8">
    <form class="w-full" enctype="multipart/form-data" method="POST" action="/dashboard/kegiatan">
        @csrf
        <div class="mb-6">
            <label for="nama_kegiatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kegiatan</label>
            <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500 transition-all duration-200" placeholder="Masukkan nama kegiatan" required value="{{ old('nama_kegiatan') }}"/>
        </div>
        <div class="mb-6">
            <label for="pj_kegiatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PJ Kegiatan</label>
            <input type="text" id="pj_kegiatan" name="pj_kegiatan" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500 transition-all duration-200" placeholder="Masukkan nama penanggung jawab" required value="{{ old('pj_kegiatan') }}"/>
        </div>
        <button type="submit" class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-6 py-3 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 transition-all duration-200 shadow-sm hover:shadow-md">
            Tambah Kegiatan
        </button>
    </form>
</div>
<style>
    @keyframes slideIn {
        from {
            transform: translateX(-20px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    .animate-slide-in {
        animation: slideIn 0.5s ease-out;
    }
</style>