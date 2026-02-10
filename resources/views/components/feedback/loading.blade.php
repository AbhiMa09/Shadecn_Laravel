@extends('layouts.app')

@section('content')
    <div
        class="flex flex-wrap items-center justify-center gap-12 p-12 bg-white border border-slate-200 rounded-lg shadow-sm">

        <!-- Spinner -->
        <div class="flex flex-col items-center gap-2">
            <span class="text-sm text-slate-500">Default Spinner</span>
            <svg class="w-6 h-6 animate-spin text-slate-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
        </div>

        <!-- Dots -->
        <div class="flex flex-col items-center gap-2">
            <span class="text-sm text-slate-500">Dots</span>
            <div class="flex space-x-1">
                <span class="w-2 h-2 bg-slate-900 rounded-full animate-[bounce_1s_infinite_100ms]"></span>
                <span class="w-2 h-2 bg-slate-900 rounded-full animate-[bounce_1s_infinite_200ms]"></span>
                <span class="w-2 h-2 bg-slate-900 rounded-full animate-[bounce_1s_infinite_300ms]"></span>
            </div>
        </div>

        <!-- Pulse -->
        <div class="flex flex-col items-center gap-2">
            <span class="text-sm text-slate-500">Pulse</span>
            <span class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-slate-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-slate-500"></span>
            </span>
        </div>

    </div>
@endsection