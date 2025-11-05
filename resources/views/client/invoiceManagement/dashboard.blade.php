<x-layouts.clientApp :title="__('Invoice Management')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl">
        <!-- Header Section -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Invoice Management</h2>
                <p class="text-gray-600 dark:text-gray-400 mt-1">Manage and track all your invoices</p>
            </div>
            <div class="flex gap-3">
                <x-ui.button variant="outline" icon="funnel">Filter</x-ui.button>
                <x-ui.button variant="outline" icon="arrow-down-tray">Export</x-ui.button>
                <x-ui.button variant="primary" icon="plus" class="shadow-lg">Create Invoice</x-ui.button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white dark:bg-zinc-800 p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 shadow-sm hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="p-3 bg-blue-100 dark:bg-blue-900/50 rounded-xl">
                            <x-ui.icon name="document-text" class="w-6 h-6 text-blue-600 dark:text-blue-400" />
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Invoices</p>
                            <p class="text-2xl font-bold text-gray-900 dark:text-white">2,456</p>
                        </div>
                    </div>
                    <div class="text-xs text-green-600 dark:text-green-400 font-medium">+12%</div>
                </div>
            </div>

            <div class="bg-white dark:bg-zinc-800 p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 shadow-sm hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="p-3 bg-green-100 dark:bg-green-900/50 rounded-xl">
                            <x-ui.icon name="check-circle" class="w-6 h-6 text-green-600 dark:text-green-400" />
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Paid</p>
                            <p class="text-2xl font-bold text-gray-900 dark:text-white">1,892</p>
                        </div>
                    </div>
                    <div class="text-xs text-green-600 dark:text-green-400 font-medium">+8%</div>
                </div>
                <div class="mt-3 w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                    <div class="bg-green-500 h-2 rounded-full" style="width: 77%"></div>
                </div>
            </div>

            <div class="bg-white dark:bg-zinc-800 p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 shadow-sm hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="p-3 bg-yellow-100 dark:bg-yellow-900/50 rounded-xl">
                            <x-ui.icon name="clock" class="w-6 h-6 text-yellow-600 dark:text-yellow-400" />
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Pending</p>
                            <p class="text-2xl font-bold text-gray-900 dark:text-white">342</p>
                        </div>
                    </div>
                    <div class="text-xs text-yellow-600 dark:text-yellow-400 font-medium">-3%</div>
                </div>
                <div class="mt-3 w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 14%"></div>
                </div>
            </div>

            <div class="bg-white dark:bg-zinc-800 p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 shadow-sm hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="p-3 bg-red-100 dark:bg-red-900/50 rounded-xl">
                            <x-ui.icon name="exclamation-circle" class="w-6 h-6 text-red-600 dark:text-red-400" />
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Overdue</p>
                            <p class="text-2xl font-bold text-gray-900 dark:text-white">222</p>
                        </div>
                    </div>
                    <div class="text-xs text-red-600 dark:text-red-400 font-medium">+5%</div>
                </div>
                <div class="mt-3 w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                    <div class="bg-red-500 h-2 rounded-full" style="width: 9%"></div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-6 rounded-xl text-white shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold">Quick Invoice</h3>
                        <p class="text-blue-100 text-sm mt-1">Create invoice in seconds</p>
                    </div>
                    <x-ui.icon.bolt class="w-8 h-8 text-blue-200" />
                </div>
                <x-ui.button variant="outline" class="mt-4 text-white border-white hover:bg-white hover:text-blue-600">
                    Start Now
                </x-ui.button>
            </div>

            <div class="bg-gradient-to-r from-green-500 to-green-600 p-6 rounded-xl text-white shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold">Payment Reminder</h3>
                        <p class="text-green-100 text-sm mt-1">Send automated reminders</p>
                    </div>
                    <x-ui.icon name="bell" class="w-8 h-8 text-green-200" />
                </div>
                <x-ui.button variant="outline" class="mt-4 text-white border-white hover:bg-white hover:text-green-600">
                    Send Reminders
                </x-ui.button>
            </div>

            <div class="bg-gradient-to-r from-purple-500 to-purple-600 p-6 rounded-xl text-white shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold">Reports</h3>
                        <p class="text-purple-100 text-sm mt-1">View detailed analytics</p>
                    </div>
                    <x-ui.icon name="chart-bar" class="w-8 h-8 text-purple-200" />
                </div>
                <x-ui.button variant="outline" class="mt-4 text-white border-white hover:bg-white hover:text-purple-600">
                    View Reports
                </x-ui.button>
            </div>
        </div>

        <!-- Recent Invoices -->
        <div class="bg-white dark:bg-zinc-800 rounded-xl border border-zinc-200 dark:border-zinc-700 shadow-sm">
            <div class="p-6 border-b border-zinc-200 dark:border-zinc-700">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Recent Invoices</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Latest invoice activity</p>
                    </div>
                    <x-ui.button variant="ghost" size="sm">View All</x-ui.button>
                </div>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-gray-50 dark:bg-zinc-700/50 rounded-lg hover:bg-gray-100 dark:hover:bg-zinc-700 transition-colors duration-200">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/50 rounded-lg flex items-center justify-center">
                                    <x-ui.icon name="document" class="w-5 h-5 text-blue-600 dark:text-blue-400" />
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Invoice #INV-2024-001</p>
                                    <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200 rounded-full">Paid</span>
                                </div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">ABC Corporation • Due: Dec 15, 2024</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-semibold text-gray-900 dark:text-white">$1,250.00</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Paid on Dec 10</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-between p-4 bg-gray-50 dark:bg-zinc-700/50 rounded-lg hover:bg-gray-100 dark:hover:bg-zinc-700 transition-colors duration-200">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-yellow-100 dark:bg-yellow-900/50 rounded-lg flex items-center justify-center">
                                    <x-ui.icon name="document" class="w-5 h-5 text-yellow-600 dark:text-yellow-400" />
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Invoice #INV-2024-002</p>
                                    <span class="px-2 py-1 text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200 rounded-full">Pending</span>
                                </div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">XYZ Ltd • Due: Dec 20, 2024</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-semibold text-gray-900 dark:text-white">$875.50</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">5 days left</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-between p-4 bg-gray-50 dark:bg-zinc-700/50 rounded-lg hover:bg-gray-100 dark:hover:bg-zinc-700 transition-colors duration-200">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-red-100 dark:bg-red-900/50 rounded-lg flex items-center justify-center">
                                    <x-ui.icon name="document" class="w-5 h-5 text-red-600 dark:text-red-400" />
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Invoice #INV-2024-003</p>
                                    <span class="px-2 py-1 text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200 rounded-full">Overdue</span>
                                </div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Tech Solutions Inc • Due: Dec 5, 2024</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-semibold text-gray-900 dark:text-white">$2,100.00</p>
                            <p class="text-xs text-red-500 dark:text-red-400">10 days overdue</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-between p-4 bg-gray-50 dark:bg-zinc-700/50 rounded-lg hover:bg-gray-100 dark:hover:bg-zinc-700 transition-colors duration-200">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/50 rounded-lg flex items-center justify-center">
                                    <x-ui.icon name="document" class="w-5 h-5 text-blue-600 dark:text-blue-400" />
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Invoice #INV-2024-004</p>
                                    <span class="px-2 py-1 text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200 rounded-full">Draft</span>
                                </div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Global Enterprises • Created today</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-semibold text-gray-900 dark:text-white">$3,450.00</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Not sent</p>
                        </div>
                    </div>
                </div>

                <!-- Empty State (hidden when there are invoices) -->
                <div class="hidden text-center py-12">
                    <x-ui.icon name="document-text" class="w-12 h-12 text-gray-400 dark:text-gray-600 mx-auto mb-4" />
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">No invoices yet</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">Get started by creating your first invoice</p>
                    <x-ui.button variant="primary" icon="plus">Create Your First Invoice</x-ui.button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.clientApp>
