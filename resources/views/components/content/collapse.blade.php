@extends('layouts.app')

@section('content')
    <div class="w-full max-w-sm mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm space-y-4">
        <h2 class="text-lg font-semibold text-slate-900">Collapse</h2>

        <div x-data="{ open: false }">
            <div class="flex items-center justify-between p-4 bg-slate-100 rounded-lg cursor-pointer select-none border border-transparent focus:border-slate-900"
                @click="open = !open" tabindex="0">
                <span class="font-medium text-slate-900">Click to focus me</span>
                <svg :class="open ? 'rotate-180' : ''" class="h-4 w-4 transition-transform duration-200 text-slate-500"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </div>

            <div x-show="open" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                class="p-4 mt-1 bg-white border border-slate-200 rounded-lg text-sm text-slate-500 shadow-sm">
                <p>tabindex="0" attribute allows this element to be focused.</p>
            </div>
        </div>
    </div>
@endsection