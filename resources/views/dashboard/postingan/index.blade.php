<x-main-dashboard></x-main-dashboard>
<div class="p-4 sm:ml-64">

  <div class="bg-gray-100 rounded-3xl pb-8">
    <div class="mx-auto px-6 lg:max-w-7xl lg:px-8">
      <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-1 lg:grid-rows-2">
        <div class="relative lg:row-span-2">
        </div>
        <div class="relative max-lg:row-start-1">
          <div class="absolute inset-px rounded-lg bg-white flex flex-col md:flex-row"></div>
          <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
            <div class="px-8 py-8 sm:px-10 sm:pt-10">
              @if (session('success'))
              <div class="mb-4 p-4 bg-green-500 text-white rounded-lg">
                <strong>Sukses!</strong> {{ session('success') }}
              </div>
              @endif
              <div class="flex justify-between mb-5">
                <p class="mt-2 mb-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">List Postingan</p>
                <a href="/dashboard/postingan/create" class="bg-blue-400 rounded-lg px-2 py-3 text-sm text-black hover:bg-blue-900 hover:text-white">Tambah Post</a>
              </div>
              <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                      <th scope="col" class="px-6 py-3">No</th>
                      <th scope="col" class="px-6 py-3">Judul</th>
                      <th scope="col" class="px-6 py-3">Kategori</th>
                      <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($postingan as $post)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                      <th scope="row" class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $loop->iteration }}
                      </th>
                      <td class="px-6 py-4">
                        {{ $post->title }}
                      </td>
                      <td class="px-6 py-4">
                        {{ $post->category->name ?? 'Kategori tidak ada' }}
                      </td>
                      <td class="px-6 py-4 text-center">
                        <a href="/dashboard/postingan/{{ $post->slug }}">
                          <span>
                            <i class="fa-solid bg-gray-100 hover:bg-gray-700 px-2 py-2 rounded-lg border-2 fa-eye text-lg text-blue-400 hover:text-blue-100"></i>
                          </span>
                        </a>
                        <a href="/dashboard/postingan/{{ $post->slug }}/edit">
                          <span>
                            <i class="fa-solid bg-gray-100 hover:bg-gray-700 fa-pen px-2 py-2 rounded-lg border-2 fa-eye text-lg text-yellow-400 hover:text-yellow-100"></i>
                          </span>
                        </a>
                        <form action="{{ route('postingan.destroy', $post->slug) }}" method="POST" class="inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="bg-transparent border-0" onclick="return confirm('Apakah kamu yakin?')">
                            <span>
                              <i class="fa-solid fa-trash bg-gray-100 hover:bg-gray-700 fa-pen px-2 py-2 rounded-lg border-2 fa-eye text-lg text-red-400 hover:text-red-100"></i>
                            </span>
                          </button>
                        </form>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="4" class="text-center">Tidak ada postingan.</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
