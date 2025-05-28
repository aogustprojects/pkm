<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://kit.fontawesome.com/7b03306244.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <style>
        trix-toolbar [data-trix-button-group='file-tools'] {
            display: none;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }
        #drawer-navigation {
            background: linear-gradient(180deg, #3730a3 0%, #1f2937 100%);
            box-shadow: 2px 0 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out;
            overflow-x: hidden;
        }
        #drawer-navigation-label {
            color: #e5e7eb;
            letter-spacing: 0.05em;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 0.5rem;
        }
        .drawer-item {
            transition: all 0.2s ease;
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            margin: 0.25rem 0;
            display: flex;
            align-items: center; /* Vertically center icon and text */
            gap: 0.75rem; /* Consistent spacing between icon and text */
        }
        .drawer-item:hover {
            background-color: #312e81;
            padding-left: 1.25rem;
        }
        .drawer-item.active {
            background-color: #1e1b4b;
            color: #ffffff;
            font-weight: 600;
        }
        .drawer-item i {
            transition: transform 0.2s ease;
            font-size: 0.875rem; /* Match text size for consistency */
        }
        .drawer-item:hover i {
            transform: scale(1.2);
        }
        .drawer-item span {
            display: flex;
            align-items: center; /* Ensure text and icon containers align */
        }
        .dropdown-menu {
            background-color: #1e1b4b;
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-left: 2rem;
            width: 200px;
        }
        .dropdown-menu li a {
            padding: 0.5rem 1rem;
            color: #e5e7eb;
            transition: all 0.2s ease;
        }
        .dropdown-menu li a:hover {
            background-color: #312e81;
            color: #ffffff;
            padding-left: 1.5rem;
        }
        .close-button {
            background-color: #1e1b4b;
            transition: all 0.2s ease;
        }
        .close-button:hover {
            background-color: #1e1b4b;
            transform: rotate(90deg);
        }
    </style>
</head>
<body>
@auth
    <x-nav-bars></x-nav-bars>
@endauth


<div id="drawer-navigation" class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full" tabindex="-1" aria-labelledby="drawer-navigation-label">
    <h5 id="drawer-navigation-label" class="text-base font-semibold uppercase">Menu</h5>
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="close-button text-white hover:bg-gray-200 hover:text-gray-200 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div class="py-4 overflow-y-auto">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/dashboard" class="drawer-item text-gray-900 dark:text-white {{ request()->is('dashboard') ? 'active' : '' }}">
                    <span class="flex h-5 w-5 items-center">
                        <i class="fa-solid fa-house text-white"></i>
                    </span>
                    <span class="text-sm leading-none text-white">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/postingan" class="drawer-item text-gray-900 dark:text-white {{ request()->is('dashboard/postingan*') ? 'active' : '' }}">
                    <span class="flex h-5 w-5 items-center">
                        <i class="fa-solid fa-grip text-white"></i>
                    </span>
                    <span class="text-sm leading-none text-white">Postingan</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/kegiatan" class="drawer-item text-gray-900 dark:text-white {{ request()->is('dashboard/realisasi-kegiatan*') ? 'active' : '' }}">
                    <span class="flex h-5 w-5 items-center">
                        <i class="fa-solid fa-chart-line text-white"></i>
                    </span>
                    <span class="text-sm leading-none text-white">Realisasi Kegiatan</span>
                </a>
            </li>
            <li>
                <a id="dropdownPoliGigiButton" data-dropdown-toggle="dropdownPoliGigi" class="drawer-item text-gray-900 dark:text-white {{ request()->is('dashboard/poli-gigi*') ? 'active' : '' }}">
                    <span class="flex h-5 w-5 items-center">
                        <i class="fa-solid fa-tooth text-white"></i>
                    </span>
                    <span class="text-sm leading-none text-white">Poli Gigi</span>
                    <span class="flex h-5 w-5 items-center">
                        <i class="fa-solid fa-angle-down text-white"></i>
                    </span>
                </a>
                <div id="dropdownPoliGigi" class="dropdown-menu z-10 hidden divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownPoliGigiButton">
                        <li>
                            <a href="/dashboard/poli-gigi" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Poli Gigi</a>
                        </li>
                        <li>
                            <a href="/dashboard/poli-gigi-rujukan" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Rujukan</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="drawer-item text-gray-900 dark:text-white {{ request()->is('dashboard/arsip_surat_masuk*', 'dashboard/arsip_surat_keluar*') ? 'active' : '' }}">
                    <span class="flex h-5 w-5 items-center">
                        <i class="fa-solid fa-envelope-open-text text-white"></i>
                    </span>
                    <span class="text-sm leading-none text-white">Arsip Surat</span>
                    <span class="flex h-5 w-5 items-center">
                        <i class="fa-solid fa-angle-down text-white"></i>
                    </span>
                </a>
                <div id="dropdown" class="dropdown-menu z-10 hidden divide-y divide-gray-100 rounded-lg shadow-sm w-44">
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
                <a href="/dashboard/pegawai" class="drawer-item text-gray-900 dark:text-white {{ request()->is('dashboard/pegawai*') ? 'active' : '' }}">
                    <span class="flex h-5 w-5 items-center">
                        <i class="fa-solid fa-user text-white"></i>
                    </span>
                    <span class="text-sm leading-none text-white">Data Pegawai</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/keluhan" class="drawer-item text-gray-900 dark:text-white {{ request()->is('dashboard/keluhan*') ? 'active' : '' }}">
                    <span class="flex h-5 w-5 items-center">
                        <i class="fa-solid fa-flag text-white"></i>
                    </span>
                    <span class="text-sm leading-none text-white">Report Keluhan</span>
                </a>
            </li>
            <li>
                <a href="/logout" class="drawer-item text-gray-900 dark:text-white">
                    <span class="flex h-5 w-5 items-center">
                        <i class="fa-solid fa-right-from-bracket text-white"></i>
                    </span>
                    <span class="text-sm leading-none text-white">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
</body>
</html>