@props(['collapsible' => 'offcanvas', 'side' => 'left', 'variant' => 'sidebar'])

<aside {{ $attributes->merge([
    'class' => 'group/sidebar-wrapper flex min-h-svh w-full has-[[data-variant=inset]]:bg-sidebar md:w-64 md:has-[[data-variant=inset]]:bg-transparent',
]) }}
    data-variant="{{ $variant }}" data-side="{{ $side }}">
    <div
        class="group-data-[side=left]/sidebar-wrapper:border-r group-data-[side=right]/sidebar-wrapper:border-l w-full bg-sidebar text-sidebar-foreground border-sidebar-border relative h-svh flex flex-col md:fixed md:inset-y-0 md:w-64">
        {{ $slot }}
    </div>
</aside>