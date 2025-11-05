@props([
    'variant' => 'default', // default, outline
])

@php
    $classes = [
        'space-y-1',
    ];
@endphp

<nav {{ $attributes->class($classes) }}>
    {{ $slot }}
</nav>