@extends('layouts.app')

@section('content')
    <div class="relative w-full border border-slate-200 bg-white rounded-lg shadow-sm">
        <div class="flex items-center justify-between px-6 py-4">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-2">
                <svg class="w-6 h-6 text-slate-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 6v12a3 3 0 1 0 3-3H6a3 3 0 1 0 3 3V6a3 3 0 1 0-3 3h12a3 3 0 1 0-3-3" />
                </svg>
                <span class="text-lg font-bold text-slate-900">Acme Inc</span>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center space-x-6 text-sm font-medium">
                <a href="#" class="text-slate-500 transition-colors hover:text-slate-900">Features</a>
                <a href="#" class="text-slate-500 transition-colors hover:text-slate-900">Pricing</a>
                <a href="#" class="text-slate-500 transition-colors hover:text-slate-900">About</a>
                <a href="#" class="text-slate-500 transition-colors hover:text-slate-900">Contact</a>
            </nav>

            <!-- Actions -->
            <div class="flex items-center space-x-4">
                <button
                    class="hidden md:inline-flex items-center justify-center px-4 py-2 text-sm font-medium transition-colors bg-white border rounded-md shadow-sm border-slate-200 text-slate-900 hover:bg-slate-100 hover:text-slate-900 focus-visible:ring-1 focus-visible:ring-slate-950">
                    Log in
                </button>
                <button
                    class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium transition-colors rounded-md shadow bg-slate-900 text-slate-50 hover:bg-slate-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-950">
                    Sign up
                </button>
            </div>
        </div>
    </div>
@endsection