<x-main-dashboard></x-main-dashboard>
<div class="px-20">
    <h1 class="text-4xl mb-4 pt-4 font-bold text-gray-900 dark:text-white">Document Preview</h1>

    <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
        <p class="mb-2 text-sm font-medium">
            Tanggal Terima : <span class="font-light">{{ \Carbon\Carbon::parse($arsipSuratMasuk->tanggal_terima)->format('d F Y') }}</span>
        </p>
        <p class="mb-2 text-sm font-medium">
            Tanggal Surat : <span class="font-light">{{ \Carbon\Carbon::parse($arsipSuratMasuk->tanggal_surat)->format('d F Y') }}</span>
        </p>
        <p class="mb-2 text-sm font-medium">
            Nomor Surat : <span class="font-light">{{ $arsipSuratMasuk->nomor_surat }}</span>
        </p>
        <p class="mb-2 text-sm font-medium">
            Pengirim : <span class="font-light">{{ $arsipSuratMasuk->pengirim }}</span>
        </p>
        <p class="mb-2 text-sm font-medium">
            Perihal : <span class="font-light">{{ $arsipSuratMasuk->perihal }}</span>
        </p>
        <p class="mb-2 text-sm font-medium">
            Diteruskan Kepada : <span class="font-light">{{ $arsipSuratMasuk->diteruskan_kepada }}</span>
        </p>
        <p class="mb-2 text-sm font-medium">
            Lampiran : <span class="font-light">{{ $arsipSuratMasuk->lampiran }}</span>
        </p>
        <p class="mb-2 text-sm font-medium">
            Keterangan : <span class="font-light">{{ $arsipSuratMasuk->keterangan }}</span>
        </p>
    </div>

    <div class="mt-5 mb-5">
        @if($fileExtension == 'pdf')
            <!-- Embed PDF -->
            <embed src="{{ asset('storage/' . $arsipSuratMasuk->document_path) }}" width="100%" height="600px" type="application/pdf">
        @elseif($fileExtension == 'docx' || $fileExtension == 'doc')
            <!-- Google Docs Viewer for Word Files -->
            <iframe src="https://docs.google.com/gview?url={{ urlencode(asset('storage/' . $arsipSuratMasuk->document_path)) }}&embedded=true" width="100%" height="600px"></iframe>

        @elseif($fileExtension == 'txt')
            <!-- Display text file content -->
            <pre>{{ file_get_contents($documentPath) }}</pre>
        @else
            <p>Unsupported document type.</p>
        @endif
    </div>
</div>