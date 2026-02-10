@extends('layouts.app')

@section('content')
    <div class="w-full max-w-md p-6 mx-auto bg-white border rounded-lg shadow-sm border-slate-200 space-y-6">
        <div class="space-y-4">
            <h3 class="text-lg font-medium">Form Validation</h3>

            <!-- Error State -->
            <div class="space-y-2">
                <label
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-red-500"
                    for="email">
                    Email
                </label>
                <input
                    class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-red-500 ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-red-500 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                    id="email" placeholder="name@example.com" value="invalidated">
                <p class="text-[0.8rem] font-medium text-red-500">
                    Invalid email address.
                </p>
            </div>

            <!-- Success State -->
            <div class="space-y-2">
                <label class="text-sm font-medium leading-none text-green-600" for="username">
                    Username
                </label>
                <div class="relative">
                    <input
                        class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-green-600 ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-green-600 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pr-10"
                        id="username" value="shadcn">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <svg class="w-4 h-4 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                    </div>
                </div>
                <p class="text-[0.8rem] font-medium text-green-600">
                    Username available.
                </p>
            </div>

        </div>
    </div>
@endsection