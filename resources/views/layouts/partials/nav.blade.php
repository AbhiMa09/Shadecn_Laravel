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
        @php
            $searchItems = [
                ['title' => 'Dashboard', 'url' => route('dashboard')],
                ['title' => 'Users', 'url' => route('users')],
                ['title' => 'Settings', 'url' => route('settings')],
                ['title' => 'Button', 'url' => route('components.actions.button')],
                ['title' => 'Dropdown', 'url' => route('components.actions.dropdown')],
                ['title' => 'Modal', 'url' => route('components.actions.modal')],
                ['title' => 'Swap', 'url' => route('components.actions.swap')],
                ['title' => 'Theme Controller', 'url' => route('components.actions.theme-controller')],
                ['title' => 'FAB', 'url' => route('components.actions.fab')],
                ['title' => 'Tooltip', 'url' => route('components.actions.tooltip')],
                ['title' => 'Validator', 'url' => route('components.actions.validator')],
                ['title' => 'Input', 'url' => route('components.forms.text-input')],
                ['title' => 'Textarea', 'url' => route('components.forms.textarea')],
                ['title' => 'Checkbox', 'url' => route('components.forms.checkbox')],
                ['title' => 'Radio', 'url' => route('components.forms.radio')],
                ['title' => 'Toggle', 'url' => route('components.forms.toggle')],
                ['title' => 'Select', 'url' => route('components.forms.select')],
                ['title' => 'File Input', 'url' => route('components.forms.file-input')],
                ['title' => 'Range Slider', 'url' => route('components.forms.range-slider')],
                ['title' => 'Rating', 'url' => route('components.forms.rating')],
                ['title' => 'Label', 'url' => route('components.forms.label')],
                ['title' => 'Fieldset', 'url' => route('components.forms.fieldset')],
                ['title' => 'Filter', 'url' => route('components.forms.filter')],
                ['title' => 'Card', 'url' => route('components.datadisplay.card')],
                ['title' => 'Badge', 'url' => route('components.datadisplay.badge')],
                ['title' => 'Avatar', 'url' => route('components.datadisplay.avatar')],
                ['title' => 'Table', 'url' => route('components.datadisplay.table')],
                ['title' => 'Stat', 'url' => route('components.datadisplay.stat')],
                ['title' => 'List', 'url' => route('components.datadisplay.list')],
                ['title' => 'Timeline', 'url' => route('components.datadisplay.timeline')],
                ['title' => 'Steps', 'url' => route('components.datadisplay.steps')],
                ['title' => 'Stack', 'url' => route('components.datadisplay.stack')],
                ['title' => 'Diff', 'url' => route('components.datadisplay.diff')],
                ['title' => 'Text Rotate', 'url' => route('components.datadisplay.textrotate')],
                ['title' => 'Alert', 'url' => route('components.feedback.alert')],
                ['title' => 'Progress', 'url' => route('components.feedback.progress')],
                ['title' => 'Radial Progress', 'url' => route('components.feedback.radialprogress')],
                ['title' => 'Toast', 'url' => route('components.feedback.toast')],
                ['title' => 'Skeleton', 'url' => route('components.feedback.skeleton')],
                ['title' => 'Loading', 'url' => route('components.feedback.loading')],
                ['title' => 'Status', 'url' => route('components.feedback.status')],
                ['title' => 'Breadcrumbs', 'url' => route('components.navigation.breadcrumbs')],
                ['title' => 'Navbar', 'url' => route('components.navigation.navbar')],
                ['title' => 'Tabs', 'url' => route('components.navigation.tabs')],
                ['title' => 'Drawer Sidebar', 'url' => route('components.navigation.drawersidebar')],
                ['title' => 'Dock', 'url' => route('components.navigation.dock')],
                ['title' => 'Pagination', 'url' => route('components.navigation.pagination')],
                ['title' => 'Menu', 'url' => route('components.navigation.menu')],
                ['title' => 'Divider', 'url' => route('components.layout.divider')],
                ['title' => 'Hero', 'url' => route('components.layout.hero')],
                ['title' => 'Footer', 'url' => route('components.layout.footer')],
                ['title' => 'Join', 'url' => route('components.layout.join')],
                ['title' => 'Indicator', 'url' => route('components.layout.indicator')],
                ['title' => 'Accordion', 'url' => route('components.content.accordion')],
                ['title' => 'Collapse', 'url' => route('components.content.collapse')],
                ['title' => 'Carousel', 'url' => route('components.content.carousel')],
                ['title' => 'Chat Bubble', 'url' => route('components.content.chatbubble')],
                ['title' => 'Mask', 'url' => route('components.content.mask')],
                ['title' => 'Kbd', 'url' => route('components.content.kbd')],
                ['title' => 'Hover 3D', 'url' => route('components.effects.hover3d')],
                ['title' => 'Hover Gallery', 'url' => route('components.effects.hovergallery')],
                ['title' => 'Countdown', 'url' => route('components.effects.countdown')],
                ['title' => 'Browser', 'url' => route('components.mockups.browser')],
                ['title' => 'Code', 'url' => route('components.mockups.code')],
                ['title' => 'Phone', 'url' => route('components.mockups.phone')],
                ['title' => 'Window', 'url' => route('components.mockups.window')],
                ['title' => 'Link', 'url' => route('components.utilities.link')],
                ['title' => 'Calendar', 'url' => route('components.utilities.calendar')]
            ];
        @endphp
        <x-ui.command-search :items="$searchItems" />
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