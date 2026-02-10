@extends('layouts.app')

@section('content')
    <x-layout.component-showcase title="Alert" description="Displays a callout for user attention."
        componentPath="ui/alert.blade.php" usage='<x-ui.alert>
        <svg class="h-4 w-4" ... />
        <x-ui.alert-title>Heads up!</x-ui.alert-title>
        <x-ui.alert-description>
            You can add components to your app using the cli.
        </x-ui.alert-description>
    </x-ui.alert>'>
        <div class="w-full max-w-xl space-y-4">
            <x-ui.alert>
                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M12 16v-4" />
                    <path d="M12 8h.01" />
                </svg>
                <x-ui.alert-title>Default Alert</x-ui.alert-title>
                <x-ui.alert-description>
                    This is a default alert for general information.
                </x-ui.alert-description>
            </x-ui.alert>

            <x-ui.alert variant="destructive">
                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <line x1="12" x2="12" y1="8" y2="12" />
                    <line x1="12" x2="12.01" y1="16" y2="16" />
                </svg>
                <x-ui.alert-title>Error</x-ui.alert-title>
                <x-ui.alert-description>
                    Your session has expired. Please log in again.
                </x-ui.alert-description>
            </x-ui.alert>

            <x-ui.alert variant="success">
                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                    <polyline points="22 4 12 14.01 9 11.01" />
                </svg>
                <x-ui.alert-title>Success</x-ui.alert-title>
                <x-ui.alert-description>
                    Your changes have been saved successfully.
                </x-ui.alert-description>
            </x-ui.alert>

            <x-ui.alert variant="warning">
                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3" />
                    <path d="M12 9v4" />
                    <path d="M12 17h.01" />
                </svg>
                <x-ui.alert-title>Heads up!</x-ui.alert-title>
                <x-ui.alert-description>
                    You are currently using a trial version.
                </x-ui.alert-description>
            </x-ui.alert>
        </div>
    </x-layout.component-showcase>
@endsection