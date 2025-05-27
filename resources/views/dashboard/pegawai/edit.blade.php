<x-main-dashboard></x-main-dashboard>
<div class="px-6 py-8 lg:px-20 bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen">
    <div class="mb-6 mt-6 flex justify-between items-center">
        <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white tracking-tight">Edit Pegawai</h1>
        <a href="{{ route('dashboard.pegawai.index') }}" class="bg-indigo-600 rounded-full px-4 py-2 text-white hover:bg-indigo-800 transition-all duration-300 flex items-center space-x-2 shadow-lg hover:shadow-xl">
            <i class="fa-solid fa-arrow-left text-sm"></i>
            <span class="text-base font-medium">Kembali</span>
        </a>
    </div>
    <hr class="border-gray-300 mb-8 opacity-50">
    <div class="bg-white p-8 rounded-xl shadow-2xl border border-gray-200">
        <form action="{{ route('dashboard.pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @csrf
            @method('PUT')
            <!-- Photo Input -->
            <div class="col-span-1 sm:col-span-2 lg:col-span-4 flex justify-center mb-6">
                <div class="text-center">
                    <label for="photo" class="block text-sm font-semibold text-gray-600 uppercase">Foto Profil</label>
                    <div class="mt-2">
                        <img id="photo-preview" src="{{ $pegawai->photo_url ? Storage::url($pegawai->photo_url) : 'https://placehold.co/150x150?text=Profile' }}" alt="Photo Preview" class="w-32 h-32 rounded-full border-4 border-indigo-100 shadow-md object-cover mx-auto img-preview {{ $pegawai->photo_url ? '' : 'hidden' }}">
                        <input type="file" name="photo" id="photo" accept="image/*" class="mt-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('photo')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- Existing Fields -->
            <div class="col-span-1">
                <label for="nama" class="block text-sm font-semibold text-gray-600 uppercase">Nama</label>
                <input type="text" name="nama" id="nama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-50 p-3 @error('nama')  @enderror" value="{{ old('nama', $pegawai->nama) }}">
                @error('nama')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-1">
                <label for="nip" class="block text-sm font-semibold text-gray-600 uppercase">NIP</label>
                <input type="text" name="nip" id="nip" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-50 p-3 @error('nip')  @enderror" value="{{ old('nip', $pegawai->nip) }}">
                @error('nip')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-1">
                <label for="golongan" class="block text-sm font-semibold text-gray-600 uppercase">Golongan</label>
                <input type="text" name="golongan" id="golongan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-50 p-3" value="{{ old('golongan', $pegawai->golongan) }}">
            </div>
            <div class="col-span-1">
                <label for="tmt_golongan" class="block text-sm font-semibold text-gray-600 uppercase">TMT Golongan</label>
                <input type="date" name="tmt_golongan" id="tmt_golongan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-50 p-3" value="{{ old('tmt_golongan', $pegawai->tmt_golongan ? \Carbon\Carbon::parse($pegawai->tmt_golongan)->format('Y-m-d') : '') }}">
            </div>
            <div class="col-span-1">
                <label for="jabatan" class="block text-sm font-semibold text-gray-600 uppercase">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-50 p-3" value="{{ old('jabatan', $pegawai->jabatan) }}">
            </div>
            <div class="col-span-1">
                <label for="tmt_jabatan" class="block text-sm font-semibold text-gray-600 uppercase">TMT Jabatan</label>
                <input type="date" name="tmt_jabatan" id="tmt_jabatan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-50 p-3" value="{{ old('tmt_jabatan', $pegawai->tmt_jabatan ? \Carbon\Carbon::parse($pegawai->tmt_jabatan)->format('Y-m-d') : '') }}">
            </div>
            <div class="col-span-1">
                <label for="tmt_cpns" class="block text-sm font-semibold text-gray-600 uppercase">TMT CPNS</label>
                <input type="date" name="tmt_cpns" id="tmt_cpns" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-50 p-3" value="{{ old('tmt_cpns', $pegawai->tmt_cpns ? \Carbon\Carbon::parse($pegawai->tmt_cpns)->format('Y-m-d') : '') }}">
            </div>
            <div class="col-span-1">
                <label for="tmt_pns_pppk" class="block text-sm font-semibold text-gray-600 uppercase">TMT PNS/PPPK</label>
                <input type="date" name="tmt_pns_pppk" id="tmt_pns_pppk" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-50 p-3" value="{{ old('tmt_pns_pppk', $pegawai->tmt_pns_pppk ? \Carbon\Carbon::parse($pegawai->tmt_pns_pppk)->format('Y-m-d') : '') }}">
            </div>
            <div class="col-span-1">
                <label for="pendidikan" class="block text-sm font-semibold text-gray-600 uppercase">Pendidikan</label>
                <input type="text" name="pendidikan" id="pendidikan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-50 p-3" value="{{ old('pendidikan', $pegawai->pendidikan) }}">
            </div>
            <div class="col-span-1">
                <label for="tahun_lulus" class="block text-sm font-semibold text-gray-600 uppercase">Tahun Lulus</label>
                <input type="number" name="tahun_lulus" id="tahun_lulus" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-50 p-3" value="{{ old('tahun_lulus', $pegawai->tahun_lulus) }}">
            </div>
            <div class="col-span-1">
                <label for="tmt_mutasi" class="block text-sm font-semibold text-gray-600 uppercase">TMT Mutasi</label>
                <input type="date" name="tmt_mutasi" id="tmt_mutasi" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-50 p-3" value="{{ old('tmt_mutasi', $pegawai->tmt_mutasi ? \Carbon\Carbon::parse($pegawai->tmt_mutasi)->format('Y-m-d') : '') }}">
            </div>
            <div class="col-span-1">
                <label for="tgl_lahir" class="block text-sm font-semibold text-gray-600 uppercase">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-50 p-3" value="{{ old('tgl_lahir', $pegawai->tgl_lahir ? \Carbon\Carbon::parse($pegawai->tgl_lahir)->format('Y-m-d') : '') }}">
            </div>
            <div class="col-span-1">
                <label for="umur" class="block text-sm font-semibold text-gray-600 uppercase">Umur</label>
                <input type="number" name="umur" id="umur" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-50 p-3" value="{{ old('umur', $pegawai->umur) }}" readonly>
            </div>
            <div class="col-span-1">
                <label for="status_perkawinan" class="block text-sm font-semibold text-gray-600 uppercase">Status Perkawinan</label>
                <select name="status_perkawinan" id="status_perkawinan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-50 p-3">
                    <option value="" {{ old('status_perkawinan', $pegawai->status_perkawinan) == '' ? 'selected' : '' }} disabled>Pilih Status</option>
                    <option value="Menikah" {{ old('status_perkawinan', $pegawai->status_perkawinan) == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                    <option value="Belum Menikah" {{ old('status_perkawinan', $pegawai->status_perkawinan) == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                </select>
            </div>
            <div class="col-span-1 sm:col-span-2 lg:col-span-4 flex justify-end space-x-4">
                <button type="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-full hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all duration-300 shadow-lg hover:shadow-xl">Perbarui</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Age calculation
    document.getElementById('tgl_lahir').addEventListener('change', function() {
        const dob = new Date(this.value);
        const today = new Date('2025-05-20');
        let age = today.getFullYear() - dob.getFullYear();
        const monthDiff = today.getMonth() - dob.getMonth();
        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
            age--;
        }
        document.getElementById('umur').value = age >= 0 ? age : '';
    });

    // Photo preview
    document.getElementById('photo').addEventListener('change', function(event) {
        const preview = document.getElementById('photo-preview');
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = '{{ $pegawai->photo_url ? Storage::url($pegawai->photo_url) : 'https://placehold.co/150x150?text=Profile' }}';
            preview.classList.add('hidden');
        }
    });
</script>

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