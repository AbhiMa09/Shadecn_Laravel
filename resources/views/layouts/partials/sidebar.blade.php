@php
    $teams = [
        ['name' => 'Acme Inc', 'logo' => 'icons.box', 'plan' => 'Enterprise'],
        ['name' => 'Acme Corp.', 'logo' => 'icons.target', 'plan' => 'Startup'],
        ['name' => 'Evil Corp.', 'logo' => 'icons.map', 'plan' => 'Free']
    ];
    $navProjects = [
        ['name' => 'Design Engineering', 'url' => '#', 'icon' => 'icons.box'],
        ['name' => 'Sales & Marketing', 'url' => '#', 'icon' => 'icons.chart'],
        ['name' => 'Travel', 'url' => '#', 'icon' => 'icons.map'],
    ];
    $navUser = [
        'name' => 'shadcn',
        'email' => 'm@example.com',
        'avatar' => 'https://ui-avatars.com/api/?name=shadcn'
    ];
    $navMainItems = [
        [
            'title' => 'Platform',
            'icon' => 'icons.terminal',
            'items' => [
                ['title' => 'Dashboard', 'url' => route('dashboard'), 'icon' => 'icons.dashboard'],
                ['title' => 'Users', 'url' => route('users'), 'icon' => 'icons.users'],
                ['title' => 'Settings', 'url' => route('settings'), 'icon' => 'icons.settings'],
            ]
        ],
        [
            'title' => 'Actions',
            'icon' => 'icons.play',
            'items' => [
                ['title' => 'Button', 'url' => route('components.actions.button')],
                ['title' => 'Dropdown', 'url' => route('components.actions.dropdown')],
                ['title' => 'Modal', 'url' => route('components.actions.modal')],
                ['title' => 'Swap', 'url' => route('components.actions.swap')],
                ['title' => 'Theme Controller', 'url' => route('components.actions.theme-controller')],
                ['title' => 'FAB', 'url' => route('components.actions.fab')],
                ['title' => 'Tooltip', 'url' => route('components.actions.tooltip')],
                ['title' => 'Validator', 'url' => route('components.actions.validator')],
            ]
        ],
        [
            'title' => 'Forms',
            'icon' => 'icons.file-text',
            'items' => [
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
            ]
        ],
        [
            'title' => 'Data Display',
            'icon' => 'icons.layout',
            'items' => [
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
            ]
        ],
        [
            'title' => 'Feedback',
            'icon' => 'icons.message-square',
            'items' => [
                ['title' => 'Alert', 'url' => route('components.feedback.alert')],
                ['title' => 'Progress', 'url' => route('components.feedback.progress')],
                ['title' => 'Radial Progress', 'url' => route('components.feedback.radialprogress')],
                ['title' => 'Toast', 'url' => route('components.feedback.toast')],
                ['title' => 'Skeleton', 'url' => route('components.feedback.skeleton')],
                ['title' => 'Loading', 'url' => route('components.feedback.loading')],
                ['title' => 'Status', 'url' => route('components.feedback.status')],
            ]
        ],
        [
            'title' => 'Navigation',
            'icon' => 'icons.navigation',
            'items' => [
                ['title' => 'Breadcrumbs', 'url' => route('components.navigation.breadcrumbs')],
                ['title' => 'Navbar', 'url' => route('components.navigation.navbar')],
                ['title' => 'Tabs', 'url' => route('components.navigation.tabs')],
                ['title' => 'Drawer Sidebar', 'url' => route('components.navigation.drawersidebar')],
                ['title' => 'Dock', 'url' => route('components.navigation.dock')],
                ['title' => 'Pagination', 'url' => route('components.navigation.pagination')],
                ['title' => 'Menu', 'url' => route('components.navigation.menu')],
            ]
        ],
        [
            'title' => 'Layout',
            'icon' => 'icons.grid',
            'items' => [
                ['title' => 'Divider', 'url' => route('components.layout.divider')],
                ['title' => 'Hero', 'url' => route('components.layout.hero')],
                ['title' => 'Footer', 'url' => route('components.layout.footer')],
                ['title' => 'Join', 'url' => route('components.layout.join')],
                ['title' => 'Indicator', 'url' => route('components.layout.indicator')],
            ]
        ],
        [
            'title' => 'Content',
            'icon' => 'icons.type',
            'items' => [
                ['title' => 'Accordion', 'url' => route('components.content.accordion')],
                ['title' => 'Collapse', 'url' => route('components.content.collapse')],
                ['title' => 'Carousel', 'url' => route('components.content.carousel')],
                ['title' => 'Chat Bubble', 'url' => route('components.content.chatbubble')],
                ['title' => 'Mask', 'url' => route('components.content.mask')],
                ['title' => 'Kbd', 'url' => route('components.content.kbd')],
            ]
        ],
        [
            'title' => 'Effects',
            'icon' => 'icons.zap',
            'items' => [
                ['title' => 'Hover 3D', 'url' => route('components.effects.hover3d')],
                ['title' => 'Hover Gallery', 'url' => route('components.effects.hovergallery')],
                ['title' => 'Countdown', 'url' => route('components.effects.countdown')],
            ]
        ],
        [
            'title' => 'Mockups',
            'icon' => 'icons.monitor',
            'items' => [
                ['title' => 'Browser', 'url' => route('components.mockups.browser')],
                ['title' => 'Code', 'url' => route('components.mockups.code')],
                ['title' => 'Phone', 'url' => route('components.mockups.phone')],
                ['title' => 'Window', 'url' => route('components.mockups.window')],
            ]
        ],
        [
            'title' => 'Utilities',
            'icon' => 'icons.tool',
            'items' => [
                ['title' => 'Link', 'url' => route('components.utilities.link')],
                ['title' => 'Calendar', 'url' => route('components.utilities.calendar')],
            ]
        ],
    ];
@endphp

<!-- AppSidebar -->
<aside class="group/sidebar peer hidden md:block" :data-state="state"
    :data-collapsible="state === 'collapsed' ? 'icon' : ''">

    <!-- This container is in the flex flow, pushing the content area -->
    <div class="sticky top-0 h-svh w-80 flex flex-col bg-sidebar transition-[width] ease-linear duration-200 group-data-[collapsible=icon]/sidebar:w-12"
        data-sidebar="sidebar">

        <!-- Sidebar Header -->
        <div class="flex flex-col" data-sidebar="header">
            <x-layout.sidebar.team-switcher :teams="$teams" />
        </div>

        <!-- Sidebar Content -->
        <div class="flex min-h-0 flex-1 flex-col gap-2 overflow-auto py-2 group-data-[collapsible=icon]/sidebar:overflow-hidden"
            data-sidebar="content">
            <x-layout.sidebar.nav-main :items="$navMainItems" />
            <x-layout.sidebar.nav-projects :projects="$navProjects" />
        </div>

        <!-- Sidebar Footer -->
        <div class="flex flex-col mt-auto" data-sidebar="footer">
            <x-layout.sidebar.nav-user :user="$navUser" />
        </div>
    </div>
</aside>

<!-- Mobile Sidebar Sheet -->
<div x-show="openMobile" class="fixed inset-0 z-50 bg-black/80 md:hidden" @click="openMobile = false"
    x-transition.opacity style="display: none;"></div>
<div x-show="openMobile"
    class="fixed inset-y-0 left-0 z-50 w-3/4 max-w-sm bg-sidebar p-4 transition-transform md:hidden"
    x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform"
    x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" @click.away="openMobile = false"
    style="display: none;">
    <div class="flex flex-col h-full">
        <x-layout.sidebar.team-switcher :teams="$teams" />
        <div class="flex-1 overflow-auto py-4">
            <x-layout.sidebar.nav-main :items="$navMainItems" />
        </div>
    </div>
</div>