@extends('layouts.app')

@section('content')
    <x-layout.component-showcase title="Badge" description="Displays a badge or a component that looks like a badge."
        componentPath="ui/badge.blade.php" usage='<x-ui.badge variant="default">Badge</x-ui.badge>'>
        <div class="flex flex-wrap items-center justify-center gap-4">
            <x-ui.badge variant="default">Default</x-ui.badge>
            <x-ui.badge variant="secondary">Secondary</x-ui.badge>
            <x-ui.badge variant="destructive">Destructive</x-ui.badge>
            <x-ui.badge variant="outline">Outline</x-ui.badge>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-4 mt-8">
            <x-ui.badge class="gap-1">
                <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <path d="m9 12 2 2 4-4" />
                </svg>
                Verified
            </x-ui.badge>

            <x-ui.badge variant="outline" class="bg-blue-500/10 text-blue-500 border-blue-500/20">
                Feature
            </x-ui.badge>

            <x-ui.badge variant="outline" class="bg-amber-500/10 text-amber-500 border-amber-500/20">
                Progress
            </x-ui.badge>
        </div>
    </x-layout.component-showcase>
@endsection