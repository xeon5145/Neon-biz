<x-layouts.clientApp :title="__('Invoice Management')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Invoice Management</h2>
            <x-ui.button variant="primary">
                <x-ui.icon name="plus" class="w-4 h-4 mr-2" />
                Create Invoice
            </x-ui.button>
        </div>
        
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <x-ui.card>
                <div class="flex items-center">
                    <div class="p-2 bg-blue-100 dark:bg-blue-900 rounded-lg">
                        <x-ui.icon name="document-text" class="w-6 h-6 text-blue-600 dark:text-blue-400" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Invoices</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">2,456</p>
                    </div>
                </div>
            </x-ui.card>
            
            <x-ui.card>
                <div class="flex items-center">
                    <div class="p-2 bg-green-100 dark:bg-green-900 rounded-lg">
                        <x-ui.icon name="check-circle" class="w-6 h-6 text-green-600 dark:text-green-400" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Paid</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">1,892</p>
                    </div>
                </div>
            </x-ui.card>
            
            <x-ui.card>
                <div class="flex items-center">
                    <div class="p-2 bg-yellow-100 dark:bg-yellow-900 rounded-lg">
                        <x-ui.icon name="clock" class="w-6 h-6 text-yellow-600 dark:text-yellow-400" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Pending</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">342</p>
                    </div>
                </div>
            </x-ui.card>
            
            <x-ui.card>
                <div class="flex items-center">
                    <div class="p-2 bg-red-100 dark:bg-red-900 rounded-lg">
                        <x-ui.icon name="exclamation-circle" class="w-6 h-6 text-red-600 dark:text-red-400" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Overdue</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">222</p>
                    </div>
                </div>
            </x-ui.card>
        </div>
        
        <!-- Recent Invoices -->
        <x-ui.card>
            <div class="p-6 border-b border-zinc-200 dark:border-zinc-700">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Recent Invoices</h3>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <x-ui.icon name="document" class="w-5 h-5 text-blue-500" />
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-900 dark:text-white">Invoice #INV-2024-001 - $1,250.00</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Client: ABC Corporation</p>
                            </div>
                        </div>
                        <x-ui.badge variant="success">Paid</x-ui.badge>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <x-ui.icon name="document" class="w-5 h-5 text-blue-500" />
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-900 dark:text-white">Invoice #INV-2024-002 - $875.50</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Client: XYZ Ltd</p>
                            </div>
                        </div>
                        <x-ui.badge variant="warning">Pending</x-ui.badge>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <x-ui.icon name="document" class="w-5 h-5 text-blue-500" />
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-900 dark:text-white">Invoice #INV-2024-003 - $2,100.00</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Client: Tech Solutions Inc</p>
                            </div>
                        </div>
                        <x-ui.badge variant="danger">Overdue</x-ui.badge>
                    </div>
                </div>
            </div>
        </x-ui.card>
    </div>
</x-layouts.clientApp>