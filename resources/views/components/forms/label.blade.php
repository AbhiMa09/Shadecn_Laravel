@extends('layouts.app')

@section('content')
    <div class="space-y-8 max-w-lg mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">Label</h2>

        <div class="grid gap-6">
            <div class="flex items-center space-x-2">
                <input type="checkbox" id="terms2" class="w-4 h-4 border-slate-900 rounded accent-slate-900" />
                <label for="terms2"
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-slate-900">
                    Accept terms and conditions
                </label>
            </div>

            <div class="grid gap-2">
                <label class="text-sm font-medium leading-none text-slate-900">
                    This is a label
                </label>
                <p class="text-sm text-slate-500">This is a helper text typically below a label.</p>
            </div>
        </div>
    </div>
@endsection