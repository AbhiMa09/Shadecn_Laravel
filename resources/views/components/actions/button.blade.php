@extends('layouts.app')

@section('content')
    <x-layout.component-showcase title="Button" description="Displays a button or a component that looks like a button."
        componentPath="ui/button.blade.php" usage='<x-ui.button variant="default">Click me</x-ui.button>'>
        <div class="flex flex-wrap items-center justify-center gap-4">
            <x-ui.button variant="default">Primary</x-ui.button>
            <x-ui.button variant="secondary">Secondary</x-ui.button>
            <x-ui.button variant="destructive">Destructive</x-ui.button>
            <x-ui.button variant="outline">Outline</x-ui.button>
            <x-ui.button variant="ghost">Ghost</x-ui.button>
            <x-ui.button variant="link">Link</x-ui.button>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-4 mt-8">
            <x-ui.button size="sm">Small</x-ui.button>
            <x-ui.button size="default">Default</x-ui.button>
            <x-ui.button size="lg">Large</x-ui.button>
            <x-ui.button size="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </x-ui.button>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-4 mt-8">
            <x-ui.button disabled>
                <svg class="mr-2 h-4 w-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                Please wait
            </x-ui.button>

            <x-ui.button>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="mr-2 h-4 w-4">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                    <polyline points="7 10 12 15 17 10" />
                    <line x1="12" x2="12" y1="15" y2="3" />
                </svg>
                With Icon
            </x-ui.button>
        </div>
    </x-layout.component-showcase>
@endsection