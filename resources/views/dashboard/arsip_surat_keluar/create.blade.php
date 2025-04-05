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
        <h1 class="block mb-2 text-4xl font-bold text-gray-900 dark:text-white">Tambah Surat Keluar</h1>
        <a href="/dashboard/arsip_surat_keluar" class="bg-blue-700 rounded-lg px-2 py-3 text-center text-sm text-white hover:bg-blue-900 hover:text-white"><i class="fa-solid fa-x px-2 text-2xl"></i></a>
    </div>
    <hr>
    <form class="w-full mt-5" enctype="multipart/form-data" method="POST" action="/dashboard/arsip_surat_keluar">
        @csrf
        <div class="mb-5 flex space-x-4">
        
            <!-- Tanggal Surat -->
            <div class="w-1/2">
                <label for="tanggal_surat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Surat</label>
                <input type="date" id="tanggal_surat" name="tanggal_surat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required autofocus value="{{ old('tanggal_surat') }}"/>
            </div>
        </div>
    <div class="mb-5">
        <label for="nomor_surat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Surat</label>
        <input type="text" id="nomor_surat" name="nomor_surat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="" required value="{{ old('nomor_surat') }}"/>
    </div>
    <div class="mb-5">
        <label for="pengirim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pengirim</label>
        <input type="text" id="pengirim" name="pengirim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="" required value="{{ old('pengirim') }}"/>
    </div>
    <div class="mb-5">
        <label for="perihal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perihal</label>
        <input type="text" id="perihal" name="perihal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="" required value="{{ old('perihal') }}"/>
    </div>
    <div class="mb-5">
        <label for="dikirim_kepada" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dikirim Kepada</label>
        <input type="text" id="dikirim_kepada" name="dikirim_kepada" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="" required value="{{ old('diteruskan_kepada') }}"/>
    </div>
    <div class="mb-5">
        <label for="perihal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lampiran</label>
        <input type="text" id="lampiran" name="lampiran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="" required value="{{ old('lampiran') }}"/>
    </div>
    <div class="mb-5">
        <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
        <select id="keterangan" name="keterangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="" selected> </option>
                <option value="biasa">Biasa</option>
                <option value="segera">Segera</option>
          </select>
    </div>
    <div class="mb-5">
        <label for="document" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Upload File (Document)
        </label>
        <div class="flex items-center space-x-2">
            <!-- Trigger button to open the file input -->
            <button type="button" onclick="openFileDialog()" class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg cursor-pointer hover:bg-blue-700">
                Choose File
            </button>
            <span id="file_name" class="text-gray-500">No file chosen</span>
        </div>
        
        
        <!-- Hidden file input -->
        <input type="file" id="document" name="document" class="hidden" accept=".pdf,.doc,.docx,.txt" required onchange="updateFileName(); previewFile();">
    </div>
    
    <script>
        // Function to trigger the file input click event
        function openFileDialog() {
            console.log('Button clicked'); // Debugging: Check if the button triggers
            document.getElementById('document').click();
        }
    
        // Function to update the file name display when a file is selected
        function updateFileName() {
            const input = document.getElementById('document');
            const fileName = input.files.length > 0 ? input.files[0].name : 'No file chosen';
            document.getElementById('file_name').textContent = fileName;
        }
    
        // Function to display file information (name, type, size) when selected
        function previewFile() {
            const fileInput = document.querySelector('#document');
            const fileInfo = document.querySelector('#file-info');
            const filePreview = document.querySelector('#file-preview');
    
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                fileInfo.textContent = file.name + " (" + file.type + ", " + (file.size / 1024).toFixed(2) + " KB)";
                filePreview.style.display = 'block';
            }
        }
    </script>

    <button type="submit" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-10">Tambah Post</button>
    </form>