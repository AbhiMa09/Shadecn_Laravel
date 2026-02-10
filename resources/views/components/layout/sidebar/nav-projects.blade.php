@props(['projects'])

<div data-sidebar="group"
    class="relative flex w-full min-w-0 flex-col p-2 group-data-[collapsible=icon]/sidebar:hidden">
    <div data-sidebar="group-label" class="px-2 py-1.5 text-xs font-semibold text-sidebar-foreground/70">
        Projects
    </div>
    <div data-sidebar="menu" class="w-full space-y-1">
        @foreach ($projects as $project)
            <div class="group/menu-item relative">
                <a href="{{ $project['url'] }}"
                    class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left text-sm outline-none ring-sidebar-ring transition-[width,height,padding] hover:bg-sidebar-accent hover:text-sidebar-accent-foreground focus-visible:ring-2 active:bg-sidebar-accent active:text-sidebar-accent-foreground disabled:pointer-events-none disabled:opacity-50 aria-disabled:pointer-events-none aria-disabled:opacity-50 group-has-[[data-sidebar=menu-action]]/menu-item:pr-8 aria-expanded:bg-sidebar-accent aria-expanded:text-sidebar-accent-foreground">
                    @if (isset($project['icon']))
                        <x-dynamic-component :component="$project['icon']" class="size-4 shrink-0" />
                    @endif
                    <span class="truncate flex-1">{{ $project['name'] }}</span>
                </a>
                <x-ui.dropdown-menu.index>
                    <x-ui.dropdown-menu.trigger>
                        <button
                            class="absolute right-1 top-1.5 flex aspect-square w-5 items-center justify-center rounded-md p-0 text-sidebar-foreground outline-none ring-sidebar-ring transition-transform hover:bg-sidebar-accent hover:text-sidebar-accent-foreground focus-visible:ring-2 peer-hover/menu-button:text-sidebar-accent-foreground [&>svg]:size-4 [&>svg]:shrink-0 opacity-0 group-hover/menu-item:opacity-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="text-sidebar-foreground/70">
                                <circle cx="12" cy="12" r="1" />
                                <circle cx="19" cy="12" r="1" />
                                <circle cx="5" cy="12" r="1" />
                            </svg>
                            <span class="sr-only">More</span>
                        </button>
                    </x-ui.dropdown-menu.trigger>
                    <x-ui.dropdown-menu.content class="w-48" align="start" side="right">
                        <x-ui.dropdown-menu.item href="#">
                            <x-slot name="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="mr-2 h-4 w-4 text-muted-foreground">
                                    <path
                                        d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z" />
                                </svg>
                            </x-slot>
                            View Project
                        </x-ui.dropdown-menu.item>
                        <x-ui.dropdown-menu.item href="#">
                            <x-slot name="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="mr-2 h-4 w-4 text-muted-foreground">
                                    <polyline points="15 17 20 12 15 7" />
                                    <path d="M4 18v-2a4 4 0 0 1 4-4h12" />
                                </svg>
                            </x-slot>
                            Share Project
                        </x-ui.dropdown-menu.item>
                        <x-ui.dropdown-menu.separator />
                        <x-ui.dropdown-menu.item href="#">
                            <x-slot name="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="mr-2 h-4 w-4 text-muted-foreground">
                                    <path d="M3 6h18" />
                                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                    <line x1="10" x2="10" y1="11" y2="17" />
                                    <line x1="14" x2="14" y1="11" y2="17" />
                                </svg>
                            </x-slot>
                            Delete Project
                        </x-ui.dropdown-menu.item>
                    </x-ui.dropdown-menu.content>
                </x-ui.dropdown-menu.index>
            </div>
        @endforeach
        <div class="group/menu-item relative">
            <button
                class="peer/menu-button flex w-full items-center gap-2 overflow-hidden rounded-md p-2 text-left text-sm outline-none ring-sidebar-ring transition-[width,height,padding] hover:bg-sidebar-accent hover:text-sidebar-accent-foreground focus-visible:ring-2 active:bg-sidebar-accent active:text-sidebar-accent-foreground disabled:pointer-events-none disabled:opacity-50 aria-disabled:pointer-events-none aria-disabled:opacity-50 text-sidebar-foreground/70">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="size-4 shrink-0 text-sidebar-foreground/70">
                    <circle cx="12" cy="12" r="1" />
                    <circle cx="19" cy="12" r="1" />
                    <circle cx="5" cy="12" r="1" />
                </svg>
                <span class="truncate flex-1">More</span>
            </button>
        </div>
    </div>
</div>