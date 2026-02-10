@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm space-y-4">
        <h2 class="mb-4 text-lg font-semibold text-slate-900">Chat Bubble</h2>

        <!-- Receiver -->
        <div class="flex gap-2 justify-start">
            <div class="flex flex-col gap-1 items-start">
                <span class="text-xs text-slate-500 ml-1">Obi-Wan Kenobi</span>
                <div class="p-3 rounded-2xl bg-slate-100 text-sm text-slate-900 rounded-tl-none">
                    It's over Anakin, I have the high ground.
                </div>
                <span class="text-xs text-slate-400 ml-1">12:45</span>
            </div>
        </div>

        <!-- Receiver -->
        <div class="flex gap-2 justify-start">
            <div class="flex flex-col gap-1 items-start">
                <span class="text-xs text-slate-500 ml-1">Obi-Wan Kenobi</span>
                <div class="p-3 rounded-2xl bg-slate-100 text-sm text-slate-900 rounded-l-none">
                    You were the Chosen One!
                </div>
                <span class="text-xs text-slate-400 ml-1">12:46</span>
            </div>
        </div>

        <!-- Sender -->
        <div class="flex gap-2 justify-end">
            <div class="flex flex-col gap-1 items-end">
                <span class="text-xs text-slate-500 mr-1">Anakin Skywalker</span>
                <div class="p-3 rounded-2xl bg-slate-900 text-sm text-slate-50 rounded-br-none">
                    I hate you!
                </div>
                <span class="text-xs text-slate-400 mr-1">12:46</span>
            </div>
        </div>

    </div>
@endsection