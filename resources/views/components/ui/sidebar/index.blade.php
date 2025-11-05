@props([
    'collapsible' => true,
])

@php
    $classes = [
        '[grid-area:sidebar]',
        'flex flex-col',
        'bg-white dark:bg-zinc-900',
        'border-r border-zinc-200 dark:border-zinc-700',
        'min-h-screen max-h-screen',
        'overflow-y-auto',
        'transition-all duration-300 ease-in-out',
        
        // Width management
        'w-[var(--sidebar-width)]',
        
        // Collapsed state styling
        'data-[collapsed]:overflow-visible',
        
        // Mobile overlay styling
        'md:relative md:translate-x-0',
        
        // Scrollbar styling
        'scrollbar-thin scrollbar-track-transparent scrollbar-thumb-zinc-300 dark:scrollbar-thumb-zinc-600',
    ];
@endphp

<div
    {{ $attributes->class($classes) }}
    data-slot="sidebar"
    @if($collapsible)
        x-data="{
            collapsed: false,
            init() {
                // Watch for parent layout collapsed state
                this.$watch('$parent.collapsedSidebar', (value) => {
                    this.collapsed = value;
                });
            }
        }"
        x-bind:data-collapsed="collapsed"
    @endif
>
    {{ $slot }}
</div>
