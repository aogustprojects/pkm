<x-main-dashboard></x-main-dashboard>
<div class="px-4 py-6 bg-gray-100 min-h-screen">
    <div class="grid lg:grid-cols-1 py-6 px-6">
        <div class="relative lg:row-span-2">
            <div class="relative max-lg:row-start-1">
                <div class="absolute inset-px rounded-xl shadow-lg border bg-white"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-xl bg-white">
                    <div class="px-8 py-8 sm:px-10 sm:pt-10">
                        @if (session('success'))
                        <div class="mb-6 p-4 bg-green-500 text-white rounded-lg flex items-center space-x-2 animate-slide-in">
                            <i class="fa-solid fa-check-circle"></i>
                            <span><strong>Sukses!</strong> {{ session('success') }}</span>
                        </div>
                        @endif
                        <div class="flex justify-between items-center mb-6">
                            <p class="text-2xl font-semibold tracking-tight text-gray-900 max-lg:text-center">List Postingan</p>
                            <a href="/dashboard/postingan/create" class="bg-indigo-600 rounded-lg px-4 py-2 text-sm text-white font-medium hover:bg-indigo-700 transition-all duration-200 shadow-sm hover:shadow-md">
                                Tambah Post
                            </a>
                        </div>
                        <div class="relative overflow-x-auto shadow-md rounded-lg">
                            <table class="w-full text-sm text-left text-gray-600">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-4 text-center">No</th>
                                        <th scope="col" class="px-6 py-4">Judul</th>
                                        <th scope="col" class="px-6 py-4">Kategori</th>
                                        <th scope="col" class="px-6 py-4 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($postingan as $post)
                                    <tr class="bg-white border-b border-gray-200 hover:bg-gray-50 transition-colors duration-150">
                                        <th scope="row" class="px-6 py-4 font-medium text-center text-gray-900">
                                            {{ $loop->iteration }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $post->title }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $post->category->name ?? 'Kategori tidak ada' }}
                                        </td>
                                        <td class="px-6 py-4 flex justify-center items-center space-x-3">
                                            <a href="/dashboard/postingan/{{ $post->slug }}" class="group">
                                                <span class="inline-flex items-center bg-gray-100 px-2.5 py-2.5 rounded-lg border border-gray-200 group-hover:bg-blue-500 group-hover:border-blue-500 transition-all duration-200">
                                                    <i class="fa-solid fa-eye text-blue-400 group-hover:text-white"></i>
                                                </span>
                                            </a>
                                            <a href="/dashboard/postingan/{{ $post->slug }}/edit" class="group">
                                                <span class="inline-flex items-center bg-gray-100 px-2.5 py-2.5 rounded-lg border border-gray-200 group-hover:bg-yellow-500 group-hover:border-yellow-500 transition-all duration-200">
                                                    <i class="fa-solid fa-pen text-yellow-400 group-hover:text-white"></i>
                                                </span>
                                            </a>
                                            <form action="{{ route('postingan.destroy', $post->slug) }}" method="POST" class="inline-flex items-center">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="group inline-flex items-center bg-transparent border-0" onclick="return confirm('Apakah kamu yakin?')">
                                                    <span class="inline-flex items-center bg-gray-100 px-2.5 py-2.5 rounded-lg border border-gray-200 group-hover:bg-red-500 group-hover:border-red-500 transition-all duration-200">
                                                        <i class="fa-solid fa-trash text-red-400 group-hover:text-white"></i>
                                                    </span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-6 text-gray-500">Tidak ada postingan.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="mt-4">
                                {{ $postingan->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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