@props([
    'variant' => 'default', // default, segmented
])

@php
    $classes = [
        'space-y-2' => $variant === 'default',
        'flex rounded-lg border border-zinc-200 dark:border-zinc-700 p-1 bg-zinc-50 dark:bg-zinc-800' => $variant === 'segmented',
    ];
@endphp

<div {{ $attributes->class($classes) }}>
    {{ $slot }}
</div>
