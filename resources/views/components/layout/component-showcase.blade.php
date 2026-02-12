@props([
    'title',
    'description',
    'componentPath',
    'usage' => null,
    'usageSlot' => null,
    'dependencies' => 'Tailwind CSS, Alpine.js',
])

<div class="flex-1 space-y-6 p-8 pt-6">
    <div class="flex flex-col gap-4">
        <h2 class="text-3xl font-bold tracking-tight">{{ $title }}</h2>
        <p class="text-muted-foreground">
            {{ $description }}
        </p>
    </div>

               
    <div class="grid gap-6 lg:grid-cols-2">
        <!-- Preview -->
        <div class="space-y-4">
            <h3 class="text-lg font-medium">Preview</h3>
            <div class="flex flex-col items-center justify-center p-12 bg-background border rounded-xl min-h-[400px] gap-4">
                {{ $slot }}
            </div>
        </div>

        <!-- Documentation -->
        <div class="space-y-4">
            <h3 class="text-lg font-medium">Documentation</h3>
            <div class="rounded-xl border bg-card text-card-foreground shadow p-6 space-y-4">
                <div class="space-y-2">
                    <h4 class="font-semibold text-sm">Reusable Code Instructions</h4>
                    <p class="text-sm text-muted-foreground">
                        To use this component in other projects, copy the following files:
                    </p>
                    <ul class="list-disc list-inside text-sm text-muted-foreground ml-2 space-y-1">
                        <li><code>resources/views/components/{{ $componentPath }}</code></li>
                    </ul>
                </div>

                <div class="space-y-2">
                    <h4 class="font-semibold text-sm">Dependencies</h4>
                    <p class="text-sm text-muted-foreground">
                        {{ $dependencies }}
                    </p>
                </div>

                @if(isset($usage) || isset($usageSlot))
                    <div class="space-y-2 pt-4">
                        <h4 class="font-semibold text-sm underline">Usage</h4>
                        <pre class="bg-muted p-3 rounded-md text-xs overflow-x-auto"><code>{{ $usage ?? $usageSlot }}</code></pre>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
