@extends('layouts.app')

@section('content')
    <x-layout.component-showcase title="Tooltip"
        description="A small pop-up box that appears when a user hovers over an element."
        componentPath="ui/tooltip.blade.php" usage='<x-ui.tooltip content="Add to library">
        <x-ui.button variant="outline">Hover</x-ui.button>
    </x-ui.tooltip>'>
        <div class="flex flex-wrap items-center justify-center gap-8 min-h-[200px]">
            <x-ui.tooltip content="Tooltip on Top" position="top">
                <x-ui.button variant="outline">Top</x-ui.button>
            </x-ui.tooltip>

            <x-ui.tooltip content="Tooltip on Bottom" position="bottom">
                <x-ui.button variant="outline">Bottom</x-ui.button>
            </x-ui.tooltip>

            <x-ui.tooltip content="Tooltip on Left" position="left">
                <x-ui.button variant="outline">Left</x-ui.button>
            </x-ui.tooltip>

            <x-ui.tooltip content="Tooltip on Right" position="right">
                <x-ui.button variant="outline">Right</x-ui.button>
            </x-ui.tooltip>
        </div>
    </x-layout.component-showcase>
@endsection