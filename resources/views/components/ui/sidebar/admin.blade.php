@props([
    'collapsible' => true,
])

<x-ui.sidebar :collapsible="$collapsible" {{ $attributes }}>
    <!-- Brand -->
    <x-ui.sidebar.brand href="{{ route('dashboard') }}">
        <h4 class="text-lg font-bold text-zinc-900 dark:text-zinc-100">NeonBiz</h4>
    </x-ui.sidebar.brand>
    
    <!-- Toggle Button -->
    <x-ui.sidebar.toggle class="lg:hidden" />
    
    <!-- Navigation -->
    <x-ui.sidebar.nav>
        <!-- Platform Section -->
        <x-ui.sidebar.nav-group title="Platform">
            <x-ui.sidebar.nav-item 
                href="{{ route('dashboard') }}" 
                icon="home"
                :active="request()->routeIs('dashboard')"
            >
                {{ __('Dashboard') }}
            </x-ui.sidebar.nav-item>
        </x-ui.sidebar.nav-group>
        
        <!-- Management Section -->
        <x-ui.sidebar.nav-group title="Management">
            <x-ui.sidebar.nav-item 
                href="{{ route('client-management.dashboard') }}" 
                icon="users"
                :active="request()->routeIs('client-management.dashboard')"
            >
                {{ __('Clients') }}
            </x-ui.sidebar.nav-item>
        </x-ui.sidebar.nav-group>
    </x-ui.sidebar.nav>
    
    <!-- User Menu -->
    <x-ui.sidebar.user-menu />
</x-ui.sidebar>
