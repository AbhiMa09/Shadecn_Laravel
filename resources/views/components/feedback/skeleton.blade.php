@extends('layouts.app')

@section('content')
    <div class="flex items-center space-x-4 p-8 bg-white border border-slate-200 rounded-lg shadow-sm">
        <!-- Skeleton Avatar -->
        <div class="h-12 w-12 rounded-full bg-slate-100 animate-pulse"></div>

        <div class="space-y-2">
            <!-- Skeleton Lines -->
            <div class="h-4 w-[250px] rounded bg-slate-100 animate-pulse"></div>
            <div class="h-4 w-[200px] rounded bg-slate-100 animate-pulse"></div>
        </div>
    </div>

    <div class="mt-8 grid gap-6 md:grid-cols-3">
        <!-- Card Skeleton -->
        <div class="rounded-xl border border-slate-200 bg-white text-slate-950 shadow-sm overflow-hidden">
            <div class="bg-slate-100 h-40 w-full animate-pulse"></div>
            <div class="p-6 space-y-2">
                <div class="h-4 w-3/4 rounded bg-slate-100 animate-pulse"></div>
                <div class="h-4 w-1/2 rounded bg-slate-100 animate-pulse"></div>
            </div>
        </div>
    </div>
@endsection