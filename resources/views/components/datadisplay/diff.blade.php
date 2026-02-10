@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm space-y-6">
        <h3 class="text-lg font-semibold text-slate-900">Diff View</h3>

        <!-- Text Diff -->
        <div class="grid grid-cols-2 gap-4 text-sm font-mono border rounded-md overflow-hidden bg-slate-50">
            <!-- Old Version -->
            <div class="border-r border-slate-200">
                <div class="bg-slate-100 px-3 py-1 border-b border-slate-200 text-xs text-slate-500">original.txt</div>
                <div class="p-4 space-y-1">
                    <div class="bg-red-100 text-red-900 px-1 -mx-1">
                        - const greeting = 'Hello World';
                    </div>
                    <div class="text-slate-400">
                        &nbsp;&nbsp;console.log(greeting);
                    </div>
                </div>
            </div>

            <!-- New Version -->
            <div>
                <div class="bg-slate-100 px-3 py-1 border-b border-slate-200 text-xs text-slate-500">modified.txt</div>
                <div class="p-4 space-y-1">
                    <div class="bg-green-100 text-green-900 px-1 -mx-1">
                        + const greeting = 'Hello Universe';
                    </div>
                    <div class="text-slate-500">
                        &nbsp;&nbsp;console.log(greeting);
                    </div>
                </div>
            </div>
        </div>

        <!-- Visual Image Diff (Slider) -->
        <div class="relative w-full max-w-[500px] aspect-video rounded-lg overflow-hidden border border-slate-200"
            x-data="{ width: 50 }">
            <div class="absolute inset-0 bg-slate-100 flex items-center justify-center">
                <span class="text-slate-400 font-bold text-lg">AFTER</span>
                <!-- Imagine an image here -->
                <div class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-purple-500 opacity-20"></div>
            </div>

            <div class="absolute inset-0 bg-white border-r border-white w-[50%] overflow-hidden"
                :style="`width: ${width}%`">
                <div class="absolute inset-0 flex items-center justify-center w-[500px]">
                    <span class="text-slate-900 font-bold text-lg">BEFORE</span>
                    <!-- Imagine original image here -->
                    <div class="absolute inset-0 bg-slate-200 -z-10"></div>
                </div>
            </div>

            <input type="range" min="0" max="100" x-model="width"
                class="absolute inset-0 w-full h-full opacity-0 cursor-ew-resize z-20">

            <!-- Handle -->
            <div class="absolute top-0 bottom-0 w-1 bg-white cursor-ew-resize z-10 shadow-[0_0_10px_rgba(0,0,0,0.5)]"
                :style="`left: ${width}%`">
                <div
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-md">
                    <svg class="w-4 h-4 text-slate-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                        <path d="m15 6-6 6 6 6" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
@endsection