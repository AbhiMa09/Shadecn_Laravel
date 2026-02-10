@props(['class' => '', 'href' => '#', 'icon' => null])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none transition-colors hover:bg-accent hover:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50 cursor-pointer ' . $class]) }}>
    @if($icon)
        {{ $icon }}
    @endif
    {{ $slot }}
</a>