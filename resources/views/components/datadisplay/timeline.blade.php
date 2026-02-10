@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <h3 class="mb-6 text-lg font-semibold text-slate-900">Activity Timeline</h3>

        <div
            class="relative space-y-8 before:absolute before:inset-0 before:ml-5 before:h-full before:w-0.5 before:-translate-x-px before:bg-slate-200 before:content-['']">

            <!-- Item 1 -->
            <div class="relative flex gap-6 group">
                <div
                    class="flex items-center justify-center w-10 h-10 -ml-5 transition-colors bg-white border rounded-full shrink-0 border-slate-200 group-hover:border-slate-900">
                    <svg class="w-5 h-5 text-slate-500 group-hover:text-slate-900" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                        <circle cx="8.5" cy="7" r="4" />
                        <line x1="23" x2="17" y1="11" y2="11" />
                    </svg>
                </div>
                <div class="flex flex-col flex-1 gap-1 pb-4 border-b border-slate-100">
                    <span class="text-sm font-medium text-slate-900">New user registered</span>
                    <span class="text-xs text-slate-500">Just now</span>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="relative flex gap-6 group">
                <div
                    class="flex items-center justify-center w-10 h-10 -ml-5 transition-colors bg-white border rounded-full shrink-0 border-slate-200 group-hover:border-blue-500">
                    <svg class="w-5 h-5 text-slate-500 group-hover:text-blue-500" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                        <polyline points="7 10 12 15 17 10" />
                        <line x1="12" x2="12" y1="15" y2="3" />
                    </svg>
                </div>
                <div class="flex flex-col flex-1 gap-1 pb-4 border-b border-slate-100">
                    <span class="text-sm font-medium text-slate-900">Deployed to production</span>
                    <p class="text-sm text-slate-500">Version 2.3.0 was successfully deployed.</p>
                    <span class="text-xs text-slate-500">2 hours ago</span>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="relative flex gap-6 group">
                <div
                    class="flex items-center justify-center w-10 h-10 -ml-5 transition-colors bg-white border rounded-full shrink-0 border-slate-200 group-hover:border-red-500">
                    <svg class="w-5 h-5 text-slate-500 group-hover:text-red-500" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="12" x2="12" y1="8" y2="12" />
                        <line x1="12" x2="12.01" y1="16" y2="16" />
                    </svg>
                </div>
                <div class="flex flex-col flex-1 gap-1 pb-4">
                    <span class="text-sm font-medium text-slate-900">Server Alert</span>
                    <p class="text-sm text-slate-500">High CPU usage detected on Worker-01.</p>
                    <span class="text-xs text-slate-500">5 hours ago</span>
                </div>
            </div>

        </div>
    </div>
@endsection