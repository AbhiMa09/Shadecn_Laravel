@extends('layouts.app')

@section('content')
    <x-layout.component-showcase title="Input"
        description="Displays a form input field or a component that looks like an input field."
        componentPath="ui/input.blade.php">
        <x-slot:usageSlot>
&lt;x-ui.input type="email" placeholder="Email" /&gt;
        </x-slot:usageSlot>
        <div class="w-full max-w-sm space-y-6">
            <div class="space-y-2">
                <x-ui.label for="email-demo">Email</x-ui.label>
                <x-ui.input type="email" id="email-demo" placeholder="Email" />
            </div>

            <div class="space-y-2">
                <x-ui.label for="disabled-demo">Disabled</x-ui.label>
                <x-ui.input type="text" id="disabled-demo" disabled placeholder="Disabled" />
            </div>

            <div class="space-y-2">
                <x-ui.label for="file-demo">File</x-ui.label>
                <x-ui.input type="file" id="file-demo" class="cursor-pointer" />
            </div>

            <div class="space-y-2">
                <x-ui.label for="search-demo">Search</x-ui.label>
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="absolute left-3 top-1/2 -translate-y-1/2 size-4 text-muted-foreground">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.3-4.3" />
                    </svg>
                    <x-ui.input type="search" id="search-demo" placeholder="Search..." class="pl-10" />
                </div>
            </div>
        </div>
    </x-layout.component-showcase>
@endsection