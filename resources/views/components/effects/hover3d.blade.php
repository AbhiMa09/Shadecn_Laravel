@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center p-24 bg-white border border-slate-200 rounded-lg shadow-sm">

        <div class="group relative h-96 w-72 rounded-xl" x-data="{
                rotateX: 0,
                rotateY: 0,
                handleMouseMove(e) {
                    const card = this.$el;
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;

                    this.rotateX = ((y - centerY) / centerY) * -10; // Max rotation 20deg
                    this.rotateY = ((x - centerX) / centerX) * 10;
                },
                reset() {
                    this.rotateX = 0;
                    this.rotateY = 0;
                }
            }" @mousemove="handleMouseMove" @mouseleave="reset" style="perspective: 1000px;">
            <div class="absolute inset-0 h-full w-full rounded-xl bg-gradient-to-br from-violet-500 to-indigo-500 shadow-xl transition-transform duration-200 ease-out"
                :style="`transform: rotateX(${rotateX}deg) rotateY(${rotateY}deg)`">
                <div class="flex h-full flex-col justify-between p-6 text-white" style="transform-style: preserve-3d;">
                    <div style="transform: translateZ(50px)">
                        <p class="font-bold text-2xl">Mouse Over Me</p>
                        <p class="text-sm opacity-90 mt-2">I follow your cursor in 3D space.</p>
                    </div>

                    <div style="transform: translateZ(30px)" class="flex justify-between items-end">
                        <span class="text-xs font-mono bg-white/20 px-2 py-1 rounded">3D Card</span>
                    </div>
                </div>

                <!-- Shine Effect -->
                <div class="absolute inset-0 rounded-xl bg-gradient-to-tr from-white/0 via-white/30 to-white/0 pointer-events-none"
                    style="transform: translateZ(1px)"></div>
            </div>
        </div>
    </div>
@endsection