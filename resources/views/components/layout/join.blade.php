@extends('layouts.app')

@section('content')
    <div class="space-y-8 p-6 bg-white border border-slate-200 rounded-lg shadow-sm flex flex-col items-center">

        <!-- Joined Buttons -->
        <div class="inline-flex rounded-md shadow-sm">
            <button
                class="px-4 py-2 text-sm font-medium bg-white border border-slate-200 rounded-l-lg hover:bg-slate-100 text-slate-900 focus:z-10 focus:ring-2 focus:ring-slate-950 focus:text-slate-900">
                Years
            </button>
            <button
                class="px-4 py-2 text-sm font-medium bg-white border-t border-b border-slate-200 hover:bg-slate-100 text-slate-900 focus:z-10 focus:ring-2 focus:ring-slate-950 focus:text-slate-900">
                Months
            </button>
            <button
                class="px-4 py-2 text-sm font-medium bg-white border border-slate-200 rounded-r-lg hover:bg-slate-100 text-slate-900 focus:z-10 focus:ring-2 focus:ring-slate-950 focus:text-slate-900">
                Days
            </button>
        </div>

        <!-- Joined Input + Button -->
        <div class="flex w-full max-w-sm items-center space-x-2">
            <div class="flex w-full max-w-sm items-center space-x-2">
                <input type="email" placeholder="Email"
                    class="flex h-10 w-full rounded-md rounded-r-none border border-r-0 border-slate-200 bg-white px-3 py-2 text-sm ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" />
                <button
                    class="inline-flex h-10 items-center justify-center rounded-md rounded-l-none bg-slate-900 px-4 py-2 text-sm font-medium text-slate-50 transition-colors hover:bg-slate-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-950 disabled:pointer-events-none disabled:opacity-50">
                    Subscribe
                </button>
            </div>
        </div>

    </div>
@endsection