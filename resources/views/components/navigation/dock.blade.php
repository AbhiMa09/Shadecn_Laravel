@extends('layouts.app')

@section('content')
    <div
        class="relative h-[400px] w-full bg-slate-900/10 border border-slate-200 rounded-lg flex flex-col justify-end pb-8 items-center overflow-hidden">

        <div class="absolute inset-0 bg-slate-50 flex items-center justify-center text-slate-400">
            Window Content
        </div>

        <!-- Dock Container -->
        <div
            class="relative z-10 flex h-16 items-end gap-4 rounded-2xl border border-white/20 bg-white/50 px-4 pb-3 backdrop-blur-md shadow-2xl">

            <!-- Dock Item -->
            <div class="group relative flex flex-col items-center justify-end gap-1">
                <div
                    class="h-12 w-12 rounded-xl bg-slate-900 shadow-lg ring-1 ring-white/20 transition-all duration-300 group-hover:-translate-y-4 group-hover:scale-110 flex items-center justify-center">
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="18" height="18" x="3" y="3" rx="2" />
                        <path d="M3 9h18" />
                        <path d="M9 21V9" />
                    </svg>
                </div>
                <div
                    class="absolute -top-12 opacity-0 transition-opacity group-hover:opacity-100 bg-slate-900 text-white text-xs px-2 py-1 rounded">
                    Finder</div>
            </div>

            <!-- Dock Item -->
            <div class="group relative flex flex-col items-center justify-end gap-1">
                <div
                    class="h-12 w-12 rounded-xl bg-blue-500 shadow-lg ring-1 ring-white/20 transition-all duration-300 group-hover:-translate-y-4 group-hover:scale-110 flex items-center justify-center">
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M2 12h20" />
                        <path
                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                    </svg>
                </div>
                <div
                    class="absolute -top-12 opacity-0 transition-opacity group-hover:opacity-100 bg-slate-900 text-white text-xs px-2 py-1 rounded">
                    Browser</div>
            </div>

            <!-- Dock Item -->
            <div class="group relative flex flex-col items-center justify-end gap-1">
                <div
                    class="h-12 w-12 rounded-xl bg-green-500 shadow-lg ring-1 ring-white/20 transition-all duration-300 group-hover:-translate-y-4 group-hover:scale-110 flex items-center justify-center">
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                    </svg>
                </div>
                <div
                    class="absolute -top-12 opacity-0 transition-opacity group-hover:opacity-100 bg-slate-900 text-white text-xs px-2 py-1 rounded">
                    Messages</div>
                <span class="absolute -top-1 -right-1 h-3 w-3 rounded-full bg-red-500 ring-2 ring-white"></span>
            </div>

            <!-- Dock Item -->
            <div class="group relative flex flex-col items-center justify-end gap-1">
                <div
                    class="h-12 w-12 rounded-xl bg-zinc-800 shadow-lg ring-1 ring-white/20 transition-all duration-300 group-hover:-translate-y-4 group-hover:scale-110 flex items-center justify-center">
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m22 2-7 20-4-9-9-4Z" />
                        <path d="M22 2 11 13" />
                    </svg>
                </div>
                <div
                    class="absolute -top-12 opacity-0 transition-opacity group-hover:opacity-100 bg-slate-900 text-white text-xs px-2 py-1 rounded">
                    Mail</div>
            </div>

        </div>
    </div>
@endsection