<header class="flex h-16 shrink-0 items-center gap-2 px-4">
    <button @click="toggleSidebar()"
        class="-ml-1 inline-flex h-8 w-8 items-center justify-center rounded-md hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4">
            <rect width="18" height="18" x="3" y="3" rx="2" />
            <path d="M9 3v18" />
        </svg>
        <span class="sr-only">Toggle Sidebar</span>
    </button>

    <x-ui.breadcrumb.index>
        <x-ui.breadcrumb.item class="hidden md:block">
            <x-ui.breadcrumb.link href="#">
                Building Your Application
            </x-ui.breadcrumb.link>
        </x-ui.breadcrumb.item>
        <x-ui.breadcrumb.separator class="hidden md:block" />
        <x-ui.breadcrumb.item>
            <x-ui.breadcrumb.page>Data Fetching</x-ui.breadcrumb.page>
        </x-ui.breadcrumb.item>
    </x-ui.breadcrumb.index>
    <div class="ml-auto flex items-center gap-2">
        <button @click="darkMode = !darkMode"
            class="inline-flex h-9 w-9 items-center justify-center rounded-md bg-background text-sm font-medium ring-offset-background transition-colors hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
            <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="h-[1.2rem] w-[1.2rem] rotate-0 scale-100 transition-all dark:-rotate-90 dark:scale-0">
                <circle cx="12" cy="12" r="4" />
                <path d="M12 8V2" />
                <path d="M12 22v-6" />
                <path d="m8 8-5-5" />
                <path d="m21 21-5-5" />
                <path d="M8 12H2" />
                <path d="M22 12h-6" />
                <path d="m16 8 5-5" />
                <path d="m3 21 5-5" />
            </svg>
            <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="absolute h-[1.2rem] w-[1.2rem] rotate-90 scale-0 transition-all dark:rotate-0 dark:scale-100">
                <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
            </svg>
            <span class="sr-only">Toggle theme</span>
        </button>
    </div>
</header>