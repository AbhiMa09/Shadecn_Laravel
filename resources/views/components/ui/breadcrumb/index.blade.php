<nav {{ $attributes->merge(['class' => 'flex', 'aria-label' => 'Breadcrumb']) }}>
    <ol class="flex items-center space-x-2">
        {{ $slot }}
    </ol>
</nav>