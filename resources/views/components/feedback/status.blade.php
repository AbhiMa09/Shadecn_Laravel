@extends('layouts.app')

@section('content')
    <div class="grid gap-6 md:grid-cols-2 p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <div class="space-y-4">
            <h3 class="text-lg font-semibold text-slate-900">Status Indicators</h3>

            <div class="flex items-center space-x-2">
                <span class="relative flex h-3 w-3">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                </span>
                <span class="text-sm font-medium text-slate-700">Operational</span>
            </div>

            <div class="flex items-center space-x-2">
                <span class="relative flex h-3 w-3">
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-yellow-500"></span>
                </span>
                <span class="text-sm font-medium text-slate-700">Degraded Performance</span>
            </div>

            <div class="flex items-center space-x-2">
                <span class="relative flex h-3 w-3">
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                </span>
                <span class="text-sm font-medium text-slate-700">Downtime</span>
            </div>

            <div class="flex items-center space-x-2">
                <span class="relative flex h-3 w-3">
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-slate-300"></span>
                </span>
                <span class="text-sm font-medium text-slate-500">Offline</span>
            </div>
        </div>
    </div>
@endsection