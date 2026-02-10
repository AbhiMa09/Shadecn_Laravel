@extends('layouts.app')

@section('content')
    <div class="space-y-8 max-w-lg mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">Progress Bar</h2>

        <div class="space-y-4">
            <div class="flex justify-between text-sm text-slate-500">
                <span>Loading...</span>
                <span>45%</span>
            </div>

            <!-- Progress Component -->
            <div class="relative w-full h-2 overflow-hidden rounded-full bg-slate-100">
                <div class="h-full bg-slate-900 w-[45%] transition-all duration-300 ease-in-out"></div>
            </div>
        </div>

        <div class="space-y-4">
            <div class="flex justify-between text-sm text-slate-500">
                <span>Uploading...</span>
                <span>80%</span>
            </div>
            <div class="relative w-full h-2 overflow-hidden rounded-full bg-slate-100">
                <div class="h-full bg-green-500 w-[80%] transition-all duration-300 ease-in-out"></div>
            </div>
        </div>

        <!-- Indeterminate -->
        <div class="space-y-4">
            <div class="flex justify-between text-sm text-slate-500">
                <span>Processing...</span>
            </div>
            <div class="relative w-full h-2 overflow-hidden rounded-full bg-slate-100">
                <div class="absolute inset-y-0 bg-slate-900 w-1/3 animate-[slide_1.5s_infinite_ease-in-out]"></div>
            </div>
        </div>
    </div>

    <style>
        @keyframes slide {
            0% {
                left: -33%;
            }

            100% {
                left: 100%;
            }
        }
    </style>
@endsection