@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center p-12 bg-white border border-slate-200 rounded-lg shadow-sm">
        <div class="flex gap-2">
            <div
                class="group relative h-96 w-20 cursor-pointer overflow-hidden rounded-2xl transition-all duration-500 hover:w-64">
                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=2070&auto=format&fit=crop"
                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" alt="" />
                <div
                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/80 to-transparent p-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    <h3 class="text-white font-bold">Nike Red</h3>
                </div>
            </div>

            <div
                class="group relative h-96 w-20 cursor-pointer overflow-hidden rounded-2xl transition-all duration-500 hover:w-64">
                <img src="https://images.unsplash.com/photo-1511556532299-8f662fc26c06?q=80&w=2070&auto=format&fit=crop"
                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" alt="" />
                <div
                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/80 to-transparent p-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    <h3 class="text-white font-bold">Nike Black</h3>
                </div>
            </div>

            <div
                class="group relative h-96 w-20 cursor-pointer overflow-hidden rounded-2xl transition-all duration-500 hover:w-64">
                <img src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?q=80&w=1974&auto=format&fit=crop"
                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" alt="" />
                <div
                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/80 to-transparent p-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    <h3 class="text-white font-bold">Nike Air</h3>
                </div>
            </div>

            <div
                class="group relative h-96 w-20 cursor-pointer overflow-hidden rounded-2xl transition-all duration-500 hover:w-64">
                <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?q=80&w=1964&auto=format&fit=crop"
                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" alt="" />
                <div
                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/80 to-transparent p-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    <h3 class="text-white font-bold">Nike Green</h3>
                </div>
            </div>
        </div>
    </div>
@endsection