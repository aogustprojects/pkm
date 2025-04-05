<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    {{-- Alpine JS --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- CDN Font Awesome --}}
    <script src="https://kit.fontawesome.com/7b03306244.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
    {{-- Trix text editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <style>
      trix-toolbar [data-trix-button-group='file-tools'] {
         display: none
      }
    </style>
</head>
<body>
<x-nav-bars></x-nav-bars>


<!-- drawer component -->
<div id="drawer-navigation" class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
    <h5 id="drawer-navigation-label" class="text-base font-semibold text-white uppercase">Menu</h5>
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
  <div class="py-4 overflow-y-auto">
      <ul class="space-y-2 font-medium">
        <li>
            <a href="/dashboard" class="flex items-center space-x-3 p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-700 dark:hover:bg-gray-700 group {{ request()->is('dashboard') ? 'bg-gray-900 dark:bg-gray-700' : '' }}">
                <span class="flex h-5 w-5 items-center">
                    <i class="fa-solid fa-house text-sm text-white"></i>
                </span>
                <span class="text-sm leading-none text-white">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/dashboard/postingan" class="flex items-center space-x-3 p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-700 dark:hover:bg-gray-700 group {{ request()->is('dashboard/postingan*') ? 'bg-gray-900 dark:bg-gray-700' : '' }}">
                <span class="flex h-5 w-5 items-center">
                    <i class="fa-solid fa-grip text-sm text-white"></i>
                </span>
                <span class="text-sm leading-none text-white">Postingan</span>
            </a>
        </li>
        <li>
            <a id="dropdownPoliGigiButton" data-dropdown-toggle="dropdownPoliGigi"  class="flex items-center space-x-3 p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-700 dark:hover:bg-gray-700 group {{ request()->is('dashboard/poli-gigi*') ? 'bg-gray-900 dark:bg-gray-700' : '' }}">
                <span class="flex h-5 w-5 items-center">
                    <i class="fa-solid fa-tooth text-sm text-white"></i>
                </span>
                <span class="text-sm leading-none text-white">Poli Gigi</span>
                <span class="flex h-5 w-5 items-center">
                    <i class="fa-solid fa-angle-down text-sm text-white"></i>
                </span>
            </a>
        </li>
        <!-- Dropdown menu -->
        <div id="dropdownPoliGigi" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
                <a href="/dashboard/poli-gigi" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Poli Gigi</a>
            </li>
            <li>
                <a href="/dashboard/poli-gigi-rujukan" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Rujukan</a>
            </li>
            </ul>
        </div>
        <li>
            <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown"  class="flex items-center space-x-3 p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-700 dark:hover:bg-gray-700 group {{ request()->is('dashboard/arsip_surat_masuk*', 'dashboard/arsip_surat_keluar*')  ? 'bg-gray-900 dark:bg-gray-700' : '' }}">
                <span class="flex h-5 w-5 items-center">
                    <i class="fa-solid fa-envelope-open-text text-sm text-white"></i>
                </span>
                <span class="text-sm leading-none text-white">Arsip Surat</span>
                <span class="flex h-5 w-5 items-center">
                    <i class="fa-solid fa-angle-down text-sm text-white"></i>
                </span>
            </a>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="/dashboard/arsip_surat_masuk" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Surat Masuk</a>
                </li>
                <li>
                    <a href="/dashboard/arsip_surat_keluar" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Surat Keluar</a>
                </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="/logout" class="flex items-center space-x-3 p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-700 dark:hover:bg-gray-700 group">
                <span class="flex h-5 w-5 items-center">
                    <i class="fa-solid fa-right-from-bracket text-sm text-white"></i>
                </span>
                <span class="text-sm leading-none text-white">Logout</span>
            </a>
        </li>
        
      </ul>
   </div>
</div>
