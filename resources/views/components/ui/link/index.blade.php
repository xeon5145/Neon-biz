@props([
    'href' => '#',
    'variant' => 'default', // default, primary, secondary
])

@php
    $classes = [
        'transition-colors duration-200 hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500',
        
        match($variant) {
            'primary' => 'text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300',
            'secondary' => 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-700 dark:hover:text-zinc-300',
            default => 'text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300',
        },
    ];
@endphp

<a 
    href="{{ $href }}" 
    {{ $attributes->class($classes) }}
    wire:navigate
>
    {{ $slot }}
</a>
