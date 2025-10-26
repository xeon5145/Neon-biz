<x-layouts.app.admin.sidebar :title="$title ?? null">
    <flux:main container>
        {{ $slot }}
    </flux:main>
</x-layouts.app.admin.sidebar>
