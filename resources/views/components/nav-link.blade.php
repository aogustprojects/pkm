@props(['active' => false])

<a {{ $attributes }} class="{{ $active 
    ? 'bg-teal-500 text-white font-semibold shadow-md' 
    : 'text-gray-700 hover:bg-teal-50 hover:text-teal-600' }} 
    rounded-xl px-4 py-2 text-sm font-medium transition-all duration-300 ease-in-out relative group">
    <span class="relative z-10 flex items-center">
        {{ $slot }}
        @if($active)
        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-white/50 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-in-out"></span>
        @endif
    </span>
</a>

