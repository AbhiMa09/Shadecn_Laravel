@extends('layouts.app')

@section('content')
    <div class="relative h-[400px] w-full bg-slate-50 rounded-lg border border-slate-200 overflow-hidden">
        <div class="absolute inset-0 flex items-center justify-center text-slate-400">
            viewport content
        </div>

        <!-- FAB Wrapper -->
        <div class="absolute bottom-6 right-6" x-data="{ open: false }">

            <!-- Speed Dial Actions -->
            <div x-show="open" style="display: none;" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-4" class="flex flex-col gap-2 mb-2">

                <button
                    class="flex items-center justify-center w-10 h-10 text-slate-600 transition-colors bg-white rounded-full shadow-md hover:text-slate-900 hover:bg-slate-50">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 20h9" />
                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                    </svg>
                </button>
                <button
                    class="flex items-center justify-center w-10 h-10 text-slate-600 transition-colors bg-white rounded-full shadow-md hover:text-slate-900 hover:bg-slate-50">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 6h18" />
                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                    </svg>
                </button>
            </div>

            <!-- Main Button -->
            <button @click="open = !open" :class="open ? 'rotate-45' : 'rotate-0'"
                class="flex items-center justify-center w-14 h-14 text-white transition-transform duration-200 rounded-full shadow-lg bg-slate-900 hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:ring-offset-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14" />
                    <path d="M12 5v14" />
                </svg>
            </button>
        </div>
    </div>
@endsection