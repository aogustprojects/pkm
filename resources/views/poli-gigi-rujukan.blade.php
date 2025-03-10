<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    {{-- Alpine JS --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- CDN Font Awesome --}}
    <script src="https://kit.fontawesome.com/7b03306244.js" crossorigin="anonymous"></script>
    <title>Puskesmas Pasirjati</title>
    {{-- tw ele --}}
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    {{-- Signature pad --}}
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.1.7/dist/signature_pad.umd.min.js"></script>

</head>
<body class="h-full overflow-y-scroll overflow-x-hidden">

<div class="min-h-full">
<main>

<header class="relative bg-cover h-20 bg-center shadow-lg" style="background-image: url('/img/poli-gigi.jpg');">
  <div class="absolute inset-0 bg-black bg-opacity-40"></div>
  <div class="relative mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="sm:text-3xl text-xl font-bold tracking-tight text-white drop-shadow-md">RUJUKAN POLI GIGI</h1>
  </div>
</header>

<div class="flex justify-center mt-4 min-h-screen">
    <div class="bg-white w-3/4 border rounded-md">
        <h1 class="font-bold text-center mt-4">INFORMED CONSENT</h1>

        <form class="px-4 mx-auto mt-4 space-y-2" id="rujukan-form" method="POST" action="/poli-gigi-rujukan">
            @csrf
            <!-- Section 1: Patient Information -->
            <div class="flex w-full gap-2">
                <div class="flex w-full">
                    <p class="w-28 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">Nama</p>
                    <input type="text" id="name" name="name" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                </div>
        
                <div class="flex w-full">
                    <p class="w-28 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">No. RM</p>
                    <input type="text" id="no_rm" name="no_rm" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                </div>
            </div>
        
            <div class="flex w-full gap-2">
                <div class="flex w-full">
                    <p class="w-28 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">TTL / Umur</p>
                    <input type="text" id="ttl_umur" name="ttl_umur" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                </div>
        
                <div class="flex w-full">
                    <p class="w-28 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">Alamat</p>
                    <input type="text" id="alamat" name="alamat" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                </div>
            </div>

            <!-- Section 2: Information Provision -->
            <h1 class="font-bold text-center mt-4">PEMBERIAN INFORMASI</h1>

            <div class="flex w-full">
                <div class="flex w-full">
                    <p class="w-44 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">Petugas Pelaksana</p>
                    <input type="text" id="petugas_pel" name="p_pelaksana" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                </div>
            </div>
        
            <div class="flex w-full">
                <div class="flex w-full">
                    <p class="w-44 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">Pemberi Informasi</p>
                    <input type="text" id="pemberi_info" name="pemberi_info" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                </div>
            </div>
                    
            <div class="flex w-full">
                <div class="flex w-full">
                    <p class="w-44 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">Penerima Informasi</p>
                    <input type="text" id="penerima_info" name="penerima_info" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
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
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Diagnosis
                            </th>
                            <td class="px-6 py-4">
                                <input type="text" id="diagnosis" name="diagnosis" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center items-center">
                                    <input id="diagnosis_check" name="diagnosis_check" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="diagnosis_check" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4 text-center">
                                2
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nama dan Tujuan Tindakan
                            </th>
                            <td class="px-6 py-4">
                                <input type="text" id="nama_tujuan_tindakan" name="nama_tujuan_tindakan" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center items-center">
                                    <input id="nama_tujuan_tindakan_check" name="nama_tujuan_tindakan_check" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="nama_tujuan_tindakan_check" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4 text-center">
                                3
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Indikasi Tindakan
                            </th>
                            <td class="px-6 py-4">
                                <input type="text" id="indikasi_tindakan" name="indikasi_tindakan" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center items-center">
                                    <input id="indikasi_tindakan" name="indikasi_tindakan" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="indikasi_tindakan" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4 text-center">
                                4
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Tata Cara
                            </th>
                            <td class="px-6 py-4">
                                <input type="text" id="tata_cara" name="tata_cara" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center items-center">
                                    <input id="tata_cara_check" name="tata_cara_check" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="tata_cara_check" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4 text-center">
                                5
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Risiko & Komplikasi
                            </th>
                            <td class="px-6 py-4">
                                <input type="text" id="risiko_komplikasi" name="risiko_komplikasi" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center items-center">
                                    <input id="risiko_komplikasi_check" name="risiko_komplikasi_check" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="risiko_komplikasi_check" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4 text-center">
                                6
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Prognosis
                            </th>
                            <td class="px-6 py-4">
                                <input type="text" id="prognosis" name="prognosis" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center items-center">
                                    <input id="prognosis_check" name="prognosis_check" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="prognosis_check" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4 text-center">
                                7
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Alternatif & Risiko
                            </th>
                            <td class="px-6 py-4">
                                <input type="text" id="alternatif_risiko" name="alternatif_risiko" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center items-center">
                                    <input id="alternatif_risiko_check" name="alternatif_risiko_check" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="alternatif_risiko_check" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4 text-center">
                                8
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Perkiraan Biaya Tindakan
                            </th>
                            <td class="px-6 py-4">
                                <input type="text" id="biaya_tindakan" name="biaya_tindakan" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center items-center">
                                    <input id="biaya_tindakan_check" name="biaya_tindakan_check" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="biaya_tindakan_check" class="sr-only">checkbox</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Signature Pad 1 -->
            <div class="flex w-full">
                <div class="flex w-full">
                    <p class="flex-1 py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600 text-left">
                        Dengan ini menyatakan bahwa saya telah menerangkan hal-hal diatas secara benar dan jujur dan memberikan kesempatan untuk bertanya dan/ atau berdiskusi
                    </p>
                    <div class="flex flex-col items-center border border-gray-300 dark:border-gray-600 rounded-e-md overflow-hidden">
                        <canvas id="signature-pad-1" class="bg-white dark:bg-gray-800 w-48 h-24"></canvas>
                        <input type="hidden" name="signature1" id="signature-pad-1">
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
                        <canvas id="signature-pad-2" class="bg-white dark:bg-gray-800 w-48 h-24"></canvas>
                        <input type="hidden" name="signature2" id="signature-pad-2">
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
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                </div>
            </div>
            <div class="flex w-full gap-2">
                <div class="flex w-full">
                    <p class="w-44 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">Umur</p>
                    <input type="number" id="umur" name="umur" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                </div>
            </div>
            <div class="flex w-full gap-2">
                <div class="flex w-full">
                    <p class="w-44 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">Jenis Kelamin</p>
                    <select id="jenis_kelamin" name="jenis_kelamin" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:border-blue-500">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="flex w-full gap-2">
                <div class="flex w-full">
                    <p class="w-44 shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-s-md dark:bg-gray-700 dark:text-white dark:border-gray-600">Alamat</p>
                    <input type="text" id="alamat" name="alamat" value="{{ old('alamat') }}" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" />
                </div>
            </div>
            <div class="flex flex-col w-full gap-2">
                <label class="flex items-center gap-2 py-3 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    <input type="radio" name="persetujuan_tindakan" value="menyetujui" class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                    Dengan ini menyatakan <strong>"MENYETUJUI"</strong> untuk dilakukan Tindakan
                </label>
            
                <label class="flex items-center gap-2 py-3 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    <input type="radio" name="persetujuan_tindakan" value="menolak" class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
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
                    <p id="output-text" class="flex-1 py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white dark:border-gray-600 text-right">
                        Bandung, <span id="selected-date">[Pilih Tanggal]</span>, Jam <span id="selected-time">[Pilih Jam]</span>
                    </p>
                </div>
            </div>
            
            <!-- Input untuk memilih tanggal & jam -->
            <div id="input-container" class="mt-2">
                <div class="flex w-full gap-2">
                    <label class="text-sm font-medium">Pilih Tanggal:</label>
                    <input type="date" id="date-picker" name="tanggal" class="border border-gray-300 rounded-md px-2 py-1 text-sm dark:bg-gray-700 dark:text-white">
                </div>
            
                <div class="flex w-full gap-2 mt-2">
                    <label class="text-sm font-medium">Pilih Jam:</label>
                    <input type="time" id="time-picker" name="jam" class="border border-gray-300 rounded-md px-2 py-1 text-sm dark:bg-gray-700 dark:text-white">
                </div>
            
                <!-- Tombol Save -->
                <div class="flex w-full mt-2">
                    <button id="save-btn" type="submit" class="px-4 py-1 text-sm bg-blue-500 text-white rounded hover:bg-blue-600">Save</button>
                </div>
            </div>
            

            <!-- Bagian Teks + Signature Pads 3, 4, 5 -->
            <div class="flex w-full gap-2 mt-2">
                <div class="flex w-full">
                    <div class="flex-1 text-center">
                        <p class="py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white dark:border-gray-600">
                            Yang menyatakan
                        </p>
                        <div class="border border-gray-300 dark:border-gray-600 rounded-md overflow-hidden">
                            <canvas id="signature-pad-3" class="bg-white dark:bg-gray-800 w-48 h-24"></canvas>
                            <input type="hidden" name="signature3" id="signature-pad-3">
                            <button type="button" class="clear-signature mt-2 px-4 py-1 text-sm bg-red-500 text-white rounded hover:bg-red-600" data-target="signature-pad-3">Clear</button>
                        </div>
                    </div>
                    
                    <div class="flex-1 text-center">
                        <p class="py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white dark:border-gray-600">
                            Saksi 1
                        </p>
                        <div class="border border-gray-300 dark:border-gray-600 rounded-md overflow-hidden">
                            <canvas id="signature-pad-4" class="bg-white dark:bg-gray-800 w-48 h-24"></canvas>
                            <input type="hidden" name="signature4" id="signature-pad-4">
                            <button type="button" class="clear-signature mt-2 px-4 py-1 text-sm bg-red-500 text-white rounded hover:bg-red-600" data-target="signature-pad-4">Clear</button>
                        </div>
                    </div>

                    <div class="flex-1 text-center">
                        <p class="py-2.5 px-4 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-white dark:border-gray-600">
                            Saksi 2
                        </p>
                        <div class="border border-gray-300 dark:border-gray-600 rounded-md overflow-hidden">
                            <canvas id="signature-pad-5" class="bg-white dark:bg-gray-800 w-48 h-24"></canvas>
                            <input type="hidden" name="signature5" id="signature-pad-5">
                            <button type="button" class="clear-signature mt-2 px-4 py-1 text-sm bg-red-500 text-white rounded hover:bg-red-600" data-target="signature-pad-5">Clear</button>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Submit
            </button>


        </form>
    </div>
</div>
</main>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const signaturePads = {};

    // Initialize all signature pads dynamically
    document.querySelectorAll("canvas[id^='signature-pad']").forEach(canvas => {
        const id = canvas.id;
        signaturePads[id] = new SignaturePad(canvas);
        console.log(`Initialized SignaturePad for: ${id}`); // Debugging
    });

    console.log("Initialized SignaturePads:", signaturePads); // Debugging

    // Save signature before submitting the form
    document.getElementById("rujukan-form").addEventListener("submit", function (event) {
        Object.keys(signaturePads).forEach((id) => {
            const signaturePad = signaturePads[id];
            const inputField = document.getElementById(id + "-input");

            if (signaturePad.isEmpty()) {
                inputField.value = "";
            } else {
                inputField.value = signaturePad.toDataURL(); // Convert canvas to Base64
            }
        });
    });

    // Clear signature event listener
    document.querySelectorAll(".clear-signature").forEach(button => {
        button.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent reload

            const targetId = this.getAttribute("data-target");
            const canvas = document.getElementById(targetId);
            const inputField = document.getElementById(targetId + "-input");

            console.log("Clearing:", targetId, canvas, inputField); // Debugging

            if (signaturePads[targetId]) {
                signaturePads[targetId].clear(); // Clear canvas
                if (inputField) inputField.value = ""; // Reset hidden input
            } else {
                console.error("SignaturePad not found for:", targetId);
            }
        });
    });
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
</body>
</html>