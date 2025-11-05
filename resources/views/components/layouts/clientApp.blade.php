<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">
    <x-ui.layout variant="sidebar-main" :collapsable="true">
        <!-- Client Sidebar -->
        <x-ui.sidebar.client />
        
        <!-- Main Content -->
        <x-ui.layout.main>
            <div class="p-6">
                {{ $slot }}
            </div>
        </x-ui.layout.main>
    </x-ui.layout>
    
    @stack('scripts')
</body>
</html>
