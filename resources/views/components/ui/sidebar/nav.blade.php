@props([
    'title' => null,
])

@php
    $classes = [
        'flex-1 px-4 py-2 space-y-1',
    ];
@endphp

<nav {{ $attributes->class($classes) }}>
    @if($title)
        <div class="px-2 py-2 text-xs font-semibold text-zinc-500 dark:text-zinc-400 uppercase tracking-wider transition-opacity duration-300 data-[collapsed]:opacity-0 data-[collapsed]:lg:opacity-100 data-[collapsed]:lg:hidden">
            {{ $title }}
        </div>
    @endif
    
    {{ $slot }}
</nav>
