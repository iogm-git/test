@props(['active' => false])

@php
    $classes = $active ?? false ? 'underline' : 'hover:underline';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
