@props(['user'])

<x-ui.dropdown-menu.index>
    <x-ui.dropdown-menu.trigger>
        <div
            class="flex items-center gap-2 px-2 py-2 rounded-md hover:bg-sidebar-accent hover:text-sidebar-accent-foreground cursor-pointer data-[state=open]:bg-sidebar-accent data-[state=open]:text-sidebar-accent-foreground">
            <div class="h-8 w-8 rounded-lg overflow-hidden">
                <img src="{{ $user['avatar'] }}" alt="{{ $user['name'] }}" />
            </div>
            <div class="grid flex-1 text-left text-sm leading-tight group-data-[collapsible=icon]/sidebar:hidden">
                <span class="truncate font-semibold">{{ $user['name'] }}</span>
                <span class="truncate text-xs">{{ $user['email'] }}</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="ml-auto size-4 group-data-[collapsible=icon]/sidebar:hidden">
                <path d="m7 15 5 5 5-5" />
                <path d="m7 9 5-5 5 5" />
            </svg>
        </div>
    </x-ui.dropdown-menu.trigger>
    <x-ui.dropdown-menu.content class="w-56" align="end" side="bottom">
        <div class="flex items-center gap-2 px-2 py-1.5 text-left text-sm">
            <div class="h-8 w-8 rounded-lg overflow-hidden">
                <img src="{{ $user['avatar'] }}" alt="{{ $user['name'] }}" />
            </div>
            <div class="grid flex-1 text-left text-sm leading-tight">
                <span class="truncate font-semibold">{{ $user['name'] }}</span>
                <span class="truncate text-xs">{{ $user['email'] }}</span>
            </div>
        </div>
        <x-ui.dropdown-menu.separator />
        <x-ui.dropdown-menu.item href="#">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="mr-2 h-4 w-4">
                    <path
                        d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z" />
                </svg>
            </x-slot>
            Upgrade to Pro
        </x-ui.dropdown-menu.item>
        <x-ui.dropdown-menu.separator />
        <x-ui.dropdown-menu.item href="#">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="mr-2 h-4 w-4">
                    <path
                        d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.78 4.78 4 4 0 0 1-6.74 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.74Z" />
                </svg>
            </x-slot>
            Account
        </x-ui.dropdown-menu.item>
        <x-ui.dropdown-menu.item href="#">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="mr-2 h-4 w-4">
                    <rect width="20" height="14" x="2" y="5" rx="2" />
                    <line x1="2" x2="22" y1="10" y2="10" />
                </svg>
            </x-slot>
            Billing
        </x-ui.dropdown-menu.item>
        <x-ui.dropdown-menu.item href="#">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="mr-2 h-4 w-4">
                    <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                    <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                </svg>
            </x-slot>
            Notifications
        </x-ui.dropdown-menu.item>
        <x-ui.dropdown-menu.separator />
        <x-ui.dropdown-menu.item href="#">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="mr-2 h-4 w-4">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                    <polyline points="16 17 21 12 16 7" />
                    <line x1="21" x2="9" y1="12" y2="12" />
                </svg>
            </x-slot>
            Log out
        </x-ui.dropdown-menu.item>
    </x-ui.dropdown-menu.content>
</x-ui.dropdown-menu.index>