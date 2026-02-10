@props([
    'content' => null,
    'class' => '',
])

<div {{ $attributes->merge(['class' => 'relative inline-flex']) }}>
    {{ $slot }}
    <span class="absolute top-0 right-0 flex h-3 w-3 translate-x-1/2 -translate-y-1/2 {{ $class }}">
        @if($content === null)
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
        @else
            <span class="relative inline-flex items-center justify-center rounded-full bg-red-600 px-1.5 py-0.5 text-[10px] font-bold leading-none text-white h-auto min-w-[1.2rem]">
                {{ $content }}
            </span>
        @endif
    </span>
</div>
