@extends('layouts.app')

@section('content')
    <div class="space-y-6">
        <!-- Simple Toggle -->
        <div class="flex items-center justify-between p-4 bg-card border rounded-lg shadow-sm border-border lg:w-1/2">
            <div class="space-y-0.5">
                <label class="text-base font-medium text-foreground">Dark Mode</label>
                <p class="text-sm text-muted-foreground">Toggle dark mode on or off.</p>
            </div>
            <button @click="darkMode = !darkMode" :class="darkMode ? 'bg-primary' : 'bg-muted'"
                class="relative inline-flex h-6 py-0.5 ml-4 focus:outline-none rounded-full w-11 transition-colors duration-200 ease-in-out cursor-pointer">
                <span :class="darkMode ? 'translate-x-[22px]' : 'translate-x-0.5'"
                    class="inline-block w-5 h-5 transition duration-200 ease-in-out bg-background rounded-full shadow-sm">
                </span>
            </button>
        </div>

        <div class="p-4 bg-card border rounded-lg shadow-sm border-border lg:w-1/2" x-data="{ tab: 'light' }">
            <h3 class="mb-4 text-sm font-medium text-foreground">Theme Preference</h3>
            <div class="inline-flex h-10 p-1 bg-muted rounded-md text-muted-foreground w-full justify-center">
                <button @click="tab = 'light'; darkMode = false"
                    :class="tab === 'light' ? 'bg-background shadow text-foreground' : 'text-muted-foreground hover:text-foreground'"
                    class="inline-flex items-center justify-center w-full px-3 py-1.5 text-sm font-medium transition-all rounded-sm whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                    Light
                </button>
                <button @click="tab = 'dark'; darkMode = true"
                    :class="tab === 'dark' ? 'bg-background shadow text-foreground' : 'text-muted-foreground hover:text-foreground'"
                    class="inline-flex items-center justify-center w-full px-3 py-1.5 text-sm font-medium transition-all rounded-sm whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                    Dark
                </button>
                <button @click="tab = 'system'"
                    :class="tab === 'system' ? 'bg-background shadow text-foreground' : 'text-muted-foreground hover:text-foreground'"
                    class="inline-flex items-center justify-center w-full px-3 py-1.5 text-sm font-medium transition-all rounded-sm whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                    System
                </button>
            </div>
        </div>
    </div>
@endsection