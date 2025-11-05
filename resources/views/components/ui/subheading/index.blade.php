@props([
    'size' => 'default', // sm, default, lg
])

@php
    $classes = [
        'text-zinc-600 dark:text-zinc-400',
        
        match($size) {
            'sm' => 'text-xs',
            'lg' => 'text-base',
            default => 'text-sm',
        },
    ];
@endphp

<p {{ $attributes->class($classes) }}>
    {{ $slot }}
</p>