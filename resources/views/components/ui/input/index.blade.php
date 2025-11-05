@props([
    'label' => null,
    'error' => null,
    'type' => 'text',
    'required' => false,
])

@php
    $classes = [
        'block w-full rounded-lg border border-zinc-300 dark:border-zinc-600',
        'bg-white dark:bg-zinc-800',
        'px-3 py-2 text-sm',
        'text-zinc-900 dark:text-zinc-100',
        'placeholder-zinc-500 dark:placeholder-zinc-400',
        'focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none',
        'disabled:opacity-50 disabled:cursor-not-allowed',
        $error ? 'border-red-500 focus:border-red-500 focus:ring-red-500/20' : '',
    ];
@endphp

<div class="space-y-1">
    @if($label)
        <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">
            {{ $label }}
            @if($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif
    
    <input 
        type="{{ $type }}"
        {{ $attributes->class($classes) }}
        @if($required) required @endif
    />
    
    @if($error)
        <p class="text-sm text-red-600 dark:text-red-400">{{ $error }}</p>
    @endif
</div>
