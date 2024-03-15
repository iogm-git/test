<div>
    <div class="w-full relative">
        <label for="{{ $name }}"
            class="absolute top-1 left-2 capitalize text-xs text-gray-400 font-medium">{{ $name }}</label>
        <div class="p-2 pt-6 w-[70vw] md:w-72 border border-gray-200 rounded-md text-sm">
            <div class="flex justify-between items-center cursor-pointer px-3 py-1 border border-gray-300 rounded"
                onclick="show(this,{{ $name . '_opt' }})">
                <p>{{ $skill == '' ? 'Select Skill' : $skill }}</p>
                <div class="transition-all">&#11208;</div>
            </div>

            <div class="mt-2 p-3 box-border border border-gray-300 rounded hidden gap-2 w-full" id="{{ $name . '_opt' }}">
                @foreach ($options as $item)
                    <div wire:click="setSkill({{ $item->id }}, '{{ $item->nama_skill }}')"
                        onclick="setValue( {{ $name . '_opt' }})"
                        class="w-full capitalize flex justify-between items-center cursor-pointer px-3 py-1 border border-gray-300 rounded hover:underline hover:border-gray-950">
                        <p>{{ $item->nama_skill }}</p>
                        <svg class="max-w-5 max-h-5">
                            <use xlink:href="{{ asset('') }}/sprite.svg#{{ $item->nama_skill }}"></use>
                        </svg>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @if ($error)
        <p class="text-red-600 text-sm font-bold">{{ $error }}</p>
    @endif
</div>

<script>
    function show(element, comp) {
        element.children[1].classList.toggle('rotate-90')
        if (comp.className.includes('hidden')) {
            comp.classList.remove('hidden')
            comp.classList.add('grid')
        } else if (comp.className.includes('grid')) {
            comp.classList.remove('grid')
            comp.classList.add('hidden')
        }
    }

    function setValue(comp) {
        comp.classList.remove('grid')
        comp.classList.add('hidden')
    }
</script>
