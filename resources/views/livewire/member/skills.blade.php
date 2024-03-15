<div
    class="grid place-self-start-center auto-rows-max gap-4 bg-gray-50 min-w-[90vw] md:min-w-[50vw] h-full p-8 box-border rounded-md border border-gray-300">
    <div class="text-2xl font-bold text-center capitalize">Skills</div>
    <hr class="w-full">
    <input type="text" wire:model="search" placeholder="Search..."
        class="py-2 px-3 bg-transparent border border-gray-300 rounded focus:outline-none">
    <hr class="w-full">
    @if ($skills->count() > 0)
        <div class="flex flex-wrap gap-6 ">
            @foreach ($skills as $item)
                <div
                    class="grid auto-rows-max gap-2 place-items-center hover:shadow-md hover:shadow-gray-200 border border-gray-300 p-4 rounded min-w-24 w-2min-w-24 max-w-2min-w-24 overflow-auto">
                    <svg class="max-w-8 max-h-8">
                        <use xlink:href="{{ asset('') }}/sprite.svg#{{ $item->nama_skill }}"></use>
                    </svg>
                    <hr class="w-full">
                    <p class="text-xs capitalize">{{ $item->nama_skill }}</p>
                </div>
            @endforeach
        </div>
        <hr class="w-full">
        <div class="place-self-center">
            {{ $skills->links('livewire.custom-pagination') }}
        </div>
    @else
        <p class="text-orange-600 text-center underline font-bold">
            Skills not found</p>
    @endif
</div>
