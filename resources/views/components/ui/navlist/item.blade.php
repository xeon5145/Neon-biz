@props([
    'href' => '#',
    'active' => false,
])

@php
    $classes = [
        'block px-3 py-2 rounded-lg text-sm font-medium transition-colors duration-200',
        'hover:bg-zinc-100 dark:hover:bg-zinc-800',
        'focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-zinc-900',
        
        $active 
            ? 'bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300' 
            : 'text-zinc-700 dark:text-zinc-300',
    ];
@endphp

<a 
    href="{{ $href }}" 
    {{ $attributes->class($classes) }}
    wire:navigate
>
    {{ $slot }}
</a>