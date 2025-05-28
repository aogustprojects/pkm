<x-main-dashboard></x-main-dashboard>
<div class="px-4 py-6 bg-gray-100 min-h-screen">
    <div class="grid lg:grid-cols-1 py-6 px-6">
        <div class="relative lg:row-span-2">
            <div class="relative max-lg:row-start-1">
                <div class="absolute inset-px rounded-xl shadow-lg border bg-white"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-xl bg-white">
                    <div class="px-8 py-8 sm:px-10 sm:pt-10">
                        <div class="flex justify-between items-center mb-6">
                            <p class="text-2xl font-semibold tracking-tight text-gray-900 max-lg:text-center">Edit Keluhan</p>
                        </div>
                        <form action="{{ route('keluhan.update', $keluhan->id) }}" method="POST" class="space-y-6">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2">
                                <div class="sm:col-span-1">
                                    <label for="asal_keluhan" class="block text-sm font-medium leading-6 text-gray-900">Asal Keluhan</label>
                                    <div class="mt-2">
                                        <select name="asal_keluhan" id="asal_keluhan" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('asal_keluhan') border-red-500 @enderror">
                                            <option value="">Pilih Asal Keluhan</option>
                                            <option value="whatsapp" {{ $keluhan->asal_keluhan == 'whatsapp' ? 'selected' : '' }}>WhatsApp</option>
                                            <option value="instagram" {{ $keluhan->asal_keluhan == 'instagram' ? 'selected' : '' }}>Instagram</option>
                                            <option value="email" {{ $keluhan->asal_keluhan == 'email' ? 'selected' : '' }}>Email</option>
                                            <option value="google_review" {{ $keluhan->asal_keluhan == 'google_review' ? 'selected' : '' }}>Google Review</option>
                                        </select>
                                        @error('asal_keluhan')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-1">
                                    <label for="nama_pengirim" class="block text-sm font-medium leading-6 text-gray-900">Nama Pengirim</label>
                                    <div class="mt-2">
                                        <input type="text" name="nama_pengirim" id="nama_pengirim" value="{{ old('nama_pengirim', $keluhan->nama_pengirim) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('nama_pengirim') ring-red-500 @enderror">
                                        @error('nama_pengirim')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-1">
                                    <label for="email_pengirim" class="block text-sm font-medium leading-6 text-gray-900">Email Pengirim (Opsional)</label>
                                    <div class="mt-2">
                                        <input type="email" name="email_pengirim" id="email_pengirim" value="{{ old('email_pengirim', $keluhan->email_pengirim) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('email_pengirim') ring-red-500 @enderror">
                                        @error('email_pengirim')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-1">
                                    <label for="perihal" class="block text-sm font-medium leading-6 text-gray-900">Perihal</label>
                                    <div class="mt-2">
                                        <input type="text" name="perihal" id="perihal" value="{{ old('perihal', $keluhan->perihal) }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('perihal') ring-red-500 @enderror">
                                        @error('perihal')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="isi_pesan" class="block text-sm font-medium leading-6 text-gray-900">Isi Pesan</label>
                                    <div class="mt-2">
                                        <textarea name="isi_pesan" id="isi_pesan" rows="4" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('isi_pesan') ring-red-500 @enderror">{{ old('isi_pesan', $keluhan->isi_pesan) }}</textarea>
                                        @error('isi_pesan')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 flex items-center justify-end gap-x-6">
                                <a href="{{ route('keluhan.index') }}" class="text-sm font-semibold leading-6 text-gray-900">Batal</a>
                                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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