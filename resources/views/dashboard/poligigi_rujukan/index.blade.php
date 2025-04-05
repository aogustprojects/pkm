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
                <p class="mt-2 mb-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">List Rujukan Poli Gigi</p>
                <a href="/poli-gigi-rujukan" target="_blank" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                  Tambah Rujukan
                </a>
              </div>


              <div class="relative overflow-x-auto shadow-md sm:rounded-lg"> 
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="text-center">
                      <th scope="col" class="px-3 py-3">No</th>
                      <th scope="col" class="px-3 py-3">Nama Pasien</th>
                      <th scope="col" class="px-3 py-3">No.RM</th>
                      <th scope="col" class="px-3 py-3">Jenis Kelamin</th>
                      <th scope="col" class="px-3 py-3">Alamat</th>
                      <th scope="col" class="px-3 py-3">Tanggal</th>
                      <th scope="col" class="px-3 py-3">Aksi</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @forelse ($poligigi as $gigi)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                      <th scope="row" class="px-3 py-3 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $loop->iteration }}
                      </th>
                      <td class="px-3 text-center py-3">{{ $gigi->name }}</td>
                      <td class="px-3 text-center py-3">{{ $gigi->no_rm }}</td>
                      <td class="px-3 text-center py-3">{{ $gigi->jenis_kelamin }}</td>
                      <td class="px-3 text-center py-3">{{ $gigi->alamat }}</td>
                      <td class="px-3 text-center py-3">
                        {{ \Carbon\Carbon::parse($gigi->tanggal)->format('d M Y') }}
                      </td>
                      <td class="px-6 py-4 justify-center flex items-center space-x-2">
                        <a href="/dashboard/poli-gigi-rujukan/{{ $gigi->id }}">
                          <span>
                            <i class="fa-solid bg-gray-100 hover:bg-gray-700 px-2 py-2 rounded-lg border-2 fa-eye text-lg text-blue-400 hover:text-blue-100"></i>
                          </span>
                        </a>
                        <a href="/dashboard/poli-gigi-rujukan/{{ $gigi->id }}/edit">
                          <span>
                            <i class="fa-solid bg-gray-100 hover:bg-gray-700 fa-pen px-2 py-2 rounded-lg border-2 fa-eye text-lg text-yellow-400 hover:text-yellow-100"></i>
                          </span>
                        </a>
                        <form action="{{ route('poli-gigi-rujukan.destroy', $gigi->id) }}" method="POST" class="inline-flex items-center">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="inline-flex items-center bg-transparent border-0" onclick="return confirm('Apakah kamu yakin?')">
                            <span>
                              <i class="fa-solid fa-trash bg-gray-100 hover:bg-gray-700 px-2 py-2 rounded-lg border-2 text-lg text-red-400 hover:text-red-100"></i>
                            </span>
                          </button>
                        </form>                    
                    </tr>
                    @empty
                    <tr>
                      <td colspan="9" class="text-center">Tidak ada pasien yang terdaftar.</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
                {{ $poligigi->links() }}
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const jenisPasien = document.getElementById("jenis_pasien");
    const noBpjs = document.getElementById("no_bpjs");

    if (jenisPasien && noBpjs) {
        jenisPasien.addEventListener("change", function () {
            if (this.value === "Umum") {
                noBpjs.value = ""; // Clear input
                noBpjs.disabled = true; // Disable input field
            } else {
                noBpjs.disabled = false; // Enable input field when selecting BPJS
            }
        });
    }
});
</script>


