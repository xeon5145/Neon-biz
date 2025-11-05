<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Appearance')" :subheading=" __('Update the appearance settings for your account')">
        <x-ui.radio.group variant="segmented" x-data x-model="$flux.appearance">
            <x-ui.radio value="light" icon="sun" name="appearance">{{ __('Light') }}</x-ui.radio>
            <x-ui.radio value="dark" icon="moon" name="appearance">{{ __('Dark') }}</x-ui.radio>
            <x-ui.radio value="system" icon="computer-desktop" name="appearance">{{ __('System') }}</x-ui.radio>
        </x-ui.radio.group>
    </x-settings.layout>
</section>
