@props(['content', 'position' => 'top'])

@php
    $positions = [
        'top' => 'bottom-full left-1/2 -translate-x-1/2 mb-2',
        'bottom' => 'top-full left-1/2 -translate-x-1/2 mt-2',
        'left' => 'right-full top-1/2 -translate-y-1/2 mr-2',
        'right' => 'left-full top-1/2 -translate-y-1/2 ml-2',
    ];
    $posClass = $positions[$position] ?? $positions['top'];
@endphp

<div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" {{ $attributes->merge(['class' => 'relative inline-block']) }}>
    {{ $slot }}

    <div x-show="open" style="display: none;" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute z-50 {{ $posClass }} px-3 py-1.5 text-xs font-medium text-primary-foreground bg-primary rounded-md shadow-md whitespace-nowrap">
        {{ $content }}
        {{-- Tooltip Arrow (Optional) --}}
        <div class="absolute w-2 h-2 bg-primary rotate-45 
            {{ $position == 'top' ? 'top-full left-1/2 -translate-x-1/2 -translate-y-1/2' : '' }}
            {{ $position == 'bottom' ? 'bottom-full left-1/2 -translate-x-1/2 translate-y-1/2' : '' }}
            {{ $position == 'left' ? 'left-full top-1/2 -translate-y-1/2 -translate-x-1/2' : '' }}
            {{ $position == 'right' ? 'right-full top-1/2 -translate-y-1/2 translate-x-1/2' : '' }}
        "></div>
    </div>
</div>