@extends('layouts.app')

@section('content')
    <div class="space-y-8 max-w-lg mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">Checkbox</h2>

        <div class="space-y-4">
            <!-- Default Checkbox with Label -->
            <div class="flex items-center space-x-2">
                <input type="checkbox" id="terms"
                    class="w-4 h-4 transition-all bg-white border rounded appearance-none cursor-pointer border-slate-900 checked:bg-slate-900 checked:text-slate-50 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer">
                <!-- Custom Checkmark using svg, relying on peer-checked css or simple accent-color -->
                <!-- Shadcn uses Radix Checkbox which is complex. Here we use stylized native input -->
                <label for="terms"
                    class="text-sm font-medium leading-none cursor-pointer peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-slate-900 select-none">
                    Accept terms and conditions
                </label>
            </div>

            <!-- Checked State (Simulated with native checked) -->
            <div class="flex items-start space-x-2">
                <div class="relative flex items-center">
                    <input type="checkbox" id="notifications" checked
                        class="w-4 h-4 transition-all bg-white border rounded appearance-none cursor-pointer border-slate-900 checked:bg-slate-900 checked:text-slate-50 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:ring-offset-2">
                    <svg class="absolute w-3 h-3 pointer-events-none left-0.5 top-0.5 text-slate-50 hidden peer-checked:block"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                </div>
                <div class="grid gap-1.5 leading-none">
                    <label for="notifications" class="text-sm font-medium leading-none cursor-pointer text-slate-900">
                        Enable notifications
                    </label>
                    <p class="text-sm text-slate-500">
                        You can disable this later in settings.
                    </p>
                </div>
            </div>

            <!-- Disabled -->
            <div class="flex items-center space-x-2">
                <input type="checkbox" id="disabled" disabled
                    class="w-4 h-4 bg-slate-100 border-slate-200 rounded cursor-not-allowed">
                <label for="disabled" class="text-sm font-medium leading-none opacity-70 cursor-not-allowed text-slate-900">
                    Disabled Option
                </label>
            </div>
        </div>
    </div>

    <style>
        /* Custom Checkbox Style helper since we aren't using Radix Primitive directly */
        input[type="checkbox"]:checked {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='white'%3e%3cpath fill-rule='evenodd' d='M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z' clip-rule='evenodd'/%3e%3c/svg%3e");
            background-color: rgb(15 23 42);
            /* slate-900 */
            border-color: rgb(15 23 42);
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
@endsection