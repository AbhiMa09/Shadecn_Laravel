@extends('layouts.app')

@section('content')
    <div class="h-[300px] flex flex-col items-center justify-center bg-slate-900 text-white rounded-lg p-6">
        <h1 class="text-3xl font-bold text-center md:text-5xl">
            Build
            <span class="relative inline-flex w-[150px] md:w-[220px] h-[1.2em] overflow-hidden align-bottom text-blue-400">
                <span x-data="{ 
                        titles: ['Websites', 'Apps', 'Solutions'], 
                        active: 0 
                    }" x-init="setInterval(() => { active = (active + 1) % titles.length }, 2000)"
                    class="absolute flex flex-col transition-transform duration-500 ease-in-out"
                    :style="`transform: translateY(-${active * 100}%)`">
                    <template x-for="title in titles">
                        <span class="flex items-center h-[1.2em] text-left pl-2" x-text="title"></span>
                    </template>
                </span>
            </span>
            <br>
            Faster.
        </h1>

        <div class="mt-8 text-slate-400 text-sm">
            Example using Alpine.js for text rotation loop.
        </div>
    </div>
@endsection