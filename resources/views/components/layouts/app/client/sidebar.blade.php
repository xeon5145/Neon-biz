<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    <flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <a href="{{ route('dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
            <h4>NeonBiz</h4>
        </a>

        <!-- System -->
        <flux:navlist variant="outline">
            <flux:navlist.group :heading="__('Platform')" class="grid">
                <flux:navlist.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>
        <!-- System -->

        <!-- Modules -->
        <flux:navlist variant="outline">
            <flux:navlist.group :heading="__('Modules')" class="grid">
                <!-- Employee Management with Expandable Submenu -->
                <div x-data="{ expanded: false }">
                    <div @click="expanded = !expanded" class="cursor-pointer flex items-center justify-between p-2 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 text-zinc-700 dark:text-zinc-300">
                        <div class="flex items-center gap-2">
                            <flux:icon name="users" class="w-5 h-5" />
                            <span>{{ __('Employee Management') }}</span>
                        </div>
                        <flux:icon x-show="!expanded" name="chevron-right" class="w-4 h-4" />
                        <flux:icon x-show="expanded" name="chevron-down" class="w-4 h-4" />
                    </div>

                    <div x-show="expanded" x-transition class="ml-4 space-y-1">
                        <flux:navlist.item icon="user-plus" :href="route('invoice.dashboard')" :current="request()->routeIs('invoice.dashboard')" wire:navigate>{{ __('Add Employee') }}</flux:navlist.item>
                        <flux:navlist.item icon="user-group" :href="route('invoice.dashboard')" :current="request()->routeIs('invoice.dashboard')" wire:navigate>{{ __('View Employees') }}</flux:navlist.item>
                    </div>
                </div>

                <!-- Attendance Management with Expandable Submenu -->
                <div x-data="{ expanded: false }">
                    <div @click="expanded = !expanded" class="cursor-pointer flex items-center justify-between p-2 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 text-zinc-700 dark:text-zinc-300">
                        <div class="flex items-center gap-2">
                            <flux:icon name="document-text" class="w-5 h-5" />
                            <span>{{ __('Attendance Management') }}</span>
                        </div>
                        <flux:icon x-show="!expanded" name="chevron-right" class="w-4 h-4" />
                        <flux:icon x-show="expanded" name="chevron-down" class="w-4 h-4" />
                    </div>

                    <div x-show="expanded" x-transition class="ml-4 space-y-1">
                        <flux:navlist.item icon="clock" :href="route('invoice.dashboard')" :current="request()->routeIs('invoice.dashboard')" wire:navigate>{{ __('Clock In/Out') }}</flux:navlist.item>
                        <flux:navlist.item icon="calendar" :href="route('invoice.dashboard')" :current="request()->routeIs('invoice.dashboard')" wire:navigate>{{ __('View Attendance') }}</flux:navlist.item>
                        <flux:navlist.item icon="chart-bar" :href="route('invoice.dashboard')" :current="request()->routeIs('invoice.dashboard')" wire:navigate>{{ __('Reports') }}</flux:navlist.item>
                    </div>
                </div>

                <!-- Inventory Management with Expandable Submenu -->
                <div x-data="{ expanded: false }">
                    <div @click="expanded = !expanded" class="cursor-pointer flex items-center justify-between p-2 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 text-zinc-700 dark:text-zinc-300">
                        <div class="flex items-center gap-2">
                            <flux:icon name="square-3-stack-3d" class="w-5 h-5" />
                            <span>{{ __('Inventory Management') }}</span>
                        </div>
                        <flux:icon x-show="!expanded" name="chevron-right" class="w-4 h-4" />
                        <flux:icon x-show="expanded" name="chevron-down" class="w-4 h-4" />
                    </div>

                    <div x-show="expanded" x-transition class="ml-4 space-y-1">
                        <flux:navlist.item icon="plus" :href="route('inventory.dashboard')" :current="request()->routeIs('inventory.dashboard')" wire:navigate>{{ __('Add Item') }}</flux:navlist.item>
                        <flux:navlist.item icon="list-bullet" :href="route('inventory.dashboard')" :current="request()->routeIs('inventory.dashboard')" wire:navigate>{{ __('View Items') }}</flux:navlist.item>
                        <flux:navlist.item icon="arrow-path" :href="route('inventory.dashboard')" :current="request()->routeIs('inventory.dashboard')" wire:navigate>{{ __('Stock Movement') }}</flux:navlist.item>
                    </div>
                </div>

                <!-- Invoice Management with Expandable Submenu -->
                <div x-data="{ expanded: false }">
                    <div @click="expanded = !expanded" class="cursor-pointer flex items-center justify-between p-2 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 text-zinc-700 dark:text-zinc-300">
                        <div class="flex items-center gap-2">
                            <flux:icon name="document-text" class="w-5 h-5" />
                            <span>{{ __('Invoice Management') }}</span>
                        </div>
                        <flux:icon x-show="!expanded" name="chevron-right" class="w-4 h-4" />
                        <flux:icon x-show="expanded" name="chevron-down" class="w-4 h-4" />
                    </div>

                    <div x-show="expanded" x-transition class="ml-4 space-y-1">
                        <flux:navlist.item icon="document-plus" :href="route('invoice.dashboard')" :current="request()->routeIs('invoice.dashboard')" wire:navigate>{{ __('Create Invoice') }}</flux:navlist.item>
                        <flux:navlist.item icon="document-duplicate" :href="route('invoice.dashboard')" :current="request()->routeIs('invoice.dashboard')" wire:navigate>{{ __('View Invoices') }}</flux:navlist.item>
                        <flux:navlist.item icon="banknotes" :href="route('invoice.dashboard')" :current="request()->routeIs('invoice.dashboard')" wire:navigate>{{ __('Payments') }}</flux:navlist.item>
                    </div>
                </div>
            </flux:navlist.group>
        </flux:navlist>
        <!-- Modules -->

        <flux:spacer />

        <!-- Desktop User Menu -->
        <flux:dropdown class="hidden lg:block" position="bottom" align="start">
            <flux:profile
                :name="auth()->user()->name"
                :initials="auth()->user()->initials()"
                icon:trailing="chevrons-up-down"
                data-test="sidebar-menu-button" />

            <flux:menu class="w-[220px]">
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>

                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.radio.group>
                    <flux:menu.item :href="route('profile.edit')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full" data-test="logout-button">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:sidebar>

    <!-- Mobile User Menu -->
    <flux:header class="lg:hidden">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <flux:spacer />

        <flux:dropdown position="top" align="end">
            <flux:profile
                :initials="auth()->user()->initials()"
                icon-trailing="chevron-down" />

            <flux:menu>
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>

                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.radio.group>
                    <flux:menu.item :href="route('profile.edit')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full" data-test="logout-button">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:header>

    {{ $slot }}

    @fluxScripts
</body>

</html>