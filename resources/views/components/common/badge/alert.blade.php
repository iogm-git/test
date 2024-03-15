<div class="h-10 w-max text-sm bg-green-700 text-green-50 flex items-center justify-center rounded-md px-4 gap-6">
    <p>{{ $message }}</p>
    <svg class="fill-red-700 bg-red-50 max-w-5 max-h-5 rounded-md cursor-pointer hover:outline hover:outline-3 hover:outline-green-500"
        wire:click='resetListeners'>
        <use xlink:href='{{ asset('') }}/sprite.svg#close'></use>
    </svg>
</div>
