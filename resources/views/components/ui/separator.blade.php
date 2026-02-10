@props(['orientation' => 'horizontal', 'class' => ''])

@php
    $baseClasses = 'shrink-0 bg-border';
    $orientationClasses = $orientation === 'horizontal' ? 'h-[1px] w-full' : 'h-full w-[1px]';
    $classes = $baseClasses . ' ' . $orientationClasses . ' ' . $class;
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}></div>