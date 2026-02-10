@extends('layouts.app')

@section('content')
    <div
        class="flex flex-wrap items-center justify-center gap-8 p-12 bg-white border border-slate-200 rounded-lg shadow-sm">

        <div class="flex flex-col items-center gap-2">
            <span class="text-sm font-medium text-slate-500">Circle Mask</span>
            <img class="w-24 h-24 object-cover rounded-full"
                src="https://images.unsplash.com/photo-1559494007-9f5847c49d94?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" />
        </div>

        <div class="flex flex-col items-center gap-2">
            <span class="text-sm font-medium text-slate-500">Squircle Mask</span>
            <img class="w-24 h-24 object-cover mask-squircle"
                src="https://images.unsplash.com/photo-1559494007-9f5847c49d94?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" />
        </div>

        <div class="flex flex-col items-center gap-2">
            <span class="text-sm font-medium text-slate-500">Triangle Mask</span>
            <div class="w-24 h-24 overflow-hidden [clip-path:polygon(50%_0%,_0%_100%,_100%_100%)]">
                <img class="w-full h-full object-cover"
                    src="https://images.unsplash.com/photo-1559494007-9f5847c49d94?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" />
            </div>
        </div>

        <div class="flex flex-col items-center gap-2">
            <span class="text-sm font-medium text-slate-500">Hexagon Mask</span>
            <div
                class="w-24 h-24 overflow-hidden [clip-path:polygon(50%_0%,_100%_25%,_100%_75%,_50%_100%,_0%_75%,_0%_25%)]">
                <img class="w-full h-full object-cover"
                    src="https://images.unsplash.com/photo-1559494007-9f5847c49d94?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" />
            </div>
        </div>

    </div>

    <style>
        .mask-squircle {
            border-radius: 20%;
        }
    </style>
@endsection