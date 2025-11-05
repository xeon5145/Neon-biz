@props([
    'user' => null,
    'position' => 'bottom', // top, bottom
])

@php
    $user = $user ?? auth()->user();
    
    $classes = [
        'p-4',
        $position === 'top' ? 'border-b border-zinc-200 dark:border-zinc-700' : 'border-t border-zinc-200 dark:border-zinc-700 mt-auto',
    ];
@endphp

<div {{ $attributes->class($classes) }}>
    <div x-data="{ open: false }" class="relative">
        <!-- User Profile Button -->
        <button 
            @click="open = !open"
            class="flex items-center space-x-3 w-full p-2 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-zinc-900"
        >
            <!-- Avatar -->
            <div class="flex-shrink-0">
                <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center text-white font-medium text-sm">
                    {{ $user->initials() }}
                </div>
            </div>
            
            <!-- User Info -->
            <div class="flex-1 min-w-0 text-left transition-opacity duration-300 data-[collapsed]:opacity-0 data-[collapsed]:lg:opacity-100 data-[collapsed]:lg:hidden">
                <p class="text-sm font-medium text-zinc-900 dark:text-zinc-100 truncate">
                    {{ $user->name }}
                </p>
                <p class="text-xs text-zinc-500 dark:text-zinc-400 truncate">
                    {{ $user->email }}
                </p>
            </div>
            
            <!-- Chevron -->
            <x-ui.icon 
                name="chevron-up-down" 
                class="w-4 h-4 text-zinc-400 transition-opacity duration-300 data-[collapsed]:opacity-0 data-[collapsed]:lg:opacity-100 data-[collapsed]:lg:hidden" 
            />
        </button>
        
        <!-- Dropdown Menu -->
        <div 
            x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            @click.away="open = false"
            class="absolute bottom-full left-0 right-0 mb-2 bg-white dark:bg-zinc-800 rounded-lg shadow-lg border border-zinc-200 dark:border-zinc-700 py-1 z-50"
            style="display: none;"
        >
            <!-- User Info Header -->
            <div class="px-4 py-2 border-b border-zinc-200 dark:border-zinc-700">
                <p class="text-sm font-medium text-zinc-900 dark:text-zinc-100">{{ $user->name }}</p>
                <p class="text-xs text-zinc-500 dark:text-zinc-400">{{ $user->email }}</p>
            </div>
            
            <!-- Menu Items -->
            <div class="py-1">
                <a 
                    href="{{ route('profile.edit') }}" 
                    wire:navigate
                    class="flex items-center space-x-2 px-4 py-2 text-sm text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-700 transition-colors duration-200"
                    @click="open = false"
                >
                    <x-ui.icon name="cog-6-tooth" class="w-4 h-4" />
                    <span>{{ __('Settings') }}</span>
                </a>
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button 
                        type="submit"
                        class="flex items-center space-x-2 w-full px-4 py-2 text-sm text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-700 transition-colors duration-200 text-left"
                        @click="open = false"
                    >
                        <x-ui.icon name="arrow-right-on-rectangle" class="w-4 h-4" />
                        <span>{{ __('Log Out') }}</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
