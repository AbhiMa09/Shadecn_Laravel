@extends('layouts.app')

@section('content')
    <div class="relative h-[400px] w-full bg-slate-50 border border-slate-200 rounded-lg flex items-center justify-center">

        <div x-data="{ show: false }">
            <button @click="show = true; setTimeout(() => show = false, 3000)"
                class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium transition-colors bg-white border rounded-md shadow-sm border-slate-200 hover:bg-slate-100 hover:text-slate-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-950">
                Show Toast
            </button>

            <!-- Toast Notification -->
            <div x-show="show" style="display: none;" x-transition:enter="transform ease-out duration-300 transition"
                x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute bottom-4 right-4 z-50 flex items-center w-full max-w-sm p-4 space-x-4 text-slate-900 bg-white border shadow-lg border-slate-200 rounded-md pointer-events-auto">
                <div class="flex-1">
                    <h4 class="text-sm font-semibold">Scheduled: Catch up</h4>
                    <p class="text-sm text-slate-500">Friday, February 10, 2023 at 5:57 PM</p>
                </div>

                <button @click="show = false"
                    class="inline-flex items-center justify-center text-sm font-medium transition-colors border border-transparent rounded-md h-8 px-3 text-slate-500 hover:text-slate-900 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:ring-offset-2 bg-transparent hover:bg-slate-100">
                    Undo
                </button>

                <button @click="show = false"
                    class="inline-flex p-1 text-slate-400 transition-colors bg-white rounded-md hover:text-slate-900 focus:outline-none focus:ring-2 focus:ring-slate-950">
                    <span class="sr-only">Close</span>
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
@endsection