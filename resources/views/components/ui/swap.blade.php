@props(['active' => false])

<div x-data="{ state: {{ $active ? 'true' : 'false' }} }" @click="state = !state" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center cursor-pointer select-none transition-all']) }}>
    <div x-show="!state">
        {{ $off ?? $slot }}
    </div>
    <div x-show="state" style="display: none;">
        {{ $on }}
    </div>
</div>