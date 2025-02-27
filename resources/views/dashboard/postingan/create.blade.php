<x-main-dashboard></x-main-dashboard>
<div class="px-20">
    <div class="mb-5 mt-5 flex justify-between">
        <h1 for="title" class="block mb-2 text-4xl font-bold text-gray-900 dark:text-white">Tambah Post</h1>
        <a href="/dashboard/postingan" class="bg-blue-700 rounded-lg px-2 py-3 text-center text-sm text-white hover:bg-blue-900 hover:text-white"><i class="fa-solid fa-x px-2 text-2xl"></i></a>
    </div>
    <hr>
    <form class="w-full mt-5" enctype="multipart/form-data" method="POST" action="/dashboard/postingan">
        @csrf
    <div class="mb-5">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
        <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required autofocus value="{{ old('title') }}"/>
    </div>
    <div class="mb-5">
        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
        <input type="text" id="slug" name="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly placeholder="" required value="{{ old('slug') }}"/>
    </div>
    <div class="mb-5">
        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
        <select id="category_id" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach ($categories as $category)
                @if(old('category') == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
            @endforeach
          </select>
    </div>
    <div class="mb-5">
        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Upload Gambar
        </label>
        <div class="flex items-center space-x-2">
            <button type="button" onclick="document.getElementById('image').click()" class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg cursor-pointer hover:bg-blue-700">
                Choose File
            </button>
            <span id="file_name" class="text-gray-500">No file chosen</span>
        </div>
        <img class="img-preview img-fluid my-3 max-h-64">
        <input type="file" id="image" name="image" class="hidden" required onchange="updateFileName(); previewImage();">
        
        <script>
            function updateFileName() {
                const input = document.getElementById('image');
                const fileName = input.files.length > 0 ? input.files[0].name : 'No file chosen';
                document.getElementById('file_name').textContent = fileName;
            }

            function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFReader) {
                imgPreview.src = oFReader.target.result;
            }
            }
        </script>
    </div>
    <div class="mb-5">
        <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
        <input type="hidden" id="body" name="body" value="{{ old('body') }}">
        <trix-editor input="body"></trix-editor>
    </div>
    <button type="submit" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-10">Tambah Post</button>
    </form>

    <script>
        const title = document.querySelector ('#title');
        const slug = document.querySelector ('#slug');

        title.addEventListener('change', function(){
            fetch('/dashboard/postingan/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        const trixElement = document.querySelector("trix-editor");
        const htmlContent = trixElement.editor.getDocument().toString(); 
        document.querySelector("#item-view").innerHTML = htmlContent;
    </script>