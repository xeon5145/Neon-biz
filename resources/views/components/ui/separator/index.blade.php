@props([
    'variant' => 'default', // default, subtle
    'orientation' => 'horizontal', // horizontal, vertical
])

@php
    $classes = [
        'border-0',
        
        // Orientation
        $orientation === 'vertical' 
            ? 'w-px h-full' 
            : 'h-px w-full',
            
        // Variant
        match($variant) {
            'subtle' => 'bg-zinc-200 dark:bg-zinc-700',
            default => 'bg-zinc-300 dark:bg-zinc-600',
        },
    ];
@endphp

<hr {{ $attributes->class($classes) }} />