@props([
    'href' => '#',
    'logo' => null,
])

@php
    $classes = [
        'flex items-center space-x-3 p-4 border-b border-zinc-200 dark:border-zinc-700',
        'transition-all duration-300',
        'hover:bg-zinc-50 dark:hover:bg-zinc-800',
    ];
@endphp

<a 
    href="{{ $href }}" 
    {{ $attributes->class($classes) }}
    wire:navigate
>
    @if($logo)
        <div class="flex-shrink-0">
            {{ $logo }}
        </div>
    @endif
    
    <div class="flex-1 min-w-0 transition-opacity duration-300 data-[collapsed]:opacity-0 data-[collapsed]:lg:opacity-100 data-[collapsed]:lg:hidden">
        {{ $slot }}
    </div>
</a>
