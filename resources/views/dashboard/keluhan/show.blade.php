<x-main-dashboard></x-main-dashboard>
<div class="px-4 py-6 bg-gray-100 min-h-screen">
    <div class="grid lg:grid-cols-1 py-6 px-6">
        <div class="relative lg:row-span-2">
            <div class="relative max-lg:row-start-1">
                <div class="absolute inset-px rounded-xl shadow-lg border bg-white"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-xl bg-white">
                    <div class="px-8 py-8 sm:px-10 sm:pt-10">
                        <div class="flex justify-between items-center mb-6">
                            <p class="text-2xl font-semibold tracking-tight text-gray-900 max-lg:text-center">Detail Keluhan</p>
                            <a href="{{ route('keluhan.index') }}" class="bg-indigo-600 rounded-lg px-4 py-2 text-sm text-white font-medium hover:bg-indigo-700 transition-all duration-200 shadow-sm hover:shadow-md">
                                Kembali
                            </a>
                        </div>
                        <div class="overflow-hidden">
                            <div class="border-t border-gray-100">
                                <dl class="divide-y divide-gray-100">
                                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                        <dt class="text-sm font-medium leading-6 text-gray-900">Asal Keluhan</dt>
                                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ ucfirst($keluhan->asal_keluhan) }}</dd>
                                    </div>
                                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                        <dt class="text-sm font-medium leading-6 text-gray-900">Nama Pengirim</dt>
                                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $keluhan->nama_pengirim }}</dd>
                                    </div>
                                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                        <dt class="text-sm font-medium leading-6 text-gray-900">Email Pengirim</dt>
                                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $keluhan->email_pengirim ?? '-' }}</dd>
                                    </div>
                                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                        <dt class="text-sm font-medium leading-6 text-gray-900">Perihal</dt>
                                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $keluhan->perihal }}</dd>
                                    </div>
                                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                        <dt class="text-sm font-medium leading-6 text-gray-900">Isi Pesan</dt>
                                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $keluhan->isi_pesan }}</dd>
                                    </div>
                                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                        <dt class="text-sm font-medium leading-6 text-gray-900">Tanggal Dibuat</dt>
                                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $keluhan->created_at->locale('id')->translatedFormat('d F Y H:i:s') }}</dd>
                                    </div>
                                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                        <dt class="text-sm font-medium leading-6 text-gray-900">Terakhir Diupdate</dt>
                                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $keluhan->updated_at->locale('id')->translatedFormat('d F Y H:i:s') }}</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>