@props([
    'position' => 'top', // top, bottom, floating
])

@php
    $classes = [
        'flex items-center justify-center w-8 h-8 rounded-lg',
        'bg-zinc-100 dark:bg-zinc-800 hover:bg-zinc-200 dark:hover:bg-zinc-700',
        'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-zinc-100',
        'transition-all duration-200',
        'focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-zinc-900',
        
        // Position-specific classes
        match($position) {
            'top' => 'mx-4 mt-2',
            'bottom' => 'mx-4 mb-2',
            'floating' => 'absolute -right-3 top-6 z-10 shadow-md border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-900',
            default => 'mx-4 mt-2',
        }
    ];
@endphp

<button 
    {{ $attributes->class($classes) }}
    @click="$parent.toggle()"
    type="button"
    aria-label="Toggle sidebar"
>
    <x-ui.icon 
        name="bars-3" 
        class="w-5 h-5 transition-transform duration-300"
        x-bind:class="$parent.collapsedSidebar ? 'rotate-180' : ''"
    />
</button>
