@props([
    'title' => null,
    'class' => '',
])

<div {{ $attributes->merge(['class' => 'rounded-xl overflow-hidden border bg-background shadow-xl flex flex-col ' . $class]) }}>
    <div class="flex items-center gap-4 px-4 py-3 bg-muted/80 border-b backdrop-blur-sm">
        <div class="flex gap-2">
            <div class="size-3 rounded-full bg-red-500/80"></div>
            <div class="size-3 rounded-full bg-amber-500/80"></div>
            <div class="size-3 rounded-full bg-green-500/80"></div>
        </div>
        @if($title)
            <span class="text-xs font-semibold text-muted-foreground truncate">{{ $title }}</span>
        @endif
    </div>
    <div class="flex-1 bg-card">
        {{ $slot }}
    </div>
</div>
