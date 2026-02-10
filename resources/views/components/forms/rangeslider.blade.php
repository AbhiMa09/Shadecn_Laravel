@extends('layouts.app')

@section('content')
    <div class="space-y-8 max-w-lg mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">Slider / Range</h2>

        <!-- Simple Range Slider -->
        <div class="space-y-4" x-data="{ val: 50 }">
            <div class="flex items-center justify-between">
                <label for="range" class="text-sm font-medium leading-none text-slate-900">Volume</label>
                <span class="text-sm text-slate-500" x-text="val"></span>
            </div>

            <input id="range" type="range" min="0" max="100" x-model="val"
                class="w-full h-2 rounded-lg appearance-none bg-slate-200 cursor-pointer accent-slate-900 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:ring-offset-2" />
        </div>

        <!-- Disabled -->
        <div class="space-y-4">
            <label class="text-sm font-medium leading-none text-slate-900 opacity-50">Disabled</label>
            <input type="range" disabled value="30"
                class="w-full h-2 rounded-lg appearance-none bg-slate-100 cursor-not-allowed accent-slate-400" />
        </div>
    </div>
@endsection