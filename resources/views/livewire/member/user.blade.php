<div
    class="grid place-self-start-center auto-rows-max gap-4 bg-gray-50 min-w-[90vw] md:min-w-[50vw] h-full p-8 box-border rounded-md border border-gray-300">

    <div class="text-2xl font-bold text-center capitalize">{{ $user }}</div>

    <hr width="w-full">

    @if ($skillDeleted['show'])
        @include('components.common.badge.alert', [
            'message' => $skillDeleted['message'],
        ])
    @endif

    <div class="p-4 border border-gray-300 rounded-lg">

        <p class="text-center mb-4 underline">My Skills</p>
        @if ($skills->count() > 0)
            <div class="flex flex-wrap gap-6 ">
                @foreach ($skills as $item)
                    <div
                        class="grid auto-rows-max gap-2 place-items-center hover:shadow-md hover:shadow-gray-200 border border-gray-300 p-4 rounded min-w-24 w-2min-w-24 max-w-2min-w-24 overflow-auto">
                        <svg class="max-w-8 max-h-8">
                            <use xlink:href="{{ asset('') }}/sprite.svg#{{ $item->skill->nama_skill }}"></use>
                        </svg>
                        <hr class="w-full">
                        <p class="text-xs capitalize">{{ $item->skill->nama_skill }}</p>
                        @if ($editSkill['show'])
                            @if ($editSkill['id'] == $item->id)
                                <hr class="w-full" />
                                <p class="text-xs w-full text-center py-1 border border-gray-200 rounded-full">On
                                    edit</p>
                            @endif
                        @endif
                        <hr class="w-full">
                        <div class="flex items-center gap-4">
                            <div wire:click="edit({{ $item->id }}, '{{ $item->skill->nama_skill }}')"
                                class="cursor-pointer px-4 py-1 rounded mt-2 text-gray-50 bg-gray-800 text-xs outline-[4px] outline outline-transparent hover:outline-gray-300 hover:bg-gray-950">
                                Edit</div>
                            <div wire:click='destroy({{ $item->id }})'
                                class="cursor-pointer px-4 py-1 rounded mt-2 text-gray-50 bg-gray-800 text-xs outline-[4px] outline outline-transparent hover:outline-gray-300 hover:bg-gray-950">
                                Delete</div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-orange-600 text-center underline font-bold">
                You haven't added a skill yet</p>
        @endif
    </div>

    <hr width="w-full">

    @if ($skillUpdated['show'])
        @include('components.common.badge.alert', [
            'message' => $skillUpdated['message'],
        ])
    @endif

    @if ($editSkill['show'])
        @livewire('member.edit-skill', ['id' => $editSkill['id'], 'nama_skill' => $editSkill['nama_skill']])
    @else
        @if ($skillAdded['show'])
            @include('components.common.badge.alert', [
                'message' => $skillAdded['message'],
            ])
        @endif

        @livewire('member.add-skill')
    @endif


</div>
