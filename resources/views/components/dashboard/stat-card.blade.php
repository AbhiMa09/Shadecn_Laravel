@props(['title', 'value', 'icon' => null, 'description' => null])

<div {{ $attributes->merge(['class' => 'rounded-xl bg-card text-card-foreground shadow']) }}>
    <div class="p-6 flex flex-row items-center justify-between space-y-0 pb-2">
        <h3 class="tracking-tight text-sm font-medium">
            {{ $title }}
        </h3>
        @if ($icon)
            {{ $icon }}
        @endif
    </div>
    <div class="p-6 pt-0">
        <div class="text-2xl font-bold">{{ $value }}</div>
        @if ($description)
            <p class="text-xs text-muted-foreground">
                {{ $description }}
            </p>
        @endif
    </div>
</div>