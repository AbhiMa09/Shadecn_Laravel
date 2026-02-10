@extends('layouts.app')

@section('content')
    <div class="grid gap-6 md:grid-cols-2">

        <!-- Simple List -->
        <div class="p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
            <h3 class="mb-4 text-lg font-semibold text-slate-900">Top Users</h3>
            <ul class="divide-y divide-slate-100">
                <li class="flex items-center justify-between py-3">
                    <div class="flex items-center gap-3">
                        <span class="relative flex w-8 h-8 overflow-hidden rounded-full shrink-0">
                            <img class="aspect-square h-full w-full object-cover"
                                src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=256&h=256"
                                alt="Avatar">
                        </span>
                        <span class="text-sm font-medium text-slate-900">Jackson Lee</span>
                    </div>
                    <span class="text-xs text-slate-500">Member</span>
                </li>
                <li class="flex items-center justify-between py-3">
                    <div class="flex items-center gap-3">
                        <span class="relative flex w-8 h-8 overflow-hidden rounded-full shrink-0">
                            <img class="aspect-square h-full w-full object-cover"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=256&h=256"
                                alt="Avatar">
                        </span>
                        <span class="text-sm font-medium text-slate-900">Isabella Ng</span>
                    </div>
                    <span class="text-xs text-slate-500">Admin</span>
                </li>
                <li class="flex items-center justify-between py-3">
                    <div class="flex items-center gap-3">
                        <span
                            class="relative flex w-8 h-8 overflow-hidden rounded-full shrink-0 bg-slate-100 items-center justify-center">
                            <span class="text-xs font-medium text-slate-500">JL</span>
                        </span>
                        <span class="text-sm font-medium text-slate-900">Jenna Lu</span>
                    </div>
                    <span class="text-xs text-slate-500">Member</span>
                </li>
            </ul>
        </div>

        <!-- Description List -->
        <div class="p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
            <h3 class="mb-4 text-lg font-semibold text-slate-900">Project Details</h3>
            <dl class="divide-y divide-slate-100">
                <div class="grid grid-cols-3 gap-4 py-3 sm:grid-cols-4">
                    <dt class="text-sm font-medium text-slate-500">Full name</dt>
                    <dd class="text-sm text-slate-900 sm:col-span-3 sm:col-start-2">Margot Foster</dd>
                </div>
                <div class="grid grid-cols-3 gap-4 py-3 sm:grid-cols-4">
                    <dt class="text-sm font-medium text-slate-500">Application</dt>
                    <dd class="text-sm text-slate-900 sm:col-span-3 sm:col-start-2">Backend Developer</dd>
                </div>
                <div class="grid grid-cols-3 gap-4 py-3 sm:grid-cols-4">
                    <dt class="text-sm font-medium text-slate-500">Email</dt>
                    <dd class="text-sm text-slate-900 sm:col-span-3 sm:col-start-2">margotfoster@example.com</dd>
                </div>
                <div class="grid grid-cols-3 gap-4 py-3 sm:grid-cols-4">
                    <dt class="text-sm font-medium text-slate-500">Salary</dt>
                    <dd class="text-sm text-slate-900 sm:col-span-3 sm:col-start-2">$120,000</dd>
                </div>
            </dl>
        </div>
    </div>
@endsection