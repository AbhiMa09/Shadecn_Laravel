@props(['href' => '#'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'transition-colors hover:text-foreground text-muted-foreground']) }}>
    {{ $slot }}
</a>