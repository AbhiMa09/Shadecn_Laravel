@props(['class' => '', 'align' => 'right'])

@php
    $alignment = [
        'right' => 'right-0 origin-top-right',
        'left' => 'left-0 origin-top-left',
    ];
    $alignClass = $alignment[$align] ?? $alignment['right'];
@endphp

<div x-show="open" style="display: none;" x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
    x-transition:leave-end="transform opacity-0 scale-95" {{ $attributes->merge(['class' => 'absolute ' . $alignClass . ' z-50 min-w-[8rem] overflow-hidden rounded-md border bg-popover p-1 text-popover-foreground shadow-md ' . $class]) }}>
    {{ $slot }}
</div>