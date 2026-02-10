@extends('layouts.app')

@section('content')
    <div class="flex h-[500px] w-full border border-slate-200 rounded-lg overflow-hidden bg-white">

        <!-- Sidebar -->
        <div class="hidden border-r w-64 flex-col bg-slate-50/40 md:flex border-slate-200">
            <div class="p-6">
                <h2 class="text-lg font-semibold tracking-tight text-slate-900">Discover</h2>
            </div>
            <div class="flex-1 overflow-auto py-2">
                <nav class="grid items-start px-4 text-sm font-medium">
                    <a href="#"
                        class="flex items-center gap-3 rounded-lg px-3 py-2 text-slate-900 bg-slate-100 transition-all hover:text-slate-900">
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76" />
                        </svg>
                        Browse
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 rounded-lg px-3 py-2 text-slate-500 transition-all hover:text-slate-900 hover:bg-slate-100">
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4.9 19.1C1 15.2 1 8.8 4.9 4.9" />
                            <path d="M7.8 16.2c-2.3-2.3-2.3-6.1 0-8.5" />
                            <circle cx="12" cy="12" r="2" />
                            <path d="M16.2 7.8c2.3 2.3 2.3 6.1 0 8.5" />
                            <path d="M19.1 4.9C23 8.8 23 15.1 19.1 19.1" />
                        </svg>
                        Radio
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 rounded-lg px-3 py-2 text-slate-500 transition-all hover:text-slate-900 hover:bg-slate-100">
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m12 8-9.04 9.06a2.82 2.82 0 1 0 3.98 3.98L16 12" />
                            <circle cx="17" cy="7" r="5" />
                        </svg>
                        Library
                    </a>
                </nav>
            </div>
            <div class="p-4 border-t border-slate-200">
                <div class="flex items-center gap-4">
                    <div class="h-10 w-10 rounded-full bg-slate-200"></div>
                    <div class="text-sm">
                        <p class="font-medium text-slate-900">User</p>
                        <p class="text-xs text-slate-500">user@example.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="flex flex-col flex-1">
            <header class="flex h-14 lg:h-[60px] items-center gap-4 border-b border-slate-200 bg-slate-50/40 px-6">
                <div class="w-full flex-1">
                    <form>
                        <div class="relative">
                            <svg class="absolute left-2.5 top-2.5 h-4 w-4 text-slate-500" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8" />
                                <path d="m21 21-4.3-4.3" />
                            </svg>
                            <input
                                class="w-full bg-white shadow-none appearance-none pl-8 md:w-2/3 lg:w-1/3 rounded-md border border-slate-200 py-1.5 text-sm focus:outline-none focus:ring-2 focus:ring-slate-950"
                                placeholder="Search..." type="search">
                        </div>
                    </form>
                </div>
                <button class="inline-flex items-center justify-center rounded-full w-8 h-8 bg-slate-900 text-white">
                    <span class="sr-only">Toggle user menu</span>
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                    </svg>
                </button>
            </header>

            <main class="flex flex-1 flex-col gap-4 p-4 lg:gap-6 lg:p-6 bg-slate-50/10">
                <div class="flex items-center">
                    <h1 class="text-lg font-semibold md:text-2xl text-slate-900">Dashboard</h1>
                </div>
                <div
                    class="flex flex-1 items-center justify-center rounded-lg border border-dashed border-slate-200 shadow-sm">
                    <div class="flex flex-col items-center gap-1 text-center">
                        <h3 class="text-2xl font-bold tracking-tight text-slate-900">You have no products</h3>
                        <p class="text-sm text-slate-500">You can start selling as soon as you add a product.</p>
                        <button
                            class="mt-4 inline-flex items-center justify-center px-4 py-2 text-sm font-medium transition-colors rounded-md shadow bg-slate-900 text-slate-50 hover:bg-slate-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-950">
                            Add Product
                        </button>
                    </div>
                </div>
            </main>
        </div>

    </div>
@endsection