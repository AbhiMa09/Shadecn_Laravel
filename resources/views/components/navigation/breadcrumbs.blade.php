@extends('layouts.app')

@section('content')
    <div class="space-y-8 p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">Breadcrumbs</h2>

        <nav aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm text-slate-500">
                <li>
                    <a href="#" class="hover:text-slate-900 hover:underline underline-offset-4 transition-colors">Home</a>
                </li>
                <li class="flex items-center">
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </li>
                <li>
                    <a href="#"
                        class="hover:text-slate-900 hover:underline underline-offset-4 transition-colors">Components</a>
                </li>
                <li class="flex items-center">
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </li>
                <li class="font-medium text-slate-900" aria-current="page">Breadcrumb</li>
            </ol>
        </nav>

        <!-- With Dropdown -->
        <nav aria-label="Breadcrumb">
            <ol class="flex items-center gap-1.5 text-sm text-slate-500 sm:gap-2.5">
                <li>
                    <a href="#" class="hover:text-foreground transition-colors">Home</a>
                </li>
                <li class="[&>svg]:size-3.5">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <button class="flex items-center gap-1 hover:text-foreground">
                        ...
                        <span class="sr-only">More</span>
                    </button>
                </li>
                <li class="[&>svg]:size-3.5">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </li>
                <li class="font-medium text-slate-900" aria-current="page">Breadcrumb</li>
            </ol>
        </nav>
    </div>
@endsection