@props([
    'url' => 'https://example.com',
    'class' => '',
])

<div {{ $attributes->merge(['class' => 'w-full border rounded-lg shadow-lg overflow-hidden flex flex-col bg-background ' . $class]) }}>
    <!-- Browser Toolbar -->
    <div class="flex items-center gap-2 px-4 py-2 border-b bg-muted/50">
        <div class="flex gap-1.5 shrink-0">
            <div class="w-3 h-3 rounded-full bg-red-500/80"></div>
            <div class="w-3 h-3 rounded-full bg-amber-500/80"></div>
            <div class="w-3 h-3 rounded-full bg-green-500/80"></div>
        </div>

        <div class="flex-1 flex gap-2 mx-4 overflow-hidden">
            <div class="flex gap-1 shrink-0">
                <x-ui.button variant="ghost" size="icon" class="size-6 text-muted-foreground">
                    <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                </x-ui.button>
                <x-ui.button variant="ghost" size="icon" class="size-6 text-muted-foreground">
                    <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </x-ui.button>
            </div>

            <div class="flex-1 flex items-center justify-center bg-background border rounded-md px-3 text-[10px] text-muted-foreground truncate h-6">
                <svg class="size-2.5 mr-1.5 opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                {{ $url }}
            </div>
        </div>
    </div>

    <!-- Browser Content -->
    <div class="flex-1 overflow-auto bg-muted/30">
        {{ $slot }}
    </div>
</div>
