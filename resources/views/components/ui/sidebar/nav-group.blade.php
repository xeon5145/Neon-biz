@props([
    'title' => null,
    'icon' => null,
    'expandable' => false,
    'expanded' => false,
])

@php
    $classes = [
        'space-y-1',
    ];
    
    $headerClasses = [
        'flex items-center justify-between px-3 py-2 text-xs font-semibold text-zinc-500 dark:text-zinc-400 uppercase tracking-wider',
        'transition-opacity duration-300 data-[collapsed]:opacity-0 data-[collapsed]:lg:opacity-100 data-[collapsed]:lg:hidden',
        $expandable ? 'cursor-pointer hover:text-zinc-700 dark:hover:text-zinc-300' : '',
    ];
@endphp

<div {{ $attributes->class($classes) }}>
    @if($title)
        <div 
            class="{{ implode(' ', $headerClasses) }}"
            @if($expandable)
                x-data="{ expanded: {{ $expanded ? 'true' : 'false' }} }"
                @click="expanded = !expanded"
            @endif
        >
            <div class="flex items-center space-x-2">
                @if($icon)
                    <x-ui.icon :name="$icon" class="w-4 h-4" />
                @endif
                <span>{{ $title }}</span>
            </div>
            
            @if($expandable)
                <x-ui.icon 
                    x-show="!expanded" 
                    name="chevron-right" 
                    class="w-4 h-4 transition-transform duration-200" 
                />
                <x-ui.icon 
                    x-show="expanded" 
                    name="chevron-down" 
                    class="w-4 h-4 transition-transform duration-200" 
                />
            @endif
        </div>
        
        @if($expandable)
            <div x-show="expanded" x-transition class="ml-4 space-y-1">
                {{ $slot }}
            </div>
        @else
            {{ $slot }}
        @endif
    @else
        {{ $slot }}
    @endif
</div>
