@props(['active' => false, 'icon' => null, 'badge' => null, 'href' => '#'])

@php
    $classes =
        'group/menu-item relative flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left text-sm outline-none ring-sidebar-ring transition-[width,height,padding] hover:bg-sidebar-accent hover:text-sidebar-accent-foreground focus-visible:ring-2 active:bg-sidebar-accent active:text-sidebar-accent-foreground disabled:pointer-events-none disabled:opacity-50 aria-disabled:pointer-events-none aria-disabled:opacity-50 [&>svg]:size-4 [&>svg]:shrink-0';

    if ($active) {
        $classes .= ' bg-sidebar-accent text-sidebar-accent-foreground font-medium';
    }
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    @if ($icon)
        {{ $icon }}
    @endif
    <span class="truncate flex-1">{{ $slot }}</span>
    @if ($badge)
        <span class="ml-auto text-xs">{{ $badge }}</span>
    @endif
</a>