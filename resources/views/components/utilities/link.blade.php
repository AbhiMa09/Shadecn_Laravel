@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-6 p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <h3 class="text-lg font-semibold text-slate-900">Links</h3>

        <div class="flex flex-wrap gap-6 items-center">
            <!-- Default Link -->
            <a href="#" class="font-medium text-slate-900 underline underline-offset-4 hover:text-slate-600">
                Read more
            </a>

            <!-- Primary Color Link -->
            <a href="#" class="font-medium text-blue-600 underline underline-offset-4 hover:text-blue-500">
                View details
            </a>

            <!-- Subtle Link -->
            <a href="#" class="text-sm font-medium text-slate-500 hover:text-slate-900 transition-colors">
                Forgot password?
            </a>

            <!-- Destructive Link -->
            <a href="#" class="text-sm font-medium text-red-500 hover:text-red-700 hover:underline underline-offset-4">
                Delete account
            </a>
        </div>

        <div class="flex flex-wrap gap-6 items-center">
            <!-- Link with external icon -->
            <a href="#"
                class="inline-flex items-center gap-1 font-medium text-slate-900 hover:underline underline-offset-4">
                External Link
                <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                    <polyline points="15 3 21 3 21 9" />
                    <line x1="10" x2="21" y1="14" y2="3" />
                </svg>
            </a>

            <!-- Link acting as button -->
            <a href="#" class="text-slate-500 hover:text-slate-900 flex items-center gap-2 transition-colors">
                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m12 19-7-7 7-7" />
                    <path d="M19 12H5" />
                </svg>
                Back to Home
            </a>
        </div>
    </div>
@endsection