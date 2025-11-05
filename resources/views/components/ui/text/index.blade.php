@props([
    'color' => 'default', // default, red, green, blue, yellow
    'size' => 'default', // sm, default, lg
])

@php
    $classes = [
        // Base classes
        'block',
        
        // Size classes
        match($size) {
            'sm' => 'text-sm',
            'lg' => 'text-lg',
            default => 'text-base',
        },
        
        // Color classes
        match($color) {
            'red' => 'text-red-600 dark:text-red-400',
            'green' => 'text-green-600 dark:text-green-400',
            'blue' => 'text-blue-600 dark:text-blue-400',
            'yellow' => 'text-yellow-600 dark:text-yellow-400',
            default => 'text-zinc-600 dark:text-zinc-400',
        },
    ];
@endphp

<p {{ $attributes->class($classes) }}>
    {{ $slot }}
</p>
