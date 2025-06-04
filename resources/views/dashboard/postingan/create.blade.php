<x-main-dashboard></x-main-dashboard>
<div class="px-6 py-8 lg:px-20 bg-gray-100 min-h-screen">
    <div class="mb-6 mt-6 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Tambah Post</h1>
        <a href="/dashboard/postingan" class="bg-indigo-600 rounded-lg px-3 py-2 text-white hover:bg-indigo-700 transition-all duration-200 flex items-center space-x-2 shadow-sm hover:shadow-md">
            <i class="fa-solid fa-x"></i>
            <span class="text-sm">Kembali</span>
        </a>
    </div>
    <hr class="border-gray-300 mb-8">
    <form class="w-full" enctype="multipart/form-data" method="POST" action="/dashboard/postingan">
        @csrf
        <div class="mb-6">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
            <input type="text" id="title" name="title" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500 transition-all duration-200" placeholder="Masukkan judul post" required autofocus value="{{ old('title') }}"/>
        </div>
        <div class="mb-6">
            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
            <input type="text" id="slug" name="slug" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white cursor-not-allowed" readonly placeholder="Slug akan dihasilkan otomatis" required value="{{ old('slug') }}"/>
        </div>
        <div class="mb-6">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
            <select id="category_id" name="category_id" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500 transition-all duration-200">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Gambar</label>
            <div class="flex flex-col space-y-4">
                <div id="dropzone-upload" class="flex flex-col items-center justify-center w-full h-40 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-50 transition-all duration-200">
                    <div class="flex flex-col items-center justify-center pt-4 pb-4">
                        <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Klik untuk upload</span> atau drag and drop</p>
                        <p class="text-xs text-gray-500">PNG, JPG atau JPEG</p>
                    </div>
                </div>
                <div class="flex justify-center">
                    <img class="img-preview img-fluid my-4 max-h-64 max-w-md object-contain rounded-lg shadow-sm hidden" alt="Image preview">
                </div>
                <input type="file" id="image" name="image" class="hidden" accept="image/*" onchange="previewImage()">
            </div>
        </div>
        <div class="mb-6">
            <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
            <input type="hidden" id="body" name="body" value="{{ old('body') }}">
            <trix-editor input="body" class="bg-white border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white p-3"></trix-editor>
        </div>
        <button type="submit" class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-6 py-3 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 transition-all duration-200 shadow-sm hover:shadow-md">
            Tambah Post
        </button>
    </form>
</div>
<style>
    trix-editor {
        min-height: 200px;
        transition: all 0.2s ease;
    }
    trix-editor:focus-within {
        border-color: #4f46e5;
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
    }
    .img-preview:not(.hidden) {
        animation: fadeIn 0.5s ease-out;
    }
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.95);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }
    #dropzone-upload.drag-active {
        border-color: #4f46e5;
        background-color: #eef2ff;
    }
</style>
<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.classList.remove('hidden');
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        };
    }

    // Dropzone functionality
    const dropzone = document.getElementById('dropzone-upload');
    const imageInput = document.getElementById('image');

    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropzone.addEventListener(eventName, preventDefaults, false);
        document.body.addEventListener(eventName, preventDefaults, false);
    });

    ['dragenter', 'dragover'].forEach(eventName => {
        dropzone.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropzone.addEventListener(eventName, unhighlight, false);
    });

    function preventDefaults (e) {
        e.preventDefault();
        e.stopPropagation();
    }

    function highlight(e) {
        dropzone.classList.add('drag-active');
    }

    function unhighlight(e) {
        dropzone.classList.remove('drag-active');
    }

    dropzone.addEventListener('drop', handleDrop, false);
    dropzone.addEventListener('click', () => imageInput.click());

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;

        if (files.length > 0) {
            imageInput.files = files;
            previewImage();
        }
    }

    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/postingan/checkSlug?title=' + encodeURIComponent(title.value))
            .then(response => response.json())
            .then(data => slug.value = data.slug);
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    });
</script>