@props([
    'variant' => 'default', // default, primary, success, warning, danger, info
    'size' => 'default', // sm, default, lg
])

@php
    $classes = [
        'inline-flex items-center font-medium rounded-full',
        
        // Sizes
        match($size) {
            'sm' => 'px-2 py-0.5 text-xs',
            'lg' => 'px-4 py-2 text-sm',
            default => 'px-2.5 py-1 text-xs',
        },
        
        // Variants
        match($variant) {
            'primary' => 'bg-blue-100 text-blue-800 dark:bg-blue-900/20 dark:text-blue-300',
            'success' => 'bg-green-100 text-green-800 dark:bg-green-900/20 dark:text-green-300',
            'warning' => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900/20 dark:text-yellow-300',
            'danger' => 'bg-red-100 text-red-800 dark:bg-red-900/20 dark:text-red-300',
            'info' => 'bg-cyan-100 text-cyan-800 dark:bg-cyan-900/20 dark:text-cyan-300',
            default => 'bg-zinc-100 text-zinc-800 dark:bg-zinc-700 dark:text-zinc-200',
        },
    ];
@endphp

<span {{ $attributes->class($classes) }}>
    {{ $slot }}
</span>
