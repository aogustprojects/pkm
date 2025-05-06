<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
  
    <!-- Main Container -->
    <div class="min-h-screen flex items-center justify-center w-full">
      <div class="w-full max-w-md bg-white/10 backdrop-blur-lg rounded-xl shadow-lg border border-white/20 p-6 sm:p-8 space-y-4 md:space-y-6 hover:scale-105 transition-all duration-300">
        <h1 class="text-xl text-center font-bold tracking-tight text-white md:text-2xl">Login</h1>
  
        <!-- Success Message -->
        @if (session()->has('success'))
        <div class="p-4 mb-4 text-sm text-white bg-teal-500/20 backdrop-blur-lg rounded-lg border border-teal-500/50" role="alert">
          <span class="font-medium">{{ session('success') }}</span>
        </div>
        @endif
  
        <!-- Error Message -->
        @if (session()->has('LoginError'))
        <div class="p-4 mb-4 text-sm text-white bg-red-500/20 backdrop-blur-lg rounded-lg border border-red-500/50" role="alert">
          <span class="font-medium">{{ session('LoginError') }}</span>
        </div>
        @endif
  
        <form class="space-y-4 md:space-y-6" action="/login" method="POST">
          @csrf
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
            <input @error('email') is-invalid @enderror type="email" name="email" id="email" class="block w-full p-3 text-sm text-white bg-white/10 backdrop-blur-lg border border-teal-500/50 rounded-lg focus:ring-teal-500 focus:border-teal-500 placeholder-white/70 transition-all duration-300" placeholder="Masukkan email" required autofocus value="{{ old('email') }}">
            @error('email')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-400"><span class="font-medium">{{ $message }}</span></p>
            @enderror
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
            <input type="password" name="password" id="password" placeholder="Masukkan password" class="block w-full p-3 text-sm text-white bg-white/10 backdrop-blur-lg border border-teal-500/50 rounded-lg focus:ring-teal-500 focus:border-teal-500 placeholder-white/70 transition-all duration-300" required>
          </div>
          <div class="flex justify-end">
            <a href="#" class="text-sm font-medium text-teal-400 hover:text-teal-300 transition-colors duration-300">Lupa password?</a>
          </div>
          <button type="submit" class="w-full text-white bg-teal-500 hover:bg-teal-600 focus:ring-4 focus:ring-teal-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-all duration-300">Masuk</button>
        </form>
      </div>
    </div>
  
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
      html, body {
        height: 100%;
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
      }
      ::-webkit-scrollbar {
        width: 8px;
      }
      ::-webkit-scrollbar-track {
        background: #1a1a2e;
      }
      ::-webkit-scrollbar-thumb {
        background: #00d4ff;
        border-radius: 4px;
      }
      ::-webkit-scrollbar-thumb:hover {
        background: #00b7d4;
      }
    </style>
  </x-layout>