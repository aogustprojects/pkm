<x-main-dashboard></x-main-dashboard>

<div class="px-2 py-2">
  <div class="grid lg:grid-cols-1 py-5 px-5 lg:grid-rows-2">
    <div class="relative lg:row-span-2">
      <div class="relative max-lg:row-start-1">
        <div class="absolute inset-px rounded-lg shadow-lg border flex flex-col md:flex-row"></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
          <div class="px-8 py-8 sm:px-10 sm:pt-10">

            @if (session('success'))
            <div class="mb-4 p-4 bg-green-500 text-white rounded-lg">
              <strong>Sukses!</strong> {{ session('success') }}
            </div>
            @endif

            <div class="flex justify-between mb-5">
              <p class="mt-2 mb-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">
                List Realisasi Kegiatan Bulanan
              </p>

              <form action="" method="GET" class="flex items-center max-w-sm mx-auto">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                  <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <i class="fa-solid text-gray-500 fa-magnifying-glass"></i>
                  </div>
                  <input type="text" name="search" id="simple-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                    placeholder="Cari Kegiatan..." value="{{ request('search') }}" />
                </div>
                <button type="submit"
                  class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                  <i class="fa fa-search"></i>
                  <span class="sr-only">Search</span>
                </button>
              </form>

              <a href=""
                class="bg-blue-700 rounded-lg px-2 py-3 text-sm text-white hover:bg-blue-900">Tambah Realisasi</a>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                    <th class="px-6 py-3 text-center">No</th>
                    <th class="px-6 py-3 text-center">Kegiatan</th>
                    <th class="px-6 py-3 text-center">Bulan</th>
                    <th class="px-6 py-3 text-center">Capaian</th>
                    <th class="px-6 py-3 text-center">Target (%)</th>
                    <th class="px-6 py-3 text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($data as $item)
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4 text-center">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4 text-center">{{ $item->layanan->nama_kegiatan ?? '-' }}</td>
                    <td class="px-6 py-4 text-center text-capitalize">{{ ucfirst($item->bulan) }}</td>
                    <td class="px-6 py-4 text-center">{{ $item->capaian }}</td>
                    <td class="px-6 py-4 text-center">{{ $item->target_persen }}%</td>
                    <td class="px-6 py-4 text-center">
                      <div class="flex justify-center items-center space-x-2">
                        <a href="{{ route('realisasi_kegiatan.edit', $item->id) }}">
                          <i class="fa-solid fa-pen text-yellow-400 hover:text-yellow-100 bg-gray-100 hover:bg-gray-700 px-2 py-2 rounded-lg border-2 text-lg"></i>
                        </a>
                        <form action="{{ route('realisasi_kegiatan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit">
                            <i class="fa-solid fa-trash text-red-400 hover:text-red-100 bg-gray-100 hover:bg-gray-700 px-2 py-2 rounded-lg border-2 text-lg"></i>
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="6" class="text-center px-6 py-4">Data belum tersedia</td>
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
