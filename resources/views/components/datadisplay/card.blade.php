@extends('layouts.app')

@section('content')
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <!-- Simple Card -->
        <div class="rounded-xl border border-slate-200 bg-white text-slate-950 shadow-sm">
            <div class="flex flex-col space-y-1.5 p-6">
                <h3 class="font-semibold leading-none tracking-tight">Card Title</h3>
                <p class="text-sm text-slate-500">Card Description</p>
            </div>
            <div class="p-6 pt-0">
                <p>Card Content</p>
            </div>
            <div class="flex items-center p-6 pt-0">
                <p class="text-sm text-slate-500">Footer content</p>
            </div>
        </div>

        <!-- Interactive Card -->
        <div class="rounded-xl border border-slate-200 bg-white text-slate-950 shadow-sm">
            <div class="flex flex-col space-y-1.5 p-6">
                <h3 class="font-semibold leading-none tracking-tight">Create project</h3>
                <p class="text-sm text-slate-500">Deploy your new project in one-click.</p>
            </div>
            <div class="p-6 pt-0">
                <div class="grid w-full items-center gap-4">
                    <div class="flex flex-col space-y-1.5">
                        <label class="text-sm font-medium leading-none" for="name">Name</label>
                        <input
                            class="flex h-9 w-full rounded-md border border-slate-200 bg-transparent px-3 py-1 text-sm shadow-sm transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-950 disabled:cursor-not-allowed disabled:opacity-50"
                            id="name" placeholder="Name of your project">
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between p-6 pt-0">
                <button
                    class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium transition-colors bg-transparent border rounded-md shadow-sm border-slate-200 hover:bg-slate-100 hover:text-slate-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-950 disabled:pointer-events-none disabled:opacity-50">Cancel</button>
                <button
                    class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium transition-colors rounded-md shadow bg-slate-900 text-slate-50 hover:bg-slate-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-950 disabled:pointer-events-none disabled:opacity-50">Deploy</button>
            </div>
        </div>

        <!-- Notification Card -->
        <div class="rounded-xl border border-slate-200 bg-white text-slate-950 shadow-sm">
            <div class="flex flex-col space-y-1.5 p-6">
                <h3 class="font-semibold leading-none tracking-tight">Notifications</h3>
                <p class="text-sm text-slate-500">You have 3 unread messages.</p>
            </div>
            <div class="p-6 pt-0">
                <div class="grid gap-4">
                    <div class="flex items-center p-4 space-x-4 border rounded-md border-slate-200">
                        <svg class="w-5 h-5 mt-px text-slate-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                            <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                        </svg>
                        <div class="flex-1 space-y-1">
                            <p class="text-sm font-medium leading-none">Push Notifications</p>
                            <p class="text-sm text-slate-500">Send notifications to device.</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <input type="checkbox" checked
                                class="w-4 h-4 border-slate-900 rounded accent-slate-900 translate-y-px" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center p-6 pt-0">
                <button
                    class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium transition-colors rounded-md shadow bg-slate-900 text-slate-50 hover:bg-slate-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-950 disabled:pointer-events-none disabled:opacity-50">Mark
                    all as read</button>
            </div>
        </div>
    </div>
@endsection