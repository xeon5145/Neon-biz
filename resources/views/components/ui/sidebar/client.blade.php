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
        
        <!-- Modules Section -->
        <x-ui.sidebar.nav-group title="Modules">
            <!-- Employee Management -->
            <x-ui.sidebar.nav-group 
                title="Employee Management" 
                icon="users" 
                :expandable="true"
            >
                <x-ui.sidebar.nav-item 
                    href="{{ route('invoice.dashboard') }}" 
                    icon="user-plus"
                    :active="request()->routeIs('invoice.dashboard')"
                >
                    {{ __('Add Employee') }}
                </x-ui.sidebar.nav-item>
                <x-ui.sidebar.nav-item 
                    href="{{ route('invoice.dashboard') }}" 
                    icon="user-group"
                    :active="request()->routeIs('invoice.dashboard')"
                >
                    {{ __('View Employees') }}
                </x-ui.sidebar.nav-item>
            </x-ui.sidebar.nav-group>
            
            <!-- Attendance Management -->
            <x-ui.sidebar.nav-group 
                title="Attendance Management" 
                icon="document-text" 
                :expandable="true"
            >
                <x-ui.sidebar.nav-item 
                    href="{{ route('invoice.dashboard') }}" 
                    icon="clock"
                    :active="request()->routeIs('invoice.dashboard')"
                >
                    {{ __('Clock In/Out') }}
                </x-ui.sidebar.nav-item>
                <x-ui.sidebar.nav-item 
                    href="{{ route('invoice.dashboard') }}" 
                    icon="calendar"
                    :active="request()->routeIs('invoice.dashboard')"
                >
                    {{ __('View Attendance') }}
                </x-ui.sidebar.nav-item>
                <x-ui.sidebar.nav-item 
                    href="{{ route('invoice.dashboard') }}" 
                    icon="chart-bar"
                    :active="request()->routeIs('invoice.dashboard')"
                >
                    {{ __('Reports') }}
                </x-ui.sidebar.nav-item>
            </x-ui.sidebar.nav-group>
            
            <!-- Inventory Management -->
            <x-ui.sidebar.nav-group 
                title="Inventory Management" 
                icon="cube" 
                :expandable="true"
            >
                <x-ui.sidebar.nav-item 
                    href="{{ route('inventory.dashboard') }}" 
                    icon="plus"
                    :active="request()->routeIs('inventory.dashboard')"
                >
                    {{ __('Add Item') }}
                </x-ui.sidebar.nav-item>
                <x-ui.sidebar.nav-item 
                    href="{{ route('inventory.dashboard') }}" 
                    icon="list-bullet"
                    :active="request()->routeIs('inventory.dashboard')"
                >
                    {{ __('View Items') }}
                </x-ui.sidebar.nav-item>
                <x-ui.sidebar.nav-item 
                    href="{{ route('inventory.dashboard') }}" 
                    icon="arrow-path"
                    :active="request()->routeIs('inventory.dashboard')"
                >
                    {{ __('Stock Movement') }}
                </x-ui.sidebar.nav-item>
            </x-ui.sidebar.nav-group>
            
            <!-- Invoice Management -->
            <x-ui.sidebar.nav-group 
                title="Invoice Management" 
                icon="document-text" 
                :expandable="true"
            >
                <x-ui.sidebar.nav-item 
                    href="{{ route('invoice.dashboard') }}" 
                    icon="document-plus"
                    :active="request()->routeIs('invoice.dashboard')"
                >
                    {{ __('Create Invoice') }}
                </x-ui.sidebar.nav-item>
                <x-ui.sidebar.nav-item 
                    href="{{ route('invoice.dashboard') }}" 
                    icon="document-duplicate"
                    :active="request()->routeIs('invoice.dashboard')"
                >
                    {{ __('View Invoices') }}
                </x-ui.sidebar.nav-item>
                <x-ui.sidebar.nav-item 
                    href="{{ route('invoice.dashboard') }}" 
                    icon="banknotes"
                    :active="request()->routeIs('invoice.dashboard')"
                >
                    {{ __('Payments') }}
                </x-ui.sidebar.nav-item>
            </x-ui.sidebar.nav-group>
        </x-ui.sidebar.nav-group>
    </x-ui.sidebar.nav>
    
    <!-- User Menu -->
    <x-ui.sidebar.user-menu />
</x-ui.sidebar>
