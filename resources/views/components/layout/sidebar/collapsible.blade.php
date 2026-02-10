@props(['title', 'icon' => null, 'active' => false])

<div x-data="{ expanded: {{ $active ? 'true' : 'false' }} }" class="space-y-1">
    <button @click="expanded = !expanded"
        class="flex w-full items-center justify-between rounded-md p-2 text-left text-sm font-medium text-sidebar-foreground hover:bg-sidebar-accent hover:text-sidebar-accent-foreground outline-none ring-sidebar-ring focus-visible:ring-2">
        <div class="flex items-center gap-2">
            @if ($icon)
                {{ $icon }}
            @endif
            <span>{{ $title }}</span>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="h-4 w-4 transition-transform duration-200" :class="{ 'rotate-90': expanded }">
            <path d="m9 18 6-6-6-6" />
        </svg>
    </button>
    <div x-show="expanded" x-collapse class="pl-4 border-l border-sidebar-border ml-2 space-y-1">
        {{ $slot }}
    </div>
</div>