@props([
    'slides' => [],
    'class' => '',
])

<div x-data="{ 
    activeSlide: 1, 
    slidesCount: {{ count($slides) ?: 1 }}, 
    next() { this.activeSlide = this.activeSlide === this.slidesCount ? 1 : this.activeSlide + 1 },
    prev() { this.activeSlide = this.activeSlide === 1 ? this.slidesCount : this.activeSlide - 1 }
}" {{ $attributes->merge(['class' => 'relative w-full overflow-hidden ' . $class]) }}>
    
    <!-- Slides -->
    <div class="relative flex transition-transform duration-500 ease-in-out"
        :style="`transform: translateX(-${(activeSlide - 1) * 100}%)`">
        @if(count($slides) > 0)
            @foreach($slides as $slide)
                <div class="min-w-full p-1">
                    <div class="flex aspect-video items-center justify-center rounded-xl bg-muted overflow-hidden border">
                        <img src="{{ $slide }}" class="h-full w-full object-cover" alt="Carousel Image" />
                    </div>
                </div>
            @endforeach
        @else
            {{ $slot }}
        @endif
    </div>

    <!-- Controls -->
    <button @click="prev()" class="absolute top-1/2 left-4 -translate-y-1/2 inline-flex items-center justify-center size-8 rounded-full border bg-background/80 backdrop-blur-sm shadow-sm hover:bg-background transition-colors">
        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
    </button>

    <button @click="next()" class="absolute top-1/2 right-4 -translate-y-1/2 inline-flex items-center justify-center size-8 rounded-full border bg-background/80 backdrop-blur-sm shadow-sm hover:bg-background transition-colors">
        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
    </button>
</div>
