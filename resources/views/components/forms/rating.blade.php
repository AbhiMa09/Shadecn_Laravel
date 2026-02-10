@extends('layouts.app')

@section('content')
    <div class="space-y-8 max-w-lg mx-auto p-6 bg-white border border-slate-200 rounded-lg shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">Rating</h2>

        <!-- Star Rating using Alpine -->
        <div class="flex flex-col gap-2" x-data="{ rating: 3, hover: 0 }">
            <label class="text-sm font-medium leading-none text-slate-900">Rate your experience</label>

            <div class="flex items-center space-x-1">
                <template x-for="star in 5">
                    <button type="button" @click="rating = star" @mouseenter="hover = star" @mouseleave="hover = 0"
                        class="focus:outline-none transition-colors duration-150"
                        :class="(hover || rating) >= star ? 'text-yellow-400' : 'text-slate-300'">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                    </button>
                </template>
            </div>
            <p class="text-sm text-slate-500">You selected: <span x-text="rating"></span> stars</p>
        </div>
    </div>
@endsection