@props(['active' => false])

<a {{ $attributes->merge([
    'class' => 'group relative flex w-full min-w-0 translate-x-0 items-center gap-2 overflow-hidden rounded-md px-2 py-1 text-sm outline-none ring-sidebar-ring transition-all hover:bg-sidebar-accent hover:text-sidebar-accent-foreground focus-visible:ring-2 active:bg-sidebar-accent active:text-sidebar-accent-foreground disabled:pointer-events-none disabled:opacity-50 aria-disabled:pointer-events-none aria-disabled:opacity-50 h-8 text-sidebar-foreground' . ($active ? ' bg-sidebar-accent text-sidebar-accent-foreground font-medium' : ''),
]) }}>
    {{ $slot }}
</a>