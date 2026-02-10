@extends('layouts.app')

@section('content')
    <x-layout.component-showcase title="Indicator" description="Used to place an element on the corner of another element."
        componentPath="ui/indicator.blade.php" usage='<x-ui.indicator content="8">
        <x-ui.button variant="outline">Inbox</x-ui.button>
    </x-ui.indicator>'>
        <div class="flex flex-wrap items-center justify-center gap-12">
            <!-- Dot Indicator -->
            <div class="flex flex-col items-center gap-2">
                <span class="text-xs text-muted-foreground uppercase font-semibold">Dot</span>
                <x-ui.indicator>
                    <x-ui.button variant="outline" size="icon">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                            <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                        </svg>
                    </x-ui.button>
                </x-ui.indicator>
            </div>

            <!-- Number Indicator -->
            <div class="flex flex-col items-center gap-2">
                <span class="text-xs text-muted-foreground uppercase font-semibold">Count</span>
                <x-ui.indicator content="99+">
                    <x-ui.button variant="secondary">Inbox</x-ui.button>
                </x-ui.indicator>
            </div>

            <!-- Custom Color -->
            <div class="flex flex-col items-center gap-2">
                <span class="text-xs text-muted-foreground uppercase font-semibold">Custom</span>
                <x-ui.indicator class="[&>span]:bg-green-500">
                    <div class="h-12 w-12 rounded-full bg-muted border flex items-center justify-center overflow-hidden">
                        <img src="https://ui-avatars.com/api/?name=User" alt="Avatar" />
                    </div>
                </x-ui.indicator>
            </div>
        </div>
    </x-layout.component-showcase>
@endsection