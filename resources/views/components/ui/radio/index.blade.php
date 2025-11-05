@props([
    'value' => null,
    'name' => null,
    'checked' => false,
    'icon' => null,
])

@php
    $classes = [
        'flex items-center space-x-3 p-3 rounded-lg border border-zinc-200 dark:border-zinc-700',
        'hover:bg-zinc-50 dark:hover:bg-zinc-800',
        'cursor-pointer transition-colors duration-200',
        'has-[:checked]:bg-blue-50 dark:has-[:checked]:bg-blue-900/20',
        'has-[:checked]:border-blue-500',
    ];
@endphp

<label {{ $attributes->class($classes) }}>
    <input 
        type="radio" 
        name="{{ $name }}" 
        value="{{ $value }}"
        @if($checked) checked @endif
        class="sr-only"
    />
    
    @if($icon)
        <x-ui.icon :name="$icon" class="w-5 h-5 text-zinc-600 dark:text-zinc-400" />
    @endif
    
    <span class="flex-1 text-sm font-medium text-zinc-900 dark:text-zinc-100">
        {{ $slot }}
    </span>
    
    <div class="w-4 h-4 border-2 border-zinc-300 dark:border-zinc-600 rounded-full flex items-center justify-center">
        <div class="w-2 h-2 bg-blue-500 rounded-full opacity-0 transition-opacity duration-200 peer-checked:opacity-100"></div>
    </div>
</label>
