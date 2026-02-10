@extends('layouts.app')

@section('content')
    <div class="w-full max-w-4xl mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-lg font-semibold text-slate-900">Filter UI</h2>
            <button class="text-sm text-slate-500 hover:text-slate-900">Reset all</button>
        </div>

        <div class="flex flex-col gap-4 md:flex-row">
            <!-- Search -->
            <div class="relative flex-1">
                <svg class="absolute w-4 h-4 text-slate-500 left-3 top-3" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8" />
                    <path d="m21 21-4.3-4.3" />
                </svg>
                <input type="text" placeholder="Filter tasks..."
                    class="flex w-full h-10 px-3 py-2 pl-9 text-sm bg-white border rounded-md border-slate-200 ring-offset-white placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2">
            </div>

            <!-- Status Filter -->
            <div class="relative inline-block text-left" x-data="{ open: false }">
                <button @click="open = !open" @click.outside="open = false" type="button"
                    class="inline-flex items-center justify-center px-4 py-2 border border-dashed rounded-md text-sm font-medium text-slate-900 bg-white hover:bg-slate-100 border-slate-300">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <path d="m9 12 2 2 4-4" />
                    </svg>
                    Status
                    <span
                        class="ml-2 px-1.5 py-0.5 rounded text-xs bg-slate-100 text-slate-900 font-semibold border border-slate-200">2</span>
                </button>
                <div x-show="open" style="display: none;"
                    class="absolute right-0 z-10 w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none p-1">
                    <div class="px-2 py-1.5 text-sm font-semibold">Filter by status</div>
                    <div class="h-px bg-slate-100 my-1"></div>
                    <label class="flex items-center px-2 py-1.5 hover:bg-slate-100 rounded cursor-pointer">
                        <input type="checkbox"
                            class="w-4 h-4 mr-2 border-slate-300 rounded text-slate-900 focus:ring-slate-950" checked>
                        <span class="text-sm text-slate-700">Backlog</span>
                    </label>
                    <label class="flex items-center px-2 py-1.5 hover:bg-slate-100 rounded cursor-pointer">
                        <input type="checkbox"
                            class="w-4 h-4 mr-2 border-slate-300 rounded text-slate-900 focus:ring-slate-950" checked>
                        <span class="text-sm text-slate-700">Todo</span>
                    </label>
                    <label class="flex items-center px-2 py-1.5 hover:bg-slate-100 rounded cursor-pointer">
                        <input type="checkbox"
                            class="w-4 h-4 mr-2 border-slate-300 rounded text-slate-900 focus:ring-slate-950">
                        <span class="text-sm text-slate-700">In Progress</span>
                    </label>
                    <label class="flex items-center px-2 py-1.5 hover:bg-slate-100 rounded cursor-pointer">
                        <input type="checkbox"
                            class="w-4 h-4 mr-2 border-slate-300 rounded text-slate-900 focus:ring-slate-950">
                        <span class="text-sm text-slate-700">Done</span>
                    </label>
                </div>
            </div>

            <!-- Priority Filter -->
            <div class="relative inline-block text-left" x-data="{ open: false }">
                <button @click="open = !open" @click.outside="open = false" type="button"
                    class="inline-flex items-center justify-center px-4 py-2 border border-dashed rounded-md text-sm font-medium text-slate-900 bg-white hover:bg-slate-100 border-slate-300">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 20V10" />
                        <path d="M18 20V4" />
                        <path d="M6 20v-4" />
                    </svg>
                    Priority
                </button>
                <div x-show="open" style="display: none;"
                    class="absolute right-0 z-10 w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none p-1">
                    <label class="flex items-center px-2 py-1.5 hover:bg-slate-100 rounded cursor-pointer">
                        <input type="checkbox"
                            class="w-4 h-4 mr-2 border-slate-300 rounded text-slate-900 focus:ring-slate-950">
                        <span class="text-sm text-slate-700">High</span>
                    </label>
                    <label class="flex items-center px-2 py-1.5 hover:bg-slate-100 rounded cursor-pointer">
                        <input type="checkbox"
                            class="w-4 h-4 mr-2 border-slate-300 rounded text-slate-900 focus:ring-slate-950">
                        <span class="text-sm text-slate-700">Medium</span>
                    </label>
                    <label class="flex items-center px-2 py-1.5 hover:bg-slate-100 rounded cursor-pointer">
                        <input type="checkbox"
                            class="w-4 h-4 mr-2 border-slate-300 rounded text-slate-900 focus:ring-slate-950">
                        <span class="text-sm text-slate-700">Low</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
@endsection