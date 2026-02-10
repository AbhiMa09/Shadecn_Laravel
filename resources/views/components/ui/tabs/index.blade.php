@props(['defaultValue' => ''])

<div x-data="{ tab: '{{ $defaultValue }}' }" {{ $attributes }}>
    {{ $slot }}
</div>