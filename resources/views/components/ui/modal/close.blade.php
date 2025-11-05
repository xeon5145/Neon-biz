@props([
    'name' => null,
])

<div 
    {{ $attributes }}
    @if($name)
        x-on:click="$dispatch('close-modal', '{{ $name }}')"
    @else
        x-on:click="show = false"
    @endif
>
    {{ $slot }}
</div>
