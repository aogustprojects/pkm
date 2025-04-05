<x-main-dashboard></x-main-dashboard>
      <div class="p-5">
         <div class="bg-slate-800 rounded-lg py-10">
            <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
              <p class="mx-auto max-w-lg text-center text-3xl font-semibold tracking-tight text-balance text-white lg:text-5xl">Selamat Datang</p>
              <p class="mx-auto max-w-lg text-center text-3xl font-semibold tracking-tight text-balance text-white lg:text-5xl">{{ auth()->user()->name }}</p>
            </div>
          </div>
      </div>      
</html>