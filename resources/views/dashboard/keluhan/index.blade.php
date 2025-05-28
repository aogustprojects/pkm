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
                            <p class="text-2xl font-semibold tracking-tight text-gray-900 max-lg:text-center">List Keluhan</p>
                            @auth
                            <a href="{{ route('keluhan.create') }}" class="bg-indigo-600 rounded-lg px-4 py-2 text-sm text-white font-medium hover:bg-indigo-700 transition-all duration-200 shadow-sm hover:shadow-md">
                                Tambah Keluhan
                            </a> 
                            @endauth
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse">
                                <thead>
                                    <tr class="bg-gray-50">
                                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">No</th>
                                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Asal Keluhan</th>
                                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Nama Pengirim</th>
                                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Email</th>
                                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Perihal</th>
                                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Tanggal</th>
                                        <th class="px-6 py-4 text-sm font-semibold text-gray-900 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    @forelse ($keluhans as $keluhan)
                                        <tr>
                                            <th scope="row" class="px-3 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->iteration }}</th>
                                            <td class="px-6 py-5 text-sm text-gray-900">{{ ucfirst($keluhan->asal_keluhan) }}</td>
                                            <td class="px-6 py-5 text-sm text-gray-900">{{ $keluhan->nama_pengirim }}</td>
                                            <td class="px-6 py-5 text-sm text-gray-500">{{ $keluhan->email_pengirim ?? '-' }}</td>
                                            <td class="px-6 py-5 text-sm text-gray-900">{{ $keluhan->perihal }}</td>
                                            <td class="px-6 py-5 text-sm text-gray-500">{{ $keluhan->created_at->locale('id')->translatedFormat('d F Y') }}</td>
                                            <td class="px-6 py-5 flex justify-center items-center space-x-3">
                                                <a href="{{ route('keluhan.show', $keluhan->id) }}" class="group">
                                                    <span class="inline-flex items-center bg-gray-100 px-2.5 py-2.5 rounded-lg border border-gray-200 group-hover:bg-blue-500 group-hover:border-blue-500 transition-all duration-200">
                                                        <i class="fa-solid fa-eye text-blue-400 group-hover:text-white"></i>
                                                    </span>
                                                </a>
                                                <a href="{{ route('keluhan.edit', $keluhan->id) }}" class="group">
                                                    <span class="inline-flex items-center bg-gray-100 px-2.5 py-2.5 rounded-lg border border-gray-200 group-hover:bg-yellow-500 group-hover:border-yellow-500 transition-all duration-200">
                                                        <i class="fa-solid fa-pen text-yellow-400 group-hover:text-white"></i>
                                                    </span>
                                                </a>
                                                @auth
                                                <form action="{{ route('keluhan.destroy', $keluhan->id) }}" method="POST" class="inline-flex items-center">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="group inline-flex items-center bg-transparent border-0" onclick="return confirm('Apakah kamu yakin?')">
                                                        <span class="inline-flex items-center bg-gray-100 px-2.5 py-2.5 rounded-lg border border-gray-200 group-hover:bg-red-500 group-hover:border-red-500 transition-all duration-200">
                                                            <i class="fa-solid fa-trash text-red-400 group-hover:text-white"></i>
                                                        </span>
                                                    </button>
                                                </form>
                                                @endauth
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="px-6 py-5 text-center text-gray-500">Belum ada data keluhan.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
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