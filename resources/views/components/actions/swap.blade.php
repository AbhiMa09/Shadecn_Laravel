@extends('layouts.app')

@section('content')
    <x-layout.component-showcase title="Swap"
        description="A component that allows you to swap between two states with a click, useful for toggle icons, state indicators, or interactive buttons."
        componentPath="ui/swap.blade.php" usage='<x-ui.swap>
        <x-slot name="off">OFF</x-slot>
        <x-slot name="on">ON</x-slot>
    </x-ui.swap>'>
        <div class="flex flex-wrap items-center justify-center gap-12">
            <!-- Icon Swap -->
            <div class="flex flex-col items-center gap-2">
                <span class="text-xs text-muted-foreground uppercase font-semibold tracking-wider">Icon Toggle</span>
                <x-ui.swap class="size-10 border rounded-md hover:bg-accent">
                    <x-slot name="off">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="size-5">
                            <line x1="4" x2="20" y1="12" y2="12" />
                            <line x1="4" x2="20" y1="6" y2="6" />
                            <line x1="4" x2="20" y1="18" y2="18" />
                        </svg>
                    </x-slot>
                    <x-slot name="on">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="size-5 text-primary">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </x-slot>
                </x-ui.swap>
            </div>

            <!-- Volume Swap -->
            <div class="flex flex-col items-center gap-2">
                <span class="text-xs text-muted-foreground uppercase font-semibold tracking-wider">Volume</span>
                <x-ui.swap class="size-10 rounded-full hover:bg-accent" :active="true">
                    <x-slot name="off">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="size-5 text-muted-foreground">
                            <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5" />
                            <line x1="23" x2="17" y1="9" y2="15" />
                            <line x1="17" x2="23" y1="9" y2="15" />
                        </svg>
                    </x-slot>
                    <x-slot name="on">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="size-5">
                            <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5" />
                            <path d="M15.54 8.46a5 5 0 0 1 0 7.07" />
                            <path d="M19.07 4.93a10 10 0 0 1 0 14.14" />
                        </svg>
                    </x-slot>
                </x-ui.swap>
            </div>

            <!-- Emoji Swap -->
            <div class="flex flex-col items-center gap-2">
                <span class="text-xs text-muted-foreground uppercase font-semibold tracking-wider">Reaction</span>
                <x-ui.swap class="text-3xl">
                    <x-slot name="off">🙂</x-slot>
                    <x-slot name="on">😎</x-slot>
                </x-ui.swap>
            </div>
        </div>
    </x-layout.component-showcase>
@endsection