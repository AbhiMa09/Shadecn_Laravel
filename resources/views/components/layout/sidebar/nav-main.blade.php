@props(['items'])

<div data-sidebar="group" class="relative flex w-full min-w-0 flex-col p-2">
    <div data-sidebar="menu" class="w-full space-y-1">
        @foreach ($items as $item)
            @php
                // Function to check if any child item is active
                $isGroupActive = false;
                if (!empty($item['items'])) {
                    foreach ($item['items'] as $subItem) {
                        if (request()->fullUrl() === $subItem['url'] || request()->url() === $subItem['url']) {
                            $isGroupActive = true;
                            break;
                        }
                    }
                }
                // Allow manual override if needed, otherwise use auto-detection
                $expandedState = isset($item['isActive']) ? $item['isActive'] : $isGroupActive;
            @endphp
            <div x-data="{ expanded: {{ $expandedState ? 'true' : 'false' }} }" class="group/collapsible relative">
                <button
                    @click="if (state === 'collapsed') { state = 'expanded'; expanded = true } else { expanded = !expanded }"
                    class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left text-sm font-medium outline-none ring-sidebar-ring transition-all hover:bg-sidebar-accent hover:text-sidebar-accent-foreground focus-visible:ring-2 active:bg-sidebar-accent active:text-sidebar-accent-foreground disabled:pointer-events-none disabled:opacity-50 group-data-[collapsible=icon]/sidebar:!size-8 group-data-[collapsible=icon]/sidebar:!p-2 text-sidebar-foreground/70"
                    :class="{ 'bg-sidebar-accent text-sidebar-accent-foreground': expanded || {{ $expandedState ? 'true' : 'false' }} }">
                    @if (isset($item['icon']))
                        <x-dynamic-component :component="$item['icon']" class="size-4 shrink-0 transition-colors"
                            ::class="{ 'text-sidebar-primary': expanded }" />
                    @else
                        <div class="size-4 shrink-0"></div>
                    @endif
                    <span class="truncate flex-1 group-data-[collapsible=icon]/sidebar:hidden">{{ $item['title'] }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="ml-auto size-4 transition-transform duration-200 group-data-[collapsible=icon]/sidebar:hidden"
                        :class="{ 'rotate-90': expanded }">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </button>
                <div x-show="expanded" x-collapse
                    class="w-full overflow-hidden transition-all duration-300 group-data-[collapsible=icon]/sidebar:hidden">
                    <x-layout.sidebar.menu-sub>
                        @foreach ($item['items'] as $subItem)
                            <x-layout.sidebar.menu-sub-item :href="$subItem['url']"
                                :active="request()->url() === $subItem['url']">
                                @if (isset($subItem['icon']))
                                    <x-dynamic-component :component="$subItem['icon']" class="size-4 shrink-0" />
                                @endif
                                <span>{{ $subItem['title'] }}</span>
                            </x-layout.sidebar.menu-sub-item>
                        @endforeach
                    </x-layout.sidebar.menu-sub>
                </div>
            </div>
        @endforeach
    </div>
</div>