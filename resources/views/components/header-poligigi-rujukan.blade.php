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

<header class="relative bg-cover h-20 bg-center shadow-lg print:hidden" style="background-image: url('/img/poli-gigi.jpg');">
  <div class="absolute inset-0 bg-black bg-opacity-40"></div>
  <div class="relative mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="sm:text-3xl text-xl font-bold tracking-tight text-white drop-shadow-md">PERSETUJUAN TINDAKAN</h1>
  </div>
</header>


<div class="hidden print:flex items-center justify-between mb-4 px-4">
    <!-- Logo -->
    <div class="w-20 h-20">
        <img src="{{ asset('img/logo_kop.png') }}" alt="Logo Puskesmas" class="w-full h-full object-contain">
    </div>

    <!-- Centered Text -->
    <div class="flex-1 text-center">
        <h1 class="text-xl font-bold">PEMERINTAH KOTA BANDUNG</h1>
        <h1 class="text-xl font-bold">DINAS KESEHATAN</h1>
        <h1 class="text-xl font-bold">UPTD PUSKESMAS PASIR JATI</h1>
        <p class="text-xs">Jl Nagrog III RT.03 RW.08, Kelurahan Pasirjati, Kecamatan Ujungberung, Kota Bandung</p>
        <p class="text-xs">Email : uptdpkmpsj@gmail.com</p>
    </div>

    <!-- Empty spacer to balance layout -->
    <div class="w-20 h-20"></div>
</div>

<!-- Bold bottom border -->
<div class="hidden print:block border-b-4 border-black mx-2 mb-2"></div>