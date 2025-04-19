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
        <h1 class="block mb-2 text-4xl font-bold text-gray-900 dark:text-white">Tambah Kegiatan </h1>
        <a href="/dashboard/kegiatan" class="bg-blue-700 rounded-lg px-2 py-3 text-center text-sm text-white hover:bg-blue-900 hover:text-white"><i class="fa-solid fa-x px-2 text-2xl"></i></a>
    </div>
    <hr>
    <form class="w-full mt-5" enctype="multipart/form-data" method="POST" action="/dashboard/kegiatan">
        @csrf

    <div class="mb-5">
        <label for="nama_kegiatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kegiatan</label>
        <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="" required value="{{ old('nama_kegiatan') }}"/>
    </div>
    <div class="mb-5">
        <label for="pj_kegiatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PJ Kegiatan</label>
        <input type="text" id="pj_kegiatan" name="pj_kegiatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="" required value="{{ old('pj_kegiatan') }}"/>
    </div>

    <button type="submit" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-10">Tambah Post</button>
    </form>