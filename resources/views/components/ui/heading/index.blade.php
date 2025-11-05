@props([
    'size' => 'default', // sm, default, lg, xl
    'level' => null,
])

@php
    $tag = $level ? "h{$level}" : 'h2';
    
    $classes = [
        'font-semibold text-zinc-900 dark:text-zinc-100',
        
        match($size) {
            'sm' => 'text-sm',
            'lg' => 'text-lg',
            'xl' => 'text-xl',
            default => 'text-base',
        },
    ];
@endphp

<{{ $tag }} {{ $attributes->class($classes) }}>
    {{ $slot }}
</{{ $tag }}>