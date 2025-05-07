<x-main-dashboard></x-main-dashboard>
<div class="px-6 py-8 lg:px-20 bg-gray-100 min-h-screen">
    <div class="mb-6 mt-6 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Edit Post</h1>
        <a href="/dashboard/postingan" class="bg-indigo-600 rounded-lg px-3 py-2 text-white hover:bg-indigo-700 transition-all duration-200 flex items-center space-x-2 shadow-sm hover:shadow-md">
            <i class="fa-solid fa-x"></i>
            <span class="text-sm">Kembali</span>
        </a>
    </div>
    <hr class="border-gray-300 mb-8">
    <form class="w-full" method="POST" enctype="multipart/form-data" action="/dashboard/postingan/{{ $post->slug }}">
        @method('put')
        @csrf
        <div class="mb-6">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
            <input type="text" id="title" name="title" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500 transition-all duration-200" placeholder="Masukkan judul post" required autofocus value="{{ old('title', $post->title) }}"/>
        </div>
        <div class="mb-6">
            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
            <input type="text" id="slug" name="slug" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white cursor-not-allowed" readonly placeholder="Slug akan dihasilkan otomatis" required value="{{ old('slug', $post->slug) }}"/>
        </div>
        <div class="mb-6">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
            <select id="category_id" name="category_id" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500 transition-all duration-200">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Gambar</label>
            <input type="hidden" name="oldImage" value="{{ $post->image }}">
            <div class="flex items-center space-x-4">
                <button type="button" onclick="document.getElementById('image').click()" class="px-4 py-2 bg-indigo-600 text-white text-sm rounded-lg hover:bg-indigo-700 transition-all duration-200 shadow-sm hover:shadow-md">
                    Pilih Gambar
                </button>
                <span id="file_name" class="text-gray-500 text-sm">No file chosen</span>
            </div>
            <img src="{{ $post->image ? asset('storage/' . $post->image) : '' }}" class="img-preview img-fluid my-4 max-h-64 rounded-lg shadow-sm {{ $post->image ? '' : 'hidden' }}" alt="Image preview">
            <input type="file" id="image" name="image" class="hidden" accept="image/*" onchange="updateFileName(); previewImage();">
        </div>
        <div class="mb-6">
            <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
            <input type="hidden" id="body" name="body" value="{{ old('body', $post->body) }}">
            <trix-editor input="body" class="bg-white border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white p-3"></trix-editor>
        </div>
        <button type="submit" class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-6 py-3 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 transition-all duration-200 shadow-sm hover:shadow-md">
            Edit Post
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
</style>
<script>
    function updateFileName() {
        const input = document.getElementById('image');
        const fileName = input.files.length > 0 ? input.files[0].name : 'No file chosen';
        document.getElementById('file_name').textContent = fileName;
    }

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