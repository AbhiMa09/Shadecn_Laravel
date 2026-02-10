@extends('layouts.app')

@section('content')
    <div class="space-y-8 max-w-lg mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">Switch / Toggle</h2>

        <div class="flex items-center space-x-4">

            <!-- Toggle Component -->
            <button type="button" role="switch" aria-checked="false" x-data="{ state: false }" @click="state = !state"
                :aria-checked="state" :data-state="state ? 'checked' : 'unchecked'"
                :class="state ? 'bg-slate-900' : 'bg-slate-200'"
                class="peer inline-flex h-6 w-11 shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2 focus-visible:ring-offset-white disabled:cursor-not-allowed disabled:opacity-50"
                id="airplane-mode">
                <span :data-state="state ? 'checked' : 'unchecked'" :class="state ? 'translate-x-[22px]' : 'translate-x-0'"
                    class="block w-5 h-5 transition-transform bg-white rounded-full shadow-lg ring-0 pointer-events-none"></span>
            </button>

            <label for="airplane-mode" class="text-sm font-medium leading-none cursor-pointer text-slate-900"
                @click="$prevElementSibling.click()">
                Airplane Mode
            </label>
        </div>

        <div class="mt-4 flex items-center space-x-4">

            <!-- Toggle Component (Pre-checked) -->
            <button type="button" role="switch" x-data="{ state: true }" @click="state = !state"
                :class="state ? 'bg-slate-900' : 'bg-slate-200'"
                class="peer inline-flex h-6 w-11 shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-950 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
                <span :class="state ? 'translate-x-[22px]' : 'translate-x-0'"
                    class="block w-5 h-5 transition-transform bg-white rounded-full shadow-lg ring-0 pointer-events-none"></span>
            </button>

            <label class="text-sm font-medium leading-none cursor-pointer text-slate-900">
                Bluetooth
            </label>
        </div>
    </div>
@endsection