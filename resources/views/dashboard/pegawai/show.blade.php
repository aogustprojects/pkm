<x-main-dashboard></x-main-dashboard>
<div class="px-6 py-8 lg:px-20 bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen">
    <div class="mb-6 mt-6 flex justify-between items-center">
        <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white tracking-tight">Detail Pegawai</h1>
        <div class="flex space-x-4">
            <a href="{{ route('pegawai.edit', $pegawai) }}" class="bg-blue-600 rounded-full px-4 py-2 text-white hover:bg-blue-800 transition-all duration-300 flex items-center space-x-2 shadow-lg hover:shadow-xl">
                <i class="fa-solid fa-pencil text-sm"></i>
                <span class="text-base font-medium">Edit</span>
            </a>
            <form action="{{ route('pegawai.destroy', $pegawai) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pegawai ini?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-600 rounded-full px-4 py-2 text-white hover:bg-red-800 transition-all duration-300 flex items-center space-x-2 shadow-lg hover:shadow-xl">
                    <i class="fa-solid fa-trash text-sm"></i>
                    <span class="text-base font-medium">Hapus</span>
                </button>
            </form>
            <a href="{{ route('pegawai.index') }}" class="bg-indigo-600 rounded-full px-4 py-2 text-white hover:bg-indigo-800 transition-all duration-300 flex items-center space-x-2 shadow-lg hover:shadow-xl">
                <i class="fa-solid fa-arrow-left text-sm"></i>
                <span class="text-base font-medium">Kembali</span>
            </a>
        </div>
    </div>
    <hr class="border-gray-300 mb-8 opacity-50">
    <div class="bg-white p-8 rounded-xl shadow-2xl border border-gray-200">
        <!-- Picture Field -->
        <div class="flex justify-center mb-8">
            <img src="{{ $pegawai->photo_url ? Storage::url($pegawai->photo_url) : 'https://placehold.co/150x150?text=Profile' }}" alt="Profile Picture" class="w-32 h-32 rounded-full border-4 border-indigo-100 shadow-md object-cover">
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition-all duration-200">
                <p class="text-sm font-semibold text-gray-600 uppercase">Nama</p>
                <p class="mt-1 text-lg font-medium text-gray-900">{{ $pegawai->nama }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition-all duration-200">
                <p class="text-sm font-semibold text-gray-600 uppercase">NIP</p>
                <p class="mt-1 text-lg font-medium text-gray-900">{{ $pegawai->nip }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition-all duration-200">
                <p class="text-sm font-semibold text-gray-600 uppercase">Golongan</p>
                <p class="mt-1 text-lg font-medium text-gray-900">{{ $pegawai->golongan ?? '-' }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition-all duration-200">
                <p class="text-sm font-semibold text-gray-600 uppercase">TMT Golongan</p>
                <p class="mt-1 text-lg font-medium text-gray-900">{{ $pegawai->tmt_golongan ? \Carbon\Carbon::parse($pegawai->tmt_golongan)->locale('id')->translatedFormat('d F Y') : '-' }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition-all duration-200">
                <p class="text-sm font-semibold text-gray-600 uppercase">Masa Kerja Golongan</p>
                <p class="mt-1 text-lg font-medium text-gray-900">
                    @if ($pegawai->tmt_golongan)
                        @php
                            $tmtGolongan = \Carbon\Carbon::parse($pegawai->tmt_golongan);
                            $now = \Carbon\Carbon::now();
                            $diff = $tmtGolongan->diff($now);
                            $years = $diff->y;
                            $months = $diff->m;
                            $masaKerjaGolongan = '';
                            if ($years > 0) {
                                $masaKerjaGolongan .= $years . ' Tahun';
                            }
                            if ($months > 0) {
                                $masaKerjaGolongan .= ($years > 0 ? ' ' : '') . $months . ' Bulan';
                            }
                            if ($years == 0 && $months == 0) {
                                $masaKerjaGolongan = 'Kurang dari 1 bulan';
                            }
                        @endphp
                        {{ $masaKerjaGolongan }}
                    @else
                        -
                    @endif
                </p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition-all duration-200">
                <p class="text-sm font-semibold text-gray-600 uppercase">Masa Kerja</p>
                <p class="mt-1 text-lg font-medium text-gray-900">
                    @php
                        $startDate = null;
                        if ($pegawai->tmt_cpns) {
                            $startDate = \Carbon\Carbon::parse($pegawai->tmt_cpns);
                        } elseif ($pegawai->tmt_pns_pppk) {
                            $startDate = \Carbon\Carbon::parse($pegawai->tmt_pns_pppk);
                        } elseif ($pegawai->tmt_jabatan) {
                            $startDate = \Carbon\Carbon::parse($pegawai->tmt_jabatan);
                        }
                        $masaKerja = '-';
                        if ($startDate) {
                            $now = \Carbon\Carbon::now();
                            $diff = $startDate->diff($now);
                            $years = $diff->y;
                            $months = $diff->m;
                            $masaKerja = '';
                            if ($years > 0) {
                                $masaKerja .= $years . ' Tahun';
                            }
                            if ($months > 0) {
                                $masaKerja .= ($years > 0 ? ' ' : '') . $months . ' Bulan';
                            }
                            if ($years == 0 && $months == 0) {
                                $masaKerja = 'Kurang dari 1 bulan';
                            }
                        }
                    @endphp
                    {{ $masaKerja }}
                </p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition-all duration-200">
                <p class="text-sm font-semibold text-gray-600 uppercase">Jabatan</p>
                <p class="mt-1 text-lg font-medium text-gray-900">{{ $pegawai->jabatan ?? '-' }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition-all duration-200">
                <p class="text-sm font-semibold text-gray-600 uppercase">TMT Jabatan</p>
                <p class="mt-1 text-lg font-medium text-gray-900">{{ $pegawai->tmt_jabatan ? \Carbon\Carbon::parse($pegawai->tmt_jabatan)->locale('id')->translatedFormat('d F Y') : '-' }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition-all duration-200">
                <p class="text-sm font-semibold text-gray-600 uppercase">TMT CPNS</p>
                <p class="mt-1 text-lg font-medium text-gray-900">{{ $pegawai->tmt_cpns ? \Carbon\Carbon::parse($pegawai->tmt_cpns)->locale('id')->translatedFormat('d F Y') : '-' }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition-all duration-200">
                <p class="text-sm font-semibold text-gray-600 uppercase">TMT PNS/PPPK</p>
                <p class="mt-1 text-lg font-medium text-gray-900">{{ $pegawai->tmt_pns_pppk ? \Carbon\Carbon::parse($pegawai->tmt_pns_pppk)->locale('id')->translatedFormat('d F Y') : '-' }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition-all duration-200">
                <p class="text-sm font-semibold text-gray-600 uppercase">Pendidikan</p>
                <p class="mt-1 text-lg font-medium text-gray-900">{{ $pegawai->pendidikan ?? '-' }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition-all duration-200">
                <p class="text-sm font-semibold text-gray-600 uppercase">Tahun Lulus</p>
                <p class="mt-1 text-lg font-medium text-gray-900">{{ $pegawai->tahun_lulus ?? '-' }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition-all duration-200">
                <p class="text-sm font-semibold text-gray-600 uppercase">TMT Mutasi</p>
                <p class="mt-1 text-lg font-medium text-gray-900">{{ $pegawai->tmt_mutasi ? \Carbon\Carbon::parse($pegawai->tmt_mutasi)->locale('id')->translatedFormat('d F Y') : '-' }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition-all duration-200">
                <p class="text-sm font-semibold text-gray-600 uppercase">Tanggal Lahir</p>
                <p class="mt-1 text-lg font-medium text-gray-900">{{ $pegawai->tgl_lahir ? \Carbon\Carbon::parse($pegawai->tgl_lahir)->locale('id')->translatedFormat('d F Y') : '-' }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition-all duration-200">
                <p class="text-sm font-semibold text-gray-600 uppercase">Umur</p>
                <p class="mt-1 text-lg font-medium text-gray-900">{{ $pegawai->umur ?? '-' }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition-all duration-200">
                <p class="text-sm font-semibold text-gray-600 uppercase">Status Perkawinan</p>
                <p class="mt-1 text-lg font-medium text-gray-900">{{ $pegawai->status_perkawinan ?? '-' }}</p>
            </div>
        </div>
    </div>
</div>