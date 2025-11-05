<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;

new class extends Component {
    public string $password = '';

    /**
     * Delete the currently authenticated user.
     */
    public function deleteUser(Logout $logout): void
    {
        $this->validate([
            'password' => ['required', 'string', 'current_password'],
        ]);

        tap(Auth::user(), $logout(...))->delete();

        $this->redirect('/', navigate: true);
    }
}; ?>

<section class="mt-10 space-y-6">
    <div class="relative mb-5">
        <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100">{{ __('Delete account') }}</h3>
        <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-400">{{ __('Delete your account and all of its resources') }}</p>
    </div>

    <x-ui.modal.trigger name="confirm-user-deletion">
        <x-ui.button variant="danger" x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')" data-test="delete-user-button">
            {{ __('Delete account') }}
        </x-ui.button>
    </x-ui.modal.trigger>

    <x-ui.modal name="confirm-user-deletion" :show="$errors->isNotEmpty()" maxWidth="lg">
        <div class="p-6">
            <form method="POST" wire:submit="deleteUser" class="space-y-6">
                <div>
                    <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100">{{ __('Are you sure you want to delete your account?') }}</h3>

                    <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>
                </div>

                <x-ui.input wire:model="password" :label="__('Password')" type="password" />

                <div class="flex justify-end space-x-2 rtl:space-x-reverse">
                    <x-ui.modal.close>
                        <x-ui.button variant="outline">{{ __('Cancel') }}</x-ui.button>
                    </x-ui.modal.close>

                    <x-ui.button variant="danger" type="submit" data-test="confirm-delete-user-button">
                        {{ __('Delete account') }}
                    </x-ui.button>
                </div>
            </form>
        </div>
    </x-ui.modal>
</section>
