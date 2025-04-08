<x-header-poligigi-rujukan> </x-header-poligigi-rujukan>

<div class="flex justify-center mt-4 min-h-screen">
    <div class="bg-white w-3/4 print:w-full mb-5 border rounded-md">
        <h1 class="font-bold text-center mt-4">INFORMED CONSENT</h1>
        
        <div class="px-4">
            @if (session('success'))
            <div class="bg-green-100 text-sm text-green-800 p-2 rounded-md mb-4">
                {{ session('success') }}
            </div>
            @endif
            
            @if (session('fail'))
                <div class="bg-red-100 text-sm text-red-800 p-2 rounded-md mb-4">
                    {{ session('fail') }}
                </div>
            @endif
        </div>

        
        <form class="px-4 mx-auto mt-4 space-y-2" id="rujukan-form" method="POST" action="/poli-gigi-rujukan">
            @csrf
            <!-- Section 1: Patient Information -->
            <div class="flex w-full gap-2">
                <div class="flex w-full">
                    <p class="w-28 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">Nama</p>
                    <input type="text" id="name" name="name" value="{{ $poliGigiRujukan->name }}" readonly 
                    oninput="syncInput('name', 'name_copy')" 
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" required />
                </div>
        
                <div class="flex w-full">
                    <p class="w-28 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">No. RM</p>
                    <input type="text" id="no_rm" name="no_rm" value="{{ $poliGigiRujukan->no_rm }}" readonly class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" required />
                </div>
            </div>
        
            <div class="flex flex-wrap w-full gap-2">

                <!-- TTL/Umur Group -->
                <div class="flex flex-wrap w-full gap-2 sm:gap-0 sm:flex-nowrap">
                    <!-- Label -->
                    <p class="w-full sm:w-28 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-md sm:rounded-s-md sm:rounded-tr-none dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        TTL/Umur
                    </p>
                    <!-- Tempat Lahir -->
                    <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ $poliGigiRujukan->tempat_lahir }}" readonly
                        class="flex-1 min-w-[150px] p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required />
                    <!-- Tanggal Lahir -->
                    <input type="text" id="tanggal_lahir" name="tanggal_lahir"
                        value="{{ \Carbon\Carbon::parse($poliGigiRujukan->tanggal_lahir)->translatedFormat('d F Y') }}" readonly
                        class="flex-1 min-w-[150px] p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" />

                    <!-- Umur -->
                    <input type="text" id="umur" name="umur" value="{{ $poliGigiRujukan->umur }} tahun" readonly
                        class="flex-1 min-w-[100px] p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-md sm:rounded-e-md sm:rounded-bl-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" />
                </div>
            
                <!-- Alamat -->
                <div class="flex w-full flex-wrap sm:flex-nowrap">
                    <p class="w-full sm:w-28 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-t-md sm:rounded-s-md sm:rounded-tr-none dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        Alamat
                    </p>
                    <input type="text" id="alamat" name="alamat" value="{{ $poliGigiRujukan->alamat }}" readonly
                        class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-b-md sm:rounded-e-md sm:rounded-bl-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required />
                </div>
            
            </div>
            

            <!-- Section 2: Information Provision -->
            <h1 class="font-bold text-center mt-4">PEMBERIAN INFORMASI</h1>

            <div class="flex w-full">
                <div class="flex w-full">
                    <p class="w-44 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">Petugas Pelaksana</p>
                    <input type="text" id="petugas_pel" name="petugas_pel" value="{{ $poliGigiRujukan->petugas_pel }}" readonly class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" required />
                </div>
            </div>
        
            <div class="flex w-full">
                <div class="flex w-full">
                    <p class="w-44 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">Pemberi Informasi</p>
                    <input type="text" id="pemberi_info" name="pemberi_info" value="{{ $poliGigiRujukan->pemberi_info }}" readonly class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" required />
                </div>
            </div>
                    
            <div class="flex w-full">
                <div class="flex w-full">
                    <p class="w-44 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">Penerima Informasi</p>
                    <input type="text" id="penerima_info" name="penerima_info" value="{{ $poliGigiRujukan->penerima_info }}" readonly class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" required />
                </div>
            </div>

            <div class="relative overflow-x-auto border sm:rounded-md">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jenis Informasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Isi Informasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanda (✓)
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4 text-center">
                                1
                            </td>
                            <th scope="row" class="p-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Diagnosis
                            </th>
                            <td class="p-2">
                                <input type="text" id="diagnosis" name="diagnosis" value="{{ $poliGigiRujukan->diagnosis }}" readonly class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                            </td>
                            <td class="p-2 text-center">
                                <div class="flex justify-center items-center">
                                    <input 
                                        id="diagnosis_check" 
                                        name="diagnosis_check" 
                                        type="checkbox" 
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                        {{ $poliGigiRujukan->diagnosis ? 'checked' : '' }} 
                                        disabled
                                    >
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4 text-center">
                                2
                            </td>
                            <th scope="row" class="p-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nama/Tujuan Tindakan
                            </th>
                            <td class="p-2">
                                <input type="text" id="nama_tujuan_tindakan" name="nama_tujuan_tindakan" value="{{ $poliGigiRujukan->nama_tujuan_tindakan }}" readonly class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                            </td>
                            <td class="p-2 text-center">
                                <input id="nama_tujuan_tindakan_check" name="nama_tujuan_tindakan_check" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                {{ $poliGigiRujukan->nama_tujuan_tindakan ? 'checked' : '' }} disabled>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4 text-center">
                                3
                            </td>
                            <th scope="row" class="p-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Indikasi Tindakan
                            </th>
                            <td class="p-2">
                                <input type="text" id="indikasi_tindakan" name="indikasi_tindakan" value="{{ $poliGigiRujukan->indikasi_tindakan }}" readonly class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                            </td>
                            <td class="p-2 text-center">
                                <div class="flex justify-center items-center">
                                    <input id="indikasi_tindakan_check" name="indikasi_tindakan_check" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    {{ $poliGigiRujukan->indikasi_tindakan ? 'checked' : '' }} disabled>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4 text-center">
                                4
                            </td>
                            <th scope="row" class="p-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Tata Cara
                            </th>
                            <td class="p-2">
                                <input type="text" id="tata_cara" name="tata_cara" value="{{ $poliGigiRujukan->tata_cara }}" readonly class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                            </td>
                            <td class="p-2 text-center">
                                <div class="flex justify-center items-center">
                                    <input id="tata_cara_check" name="tata_cara_check" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    {{ $poliGigiRujukan->tata_cara ? 'checked' : '' }} disabled>
                                    <label for="tata_cara_check" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4 text-center">
                                5
                            </td>
                            <th scope="row" class="p-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Risiko & Komplikasi
                            </th>
                            <td class="p-2">
                                <input type="text" id="risiko_komplikasi" name="risiko_komplikasi" value="{{ $poliGigiRujukan->risiko_komplikasi }}" readonly class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                            </td>
                            <td class="p-2 text-center">
                                <div class="flex justify-center items-center">
                                    <input id="risiko_komplikasi_check" name="risiko_komplikasi_check" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    {{ $poliGigiRujukan->risiko_komplikasi ? 'checked' : '' }} disabled>
                                    <label for="risiko_komplikasi_check" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4 text-center">
                                6
                            </td>
                            <th scope="row" class="p-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Prognosis
                            </th>
                            <td class="p-2">
                                <input type="text" id="prognosis" name="prognosis" value="{{ $poliGigiRujukan->prognosis }}" readonly class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                            </td>
                            <td class="p-2 text-center">
                                <div class="flex justify-center items-center">
                                    <input id="prognosis_check" name="prognosis_check" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    {{ $poliGigiRujukan->prognosis ? 'checked' : '' }} disabled>
                                    <label for="prognosis_check" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4 text-center">
                                7
                            </td>
                            <th scope="row" class="p-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Alternatif & Risiko
                            </th>
                            <td class="p-2">
                                <input type="text" id="alternatif_risiko" name="alternatif_risiko" value="{{ $poliGigiRujukan->alternatif_risiko }}" readonly class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                            </td>
                            <td class="p-2 text-center">
                                <div class="flex justify-center items-center">
                                    <input id="alternatif_risiko_check" name="alternatif_risiko_check" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    {{ $poliGigiRujukan->alternatif_risiko ? 'checked' : '' }} disabled>
                                    <label for="alternatif_risiko_check" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4 text-center">
                                8
                            </td>
                            <th scope="row" class="p-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Perkiraan Biaya Tindakan
                            </th>
                            <td class="p-2">
                                <input type="text" id="biaya_tindakan" name="biaya_tindakan" value="{{ $poliGigiRujukan->biaya_tindakan }}" readonly class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                            </td>
                            <td class="p-2 text-center">
                                <div class="flex justify-center items-center">
                                    <input id="biaya_tindakan_check" name="biaya_tindakan_check" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    {{ $poliGigiRujukan->biaya_tindakan ? 'checked' : '' }} disabled>
                                    <label for="biaya_tindakan_check" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Signature Pad 1 -->
            <div class="flex w-full print:break-before-page"">
                <div class="flex w-full">
                    <p class="flex-1 py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600 text-left">
                        Dengan ini menyatakan bahwa saya telah menerangkan hal-hal diatas secara benar dan jujur dan memberikan kesempatan untuk bertanya dan/ atau berdiskusi
                    </p>
                    <div class="flex flex-col items-center border border-gray-300 dark:border-gray-600 rounded-e-md overflow-hidden">
                        <span class="text-xs text-gray-500 dark:text-gray-300 mb-1">TTD Petugas</span>
                        <canvas id="signature-pad-1" class="bg-white dark:bg-gray-800 w-48 h-24"></canvas>
                        <input type="hidden" name="signature1" value="{{ $poliGigiRujukan->signature1 }}" readonly id="signature-pad-1-input">
                        <button class="clear-signature mt-2 px-4 py-1 text-sm bg-red-500 text-white rounded hover:bg-red-600" data-target="signature-pad-1">Clear</button>
                    </div>
                </div>
            </div>

            <!-- Signature Pad 2 -->
            <div class="flex w-full">
                <div class="flex w-full">
                    <p class="flex-1 py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600 text-left">
                        Dengan ini menyatakan bahwa saya telah menerima informasi sebagaimana diatas yang beri saya tanda / paraf di kolom kanannya dan saya telah memahaminya
                    </p>
                    <div class="flex flex-col items-center border border-gray-300 dark:border-gray-600 rounded-e-md overflow-hidden">
                        <span class="text-xs text-gray-500 dark:text-gray-300 mb-1">TTD Pasien/Keluarga/Wali</span>
                        <canvas id="signature-pad-2" class="bg-white dark:bg-gray-800 w-48 h-24"></canvas>
                        <input type="hidden" name="signature2" value="{{ $poliGigiRujukan->signature2 }}" readonly id="signature-pad-2-input">
                        <button class="clear-signature mt-2 px-4 py-1 text-sm bg-red-500 text-white rounded hover:bg-red-600" data-target="signature-pad-2">Clear</button>
                    </div>
                </div>
            </div>
            

            <div class="flex w-full gap-2">
                <div class="flex w-full">
                    <p class="flex-1 py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white dark:border-gray-600 text-left">
                        *Bila pasien tidak kompeten atau tidak mau menerima informasi, maka penerima informasi adalah wali atau keluarga terdekat
                    </p>
                </div>
            </div>

            <h1 class="font-bold text-center mt-4">PERSETUJUAN / PENOLAKAN TINDAKAN KEDOKTERAN</h1>

            <div class="flex w-full gap-2">
                <div class="flex w-full">
                    <p class="flex-1 py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white dark:border-gray-600 text-left">
                        Yang bertanda tangan di bawah ini saya :
                    </p>
                </div>
            </div>
            <div class="flex w-full gap-2">
                <div class="flex w-full">
                    <p class="w-44 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">Nama</p>
                    <input type="text" id="nama_sign" value="{{ $poliGigiRujukan->nama_sign }}" readonly class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300" readonly />
                </div>
            </div>
            <div class="flex w-full gap-2">
                <div class="flex w-full">
                    <p class="w-44 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">Umur</p>
                    <input type="text" id="umur_sign" name="umur_sign" value="{{ $poliGigiRujukan->umur_sign }} tahun" readonly class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                </div>
            </div>
            <div class="flex w-full gap-2">
                <div class="flex w-full">
                    <p class="w-44 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">Jenis Kelamin</p>
                    <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="{{ $poliGigiRujukan->jenis_kelamin }}" readonly class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                </div>
            </div>
            <div class="flex w-full gap-2">
                <div class="flex w-full">
                    <p class="w-44 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">Alamat</p>
                    <input type="text" id="alamat_sign" name="alamat_sign" value="{{ $poliGigiRujukan->alamat_sign }}" readonly class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                </div>
            </div>
            <div class="flex flex-col w-full gap-2">
                <label class="flex items-center gap-2 py-3 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    <input 
                        type="radio" 
                        name="persetujuan_tindakan" 
                        value="menyetujui"
                        {{ old('persetujuan_tindakan', $poliGigiRujukan->persetujuan_tindakan) === 'menyetujui' ? 'checked' : '' }}
                        disabled
                        class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600"
                    >
                    Dengan ini menyatakan <strong>"MENYETUJUI"</strong> untuk dilakukan Tindakan
                </label>
            
                <label class="flex items-center gap-2 py-3 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    <input 
                        type="radio" 
                        name="persetujuan_tindakan" 
                        value="menolak"
                        {{ old('persetujuan_tindakan', $poliGigiRujukan->persetujuan_tindakan) === 'menolak' ? 'checked' : '' }}
                        disabled
                        class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600"
                    >
                    Atau menyatakan <strong>"MENOLAK"</strong> untuk dilakukan Tindakan
                </label>
            </div>
            
            

            <div class="flex w-full gap-2">
                <div class="flex w-full">
                    <p class="flex-1 py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white dark:border-gray-600 text-left">
                        Dengan Alasan :
                        <br>
                        Saya memahami perlunya dan manfaat Tindakan tersebut sebagaimana telah dijelaskan seperti diatas kepada saya, termasuk resiko dan komplikasi yang mungkin timbul. Saya juga menyadari bahwa oleh karena ilmu kedokteran bukanlah ilmu pasti, maka saya tidak akan menuntut kemungkinan resiko yang timbul seperti telah dijelaskan.
                    </p>
                </div>
            </div>
            <div class="flex w-full gap-2">
                <div class="flex w-full items-center">
                    <p id="output-text" class="flex-1 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white dark:border-gray-600 text-right">
                        Bandung, <span id="selected-date">{{ \Carbon\Carbon::parse($poliGigiRujukan->tanggal)->format('d F Y') }}</span>, Jam <span id="selected-time">{{ $poliGigiRujukan->jam }}</span>
                    </p>
                </div>
            </div>
            
            
            <!-- Bagian Teks + Signature Pads 3, 4, 5 -->
            <div class="flex w-full gap-2 mt-2">
                <div class="flex w-full">
                    <div class="flex-1 text-center">
                        <p class="px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white dark:border-gray-600">
                            Yang menyatakan
                        </p>
                        <div class="border border-gray-300 dark:border-gray-600 rounded-md overflow-hidden">
                            <canvas id="signature-pad-3" class="bg-white dark:bg-gray-800 w-48 h-24"></canvas>
                            <input type="hidden" name="signature3" value="{{ $poliGigiRujukan->signature3 }}" readonly id="signature-pad-3-input">
                            <button type="button" class="clear-signature mt-2 px-4 py-1 text-sm bg-red-500 text-white rounded hover:bg-red-600" data-target="signature-pad-3">Clear</button>
                        </div>
                    </div>
                    
                    <div class="flex-1 text-center">
                        <p class="px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white dark:border-gray-600">
                            Saksi 1
                        </p>
                        <div class="border border-gray-300 dark:border-gray-600 rounded-md overflow-hidden">
                            <canvas id="signature-pad-4" class="bg-white dark:bg-gray-800 w-48 h-24"></canvas>
                            <input type="hidden" name="signature4" value="{{ $poliGigiRujukan->signature4 }}" readonly id="signature-pad-4-input">
                            <button type="button" class="clear-signature mt-2 px-4 py-1 text-sm bg-red-500 text-white rounded hover:bg-red-600" data-target="signature-pad-4">Clear</button>
                        </div>
                    </div>

                    <div class="flex-1 text-center">
                        <p class="px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white dark:border-gray-600">
                            Saksi 2
                        </p>
                        <div class="border border-gray-300 dark:border-gray-600 rounded-md overflow-hidden">
                            <canvas id="signature-pad-5" class="bg-white dark:bg-gray-800 w-48 h-24"></canvas>
                            <input type="hidden" name="signature5" value="{{ $poliGigiRujukan->signature5 }}" readonly id="signature-pad-5-input">
                            <button type="button" class="clear-signature mt-2 px-4 py-1 text-sm bg-red-500 text-white rounded hover:bg-red-600" data-target="signature-pad-5">Clear</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pb-4 pt-2">
                <button type="button" onclick="window.print()" class="print:hidden px-4 py-2 w-full bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    PRINT
                </button>
            </div>
            


        </form>
    </div>
</div>
</main>
</div>
<script>
    window.signaturePads = {}; // Simpan di window agar bisa diakses global

    function resizeCanvas(canvas) {
        const ratio = Math.max(window.devicePixelRatio || 1, 1);
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        canvas.getContext("2d").scale(ratio, ratio);
    }

    window.onload = function () {
        const ids = [
            'signature-pad-1',
            'signature-pad-2',
            'signature-pad-3',
            'signature-pad-4',
            'signature-pad-5'
        ];

        ids.forEach(id => {
            const canvas = document.getElementById(id);
            if (canvas) {
                resizeCanvas(canvas); // Penting: agar canvas bisa digunakan
                window.signaturePads[id] = new SignaturePad(canvas);
                console.log(`Initialized SignaturePad for: ${id}`);
            } else {
                console.error("Canvas not found:", id);
            }
        });

        // Saat form disubmit, ambil semua signature
        const form = document.getElementById("rujukan-form");
        if (form) {
            form.addEventListener("submit", function (event) {
                ids.forEach(id => {
                    const signaturePad = window.signaturePads[id];
                    const inputField = document.getElementById(id + "-input");

                    if (!inputField) {
                        console.error("Missing input field for:", id);
                        return;
                    }

                    if (signaturePad && !signaturePad.isEmpty()) {
                        inputField.value = signaturePad.toDataURL();
                    } else {
                        inputField.value = "";
                    }
                });
            });
        }

        // Clear signature
        document.querySelectorAll(".clear-signature").forEach(button => {
            button.addEventListener("click", function (event) {
                event.preventDefault();
                const targetId = this.getAttribute("data-target");
                const canvas = document.getElementById(targetId);
                const inputField = document.getElementById(targetId + "-input");

                if (window.signaturePads[targetId]) {
                    window.signaturePads[targetId].clear();
                    if (inputField) inputField.value = "";
                } else {
                    console.error("SignaturePad not found for:", targetId);
                }
            });
        });
    };
</script>

<script>
    window.onload = function () {
        const signaturePads = {};
        const ids = ['signature-pad-1', 'signature-pad-2', 'signature-pad-3', 'signature-pad-4', 'signature-pad-5'];

        ids.forEach(id => {
            const canvas = document.getElementById(id);
            if (canvas) {
                const signaturePad = new SignaturePad(canvas);
                signaturePads[id] = signaturePad;
                console.log(`Initialized SignaturePad for: ${id}`);

                const input = document.getElementById(id + "-input");

                if (input && input.value) {
                    // Load image to canvas
                    const ctx = canvas.getContext("2d");
                    const image = new Image();
                    image.onload = function () {
                        ctx.clearRect(0, 0, canvas.width, canvas.height);
                        ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
                    };
                    image.src = input.value;

                    // Make it readonly (disable drawing)
                    signaturePad.off();

                    // Optionally hide the clear button
                    const clearBtn = document.querySelector(`button[data-target="${id}"]`);
                    if (clearBtn) clearBtn.style.display = "none";
                }
            } else {
                console.error("Canvas not found:", id);
            }
        });

        // Form submit logic
        const form = document.getElementById("rujukan-form");
        if (form) {
            form.addEventListener("submit", function (event) {
                ids.forEach(id => {
                    const signaturePad = signaturePads[id];
                    const inputField = document.getElementById(id + "-input");

                    if (signaturePad && inputField && !signaturePad.isEmpty()) {
                        inputField.value = signaturePad.toDataURL();
                    }
                });
            });
        }

        // Clear button logic (only active if not readonly)
        document.querySelectorAll(".clear-signature").forEach(button => {
            button.addEventListener("click", function (event) {
                event.preventDefault();
                const targetId = this.getAttribute("data-target");
                const pad = signaturePads[targetId];
                const input = document.getElementById(targetId + "-input");

                if (pad) {
                    pad.clear();
                    if (input) input.value = "";
                }
            });
        });
    };
</script>



    
    

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let tanggalLahirInput = document.getElementById("tanggal_lahir");
        let umurInput = document.getElementById("umur");
        let umurCopy = document.getElementById("umur_copy");

        let nameInput = document.getElementById("name");
        let nameCopy = document.getElementById("name_copy");

        let alamatInput = document.getElementById("alamat");
        let alamatCopy = document.getElementById("alamat_copy");

        // 🔹 Step 2.1: Hitung Umur saat pilih Tanggal Lahir
        tanggalLahirInput.addEventListener("change", function () {
            let birthDate = new Date(this.value);
            let today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();
            let monthDiff = today.getMonth() - birthDate.getMonth();

            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }

            umurInput.value = age + " tahun";
            umurCopy.value = age + " tahun"; // Salin umur ke field duplikat
        });

        // 🔹 Step 2.2: Sinkronisasi Nama dan Alamat
        function syncValue(source, target) {
            source.addEventListener("input", function () {
                target.value = this.value;
            });
        }

        syncValue(nameInput, nameCopy);
        syncValue(alamatInput, alamatCopy);
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const datePicker = document.getElementById("date-picker");
        const timePicker = document.getElementById("time-picker");
        const selectedDate = document.getElementById("selected-date");
        const selectedTime = document.getElementById("selected-time");
        const inputContainer = document.getElementById("input-container");
        const saveButton = document.getElementById("save-btn");

        // Daftar nama bulan dalam bahasa Indonesia
        const bulanIndo = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];

        // Fungsi untuk mengubah format tanggal
        function formatTanggal(tanggal) {
            const dateObj = new Date(tanggal);
            const day = String(dateObj.getDate()).padStart(2, "0"); // Tanggal (01, 02, ... 31)
            const month = bulanIndo[dateObj.getMonth()]; // Nama bulan
            const year = dateObj.getFullYear(); // Tahun (2025, dst)
            return `${day} ${month} ${year}`;
        }

        // Event listener untuk tombol save
        saveButton.addEventListener("click", function (event) {
            event.preventDefault(); // Mencegah reload halaman

            if (datePicker.value && timePicker.value) {
                selectedDate.textContent = formatTanggal(datePicker.value); // Format tanggal
                selectedTime.textContent = timePicker.value; // Format jam tetap HH:MM
                inputContainer.style.display = "none"; // Sembunyikan input setelah save
            } else {
                alert("Harap pilih tanggal dan jam terlebih dahulu!");
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get all checkbox elements
        const checkboxes = document.querySelectorAll("input[type='checkbox']");

        checkboxes.forEach(checkbox => {
            const inputFieldId = checkbox.id.replace("_check", ""); // Match checkbox ID to input field ID
            const inputField = document.getElementById(inputFieldId);

            if (inputField) {
                inputField.readOnly = true; // Set default state to readonly

                checkbox.addEventListener("change", function () {
                    if (this.checked) {
                        inputField.readOnly = false;
                    } else {
                        inputField.readOnly = true;
                        inputField.value = ""; // Optionally clear input when unchecked
                    }
                });
            }
        });
    });
</script>
</body>
</html>