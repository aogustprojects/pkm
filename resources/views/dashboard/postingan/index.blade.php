<x-main-dashboard></x-main-dashboard>
      <div class="p-4 sm:ml-64">
         <div class="bg-gray-100 rounded-3xl pb-8">
            <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
              <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-1 lg:grid-rows-2">
                <div class="relative lg:row-span-2">
                </div>
                <div class="relative max-lg:row-start-1">
                  <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem]"></div>
                  <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                    <div class="px-8 py-8 sm:px-10 sm:pt-10">
                      <p class="mt-2 mb-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">List Postingan</p>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                           <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                 <tr>
                                       <th scope="col" class="px-6 py-3">
                                          No
                                       </th>
                                       <th scope="col" class="px-6 py-3">
                                          Judul
                                       </th>
                                       <th scope="col" class="px-6 py-3">
                                          Kategori
                                       </th>
                                       <th scope="col" class="px-6 py-3">
                                          Aksi
                                       </th>
                                 </tr>
                              </thead>
                              <tbody>
                                @foreach ($postingan as $post)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                       Apple MacBook Pro 17"
                                    </th>
                                    <td class="px-6 py-4">
                                       {{ $post->title }}
                                    </td>
                                    <td class="px-6 py-4">
                                       Laptop
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                       <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                                 
                              </tbody>
                           </table>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
      </div>      
</html>