@props([
    'currentPage' => 1,
    'totalPages' => 10,
])

<nav role="navigation" aria-label="Pagination" {{ $attributes->merge(['class' => 'mx-auto flex w-full justify-center']) }}>
    <ul class="flex flex-row items-center gap-1">
        <!-- Previous -->
        <li>
            <x-ui.button variant="ghost" class="gap-1 pl-2.5" :disabled="$currentPage <= 1">
                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                <span>Previous</span>
            </x-ui.button>
        </li>

        <!-- Pages -->
        @for ($i = 1; $i <= min($totalPages, 3); $i++)
            <li>
                <x-ui.button :variant="$currentPage == $i ? 'default' : 'outline'" class="h-10 w-10">
                    {{ $i }}
                </x-ui.button>
            </li>
        @endfor

        @if ($totalPages > 3)
            <li>
                <span aria-hidden="true" class="flex h-9 w-9 items-center justify-center">
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
                </span>
            </li>
            <li>
                <x-ui.button variant="outline" class="h-10 w-10">
                    {{ $totalPages }}
                </x-ui.button>
            </li>
        @endif

        <!-- Next -->
        <li>
            <x-ui.button variant="ghost" class="gap-1 pr-2.5" :disabled="$currentPage >= $totalPages">
                <span>Next</span>
                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </x-ui.button>
        </li>
    </ul>
</nav>
