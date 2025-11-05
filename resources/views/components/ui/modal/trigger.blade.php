@props([
    'name' => null,
])

<div 
    {{ $attributes }}
    @if($name)
        x-on:click="$dispatch('open-modal', '{{ $name }}')"
    @endif
>
    {{ $slot }}
</div>
