<x-main-dashboard></x-main-dashboard>
<div class="px-4 py-6 bg-gray-100 min-h-screen">
    <div class="grid lg:grid-cols--moi py-6 px-6">
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
                        <div class="flex flex-col lg:flex-row justify-between items-center mb-6 gap-4">
                            <p class="text-2xl font-semibold tracking-tight text-gray-900 max-lg:text-center">List Surat Masuk</p>
                            <form action="{{ route('arsip_surat_masuk.index') }}" method="GET" class="flex items-center w-full max-w-md gap-2">
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <i class="fa-solid fa-magnifying-glass text-gray-500"></i>
                                    </div>
                                    <input type="text" name="search" id="simple-search" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full ps-10 p-2.5 transition-all duration-200 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Cari Surat..." value="{{ request('search') }}" />
                                </div>
                                <button type="submit" class="p-2.5 text-sm font-medium text-white bg-indigo-600 rounded-lg border border-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 transition-all duration-200 shadow-sm hover:shadow-md">
                                    <i class="fa fa-search"></i>
                                    <span class="sr-only">Search</span>
                                </button>
                            </form>
                            <a href="/dashboard/arsip_surat_masuk/create" class="bg-indigo-600 rounded-lg px-4 py-2 text-sm text-white font-medium hover:bg-indigo-700 transition-all duration-200 shadow-sm hover:shadow-md">
                                Tambah Surat Masuk
                            </a>
                        </div>
                        <div class="relative overflow-x-auto shadow-md rounded-lg">
                            <table class="w-full text-sm text-left text-gray-600">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-4 text-center">No</th>
                                        <th scope="col" class="px-6 py-4 text-center">Tanggal Terima</th>
                                        <th scope="col" class="px-6 py-4 text-center">Nomor Surat</th>
                                        <th scope="col" class="px-6 py-4 text-center">Tanggal Surat</th>
                                        <th scope="col" class="px-6 py-4 text-center">Pengirim</th>
                                        <th scope="col" class="px-6 py-4 text-center">Perihal</th>
                                        <th scope="col" class="px-6 py-4 text-center">Diteruskan Ke</th>
                                        <th scope="col" class="px-6 py-4 text-center">File</th>
                                        <th scope="col" class="px-6 py-4 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($arsipSuratMasuk as $surat)
                                        <tr class="bg-white border-b border-gray-200 hover:bg-gray-50 transition-colors duration-150">
                                            <th scope="row" class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->iteration }}</th>
                                            <td class="px-6 py-4 text-center">{{ \Carbon\Carbon::parse($surat->tanggal_terima)->format('d/m/Y') }}</td>
                                            <td class="px-6 py-4 text-center">{{ $surat->nomor_surat }}</td>
                                            <td class="px-6 py-4 text-center">{{ \Carbon\Carbon::parse($surat->tanggal_surat)->format('d/m/Y') }}</td>
                                            <td class="px-6 py-4 text-center">{{ $surat->pengirim }}</td>
                                            <td class="px-6 py-4 text-center">{{ $surat->perihal }}</td>
                                            <td class="px-6 py-4 text-center">{{ $surat->diteruskan_kepada }}</td>
                                            <td class="px-6 py-4 text-center">
                                                <a href="{{ asset('storage/' . $surat->document_path) }}" target="_blank" class="flex items-center justify-center space-x-1 text-indigo-600 hover:text-indigo-800 transition-all duration-200">
                                                    <i class="fa-solid fa-file-arrow-down"></i>
                                                    <span>Download</span>
                                                </a>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <div class="flex justify-center items-center space-x-2">
                                                    <a href="{{ route('arsip_surat_masuk.show', $surat->id) }}" class="p-2 bg-gray-100 hover:bg-blue-600 text-blue-500 hover:text-white rounded-lg border border-gray-200 transition-all duration-200">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="/dashboard/arsip_surat_masuk/{{ $surat->id }}/edit" class="p-2 bg-gray-100 hover:bg-yellow-600 text-yellow-500 hover:text-white rounded-lg border border-gray-200 transition-all duration-200">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <form action="{{ route('arsip_surat_masuk.destroy', $surat->id) }}" method="POST" class="inline-flex items-center">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="p-2 bg-gray-100 hover:bg-red-600 text-red-500 hover:text-white rounded-lg border border-gray-200 transition-all duration-200" onclick="return confirm('Apakah kamu yakin?')">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center py-6 text-gray-500">Tidak ada data tersedia</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="mt-4">
                                {{ $arsipSuratMasuk->links() }}
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (window.location.pathname === "/dashboard/arsip_surat_masuk") {
            document.body.style.zoom = "95%";
        }
    });
</script>