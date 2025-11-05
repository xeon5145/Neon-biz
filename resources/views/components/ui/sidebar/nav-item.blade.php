@props([
    'href' => '#',
    'icon' => null,
    'active' => false,
    'badge' => null,
])

@php
    $classes = [
        'flex items-center space-x-3 px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200',
        'hover:bg-zinc-100 dark:hover:bg-zinc-800',
        'focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-zinc-900',
        
        // Active state
        $active 
            ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 border-r-2 border-blue-500' 
            : 'text-zinc-700 dark:text-zinc-300',
    ];
@endphp

<a 
    href="{{ $href }}" 
    {{ $attributes->class($classes) }}
    wire:navigate
>
    @if($icon)
        <x-ui.icon :name="$icon" class="w-5 h-5 flex-shrink-0" />
    @endif
    
    <span class="flex-1 min-w-0 transition-opacity duration-300 data-[collapsed]:opacity-0 data-[collapsed]:lg:opacity-100 data-[collapsed]:lg:hidden">
        {{ $slot }}
    </span>
    
    @if($badge)
        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-zinc-100 dark:bg-zinc-700 text-zinc-800 dark:text-zinc-200 transition-opacity duration-300 data-[collapsed]:opacity-0 data-[collapsed]:lg:opacity-100 data-[collapsed]:lg:hidden">
            {{ $badge }}
        </span>
    @endif
</a>
