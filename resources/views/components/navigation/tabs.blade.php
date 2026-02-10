@extends('layouts.app')

@section('content')
    <div class="w-full max-w-lg mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <h2 class="mb-4 text-lg font-semibold text-slate-900">Tabs</h2>

        <div x-data="{ tab: 'account' }" class="w-full">
            <!-- Tab List -->
            <div class="grid w-full grid-cols-2 p-1 bg-slate-100 rounded-md text-slate-500">
                <button @click="tab = 'account'"
                    :class="tab === 'account' ? 'bg-white text-slate-950 shadow-sm' : 'hover:bg-slate-200 hover:text-slate-900'"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                    Account
                </button>
                <button @click="tab = 'password'"
                    :class="tab === 'password' ? 'bg-white text-slate-950 shadow-sm' : 'hover:bg-slate-200 hover:text-slate-900'"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                    Password
                </button>
            </div>

            <!-- Tab Content: Account -->
            <div x-show="tab === 'account'" class="mt-6 space-y-4">
                <div class="space-y-1">
                    <h3 class="text-lg font-medium leading-none">Account</h3>
                    <p class="text-sm text-slate-500">Make changes to your account here. Click save when you're done.</p>
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none" for="name">Name</label>
                    <input
                        class="flex h-10 w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-sm ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                        id="name" value="Pedro Duarte">
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none" for="username">Username</label>
                    <input
                        class="flex h-10 w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-sm ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                        id="username" value="@peduarte">
                </div>
                <div class="flex justify-end pt-2">
                    <button
                        class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium transition-colors rounded-md shadow bg-slate-900 text-slate-50 hover:bg-slate-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-950 disabled:pointer-events-none disabled:opacity-50">Save
                        changes</button>
                </div>
            </div>

            <!-- Tab Content: Password -->
            <div x-show="tab === 'password'" style="display: none;" class="mt-6 space-y-4">
                <div class="space-y-1">
                    <h3 class="text-lg font-medium leading-none">Password</h3>
                    <p class="text-sm text-slate-500">Change your password here. After saving, you'll be logged out.</p>
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none" for="current">Current Password</label>
                    <input type="password"
                        class="flex h-10 w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-sm ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                        id="current">
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-medium leading-none" for="new">New Password</label>
                    <input type="password"
                        class="flex h-10 w-full rounded-md border border-slate-200 bg-white px-3 py-2 text-sm ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                        id="new">
                </div>
                <div class="flex justify-end pt-2">
                    <button
                        class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium transition-colors rounded-md shadow bg-slate-900 text-slate-50 hover:bg-slate-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-950 disabled:pointer-events-none disabled:opacity-50">Save
                        password</button>
                </div>
            </div>
        </div>
    </div>
@endsection