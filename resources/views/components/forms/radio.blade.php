@extends('layouts.app')

@section('content')
    <div class="space-y-8 max-w-lg mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">Radio Group</h2>

        <div class="grid gap-4">
            <label class="text-base font-medium text-slate-900">Notify me about...</label>

            <div class="flex items-center space-x-2">
                <input type="radio" value="all" id="all" name="notification"
                    class="w-4 h-4 border-slate-900 text-slate-900 focus:ring-slate-950 cursor-pointer">
                <label for="all"
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-slate-900 cursor-pointer">All
                    new messages</label>
            </div>

            <div class="flex items-center space-x-2">
                <input type="radio" value="mentions" id="mentions" name="notification"
                    class="w-4 h-4 border-slate-900 text-slate-900 focus:ring-slate-950 cursor-pointer">
                <label for="mentions"
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-slate-900 cursor-pointer">Direct
                    messages and mentions</label>
            </div>

            <div class="flex items-center space-x-2">
                <input type="radio" value="none" id="none" name="notification" disabled
                    class="w-4 h-4 border-slate-200 text-slate-300 cursor-not-allowed bg-slate-100">
                <label for="none"
                    class="text-sm font-medium leading-none opacity-70 cursor-not-allowed text-slate-500">Nothing
                    (Disabled)</label>
            </div>
        </div>
    </div>

    <style>
        /* Custom Radio Style */
        input[type="radio"] {
            appearance: none;
            -webkit-appearance: none;
            border-radius: 50%;
            width: 1rem;
            height: 1rem;
            border: 1px solid rgb(15 23 42);
            /* slate-900 */
            outline: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        input[type="radio"]:checked::before {
            content: "";
            width: 0.625rem;
            height: 0.625rem;
            border-radius: 50%;
            background-color: rgb(15 23 42);
            display: block;
        }

        input[type="radio"]:focus-visible {
            box-shadow: 0 0 0 2px white, 0 0 0 4px rgb(15 23 42);
        }

        input[type="radio"]:disabled {
            border-color: rgb(226 232 240);
        }
    </style>
@endsection