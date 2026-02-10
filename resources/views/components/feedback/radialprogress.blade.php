@extends('layouts.app')

@section('content')
    <div
        class="flex flex-wrap items-center justify-center gap-12 p-12 bg-white border border-slate-200 rounded-lg shadow-sm">

        <!-- 70% Progress -->
        <div class="relative flex items-center justify-center w-24 h-24">
            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                <!-- Background Circle -->
                <path class="text-slate-100" d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="3" />
                <!-- Progress Circle -->
                <path class="text-slate-900" stroke-dasharray="70, 100" d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="3" />
            </svg>
            <span class="absolute text-sm font-semibold text-slate-900">70%</span>
        </div>

        <!-- 25% Progress -->
        <div class="relative flex items-center justify-center w-24 h-24">
            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                <path class="text-slate-100" d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="3" />
                <path class="text-blue-500" stroke-dasharray="25, 100" d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="3" />
            </svg>
            <span class="absolute text-sm font-semibold text-slate-900">25%</span>
        </div>

        <!-- 100% Progress -->
        <div class="relative flex items-center justify-center w-24 h-24">
            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                <path class="text-slate-100" d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="3" />
                <path class="text-green-500" stroke-dasharray="100, 100" d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="3" />
            </svg>
            <span class="absolute text-sm font-semibold text-slate-900">Done</span>
        </div>
    </div>
@endsection