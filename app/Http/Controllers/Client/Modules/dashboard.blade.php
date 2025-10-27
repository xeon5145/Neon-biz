<x-layouts.clientApp :title="__('Invoice Management')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Invoice Management</h2>
            <flux:button variant="primary" icon="plus">Create Invoice</flux:button>
        </div>
        
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg border border-zinc-200 dark:border-zinc-700">
                <div class="flex items-center">
                    <div class="p-2 bg-blue-100 dark:bg-blue-900 rounded-lg">
                        <flux:icon name="document-text" class="w-6 h-6 text-blue-600 dark:text-blue-400" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Invoices</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">2,456</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg border border-zinc-200 dark:border-zinc-700">
                <div class="flex items-center">
                    <div class="p-2 bg-green-100 dark:bg-green-900 rounded-lg">
                        <flux:icon name="check-circle" class="w-6 h-6 text-green-600 dark:text-green-400" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Paid</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">1,892</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg border border-zinc-200 dark:border-zinc-700">
                <div class="flex items-center">
                    <div class="p-2 bg-yellow-100 dark:bg-yellow-900 rounded-lg">
                        <flux:icon name="clock" class="w-6 h-6 text-yellow-600 dark:text-yellow-400" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Pending</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">342</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg border border-zinc-200 dark:border-zinc-700">
                <div class="flex items-center">
                    <div class="p-2 bg-red-100 dark:bg-red-900 rounded-lg">
                        <flux:icon name="exclamation-circle" class="w-6 h-6 text-red-600 dark:text-red-400" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Overdue</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">222</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recent Invoices -->
        <div class="bg-white dark:bg-zinc-800 rounded-lg border border-zinc-200 dark:border-zinc-700">
            <div class="p-6 border-b border-zinc-200 dark:border-zinc-700">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Recent Invoices</h3>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <flux:icon name="document" class="w-5 h-5 text-blue-500" />
                        </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-900 dark:text-white">Invoice #INV-2024-001 - $1,250.00</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Client: ABC Corporation</p>
                        </div>
                    </div>
                        <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200 rounded-full">Paid</span>
                        </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <flux:icon name="document" class="w-5 h-5 text-blue-500" />
                        </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-900 dark:text-white">Invoice #INV-2024-002 - $875.50</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Client: XYZ Ltd</p>
                    </div>
                </div>
                        <span class="px-2 py-1 text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200 rounded-full">Pending</span>
            </div>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <flux:icon name="document" class="w-5 h-5 text-blue-500" />
        </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-900 dark:text-white">Invoice #INV-2024-003 - $2,100.00</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Client: Tech Solutions Inc</p>
    </div>
                        </div>
                        <span class="px-2 py-1 text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200 rounded-full">Overdue</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.clientApp>