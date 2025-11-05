@props([
    'container' => false,
])

@php
    $classes = [
        '[grid-area:main]',
        'overflow-y-auto', 
        'min-h-screen max-h-screen',
        $container ? 'container mx-auto px-4' : '',
    ];    
@endphp

<main {{ $attributes->class($classes) }} data-slot="main">
    {{ $slot }}
</main>