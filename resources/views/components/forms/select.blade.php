@extends('layouts.app')

@section('content')
    <div class="h-[300px] w-full max-w-md mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm space-y-8">
        <h2 class="text-lg font-semibold text-slate-900">Select</h2>

        <div class="space-y-2">
            <label for="framework"
                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-slate-900">Select
                Framework</label>

            <!-- Native Select styled to look like custom select -->
            <div class="relative">
                <select id="framework"
                    class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-slate-200 ring-offset-white placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 appearance-none">
                    <option value="" disabled selected>Select a framework</option>
                    <option value="next">Next.js</option>
                    <option value="sveltekit">SvelteKit</option>
                    <option value="astro">Astro</option>
                    <option value="nuxt">Nuxt.js</option>
                </select>
                <!-- Custom chevron -->
                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                    <svg class="w-4 h-4 text-slate-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Using Alpine for Custom Select (Dropdown behavior) -->
        <div class="space-y-2" x-data="{ open: false, selected: 'Select a timezone' }">
            <label class="text-sm font-medium leading-none text-slate-900">Timezone (Alpine Custom)</label>

            <div class="relative">
                <button @click="open = !open" @click.outside="open = false" type="button"
                    class="flex items-center justify-between w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-slate-200 ring-offset-white placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    <span x-text="selected"></span>
                    <svg class="w-4 h-4 text-slate-500 opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div x-show="open" style="display: none;"
                    class="absolute z-50 w-full mt-1 bg-white border rounded-md shadow-md border-slate-200 max-h-60 overflow-y-auto min-w-[8rem]"
                    x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 zoom-95"
                    x-transition:enter-end="opacity-100 zoom-100">
                    <div class="p-1">
                        <div @click="selected = 'Pacific Standard Time (PST)'; open = false"
                            class="relative flex items-center w-full px-2 py-1.5 text-sm outline-none cursor-default select-none rounded-sm hover:bg-slate-100 hover:text-slate-900">
                            <span class="pl-2">Pacific Standard Time (PST)</span>
                        </div>
                        <div @click="selected = 'Eastern Standard Time (EST)'; open = false"
                            class="relative flex items-center w-full px-2 py-1.5 text-sm outline-none cursor-default select-none rounded-sm hover:bg-slate-100 hover:text-slate-900">
                            <span class="pl-2">Eastern Standard Time (EST)</span>
                        </div>
                        <div @click="selected = 'Greenwich Mean Time (GMT)'; open = false"
                            class="relative flex items-center w-full px-2 py-1.5 text-sm outline-none cursor-default select-none rounded-sm hover:bg-slate-100 hover:text-slate-900">
                            <span class="pl-2">Greenwich Mean Time (GMT)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection