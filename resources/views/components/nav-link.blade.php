@props(['active' => false])

<a {{ $attributes }} class="{{ $active ? 'bg-gray-200 text-grey-900 font-bold' : 'text-gray-800 hover:bg-gray-500 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">
    {{ $slot }}
</a>

