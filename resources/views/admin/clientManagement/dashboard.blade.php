<x-layouts.adminApp :title="__('Client Management')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl">
        <!-- Header -->
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Client Management</h2>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Monitor and manage all platform clients</p>
            </div>
            <div class="flex gap-3">
                <x-ui.button variant="outline">
                    <x-ui.icon name="funnel" class="w-4 h-4 mr-2" />
                    Filter
                </x-ui.button>
                <x-ui.button variant="primary">
                    <x-ui.icon name="plus" class="w-4 h-4 mr-2" />
                    Add Client
                </x-ui.button>
            </div>
        </div>
        
        <!-- Key Metrics -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg border border-zinc-200 dark:border-zinc-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Clients</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">1,247</p>
                        <p class="text-xs text-green-600 dark:text-green-400 mt-1">+12 this month</p>
                    </div>
                    <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-lg">
                        <x-ui.icon name="users" class="w-6 h-6 text-blue-600 dark:text-blue-400" />
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg border border-zinc-200 dark:border-zinc-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Active Clients</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">1,089</p>
                        <p class="text-xs text-green-600 dark:text-green-400 mt-1">87.3% active rate</p>
                    </div>
                    <div class="p-3 bg-green-100 dark:bg-green-900 rounded-lg">
                        <x-ui.icon name="check-circle" class="w-6 h-6 text-green-600 dark:text-green-400" />
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg border border-zinc-200 dark:border-zinc-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Inactive Clients</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">158</p>
                        <p class="text-xs text-red-600 dark:text-red-400 mt-1">12.7% inactive</p>
                    </div>
                    <div class="p-3 bg-red-100 dark:bg-red-900 rounded-lg">
                        <x-ui.icon name="x-circle" class="w-6 h-6 text-red-600 dark:text-red-400" />
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg border border-zinc-200 dark:border-zinc-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">New This Month</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">47</p>
                        <p class="text-xs text-blue-600 dark:text-blue-400 mt-1">+23% vs last month</p>
                    </div>
                    <div class="p-3 bg-purple-100 dark:bg-purple-900 rounded-lg">
                        <x-ui.icon name="user-plus" class="w-6 h-6 text-purple-600 dark:text-purple-400" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Client Status Overview & Quick Actions -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Client Status Breakdown -->
            <div class="lg:col-span-2 bg-white dark:bg-zinc-800 rounded-lg border border-zinc-200 dark:border-zinc-700">
                <div class="p-6 border-b border-zinc-200 dark:border-zinc-700">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Client Status Overview</h3>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 bg-green-50 dark:bg-green-900/20 rounded-lg">
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                <span class="font-medium text-gray-900 dark:text-white">Active & Paying</span>
                            </div>
                            <div class="text-right">
                                <span class="text-lg font-bold text-gray-900 dark:text-white">892</span>
                                <p class="text-xs text-gray-600 dark:text-gray-400">71.5%</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                <span class="font-medium text-gray-900 dark:text-white">Active & Trial</span>
                            </div>
                            <div class="text-right">
                                <span class="text-lg font-bold text-gray-900 dark:text-white">197</span>
                                <p class="text-xs text-gray-600 dark:text-gray-400">15.8%</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between p-4 bg-yellow-50 dark:bg-yellow-900/20 rounded-lg">
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <span class="font-medium text-gray-900 dark:text-white">Payment Issues</span>
                            </div>
                            <div class="text-right">
                                <span class="text-lg font-bold text-gray-900 dark:text-white">73</span>
                                <p class="text-xs text-gray-600 dark:text-gray-400">5.9%</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between p-4 bg-red-50 dark:bg-red-900/20 rounded-lg">
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <span class="font-medium text-gray-900 dark:text-white">Suspended/Inactive</span>
                            </div>
                            <div class="text-right">
                                <span class="text-lg font-bold text-gray-900 dark:text-white">85</span>
                                <p class="text-xs text-gray-600 dark:text-gray-400">6.8%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white dark:bg-zinc-800 rounded-lg border border-zinc-200 dark:border-zinc-700">
                <div class="p-6 border-b border-zinc-200 dark:border-zinc-700">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Quick Actions</h3>
                </div>
                <div class="p-6 space-y-3">
                    <x-ui.button variant="outline" class="w-full justify-start">
                        <x-ui.icon name="envelope" class="w-4 h-4 mr-2" />
                        Send Bulk Email
                    </x-ui.button>
                    <x-ui.button variant="outline" class="w-full justify-start">
                        <x-ui.icon name="document-text" class="w-4 h-4 mr-2" />
                        Export Client List
                    </x-ui.button>
                    <x-ui.button variant="outline" class="w-full justify-start">
                        <x-ui.icon name="chart-bar" class="w-4 h-4 mr-2" />
                        Generate Report
                    </x-ui.button>
                    <x-ui.button variant="outline" class="w-full justify-start">
                        <x-ui.icon name="cog-6-tooth" class="w-4 h-4 mr-2" />
                        Bulk Actions
                    </x-ui.button>
                </div>
            </div>
        </div>

        <!-- Recent Client Activity & Alerts -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Recent Activity -->
            <div class="bg-white dark:bg-zinc-800 rounded-lg border border-zinc-200 dark:border-zinc-700">
                <div class="p-6 border-b border-zinc-200 dark:border-zinc-700">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Recent Client Activity</h3>
                        <x-ui.button variant="ghost" size="sm">View All</x-ui.button>
                    </div>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <x-ui.icon name="user-plus" class="w-5 h-5 text-green-500" />
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-900 dark:text-white">TechCorp Solutions registered</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">2 hours ago</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <x-ui.icon name="credit-card" class="w-5 h-5 text-blue-500" />
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-900 dark:text-white">RetailMax upgraded to Pro plan</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">4 hours ago</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <x-ui.icon name="exclamation-triangle" class="w-5 h-5 text-yellow-500" />
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-900 dark:text-white">GlobalTech payment failed</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">6 hours ago</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <x-ui.icon name="user-minus" class="w-5 h-5 text-red-500" />
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-900 dark:text-white">StartupXYZ account suspended</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">1 day ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alerts & Notifications -->
            <div class="bg-white dark:bg-zinc-800 rounded-lg border border-zinc-200 dark:border-zinc-700">
                <div class="p-6 border-b border-zinc-200 dark:border-zinc-700">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Alerts & Notifications</h3>
                        <x-ui.badge variant="danger" size="sm">3</x-ui.badge>
                    </div>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <div class="p-4 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg">
                            <div class="flex items-start space-x-3">
                                <x-ui.icon name="exclamation-circle" class="w-5 h-5 text-red-500 mt-0.5" />
                                <div>
                                    <p class="text-sm font-medium text-red-800 dark:text-red-200">Payment Failures</p>
                                    <p class="text-xs text-red-600 dark:text-red-300">15 clients have failed payments requiring attention</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-4 bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-800 rounded-lg">
                            <div class="flex items-start space-x-3">
                                <x-ui.icon name="clock" class="w-5 h-5 text-yellow-500 mt-0.5" />
                                <div>
                                    <p class="text-sm font-medium text-yellow-800 dark:text-yellow-200">Trial Expiring</p>
                                    <p class="text-xs text-yellow-600 dark:text-yellow-300">23 trial accounts expire in the next 7 days</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-4 bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg">
                            <div class="flex items-start space-x-3">
                                <x-ui.icon name="information-circle" class="w-5 h-5 text-blue-500 mt-0.5" />
                                <div>
                                    <p class="text-sm font-medium text-blue-800 dark:text-blue-200">System Update</p>
                                    <p class="text-xs text-blue-600 dark:text-blue-300">Maintenance scheduled for this weekend</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.adminApp>
