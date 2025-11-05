@props([
    'variant' => 'default', // default, bordered, elevated
    'padding' => 'default', // none, sm, default, lg
])

@php
    $classes = [
        'bg-white dark:bg-zinc-800 rounded-lg',
        
        // Variants
        match($variant) {
            'bordered' => 'border border-zinc-200 dark:border-zinc-700',
            'elevated' => 'shadow-lg border border-zinc-200 dark:border-zinc-700',
            default => 'border border-zinc-200 dark:border-zinc-700',
        },
        
        // Padding
        match($padding) {
            'none' => '',
            'sm' => 'p-4',
            'lg' => 'p-8',
            default => 'p-6',
        },
    ];
@endphp

<div {{ $attributes->class($classes) }}>
    {{ $slot }}
</div>
