<x-main-dashboard></x-main-dashboard>
<div class="px-20">
  <div class="bg-gray-100 rounded-3xl pb-8">
    <div class="mx-auto px-6 lg:max-w-7xl lg:px-8">
      <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-1 lg:grid-rows-2">
        <div class="relative lg:row-span-2"></div>
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
                <p class="mt-2 mb-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">List Pasien Poli Gigi</p>
              </div>

              <form method="GET" class="mb-4">
                  <label for="date" class="mr-2 text-sm">Pilih Tanggal:</label>
                  <input type="date" id="date" name="date" value="{{ $selectedDate }}" class="border p-2 text-sm rounded-md">
                  <button type="submit" class="ml-2 bg-blue-500 hover:bg-blue-900 text-white py-2 px-4 rounded-md">Filter</button>
              </form>

              <div class="relative overflow-x-auto shadow-md sm:rounded-lg"> 
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="text-center">
                      <th scope="col" class="px-3 py-3">No</th>
                      <th scope="col" class="px-3 py-3">Nama Pasien</th>
                      <th scope="col" class="px-3 py-3">NIK</th>
                      <th scope="col" class="px-3 py-3">Status Pasien</th>
                      <th scope="col" class="px-3 py-3">Jenis Kelamin</th>
                      <th scope="col" class="px-3 py-3">Jenis Pasien</th>
                      <th scope="col" class="px-3 py-3">Nomor BPJS</th>
                      <th scope="col" class="px-3 py-3">Alamat</th>
                      <th scope="col" class="px-3 py-3">Tanggal</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @forelse ($poligigi as $gigi)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                      <th scope="row" class="px-3 py-3 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $loop->iteration }}
                      </th>
                      <td class="px-3 py-3">{{ $gigi->nama }}</td>
                      <td class="px-3 text-center py-3">{{ $gigi->nik }}</td>
                      <td class="px-3 text-center py-3">{{ $gigi->status_pasien }}</td>
                      <td class="px-3 text-center py-3">{{ $gigi->jenis_kelamin }}</td>
                      <td class="px-3 text-center py-3">{{ $gigi->jenis_pasien }}</td>
                      <td class="px-3 text-center py-3">{{ $gigi->no_bpjs ?? '-' }}</td>
                      <td class="px-3 py-3">{{ $gigi->alamat }}</td>
                      <td class="px-3 text-center py-3">
                        {{ $gigi->created_at->timezone('Asia/Jakarta')->format('d M Y H:i') }}
                      </td>                    
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
