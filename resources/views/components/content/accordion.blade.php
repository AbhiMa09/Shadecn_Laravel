@extends('layouts.app')

@section('content')
    <div class="w-full max-w-lg mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <h2 class="mb-4 text-lg font-semibold text-slate-900">Accordion</h2>

        <div class="divide-y divide-slate-200" x-data="{ selected: 1 }">

            <!-- Item 1 -->
            <div class="py-2">
                <button @click="selected !== 1 ? selected = 1 : selected = null"
                    class="flex items-center justify-between w-full py-2 font-medium text-left text-slate-900 transition-all hover:underline">
                    <span>Is it accessible?</span>
                    <span :class="selected === 1 ? 'rotate-180' : ''" class="transition-transform duration-200">
                        <svg class="h-4 w-4 shrink-0 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </span>
                </button>
                <div x-show="selected === 1" x-collapse class="pb-4 text-sm text-slate-500 overflow-hidden">
                    Yes. It adheres to the WAI-ARIA design pattern.
                </div>
            </div>

            <!-- Item 2 -->
            <div class="py-2">
                <button @click="selected !== 2 ? selected = 2 : selected = null"
                    class="flex items-center justify-between w-full py-2 font-medium text-left text-slate-900 transition-all hover:underline">
                    <span>Is it styled?</span>
                    <span :class="selected === 2 ? 'rotate-180' : ''" class="transition-transform duration-200">
                        <svg class="h-4 w-4 shrink-0 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </span>
                </button>
                <div x-show="selected === 2" x-collapse class="pb-4 text-sm text-slate-500 overflow-hidden">
                    Yes. It comes with default styles that matches the other components' aesthetic.
                </div>
            </div>

            <!-- Item 3 -->
            <div class="py-2">
                <button @click="selected !== 3 ? selected = 3 : selected = null"
                    class="flex items-center justify-between w-full py-2 font-medium text-left text-slate-900 transition-all hover:underline">
                    <span>Is it animated?</span>
                    <span :class="selected === 3 ? 'rotate-180' : ''" class="transition-transform duration-200">
                        <svg class="h-4 w-4 shrink-0 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </span>
                </button>
                <div x-show="selected === 3" x-collapse class="pb-4 text-sm text-slate-500 overflow-hidden">
                    Yes. It's animated by default, but you can disable it if you prefer.
                </div>
            </div>
        </div>
    </div>
@endsection