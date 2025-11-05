@props([
    'name' => null,
    'show' => false,
    'maxWidth' => 'md',
])

@php
    $maxWidthClasses = [
        'sm' => 'max-w-sm',
        'md' => 'max-w-md',
        'lg' => 'max-w-lg',
        'xl' => 'max-w-xl',
        '2xl' => 'max-w-2xl',
    ];
    
    $maxWidthClass = $maxWidthClasses[$maxWidth] ?? $maxWidthClasses['md'];
@endphp

<div 
    x-data="{ show: @js($show) }"
    @if($name)
        x-on:open-modal.window="$event.detail == '{{ $name }}' ? show = true : null"
        x-on:close-modal.window="$event.detail == '{{ $name }}' ? show = false : null"
    @endif
    x-show="show"
    x-transition:enter="ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-50 overflow-y-auto"
    style="display: none;"
>
    <!-- Backdrop -->
    <div 
        class="fixed inset-0 bg-black/50 transition-opacity"
        x-on:click="show = false"
    ></div>
    
    <!-- Modal -->
    <div class="flex min-h-full items-center justify-center p-4">
        <div 
            {{ $attributes->class([
                'relative w-full bg-white dark:bg-zinc-800 rounded-lg shadow-xl',
                'border border-zinc-200 dark:border-zinc-700',
                $maxWidthClass
            ]) }}
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-on:click.stop
        >
            {{ $slot }}
        </div>
    </div>
</div>
