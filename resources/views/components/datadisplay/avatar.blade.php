@extends('layouts.app')

@section('content')
    <div class="flex flex-wrap items-center gap-8 p-6 bg-white border border-slate-200 rounded-lg shadow-sm">

        <!-- Image Avatar -->
        <div class="flex flex-col items-center gap-2">
            <span class="text-xs text-slate-500">Image</span>
            <span class="relative flex w-10 h-10 overflow-hidden rounded-full shrink-0">
                <img class="aspect-square h-full w-full" src="https://github.com/shadcn.png" alt="@shadcn">
            </span>
        </div>

        <!-- Fallback Avatar -->
        <div class="flex flex-col items-center gap-2">
            <span class="text-xs text-slate-500">Fallback</span>
            <span
                class="relative flex items-center justify-center w-10 h-10 overflow-hidden rounded-full shrink-0 bg-slate-100">
                <span class="font-medium text-slate-600">CN</span>
            </span>
        </div>

        <!-- Sizes -->
        <div class="flex items-end gap-4">
            <span class="relative flex w-8 h-8 overflow-hidden rounded-full shrink-0">
                <img class="aspect-square h-full w-full" src="https://github.com/shadcn.png" alt="@shadcn">
            </span>
            <span class="relative flex w-12 h-12 overflow-hidden rounded-full shrink-0">
                <img class="aspect-square h-full w-full" src="https://github.com/shadcn.png" alt="@shadcn">
            </span>
            <span class="relative flex w-16 h-16 overflow-hidden rounded-full shrink-0">
                <img class="aspect-square h-full w-full" src="https://github.com/shadcn.png" alt="@shadcn">
            </span>
        </div>

        <!-- Group -->
        <div class="flex -space-x-3 overflow-hidden">
            <span class="relative flex w-10 h-10 overflow-hidden border-2 border-white rounded-full shrink-0">
                <img class="aspect-square h-full w-full" src="https://github.com/shadcn.png" alt="@shadcn">
            </span>
            <span class="relative flex w-10 h-10 overflow-hidden border-2 border-white rounded-full shrink-0">
                <img class="aspect-square h-full w-full"
                    src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=64&h=64"
                    alt="User">
            </span>
            <span
                class="relative flex items-center justify-center w-10 h-10 overflow-hidden border-2 border-white rounded-full shrink-0 bg-slate-100">
                <span class="text-xs font-medium text-slate-600">+3</span>
            </span>
        </div>
    </div>
@endsection