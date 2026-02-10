@props([
    'variant' => 'default',
    'title' => null,
    'class' => '',
])

@php
    $baseClasses = 'relative w-full rounded-lg border p-4 [&>svg~*]:pl-7 [&>svg+div]:translate-y-[-3px] [&>svg]:absolute [&>svg]:left-4 [&>svg]:top-4';

    $variants = [
        'default' => 'bg-background text-foreground [&>svg]:text-foreground',
        'destructive' => 'border-destructive/50 text-destructive dark:border-destructive [&>svg]:text-destructive',
        'success' => 'border-green-500/50 text-green-600 dark:text-green-400 [&>svg]:text-green-600 dark:[&>svg]:text-green-400',
        'warning' => 'border-yellow-500/50 text-yellow-600 dark:text-yellow-400 [&>svg]:text-yellow-600 dark:[&>svg]:text-yellow-400',
    ];

    $classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['default']) . ' ' . $class;
@endphp

<div {{ $attributes->merge(['class' => $classes, 'role' => 'alert']) }}>
    @if($slot->isEmpty())
        {{-- For cases where we only pass title and content as props if needed, but slot is preferred --}}
    @else
        {{ $slot }}
    @endif
</div>

{{-- Subcomponents for semantic structure --}}
@php
    if(!function_exists('alert_title')) {
        function alert_title($title, $slot) {
            return '<h5 class="mb-1 font-medium leading-none tracking-tight">' . ($title ?? $slot) . '</h5>';
        }
    }
@endphp
