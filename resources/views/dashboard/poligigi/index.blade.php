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
                            <p class="text-2xl font-semibold tracking-tight text-gray-900 max-lg:text-center">List Pasien Poli Gigi</p>
                        </div>
                        <form method="GET" class="mb-6 flex items-center gap-3">
                            <label for="date" class="text-sm font-medium text-gray-900 dark:text-white">Pilih Tanggal:</label>
                            <input type="date" id="date" name="date" value="{{ $selectedDate }}" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 p-2.5 transition-all duration-200">
                            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded-lg text-sm font-medium transition-all duration-200 shadow-sm hover:shadow-md">Filter</button>
                        </form>
                        <div class="relative overflow-x-auto shadow-md rounded-lg">
                            <table class="w-full text-sm text-left text-gray-600">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr class="text-center">
                                        <th scope="col" class="px-3 py-4">No</th>
                                        <th scope="col" class="px-3 py-4">Nama Pasien</th>
                                        <th scope="col" class="px-3 py-4">NIK</th>
                                        <th scope="col" class="px-3 py-4">Status Pasien</th>
                                        <th scope="col" class="px-3 py-4">Jenis Kelamin</th>
                                        <th scope="col" class="px-3 py-4">Jenis Pasien</th>
                                        <th scope="col" class="px-3 py-4">Nomor BPJS</th>
                                        <th scope="col" class="px-3 py-4">Alamat</th>
                                        <th scope="col" class="px-3 py-4">Tanggal</th>
                                        <th scope="col" class="px-3 py-4">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($poligigi as $gigi)
                                        <tr class="bg-white border-b border-gray-200 hover:bg-gray-50 transition-colors duration-150">
                                            <th scope="row" class="px-3 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->iteration }}</th>
                                            <td class="px-3 py-4">{{ $gigi->nama }}</td>
                                            <td class="px-3 py-4 text-center">{{ $gigi->nik }}</td>
                                            <td class="px-3 py-4 text-center">{{ $gigi->status_pasien }}</td>
                                            <td class="px-3 py-4 text-center">{{ $gigi->jenis_kelamin }}</td>
                                            <td class="px-3 py-4 text-center">{{ $gigi->jenis_pasien }}</td>
                                            <td class="px-3 py-4 text-center">{{ $gigi->no_bpjs ?? '-' }}</td>
                                            <td class="px-3 py-4">{{ $gigi->alamat }}</td>
                                            <td class="px-3 py-4 text-center">{{ $gigi->created_at->timezone('Asia/Jakarta')->format('d M Y H:i') }}</td>
                                            <td class="px-3 py-4 text-center">
                                                <button 
                                                    onclick="toggleCheck({{ $gigi->id }})"
                                                    id="checkBtn-{{ $gigi->id }}"
                                                    class="px-4 py-2 rounded-lg transition-all duration-200 flex items-center justify-center gap-2 {{ $gigi->is_checked ? 'bg-green-500 hover:bg-green-600 text-white' : 'bg-yellow-500 hover:bg-yellow-600 text-white' }}">
                                                    <i class="fas {{ $gigi->is_checked ? 'fa-check-circle' : 'fa-clock' }}"></i>
                                                    {{ $gigi->is_checked ? 'Checked' : 'Pending' }}
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="10" class="text-center py-6 text-gray-500">Tidak ada pasien yang terdaftar.</td>
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

    function toggleCheck(id) {
        fetch(`/poligigi/toggle-check/${id}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        })
        .then(response => response.json())
        .then(data => {
            const button = document.getElementById(`checkBtn-${id}`);
            if (data.is_checked) {
                button.classList.remove('bg-yellow-500', 'hover:bg-yellow-600');
                button.classList.add('bg-green-500', 'hover:bg-green-600');
                button.innerHTML = '<i class="fas fa-check-circle"></i> Checked';
            } else {
                button.classList.remove('bg-green-500', 'hover:bg-green-600');
                button.classList.add('bg-yellow-500', 'hover:bg-yellow-600');
                button.innerHTML = '<i class="fas fa-clock"></i> Pending';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Failed to update status. Please try again.');
        });
    }
</script>