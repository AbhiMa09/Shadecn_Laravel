<div x-data="{ open: false }" @keydown.escape.window="open = false" @click.outside="open = false" {{ $attributes->merge(['class' => 'relative inline-block text-left']) }}>
    {{ $slot }}
</div>