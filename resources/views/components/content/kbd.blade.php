@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center gap-8 p-12 bg-white border border-slate-200 rounded-lg shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">Keyboard Shortcut (KBD)</h2>

        <div class="flex items-center gap-2 text-sm text-slate-500">
            Press
            <kbd
                class="pointer-events-none inline-flex h-5 select-none items-center gap-1 rounded border border-slate-200 bg-slate-50 px-1.5 font-mono text-[10px] font-medium text-slate-500 opacity-100">
                <span class="text-xs">⌘</span>K
            </kbd>
            to search
        </div>

        <div class="flex items-center gap-2 text-sm text-slate-500">
            <kbd
                class="pointer-events-none inline-flex h-5 select-none items-center gap-1 rounded border border-slate-200 bg-slate-50 px-1.5 font-mono text-[10px] font-medium text-slate-500 opacity-100">
                CTRL
            </kbd>
            +
            <kbd
                class="pointer-events-none inline-flex h-5 select-none items-center gap-1 rounded border border-slate-200 bg-slate-50 px-1.5 font-mono text-[10px] font-medium text-slate-500 opacity-100">
                SHIFT
            </kbd>
            +
            <kbd
                class="pointer-events-none inline-flex h-5 select-none items-center gap-1 rounded border border-slate-200 bg-slate-50 px-1.5 font-mono text-[10px] font-medium text-slate-500 opacity-100">
                X
            </kbd>
        </div>

    </div>
@endsection