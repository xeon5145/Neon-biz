<x-layouts.app.client.sidebar :title="$title ?? null">
    <flux:main container>
        {{ $slot }}
    </flux:main>
</x-layouts.app.client.sidebar>