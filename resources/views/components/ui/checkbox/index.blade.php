@props([
    'label' => null,
    'checked' => false,
    'name' => null,
    'value' => null,
])

@php
    $classes = [
        'w-4 h-4 text-blue-600 bg-white border-zinc-300 rounded',
        'focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-zinc-800',
        'focus:ring-2 dark:bg-zinc-700 dark:border-zinc-600',
    ];
@endphp

<div class="flex items-center space-x-2">
    <input 
        type="checkbox"
        {{ $attributes->class($classes) }}
        @if($name) name="{{ $name }}" @endif
        @if($value) value="{{ $value }}" @endif
        @if($checked) checked @endif
    />
    
    @if($label)
        <label class="text-sm font-medium text-zinc-700 dark:text-zinc-300">
            {{ $label }}
        </label>
    @endif
</div>
