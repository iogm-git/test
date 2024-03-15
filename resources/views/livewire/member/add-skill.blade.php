<div class="grid place-content-center gap-4 p-4 border border-gray-300 rounded-lg">

    <p class="text-2xl text-center font-bold">Add Skill</p>

    <hr class="w-full">

    @include('components.common.form.input-dropdown', [
        'name' => 'skill',
        'skill' => $skill,
        'options' => $skills,
        'error' => $errors->has('skill') ? $errors->first('skill') : '',
    ])

    <hr class="w-full">

    <button wire:click="store"
        class="place-self-center cursor-pointer bg-gray-800 text-gray-50 text-sm font-medium h-8 w-20 flex items-center justify-center capitalize rounded hover:bg-gray-950 hover:outline hover:outline-4 hover:outline-gray-300">Add</button>
</div>
