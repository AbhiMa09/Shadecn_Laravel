@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm space-y-8">

        <div class="space-y-4">
            <h3 class="text-sm font-medium text-slate-500">Horizontal Divider</h3>
            <p class="text-slate-900">Content A</p>
            <div class="relative w-full">
                <div class="absolute inset-0 flex items-center">
                    <span class="w-full border-t border-slate-200"></span>
                </div>
            </div>
            <p class="text-slate-900">Content B</p>
        </div>

        <div class="space-y-4">
            <h3 class="text-sm font-medium text-slate-500">Horizontal Divider with Text</h3>
            <div class="relative w-full">
                <div class="absolute inset-0 flex items-center">
                    <span class="w-full border-t border-slate-200"></span>
                </div>
                <div class="relative flex justify-center text-xs uppercase">
                    <span class="bg-white px-2 text-slate-500">Continue with</span>
                </div>
            </div>
            <div class="flex gap-2 justify-center">
                <button
                    class="inline-flex items-center justify-center px-4 py-2 border rounded-md text-sm font-medium border-slate-200 hover:bg-slate-100">GitHub</button>
                <button
                    class="inline-flex items-center justify-center px-4 py-2 border rounded-md text-sm font-medium border-slate-200 hover:bg-slate-100">Google</button>
            </div>
        </div>

        <div class="space-y-4">
            <h3 class="text-sm font-medium text-slate-500">Vertical Divider</h3>
            <div class="flex items-center space-x-4 h-5 text-sm">
                <div>Blog</div>
                <div class="w-px h-full bg-slate-200"></div>
                <div>Docs</div>
                <div class="w-px h-full bg-slate-200"></div>
                <div>Source</div>
            </div>
        </div>

    </div>
@endsection