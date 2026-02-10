@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm space-y-12">
        <h3 class="text-lg font-semibold text-slate-900">Stepper (Horizontal)</h3>

        <div class="relative flex items-center justify-between w-full">
            <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-1 bg-slate-100 z-0"></div>

            <!-- Step 1: Complete -->
            <div class="relative z-10 flex flex-col items-center">
                <div
                    class="flex items-center justify-center w-8 h-8 font-semibold text-white bg-slate-900 rounded-full ring-4 ring-white">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                </div>
                <div class="absolute top-10 text-xs font-medium text-slate-900 w-32 text-center">Account Details</div>
            </div>

            <!-- Step 2: Active -->
            <div class="relative z-10 flex flex-col items-center">
                <div
                    class="flex items-center justify-center w-8 h-8 font-semibold text-white bg-slate-900 rounded-full ring-4 ring-white">
                    2
                </div>
                <div class="absolute top-10 text-xs font-medium text-slate-900 w-32 text-center">Business Info</div>
            </div>

            <!-- Step 3: Pending -->
            <div class="relative z-10 flex flex-col items-center">
                <div
                    class="flex items-center justify-center w-8 h-8 font-semibold text-slate-500 bg-slate-100 rounded-full ring-4 ring-white">
                    3
                </div>
                <div class="absolute top-10 text-xs font-medium text-slate-500 w-32 text-center">Preview</div>
            </div>

            <!-- Step 4: Pending -->
            <div class="relative z-10 flex flex-col items-center">
                <div
                    class="flex items-center justify-center w-8 h-8 font-semibold text-slate-500 bg-slate-100 rounded-full ring-4 ring-white">
                    4
                </div>
                <div class="absolute top-10 text-xs font-medium text-slate-500 w-32 text-center">Confirm</div>
            </div>

        </div>

        <!-- Vertical Stepper Example -->
        <div class="pt-8 space-y-0">
            <h3 class="mb-6 text-lg font-semibold text-slate-900">Stepper (Vertical)</h3>

            <ol class="relative border-l border-slate-200 space-y-8 ml-3">
                <li class="ml-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-slate-100 rounded-full -left-3 ring-8 ring-white">
                        <svg class="w-3 h-3 text-slate-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="flex items-center mb-1 text-sm font-semibold text-slate-900">Personal Info <span
                            class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded ml-3">Latest</span>
                    </h3>
                    <p class="mb-4 text-sm font-normal text-slate-500">Get started with filling in your personal details.
                    </p>
                </li>
                <li class="ml-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-slate-100 rounded-full -left-3 ring-8 ring-white">
                        <div class="w-2 h-2 bg-slate-400 rounded-full"></div>
                    </span>
                    <h3 class="mb-1 text-sm font-semibold text-slate-900">Application Review</h3>
                    <p class="text-sm font-normal text-slate-500">Wait for the admin to review your application.</p>
                </li>
                <li class="ml-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-slate-100 rounded-full -left-3 ring-8 ring-white">
                        <div class="w-2 h-2 bg-slate-400 rounded-full"></div>
                    </span>
                    <h3 class="mb-1 text-sm font-semibold text-slate-900">Confirmation</h3>
                    <p class="text-sm font-normal text-slate-500">Receive your confirmation email.</p>
                </li>
            </ol>

        </div>
    </div>
@endsection