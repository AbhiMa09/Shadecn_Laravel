<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" :class="{ 'dark': darkMode }"
    x-data="{ darkMode: localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Admin') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [data-sidebar="sidebar"] {
            --sidebar-width: 18rem;
            --sidebar-width-icon: 3rem;
        }

        /* Fix for broken sidebar collapse text issue */
        [data-collapsible="icon"] .group-data-\[collapsible\=icon\]\:hidden {
            display: none !important;
        }

        [data-collapsible="icon"] .group-data-\[collapsible\=icon\]\:w-\[--sidebar-width-icon\] {
            width: var(--sidebar-width-icon) !important;
        }

        /* Hide scrollbar track but keep functionality */
        [data-sidebar="content"]::-webkit-scrollbar {
            width: 4px;
        }

        [data-sidebar="content"]::-webkit-scrollbar-track {
            background: transparent;
        }

        [data-sidebar="content"]::-webkit-scrollbar-thumb {
            background: rgba(156, 163, 175, 0.2);
            border-radius: 10px;
        }

        [data-sidebar="content"] {
            scrollbar-width: thin;
            scrollbar-color: rgba(156, 163, 175, 0.2) transparent;
        }
    </style>
</head>

<body class="font-sans antialiased bg-background text-foreground min-h-screen">

    <!-- SidebarProvider -->
    <div x-data="{
        state: localStorage.getItem('sidebar:state') || 'expanded',
        openMobile: false,
        isMobile: window.innerWidth < 768,
        toggleSidebar() {
            if (this.isMobile) {
                this.openMobile = !this.openMobile
            } else {
                this.state = this.state === 'expanded' ? 'collapsed' : 'expanded'
            }
        },
        init() {
            this.state = localStorage.getItem('sidebar:state') || 'expanded'
            
            this.$watch('state', value => {
                localStorage.setItem('sidebar:state', value)
                document.cookie = `sidebar_state=${value}; path=/; max-age=31536000`
            })

            this.$watch('darkMode', value => {
                localStorage.setItem('theme', value ? 'dark' : 'light')
            })
            
            window.addEventListener('resize', () => {
                this.isMobile = window.innerWidth < 768
            })
        }
    }" :class="{ 
        'group/sidebar-wrapper flex min-h-svh w-full has-[[data-variant=inset]]:bg-sidebar': true 
    }" style="--sidebar-width: 18rem; --sidebar-width-icon: 3rem;">

        @include('layouts.partials.sidebar')

        <!-- SidebarInset -->
        <div class="flex flex-1 flex-col overflow-hidden bg-background transition-[width] ease-linear duration-200">
            @include('layouts.partials.nav')

            <main class="flex-1 overflow-auto p-4">
                @isset($slot)
                    {{ $slot }}
                @else
                    @yield('content')
                @endisset
            </main>
        </div>
    </div>
</body>

</html>