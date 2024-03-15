<div
    class="grid place-self-start-center place-items-center auto-rows-max gap-4 bg-gray-50 min-w-[90vw] md:min-w-[50vw]  h-full p-8 box-border rounded-md border border-gray-300">

    <p class="text-2xl font-bold">Edit Skill</p>

    <hr class="w-full" />

    <div
        class="grid auto-rows-max gap-2 place-items-center hover:shadow-md hover:shadow-gray-200 border border-gray-300 p-4 rounded min-w-24 w-2min-w-24 max-w-2min-w-24 overflow-auto">
        <svg class="max-w-8 max-h-8">
            <use xlink:href="{{ asset('') }}/sprite.svg#{{ $edit_skill_nama }}"></use>
        </svg>
        <hr class="w-full">
        <p class="text-xs capitalize">{{ $edit_skill_nama }}</p>
    </div>

    <hr class="w-full" />

    @include('components.common.form.input-dropdown', [
        'name' => 'skill',
        'skill' => $skill,
        'options' => $skills,
        'error' => $errors->has('skill') ? $errors->first('skill') : '',
    ])

    <hr class="w-full">

    <button wire:click="update"
        class="place-self-center cursor-pointer bg-gray-800 text-gray-50 text-sm font-medium h-8 w-20 flex items-center justify-center capitalize rounded hover:bg-gray-950 hover:outline hover:outline-4 hover:outline-gray-300">Edit</button>
</div>
