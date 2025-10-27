<x-layouts.clientApp :title="__('Inventory Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Inventory Dashboard</h2>
            <flux:button variant="primary" icon="plus">Add Item</flux:button>
        </div>
        
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg border border-zinc-200 dark:border-zinc-700">
                <div class="flex items-center">
                    <div class="p-2 bg-blue-100 dark:bg-blue-900 rounded-lg">
                        <flux:icon name="cube" class="w-6 h-6 text-blue-600 dark:text-blue-400" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Items</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">1,234</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg border border-zinc-200 dark:border-zinc-700">
                <div class="flex items-center">
                    <div class="p-2 bg-green-100 dark:bg-green-900 rounded-lg">
                        <flux:icon name="check-circle" class="w-6 h-6 text-green-600 dark:text-green-400" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">In Stock</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">987</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg border border-zinc-200 dark:border-zinc-700">
                <div class="flex items-center">
                    <div class="p-2 bg-yellow-100 dark:bg-yellow-900 rounded-lg">
                        <flux:icon name="exclamation-triangle" class="w-6 h-6 text-yellow-600 dark:text-yellow-400" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Low Stock</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">23</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg border border-zinc-200 dark:border-zinc-700">
                <div class="flex items-center">
                    <div class="p-2 bg-red-100 dark:bg-red-900 rounded-lg">
                        <flux:icon name="x-circle" class="w-6 h-6 text-red-600 dark:text-red-400" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Out of Stock</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">12</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recent Activity -->
        <div class="bg-white dark:bg-zinc-800 rounded-lg border border-zinc-200 dark:border-zinc-700">
            <div class="p-6 border-b border-zinc-200 dark:border-zinc-700">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Recent Activity</h3>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="flex-shrink-0">
                            <flux:icon name="plus-circle" class="w-5 h-5 text-green-500" />
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-900 dark:text-white">Added 50 units of Product A</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">2 hours ago</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <div class="flex-shrink-0">
                            <flux:icon name="minus-circle" class="w-5 h-5 text-red-500" />
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-900 dark:text-white">Sold 25 units of Product B</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">4 hours ago</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <div class="flex-shrink-0">
                            <flux:icon name="exclamation-triangle" class="w-5 h-5 text-yellow-500" />
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-900 dark:text-white">Low stock alert for Product C</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">6 hours ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.clientApp>