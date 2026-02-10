@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center h-[500px] bg-slate-50 border border-slate-200 rounded-lg">
        <div x-data="{ open: false }">
            <button @click="open = true"
                class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium transition-colors rounded-md shadow bg-slate-900 text-slate-50 hover:bg-slate-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-950">
                Edit Profile
            </button>

            <div x-show="open" style="display: none;"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

                <div @click.outside="open = false" @keydown.escape.window="open = false"
                    class="fixed left-[50%] top-[50%] z-50 grid w-full max-w-lg translate-x-[-50%] translate-y-[-50%] gap-4 border bg-white p-6 shadow-lg duration-200 sm:rounded-lg md:w-full"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-95 translate-y-4 sm:translate-y-0"
                    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                    x-transition:leave-end="opacity-0 scale-95 translate-y-4 sm:translate-y-0">

                    <div class="flex flex-col space-y-1.5 text-center sm:text-left">
                        <h2 class="text-lg font-semibold leading-none tracking-tight">Edit Profile</h2>
                        <p class="text-sm text-slate-500">Make changes to your profile here. Click save when you're done.
                        </p>
                    </div>

                    <div class="grid gap-4 py-4">
                        <div class="grid items-center grid-cols-4 gap-4">
                            <label for="name" class="text-sm font-medium text-right">Name</label>
                            <input id="name" value="Pedro Duarte"
                                class="col-span-3 flex h-9 w-full rounded-md border border-slate-200 bg-transparent px-3 py-1 text-sm shadow-sm transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-950 disabled:cursor-not-allowed disabled:opacity-50">
                        </div>
                    </div>

                    <div class="flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2">
                        <button @click="open = false" type="button"
                            class="inline-flex items-center justify-center px-4 py-2 mt-2 text-sm font-medium transition-colors bg-transparent border rounded-md shadow-sm border-slate-200 sm:mt-0 hover:bg-slate-100 hover:text-slate-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-950">
                            Cancel
                        </button>
                        <button @click="open = false" type="button"
                            class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium transition-colors rounded-md shadow bg-slate-900 text-slate-50 hover:bg-slate-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-950">
                            Save changes
                        </button>
                    </div>

                    <button @click="open = false"
                        class="absolute top-4 right-4 rounded-sm opacity-70 ring-offset-white transition-opacity hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:ring-offset-2 disabled:pointer-events-none data-[state=open]:bg-slate-100 data-[state=open]:text-slate-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="w-4 h-4">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection