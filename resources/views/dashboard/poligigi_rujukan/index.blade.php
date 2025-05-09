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
                            <p class="text-2xl font-semibold tracking-tight text-gray-900 max-lg:text-center">List Rujukan Poli Gigi</p>
                            <a href="/poli-gigi-rujukan" target="_blank" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg text-sm transition-all duration-200 shadow-sm hover:shadow-md">
                                Tambah Rujukan
                            </a>
                        </div>
                        <div class="relative overflow-x-auto shadow-md rounded-lg">
                            <table class="w-full text-sm text-left text-gray-600">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr class="text-center">
                                        <th scope="col" class="px-3 py-4">No</th>
                                        <th scope="col" class="px-3 py-4">Nama Pasien</th>
                                        <th scope="col" class="px-3 py-4">No.RM</th>
                                        <th scope="col" class="px-3 py-4">Alamat</th>
                                        <th scope="col" class="px-3 py-4">Tanggal</th>
                                        <th scope="col" class="px-3 py-4">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($poligigi as $gigi)
                                        <tr class="bg-white border-b border-gray-200 hover:bg-gray-50 transition-colors duration-150">
                                            <th scope="row" class="px-3 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->iteration }}</th>
                                            <td class="px-3 py-4 text-center">{{ $gigi->name }}</td>
                                            <td class="px-3 py-4 text-center">{{ $gigi->no_rm }}</td>
                                            <td class="px-3 py-4 text-center">{{ $gigi->alamat }}</td>
                                            <td class="px-3 py-4 text-center">{{ \Carbon\Carbon::parse($gigi->tanggal)->format('d M Y') }}</td>
                                            <td class="px-3 py-4 flex justify-center items-center space-x-2">
                                                <a href="/dashboard/poli-gigi-rujukan/{{ $gigi->id }}" class="p-2 bg-gray-100 hover:bg-blue-600 text-blue-500 hover:text-white rounded-lg border border-gray-200 transition-all duration-200">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                                <a href="/dashboard/poli-gigi-rujukan/{{ $gigi->id }}/edit" class="p-2 bg-gray-100 hover:bg-yellow-600 text-yellow-500 hover:text-white rounded-lg border border-gray-200 transition-all duration-200">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>
                                                <form action="{{ route('poli-gigi-rujukan.destroy', $gigi->id) }}" method="POST" class="inline-flex items-center">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="p-2 bg-gray-100 hover:bg-red-600 text-red-500 hover:text-white rounded-lg border border-gray-200 transition-all duration-200" onclick="return confirm('Apakah kamu yakin?')">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center py-6 text-gray-500">Tidak ada pasien yang terdaftar.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="mt-4">
                                {{ $poligigi->links() }}
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
    document.addEventListener("DOMContentLoaded", function () {
        const jenisPasien = document.getElementById("jenis_pasien");
        const noBpjs = document.getElementById("no_bpjs");

        if (jenisPasien && noBpjs) {
            jenisPasien.addEventListener("change", function () {
                if (this.value === "Umum") {
                    noBpjs.value = "";
                    noBpjs.disabled = true;
                } else {
                    noBpjs.disabled = false;
                }
            });
        }
    });
</script>