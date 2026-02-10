@props([
    'class' => '',
])

<div {{ $attributes->merge(['class' => 'relative mx-auto border-slate-800 bg-slate-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px] shadow-xl overflow-hidden ' . $class]) }}>
    {{-- Internal Hardware Buttons --}}
    <div class="h-[32px] w-[3px] bg-slate-800 absolute -start-[17px] top-[72px] rounded-s-lg"></div>
    <div class="h-[46px] w-[3px] bg-slate-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
    <div class="h-[46px] w-[3px] bg-slate-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
    <div class="h-[64px] w-[3px] bg-slate-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
    
    {{-- The Screen --}}
    <div class="rounded-[2rem] overflow-hidden w-full h-full bg-background relative flex flex-col">
        <!-- Status Bar -->
        <div class="h-6 w-full flex justify-between items-center px-6 pt-1 text-[10px] font-medium">
            <span>9:41</span>
            <div class="flex items-center gap-1.5">
                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20h.01"/><path d="M7 20v-4"/><path d="M12 20v-8"/><path d="M17 20V4"/><path d="M22 20v-2"/></svg>
                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="12" x="2" y="7" rx="2" ry="2"/><path d="M22 11V13"/></svg>
            </div>
        </div>

        <!-- App Display Content -->
        <div class="flex-1 overflow-auto bg-muted/10">
            {{ $slot }}
        </div>
        
        <!-- Home Indicator -->
        <div class="h-8 w-full flex items-center justify-center p-2">
            <div class="w-24 h-1 rounded-full bg-foreground/20"></div>
        </div>
    </div>
</div>
