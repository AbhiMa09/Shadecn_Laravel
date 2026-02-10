@extends('layouts.app')

@section('content')
    <x-layout.component-showcase title="Mockup Window"
        description="A component that simulates a generic OS window, suitable for showing UI elements or software dashboards."
        componentPath="ui/mockup-window.blade.php" usage='<x-ui.mockup-window title="Finder">
        Content here...
    </x-ui.mockup-window>'>
        <div class="w-full max-w-xl">
            <x-ui.mockup-window title="System Overview" class="h-[300px]">
                <div class="p-8 grid grid-cols-3 gap-4 h-full">
                    <div class="col-span-1 border-r pr-4 space-y-4">
                        <div class="h-2 w-full bg-primary/20 rounded"></div>
                        <div class="h-2 w-3/4 bg-muted rounded"></div>
                        <div class="h-2 w-1/2 bg-muted rounded"></div>
                    </div>
                    <div class="col-span-2 flex items-center justify-center">
                        <div
                            class="size-24 rounded-full border-4 border-dashed border-primary/20 flex items-center justify-center">
                            <span class="text-xs text-muted-foreground">Empty</span>
                        </div>
                    </div>
                </div>
            </x-ui.mockup-window>
        </div>
    </x-layout.component-showcase>
@endsection