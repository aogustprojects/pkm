<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://kit.fontawesome.com/7b03306244.js" crossorigin="anonymous"></script>
  <title>Puskesmas Pasirjati</title>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</head>
<body class="h-full overflow-y-scroll overflow-x-hidden">

  <div class="min-h-screen">
    <header class="relative bg-cover h-20 bg-center shadow-lg" style="background-image: url('/img/poli-gigi.jpg');">
      <div class="absolute inset-0 bg-gray-100/90 backdrop-blur-sm"></div>
      <div class="relative mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="sm:text-3xl text-xl font-bold tracking-tight text-gray-800 drop-shadow-md">PENDAFTARAN POLI GIGI</h1>
      </div>
    </header>
  
    @php
      use Carbon\Carbon;
      use App\Models\PoliGigi;
  
      $now = Carbon::now('Asia/Jakarta');
      $allowedDays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
      
      // Different time settings based on login status
      if (auth()->check()) {
        // For logged-in users: 5:00 AM to 10:00 AM
        $startTime = $now->copy()->setTime(5, 0);
        $endTime = $now->copy()->setTime(10, 0);
        $displayStartTime = '05.00';
        $displayEndTime = '10.00';
      } else {
        // For public users: 6:15 AM to 10:00 AM
        $startTime = $now->copy()->setTime(6, 15);
        $endTime = $now->copy()->setTime(10, 0);
        $displayStartTime = '06.15';
        $displayEndTime = '10.00';
      }
      
      $today = $now->format('Y-m-d');
      $settings = getSetting();
      $maxRegistrationsPerDay = $settings->max_registrations;
      $isFormOpen = $settings->is_form_open;
      $currentRegistrations = PoliGigi::whereDate('created_at', $today)->count();
      $remainingSlots = max(0, $maxRegistrationsPerDay - $currentRegistrations);
    @endphp
  
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="p-6 bg-white/90 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20">
          @auth
          <p class="text-center text-sm p-2 rounded-lg text-gray-800 bg-red-500/20 backdrop-blur-lg border border-red-500/50">
            Field Ini Hanya Bisa Terlihat Jika User Login
          </p>
          <div class="mb-4 p-4 bg-green-500/20 backdrop-blur-lg text-gray-800 rounded-lg border border-green-500/50">
            <strong>🕐 Extended Hours Active!</strong> As a logged-in user, you have access to extended registration hours: {{ $displayStartTime }} - {{ $displayEndTime }} (instead of 06:15 - 10:00 for public users).
          </div>
  
          <!-- Toggle Form -->
          <form action="{{ route('toggle-form-status') }}" method="POST" class="mb-4">
            @csrf
            <label for="is_form_open" class="block text-sm font-medium text-gray-800">Form Status:</label>
            <select name="is_form_open" id="is_form_open" class="mt-2 block w-full rounded-lg bg-white/90 backdrop-blur-lg border border-teal-500/50 text-gray-800 focus:ring-teal-500 focus:border-teal-500 transition-all duration-300 px-3 py-1.5">
              <option value="1" {{ $isFormOpen ? 'selected' : '' }} class="bg-gray-100">Open</option>
              <option value="0" {{ !$isFormOpen ? 'selected' : '' }} class="bg-gray-100">Closed</option>
            </select>
            <button type="submit" class="mt-2 bg-teal-500 text-white px-4 py-2 rounded-lg hover:bg-teal-600 transition-all duration-300">Update Status</button>
          </form>
  
          <!-- Max Registrations Form -->
          <form action="{{ route('update-setting') }}" method="POST" class="mb-4">
            @csrf
            <label for="max_registrations" class="block text-sm font-medium text-gray-800">Max Registrations per Day:</label>
            <input type="number" name="max_registrations" id="max_registrations" value="{{ $maxRegistrationsPerDay }}" 
                   class="mt-2 block w-full rounded-lg bg-white/90 backdrop-blur-lg border border-teal-500/50 text-gray-800 focus:ring-teal-500 focus:border-teal-500 transition-all duration-300 px-3 py-1.5">
            <button type="submit" class="mt-2 bg-teal-500 text-white px-4 py-2 rounded-lg hover:bg-teal-600 transition-all duration-300">Update</button>
          </form>
          @endauth
  
          @if (session('success'))
          <div class="mb-4 p-4 bg-teal-500/20 backdrop-blur-lg text-gray-800 rounded-lg border border-teal-500/50">
            <strong>Sukses!</strong> {{ session('success') }}
          </div>
          @endif
  
          @if (session('error'))
          <div class="mb-4 p-4 bg-red-500/20 backdrop-blur-lg text-gray-800 rounded-lg border border-red-500/50">
            <strong>Error!</strong> {{ session('error') }}
          </div>
          @endif
  
          @if (!$isFormOpen)
          <div class="mt-4 p-4 bg-red-500/20 backdrop-blur-lg text-gray-800 rounded-lg border border-red-500/50">
            <strong>Pendaftaran ditutup!</strong> Poli gigi hari ini tidak menerima pendaftaran pasien.
          </div>
          @elseif (!in_array($now->format('l'), $allowedDays) || !$now->between($startTime, $endTime))
          <div class="mt-4 p-4 bg-red-500/20 backdrop-blur-lg text-gray-800 rounded-lg border border-red-500/50">
            <strong>Pendaftaran ditutup!</strong> Formulir pendaftaran hanya tersedia Senin - Sabtu dari pukul {{ $displayStartTime }} - {{ $displayEndTime }}.
          </div>
          @elseif ($currentRegistrations >= $maxRegistrationsPerDay)
          <div class="mt-4 p-4 bg-red-500/20 backdrop-blur-lg text-gray-800 rounded-lg border border-red-500/50">
            <strong>Pendaftaran ditutup!</strong> Kuota pendaftaran hari ini telah penuh. Silakan daftar kembali besok.
          </div>
          @else
          @auth
          <div class="mt-4 p-4 bg-teal-500/20 backdrop-blur-lg text-gray-800 rounded-lg border border-teal-500/50">
            <strong>Slot tersisa:</strong> {{ $remainingSlots }} pasien
          </div>
          @endauth
  
          <!-- Registration Form -->
          <form action="/poli-gigi" method="POST">
            @csrf
            <div class="space-y-12">
              <div class="border-b border-gray-200/20 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-800">Formulir pendaftaran dibuka <span class="text-teal-600">Senin-Sabtu</span> pukul <span class="text-teal-600">{{ $displayStartTime }}</span></h2>
                <p class="mt-1 text-sm/6 text-gray-600">Jika berhasil terdaftar, silahkan melakukan daftar ulang di Puskesmas Pasir Jati pada pukul 08.00.</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-3">
                    <label for="nama" class="block text-sm/6 font-medium text-gray-800">Nama Pasien <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                      <input type="text" name="nama" id="nama" class="block w-full rounded-lg bg-white/90 backdrop-blur-lg border border-teal-500/50 text-gray-800 focus:ring-teal-500 focus:border-teal-500 transition-all duration-300 px-3 py-1.5 placeholder:text-gray-500" placeholder="Masukkan nama pasien">
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="nik" class="block text-sm/6 font-medium text-gray-800">NIK <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                      <input type="text" name="nik" id="nik" maxlength="16" pattern="\d{16}" required 
                             placeholder="Masukkan NIK (16 digit)" title="NIK harus 16 digit angka" class="block w-full rounded-lg bg-white/90 backdrop-blur-lg border border-teal-500/50 text-gray-800 focus:ring-teal-500 focus:border-teal-500 transition-all duration-300 px-3 py-1.5 placeholder:text-gray-500">
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <fieldset>
                      <legend class="text-sm/6 font-semibold text-gray-800">Pasien Baru/Lama <span class="text-red-500">*</span></legend>
                      <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                          <input id="pasien_baru" name="status_pasien" type="radio" value="baru" class="relative size-4 appearance-none rounded-full border border-teal-500/50 bg-white/90 checked:border-teal-500 checked:bg-teal-500 focus-visible:outline-teal-500">
                          <label for="pasien_baru" class="block text-sm/6 font-medium text-gray-800">Pasien Baru</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input id="pasien_lama" name="status_pasien" type="radio" value="lama" class="relative size-4 appearance-none rounded-full border border-teal-500/50 bg-white/90 checked:border-teal-500 checked:bg-teal-500 focus-visible:outline-teal-500">
                          <label for="pasien_lama" class="block text-sm/6 font-medium text-gray-800">Pasien Lama</label>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  <div class="sm:col-span-3">
                    <fieldset>
                      <legend class="text-sm/6 font-semibold text-gray-800">Jenis Kelamin <span class="text-red-500">*</span></legend>
                      <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                          <input id="jenis_kelamin_l" name="jenis_kelamin" type="radio" value="Laki-Laki" class="relative size-4 appearance-none rounded-full border border-teal-500/50 bg-white/90 checked:border-teal-500 checked:bg-teal-500 focus-visible:outline-teal-500">
                          <label for="jenis_kelamin_l" class="block text-sm/6 font-medium text-gray-800">Laki-Laki</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input id="jenis_kelamin_p" name="jenis_kelamin" type="radio" value="Perempuan" class="relative size-4 appearance-none rounded-full border border-teal-500/50 bg-white/90 checked:border-teal-500 checked:bg-teal-500 focus-visible:outline-teal-500">
                          <label for="jenis_kelamin_p" class="block text-sm/6 font-medium text-gray-800">Perempuan</label>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  <div class="sm:col-span-3" x-data="{ jenisPasien: '' }">
                    <fieldset>
                      <legend class="text-sm font-semibold text-gray-800">Jenis Pasien <span class="text-red-500">*</span></legend>
                      <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                          <input id="pasien_bpjs" name="jenis_pasien" type="radio" value="BPJS" x-model="jenisPasien" class="relative size-4 appearance-none rounded-full border border-teal-500/50 bg-white/90 checked:border-teal-500 checked:bg-teal-500 focus-visible:outline-teal-500">
                          <label for="pasien_bpjs" class="block text-sm font-medium text-gray-800">BPJS</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                          <input id="pasien_umum" name="jenis_pasien" type="radio" value="Umum" x-model="jenisPasien" class="relative size-4 appearance-none rounded-full border border-teal-500/50 bg-white/90 checked:border-teal-500 checked:bg-teal-500 focus-visible:outline-teal-500">
                          <label for="pasien_umum" class="block text-sm font-medium text-gray-800">Umum</label>
                        </div>
                      </div>
                    </fieldset>
                    <div class="sm:col-span-3 mt-4" x-show="jenisPasien === 'BPJS'" x-transition.opacity>
                      <label for="no_bpjs" class="block text-sm font-medium text-gray-800">Nomor BPJS <span class="text-red-500">*</span></label>
                      <div class="mt-2">
                        <input type="text" name="no_bpjs" id="no_bpjs" maxlength="13" pattern="\d{13}" 
                               placeholder="Masukkan No BPJS (13 digit)" title="No BPJS harus 13 digit angka" class="block w-full rounded-lg bg-white/90 backdrop-blur-lg border border-teal-500/50 text-gray-800 focus:ring-teal-500 focus:border-teal-500 transition-all duration-300 px-3 py-1.5 placeholder:text-gray-500">
                      </div>
                    </div>
                  </div>
                  <div class="col-span-full">
                    <label for="alamat" class="block text-sm/6 font-medium text-gray-800">Alamat <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                      <input type="text" name="alamat" id="alamat" class="block w-full rounded-lg bg-white/90 backdrop-blur-lg border border-teal-500/50 text-gray-800 focus:ring-teal-500 focus:border-teal-500 transition-all duration-300 px-3 py-1.5 placeholder:text-gray-500" placeholder="Masukkan alamat">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
              <button type="submit" class="rounded-lg bg-teal-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-teal-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-teal-500 transition-all duration-300">Kirim</button>
            </div>
          </form>
          @endif
        </div>
      </div>
    </main>
  </div>
  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f0f4f8 0%, #e2e8f0 100%);
    }
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #e2e8f0;
    }
    ::-webkit-scrollbar-thumb {
      background: #38b2ac;
      border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #2c8c89;
    }
  </style>
</body>
</html>