@extends('layouts.app')

@section('content')
    <div class="space-y-12 max-w-lg mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <h3 class="text-lg font-semibold text-slate-900">Stacked Elements</h3>

        <!-- Avatar Stack -->
        <div class="flex -space-x-4 rtl:space-x-reverse">
            <img class="w-10 h-10 border-2 border-white rounded-full"
                src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=64&h=64"
                alt="">
            <img class="w-10 h-10 border-2 border-white rounded-full"
                src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&q=80&w=64&h=64"
                alt="">
            <img class="w-10 h-10 border-2 border-white rounded-full"
                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=64&h=64"
                alt="">
            <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-slate-700 border-2 border-white rounded-full hover:bg-slate-600"
                href="#">+99</a>
        </div>

        <!-- Notification Stack -->
        <div class="relative inline-flex">
            <button
                class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-medium text-center text-white bg-slate-900 rounded-lg hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300">
                Messages
                <span
                    class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2">8</span>
            </button>
        </div>

        <!-- Card Stack Effect -->
        <div class="relative w-full h-32 pl-4">
            <div
                class="absolute top-0 left-0 w-64 h-24 bg-slate-200 rounded-lg border border-slate-300 transform translate-x-4 translate-y-4">
            </div>
            <div
                class="absolute top-0 left-0 w-64 h-24 bg-slate-100 rounded-lg border border-slate-300 transform translate-x-2 translate-y-2">
            </div>
            <div
                class="absolute top-0 left-0 w-64 h-24 bg-white rounded-lg border border-slate-200 shadow-sm flex items-center justify-center">
                <span class="text-sm font-medium">Front Card</span>
            </div>
        </div>
    </div>
@endsection