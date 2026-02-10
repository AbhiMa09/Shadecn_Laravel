@props(['teams'])

<x-ui.dropdown-menu.index>
    <x-ui.dropdown-menu.trigger>
        <div
            class="flex items-center gap-2 px-2 py-2 rounded-md hover:bg-sidebar-accent hover:text-sidebar-accent-foreground cursor-pointer data-[state=open]:bg-sidebar-accent data-[state=open]:text-sidebar-accent-foreground">
            <div
                class="flex aspect-square size-8 items-center justify-center rounded-lg bg-sidebar-primary text-sidebar-primary-foreground">
                <x-dynamic-component :component="$teams[0]['logo']" class="size-4" />
            </div>
            <div class="grid flex-1 text-left text-sm leading-tight group-data-[collapsible=icon]/sidebar:hidden">
                <span class="truncate font-semibold">{{ $teams[0]['name'] }}</span>
                <span class="truncate text-xs">{{ $teams[0]['plan'] }}</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="ml-auto size-4 group-data-[collapsible=icon]/sidebar:hidden">
                <path d="m7 15 5 5 5-5" />
                <path d="m7 9 5-5 5 5" />
            </svg>
        </div>
    </x-ui.dropdown-menu.trigger>
    <x-ui.dropdown-menu.content class="w-56" align="start" side="bottom">
        <x-ui.dropdown-menu.label class="text-xs text-muted-foreground">Teams</x-ui.dropdown-menu.label>
        @foreach ($teams as $team)
            <x-ui.dropdown-menu.item href="#">
                <x-slot name="icon">
                    <div class="flex size-6 items-center justify-center rounded-md mr-2">
                        <x-dynamic-component :component="$team['logo']" class="size-4" />
                    </div>
                </x-slot>
                {{ $team['name'] }}
                <span class="ml-auto text-xs text-muted-foreground">⌘{{ $loop->iteration }}</span>
            </x-ui.dropdown-menu.item>
        @endforeach
        <x-ui.dropdown-menu.separator />
        <x-ui.dropdown-menu.item href="#">
            <x-slot name="icon">
                <div class="flex size-6 items-center justify-center rounded-md bg-transparent mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="size-4">
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                    </svg>
                </div>
            </x-slot>
            Add team
        </x-ui.dropdown-menu.item>
    </x-ui.dropdown-menu.content>
</x-ui.dropdown-menu.index>