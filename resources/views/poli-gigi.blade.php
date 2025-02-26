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

</head>
<body class="h-full overflow-y-scroll overflow-x-hidden">

<div class="min-h-full">

<header class="relative bg-cover h-20 bg-center shadow-lg" style="background-image: url('/img/poli-gigi.jpg');">
  <div class="absolute inset-0 bg-black bg-opacity-40"></div>
  <div class="relative mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="sm:text-3xl text-xl font-bold tracking-tight text-white drop-shadow-md">PENDAFTARAN POLI GIGI</h1>
  </div>
</header>

@php
    use Carbon\Carbon;
    use App\Models\PoliGigi;

    $now = Carbon::now('Asia/Jakarta');
    $allowedDays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    $startTime = $now->copy()->setTime(6, 15);
    $endTime = $now->copy()->setTime(10, 0);
    
    $today = $now->format('Y-m-d');
    $maxRegistrationsPerDay = 8;
    $currentRegistrations = PoliGigi::whereDate('created_at', $today)->count();
    $remainingSlots = max(0, $maxRegistrationsPerDay - $currentRegistrations);
@endphp


  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      @if (session('success'))
        <div class="mb-4 p-4 bg-green-500 text-white rounded-lg">
            <strong>Sukses!</strong> {{ session('success') }}
        </div>
      @endif

      @if (session('error'))
          <div class="mb-4 p-4 bg-red-500 text-white rounded-lg">
              <strong>Error!</strong> {{ session('error') }}
          </div>
      @endif
      @if (!in_array($now->format('l'), $allowedDays) || !$now->between($startTime, $endTime))
          <div class="mt-4 p-4 bg-red-500 text-white rounded-lg">
              <strong>Pendaftaran ditutup!</strong> Formulir pendaftaran hanya tersedia Senin - Sabtu dari pukul 06:15 - 10:00.
          </div>
      @elseif ($currentRegistrations >= $maxRegistrationsPerDay)
          <div class="mt-4 p-4 bg-red-500 text-white rounded-lg">
              <strong>Pendaftaran ditutup!</strong> Formulir pendaftaran hanya tersedia Senin - Sabtu dari pukul 06:15 - 10:00.Silakan daftar kembali besok.
          </div>
      @else
      @auth
      <div class="mt-4 p-4 bg-blue-500 text-white rounded-lg">
        <strong>Slot tersisa:</strong> {{ $remainingSlots }} pasien
      </div>
      @endauth
      
      <form action="/poli-gigi" method="POST">
        @csrf
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-600">Formulir pendaftaran dibuka <span class="text-gray-900">Senin-Sabtu</span> pukul <span class="text-gray-900">06.15</span></h2>
            <p class="mt-1 text-sm/6 text-gray-600">Jika berhasil terdaftar, silahkan melakukan daftar ulang di Puskesmas Pasir Jati pada pukul 08.00.</p>
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-3">
                <label for="nama" class="block text-sm/6 font-medium text-gray-900">Nama Pasien <span class="text-red-500">*</span></label>
                <div class="mt-2">
                  <input type="text" name="nama" id="nama"   class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
      
              <div class="sm:col-span-3">
                <label for="nik" class="block text-sm/6 font-medium text-gray-900">NIK <span class="text-red-500">*</span></label>
                <div class="mt-2">
                  <input type="text" name="nik" id="nik" maxlength="16" pattern="\d{16}" required 
                  placeholder="Masukkan NIK (16 digit)" title="NIK harus 16 digit angka" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
              
              <div class="sm:col-span-3">      
                <fieldset>
                    <legend class="text-sm/6 font-semibold text-gray-900">Pasien Baru/Lama <span class="text-red-500">*</span></legend>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="pasien_baru" name="status_pasien" type="radio" value="baru" class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-indigo-600">
                            <label for="pasien_baru" class="block text-sm/6 font-medium text-gray-900">Pasien Baru</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="pasien_lama" name="status_pasien" type="radio" value="lama" class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-indigo-600">
                            <label for="pasien_lama" class="block text-sm/6 font-medium text-gray-900">Pasien Lama</label>
                        </div>
                    </div>
                </fieldset>
            </div>
            

            <div class="sm:col-span-3">      
              <fieldset>
                <legend class="text-sm/6 font-semibold text-gray-900">Jenis Kelamin <span class="text-red-500">*</span></legend>
                <div class="mt-6 space-y-6">
                  <div class="flex items-center gap-x-3">
                    <input id="jenis_kelamin_l" name="jenis_kelamin" type="radio" value="Laki-Laki" class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-indigo-600">
                    <label for="jenis_kelamin_l" class="block text-sm/6 font-medium text-gray-900">Laki-Laki</label>
                  </div>
                  <div class="flex items-center gap-x-3">
                    <input id="jenis_kelamin_p" name="jenis_kelamin" type="radio" value="Perempuan" class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-indigo-600">
                    <label for="jenis_kelamin_p" class="block text-sm/6 font-medium text-gray-900">Perempuan</label>
                  </div>
                </div>
              </fieldset>
            </div>

            <div class="sm:col-span-3" x-data="{ jenisPasien: '' }">
              <fieldset>
                <legend class="text-sm font-semibold text-gray-900">Jenis Pasien <span class="text-red-500">*</span></legend>
                <div class="mt-6 space-y-6">
                  <div class="flex items-center gap-x-3">
                    <input id="pasien_bpjs" name="jenis_pasien" type="radio" value="BPJS" x-model="jenisPasien" class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-indigo-600">
                    <label for="pasien_bpjs" class="block text-sm font-medium text-gray-900">BPJS</label>
                  </div>
                  <div class="flex items-center gap-x-3">
                    <input id="pasien_umum" name="jenis_pasien" type="radio" value="Umum" x-model="jenisPasien" class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-indigo-600">
                    <label for="pasien_umum" class="block text-sm font-medium text-gray-900">Umum</label>
                  </div>
                </div>
              </fieldset>
              <div class="sm:col-span-3 mt-4" x-show="jenisPasien === 'BPJS'" x-transition.opacity>
                <label for="no_bpjs" class="block text-sm font-medium text-gray-900">Nomor BPJS <span class="text-red-500">*</span></label>
                <div class="mt-2">
                  <input type="text" name="no_bpjs" id="no_bpjs" maxlength="13" pattern="\d{13}" 
                  placeholder="Masukkan No BPJS (13 digit)" title="No BPJS harus 13 digit angka" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
            </div>
            
              
      
              <div class="col-span-full">
                <label for="alamat" class="block text-sm/6 font-medium text-gray-900">Alamat <span class="text-red-500">*</span></label>
                <div class="mt-2">
                  <input type="text" name="alamat" id="alamat" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>

            </div>
          </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kirim</button>
        </div>
      </form>
    @endif
    </div>
  </main>
</div>

  

  
</body>
</html>