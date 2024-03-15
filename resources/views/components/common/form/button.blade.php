@props(['type', 'name'])

<button type="{{ $type }}"
    class="
    place-self-center
    cursor-pointer
    bg-gray-800 
    text-gray-50 text-sm font-medium
    h-8 w-20 
    flex items-center justify-center 
    capitalize 
    rounded  
    hover:bg-gray-950 hover:outline hover:outline-4 hover:outline-gray-300">{{ $name }}</button>
