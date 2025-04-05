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
                  <p class="mt-2 mb-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">List Surat Masuk</p>
                  <form action="{{ route('arsip_surat_masuk.index') }}" method="GET" class="flex items-center max-w-sm mx-auto">   
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                          <i class="fa-solid text-gray-500 fa-magnifying-glass"></i>
                        </div>
                        <input type="text" name="search" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Surat... "  value="{{ request('search') }}" />
                    </div>
                    <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                  </form>
                  <a href="/dashboard/arsip_surat_masuk/create" class="bg-blue-700 rounded-lg px-2 py-3 text-sm text-white hover:bg-blue-900 hover:text-white">Tambah Surat Masuk</a>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-center">No</th>
                        <th scope="col" class="px-6 py-3 text-center">Tanggal Terima</th>
                        <th scope="col" class="px-6 py-3 text-center">Nomor Surat</th>
                        <th scope="col" class="px-6 py-3 text-center">Tanggal Surat</th>
                        <th scope="col" class="px-6 py-3 text-center">Pengirim</th>
                        <th scope="col" class="px-6 py-3 text-center">Perihal</th>
                        <th scope="col" class="px-6 py-3 text-center">Diteruskan Ke</th>
                        <th scope="col" class="px-6 py-3 text-center">File</th>
                        <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tbody>
                        @forelse ($arsipSuratMasuk as $surat)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                          <th scope="row" class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }} <!-- This will display the row number -->
                          </th>
                          <td class="px-6 py-4 text-center">
                            {{ \Carbon\Carbon::parse($surat->tanggal_terima)->format('d/m/Y') }} <!-- Format the date -->
                          </td>
                          <td class="px-6 py-4 text-center">
                            {{ $surat->nomor_surat }}
                          </td>
                          <td class="px-6 py-4 text-center">
                            {{ \Carbon\Carbon::parse($surat->tanggal_surat)->format('d/m/Y') }} <!-- Format the date -->
                          </td>
                          <td class="px-6 py-4 text-center">
                            {{ $surat->pengirim }}
                          </td>
                          <td class="px-6 py-4 text-center">
                            {{ $surat->perihal }}
                          </td>
                          <td class="px-6 py-4 text-center">
                            {{ $surat->diteruskan_kepada }}
                          </td>
                          <td class="px-6 py-4 hover:underline hover:text-blue-500 text-center">
                            <i class="fa-solid fa-file-arrow-down"></i>
                            <a href="{{ asset('storage/' . $surat->document_path) }}" target="_blank">Download</a>
                          </td>
                          <td class="px-6 py-4 text-center">
                            <div class="flex justify-center items-center space-x-2">
                                <a href="{{ route('arsip_surat_masuk.show', $surat->id) }}">
                                    <span>
                                        <i class="fa-solid bg-gray-100 hover:bg-gray-700 px-2 py-2 rounded-lg border-2 fa-eye text-lg text-blue-400 hover:text-blue-100"></i>
                                    </span>
                                </a>
                                <a href="/dashboard/arsip_surat_masuk/{{ $surat->id }}/edit">
                                    <span>
                                        <i class="fa-solid bg-gray-100 hover:bg-gray-700 px-2 py-2 rounded-lg border-2 fa-pen text-lg text-yellow-400 hover:text-yellow-100"></i>
                                    </span>
                                </a>
                                <form action="{{ route('arsip_surat_masuk.destroy', $surat->id) }}" method="POST" class="inline-flex items-center">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center bg-transparent border-0" onclick="return confirm('Apakah kamu yakin?')">
                                        <span>
                                            <i class="fa-solid fa-trash bg-gray-100 hover:bg-gray-700 px-2 py-2 rounded-lg border-2 text-lg text-red-400 hover:text-red-100"></i>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </td>
                        
                      </tr>
                      @empty
                      <tr>
                        <td colspan="8" class="text-center px-6 py-4">No data available</td>
                      </tr>
                      @endforelse
                    </tbody>
                    {{ $arsipSuratMasuk->links() }}
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
      if (window.location.pathname === "/dashboard/arsip_surat_masuk") { 
          document.body.style.zoom = "95%"; 
      }
  });
</script>
