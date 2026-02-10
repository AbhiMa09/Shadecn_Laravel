@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="w-full py-12 md:py-24 lg:py-32 xl:py-48 bg-white border-b border-slate-200">
        <div class="container px-4 md:px-6 mx-auto">
            <div class="flex flex-col items-center space-y-4 text-center">

                <div class="space-y-2">
                    <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl lg:text-6xl/none text-slate-900">
                        Build your next idea even faster
                    </h1>
                    <p class="mx-auto max-w-[700px] text-slate-500 md:text-xl">
                        Beautifully designed components that you can copy and paste into your apps. Accessible.
                        Customizable. Open Source.
                    </p>
                </div>

                <div class="space-x-4">
                    <a class="inline-flex h-9 items-center justify-center rounded-md bg-slate-900 px-4 py-2 text-sm font-medium text-slate-50 shadow transition-colors hover:bg-slate-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-950 disabled:pointer-events-none disabled:opacity-50"
                        href="#">
                        Get Started
                    </a>
                    <a class="inline-flex h-9 items-center justify-center rounded-md border border-slate-200 bg-white px-4 py-2 text-sm font-medium shadow-sm transition-colors hover:bg-slate-100 hover:text-slate-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-950 disabled:pointer-events-none disabled:opacity-50"
                        href="#">
                        GitHub
                    </a>
                </div>

            </div>
        </div>
    </section>
@endsection