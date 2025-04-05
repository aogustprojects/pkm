<x-main-dashboard></x-main-dashboard>
<div class="px-20">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="mb-5 mt-5 flex justify-between">
        <h1 class="block mb-2 text-4xl font-bold text-gray-900 dark:text-white">Edit Surat Masuk</h1>
        <a href="/dashboard/arsip_surat_masuk" class="bg-blue-700 rounded-lg px-2 py-3 text-center text-sm text-white hover:bg-blue-900 hover:text-white"><i class="fa-solid fa-x px-2 text-2xl"></i></a>
    </div>
    <hr>

    <form class="w-full mt-5" enctype="multipart/form-data" method="POST" action="/dashboard/arsip_surat_masuk/{{ $arsipSuratMasuk->id }}">
        @csrf
        @method('PUT') <!-- Method to indicate it's an update -->

        <!-- Tanggal Terima -->
        <div class="mb-5 flex space-x-4">
            <div class="w-1/2">
                <label for="tanggal_terima" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Terima</label>
                <input type="date" id="tanggal_terima" name="tanggal_terima" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{ old('tanggal_terima', $arsipSuratMasuk->tanggal_terima) }}"/>
            </div>

            <!-- Tanggal Surat -->
            <div class="w-1/2">
                <label for="tanggal_surat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Surat</label>
                <input type="date" id="tanggal_surat" name="tanggal_surat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{ old('tanggal_surat', $arsipSuratMasuk->tanggal_surat) }}"/>
            </div>
        </div>

        <!-- Nomor Surat -->
        <div class="mb-5">
            <label for="nomor_surat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Surat</label>
            <input type="text" id="nomor_surat" name="nomor_surat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{ old('nomor_surat', $arsipSuratMasuk->nomor_surat) }}"/>
        </div>

        <!-- Pengirim -->
        <div class="mb-5">
            <label for="pengirim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pengirim</label>
            <input type="text" id="pengirim" name="pengirim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{ old('pengirim', $arsipSuratMasuk->pengirim) }}"/>
        </div>

        <!-- Perihal -->
        <div class="mb-5">
            <label for="perihal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perihal</label>
            <input type="text" id="perihal" name="perihal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{ old('perihal', $arsipSuratMasuk->perihal) }}"/>
        </div>

        <!-- Diteruskan Kepada -->
        <div class="mb-5">
            <label for="diteruskan_kepada" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diteruskan Kepada</label>
            <input type="text" id="diteruskan_kepada" name="diteruskan_kepada" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{ old('diteruskan_kepada', $arsipSuratMasuk->diteruskan_kepada) }}"/>
        </div>

        <!-- Lampiran -->
        <div class="mb-5">
            <label for="lampiran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lampiran</label>
            <input type="text" id="lampiran" name="lampiran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{ old('lampiran', $arsipSuratMasuk->lampiran) }}"/>
        </div>

        <!-- Keterangan -->
        <div class="mb-5">
            <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
            <select id="keterangan" name="keterangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="biasa" {{ old('keterangan', $arsipSuratMasuk->keterangan) == 'biasa' ? 'selected' : '' }}>Biasa</option>
                <option value="segera" {{ old('keterangan', $arsipSuratMasuk->keterangan) == 'segera' ? 'selected' : '' }}>Segera</option>
            </select>
        </div>

        <!-- Document (File Upload) -->
        <div class="mb-5">
            <label for="document" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload File (Document)</label>
            <div class="flex items-center space-x-2">
                <button type="button" onclick="openFileDialog()" class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg cursor-pointer hover:bg-blue-700">
                    Choose File
                </button>
                <span id="file_name" class="text-gray-500">{{ $arsipSuratMasuk->document ? basename(storage_path('app/public/' . $arsipSuratMasuk->document)) : 'No file chosen' }}</span>
            </div>

            <!-- Hidden file input -->
            <input type="file" id="document" name="document" class="hidden" accept=".pdf,.doc,.docx,.txt" onchange="updateFileName(); previewFile();">
        </div>

        <button type="submit" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-10">Update Post</button>
    </form>
</div>
