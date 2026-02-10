@extends('layouts.app')

@section('content')
    <div class="flex-1 space-y-4 p-8 pt-6">
        <div class="flex items-center justify-between space-y-2">
            <h2 class="text-3xl font-bold tracking-tight">Dashboard</h2>
            <div class="flex items-center space-x-2">
                <!-- Date Range Picker Placeholder -->
                <div class="grid gap-2">
                    <button
                        class="inline-flex items-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-[260px] justify-start text-left font-normal"
                        id="date" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mr-2 h-4 w-4">
                            <rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect>
                            <line x1="16" x2="16" y1="2" y2="6"></line>
                            <line x1="8" x2="8" y1="2" y2="6"></line>
                            <line x1="3" x2="21" y1="10" y2="10"></line>
                        </svg>
                        Jan 20, 2023 - Feb 09, 2023
                    </button>
                </div>
                <x-ui.button>Download</x-ui.button>
            </div>
        </div>

        <x-ui.tabs default-value="overview" class="space-y-4">
            <x-ui.tabs.list>
                <x-ui.tabs.trigger value="overview">Overview</x-ui.tabs.trigger>
                <x-ui.tabs.trigger value="analytics">Analytics</x-ui.tabs.trigger>
                <x-ui.tabs.trigger value="reports">Reports</x-ui.tabs.trigger>
                <x-ui.tabs.trigger value="notifications">Notifications</x-ui.tabs.trigger>
            </x-ui.tabs.list>

            <x-ui.tabs.content value="overview" class="space-y-4">
                <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                    <x-dashboard.stat-card title="Total Revenue" value="$45,231.89" description="+20.1% from last month">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="h-4 w-4 text-muted-foreground">
                                <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </x-slot>
                    </x-dashboard.stat-card>
                    <x-dashboard.stat-card title="Subscriptions" value="+2350" description="+180.1% from last month">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="h-4 w-4 text-muted-foreground">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </x-slot>
                    </x-dashboard.stat-card>
                    <x-dashboard.stat-card title="Sales" value="+12,234" description="+19% from last month">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="h-4 w-4 text-muted-foreground">
                                <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                <path d="M2 10h20"></path>
                            </svg>
                        </x-slot>
                    </x-dashboard.stat-card>
                    <x-dashboard.stat-card title="Active Now" value="+573" description="+201 since last hour">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="h-4 w-4 text-muted-foreground">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </x-slot>
                    </x-dashboard.stat-card>
                </div>
                <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-7">
                    <div class="col-span-4 rounded-xl bg-card text-card-foreground shadow">
                        <div class="p-6 flex flex-col space-y-1.5">
                            <h3 class="font-semibold leading-none tracking-tight">Overview</h3>
                        </div>
                        <div class="p-6 pt-0 pl-2">
                            <x-dashboard.overview-chart />
                        </div>
                    </div>
                    <div class="col-span-3 rounded-xl bg-card text-card-foreground shadow">
                        <div class="p-6 flex flex-col space-y-1.5">
                            <h3 class="font-semibold leading-none tracking-tight">Recent Sales</h3>
                            <p class="text-sm text-muted-foreground">
                                You made 265 sales this month.
                            </p>
                        </div>
                        <div class="p-6 pt-0">
                            <x-dashboard.recent-sales />
                        </div>
                    </div>
                </div>
            </x-ui.tabs.content>
            <x-ui.tabs.content value="analytics">
                <div class="text-muted-foreground p-4">Analytics Content</div>
            </x-ui.tabs.content>
            <x-ui.tabs.content value="reports">
                <div class="text-muted-foreground p-4">Reports Content</div>
            </x-ui.tabs.content>
            <x-ui.tabs.content value="notifications">
                <div class="text-muted-foreground p-4">Notifications Content</div>
            </x-ui.tabs.content>
        </x-ui.tabs>
    </div>
@endsection