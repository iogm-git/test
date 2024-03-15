@props(['name', 'type', 'disabled' => false, 'defaultValue' => '', 'error'])

<div>
    <div class="w-full relative">
        <label for="{{ $name }}"
            class="absolute top-1 left-2 capitalize text-xs text-gray-400 font-medium">{{ $name }}</label>
        <input type="{{ $type }}" @if (!$disabled) wire:model="{{ $name }}" @endif
            id="{{ $name }}" @if ($defaultValue !== '') value="{{ $defaultValue }}" @endif
            class="p-2 pt-6 w-[70vw] md:w-72 bg-transparent border border-gray-200 rounded-md focus:border focus:border-gray-400 focus:outline-none"
            @if ($disabled) disabled @endif>
    </div>
    @if ($error)
        <p class="text-red-600 text-sm font-bold">{{ $error }}</p>
    @endif
</div>
