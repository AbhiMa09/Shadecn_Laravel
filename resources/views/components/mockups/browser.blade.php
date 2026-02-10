@extends('layouts.app')

@section('content')
    <x-layout.component-showcase title="Mockup Browser"
        description="A component that simulates a browser window, perfect for showcasing websites or web apps."
        componentPath="ui/mockup-browser.blade.php" usage='<x-ui.mockup-browser url="mysite.com">
        Content here...
    </x-ui.mockup-browser>'>
        <div class="w-full max-w-2xl">
            <x-ui.mockup-browser url="https://shade-cn.test" class="h-[300px]">
                <div class="p-8 flex flex-col items-center justify-center h-full text-center space-y-4">
                    <div class="size-16 rounded-full bg-primary/10 flex items-center justify-center">
                        <svg class="size-8 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Secure Dashboard</h3>
                        <p class="text-sm text-muted-foreground">Your connection is private and secure.</p>
                    </div>
                    <x-ui.button size="sm">Explore Features</x-ui.button>
                </div>
            </x-ui.mockup-browser>
        </div>
    </x-layout.component-showcase>
@endsection