<form {{ $attributes->merge(['class' => 'relative']) }}>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="absolute left-2 top-2.5 h-4 w-4 text-sidebar-foreground/50">
        <circle cx="11" cy="11" r="8" />
        <path d="m21 21-4.3-4.3" />
    </svg>
    <input type="search" placeholder="Search..."
        class="h-9 w-full rounded-md border border-sidebar-border bg-background px-8 py-2 text-sm text-sidebar-foreground placeholder:text-sidebar-foreground/50 focus:border-sidebar-ring focus:outline-none focus:ring-1 focus:ring-sidebar-ring" />
</form>