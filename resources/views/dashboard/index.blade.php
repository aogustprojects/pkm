<!DOCTYPE html>
<html lang="en">
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
    <title>Dashboard</title>
</head>
<body>
<x-nav-bars></x-nav-bars>
      
      <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
         <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                     </svg>
                     <span class="ms-3 text-sm">Dashboard</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                     </svg>
                     <span class="flex-1 ms-3 whitespace-nowrap text-sm">Postingan</span>
               </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <svg class="w-6 h-6 text-gray-500 dark:text-white group-hover:text-gray-900  " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
                      </svg>
                     <span class="flex-1 ms-3 whitespace-nowrap text-sm">Logout</span>
                  </a>
               </li>
            </ul>
         </div>
      </aside>
      
      <div class="p-4 sm:ml-64">
         <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="grid grid-cols-3 gap-4 mb-4">
               <div class="flex items-center justify-center h-24 rounded-sm bg-gray-50 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
               <div class="flex items-center justify-center h-24 rounded-sm bg-gray-50 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
               <div class="flex items-center justify-center h-24 rounded-sm bg-gray-50 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded-sm bg-gray-50 dark:bg-gray-800">
               <p class="text-2xl text-gray-400 dark:text-gray-500">
                  <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                  </svg>
               </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
               <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
               <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
               <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
               <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded-sm bg-gray-50 dark:bg-gray-800">
               <p class="text-2xl text-gray-400 dark:text-gray-500">
                  <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                  </svg>
               </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
               <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
               <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
               <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
               <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
            </div>
         </div>
      </div>      
</html>