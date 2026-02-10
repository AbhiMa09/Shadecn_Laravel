@extends('layouts.app')

@section('content')
    <div class="flex-1 space-y-6 p-8 pt-6">
        <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-bold tracking-tight">Calendar</h2>
            <p class="text-muted-foreground">
                A dynamic, theme-aware calendar component built with Alpine.js logic.
            </p>
        </div>

        <div class="grid gap-6 lg:grid-cols-2">
            <!-- Preview -->
            <div class="space-y-4">
                <h3 class="text-lg font-medium">Preview</h3>
                <div class="flex items-center justify-center p-12 bg-background border rounded-xl min-h-[400px]">
                    <x-ui.calendar />
                </div>
            </div>

            <!-- Documentation -->
            <div class="space-y-4">
                <h3 class="text-lg font-medium">Documentation</h3>
                <div class="rounded-xl border bg-card text-card-foreground shadow p-6 space-y-4">
                    <div class="space-y-2">
                        <h4 class="font-semibold text-sm">Reusable Code Instructions</h4>
                        <p class="text-sm text-muted-foreground">
                            To use this calendar in other projects, copy the following files:
                        </p>
                        <ul class="list-disc list-inside text-sm text-muted-foreground ml-2 space-y-1">
                            <li><code>resources/views/components/ui/calendar.blade.php</code></li>
                        </ul>
                    </div>

                    <div class="space-y-2">
                        <h4 class="font-semibold text-sm">Dependencies</h4>
                        <p class="text-sm text-muted-foreground">
                            This component relies on <strong>Alpine.js</strong> for logic and <strong>Tailwind CSS</strong>
                            for styling.
                            No external heavy JS plugins are required, making it lightweight and highly customizable.
                        </p>
                    </div>

                    <div class="space-y-2">
                        <h4 class="font-semibold text-sm">Dark Mode Support</h4>
                        <p class="text-sm text-muted-foreground italic">
                            Note: The previous "disappearing letters" issue was resolved by replacing hardcoded slate colors
                            with theme-aware variables (<code>bg-card</code>, <code>text-card-foreground</code>,
                            <code>bg-primary</code>).
                        </p>
                    </div>

                    <div class="space-y-2 pt-4">
                        <h4 class="font-semibold text-sm underline">Usage</h4>
                        <pre
                            class="bg-muted p-3 rounded-md text-xs overflow-x-auto"><code>&lt;x-ui.calendar class="w-full" /&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection