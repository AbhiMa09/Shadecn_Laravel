@props([
    'filename' => 'script.js',
    'class' => '',
])

<div {{ $attributes->merge(['class' => 'rounded-xl bg-slate-950 text-slate-50 font-mono text-sm shadow-xl overflow-hidden border border-slate-800 ' . $class]) }}>
    <div class="flex items-center justify-between px-4 py-2 bg-slate-900/50 border-b border-white/5">
        <div class="flex gap-2">
            <div class="size-2.5 rounded-full bg-red-500/80"></div>
            <div class="size-2.5 rounded-full bg-amber-500/80"></div>
            <div class="size-2.5 rounded-full bg-green-500/80"></div>
        </div>
        <span class="text-[10px] text-slate-400 font-medium tracking-wide uppercase">{{ $filename }}</span>
        <div class="w-10"></div>
    </div>

    <div class="p-4 overflow-x-auto selection:bg-primary/30">
        <pre><code class="grid gap-1">{{ $slot }}</code></pre>
    </div>
</div>
