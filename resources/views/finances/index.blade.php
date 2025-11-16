<x-layout>
    <div class="space-y-6">
        <!-- Header Section -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Finances</h1>
                <p class="text-gray-600 mt-1">Track and manage your organization's financial records</p>
            </div>
            <button class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition-all duration-200 hover:shadow-lg">
                <i class="fas fa-plus"></i>
                <span>Add Transaction</span>
            </button>
        </div>

        <!-- Financial Overview Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-xl shadow-lg p-6 text-white">
                <div class="flex items-center justify-between mb-4">
                    <p class="text-green-100 text-sm font-medium">Total Balance</p>
                    <i class="fas fa-wallet text-2xl opacity-80"></i>
                </div>
                <p class="text-3xl font-bold">$0.00</p>
                <p class="text-green-100 text-sm mt-2">Available funds</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Income</p>
                        <p class="text-2xl font-bold text-green-600 mt-2">$0.00</p>
                        <p class="text-xs text-gray-500 mt-1">This month</p>
                    </div>
                    <div class="bg-green-100 rounded-full p-4">
                        <i class="fas fa-arrow-down text-green-600 text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Expenses</p>
                        <p class="text-2xl font-bold text-red-600 mt-2">$0.00</p>
                        <p class="text-xs text-gray-500 mt-1">This month</p>
                    </div>
                    <div class="bg-red-100 rounded-full p-4">
                        <i class="fas fa-arrow-up text-red-600 text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Transactions</p>
                        <p class="text-3xl font-bold text-gray-900 mt-2">0</p>
                        <p class="text-xs text-gray-500 mt-1">Total count</p>
                    </div>
                    <div class="bg-blue-100 rounded-full p-4">
                        <i class="fas fa-receipt text-blue-600 text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter and Search Bar -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
            <div class="flex flex-col sm:flex-row gap-4">
                <div class="flex-1 relative">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <input type="text" placeholder="Search transactions..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Types</option>
                    <option>Income</option>
                    <option>Expense</option>
                </select>
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Time</option>
                    <option>This Month</option>
                    <option>This Year</option>
                </select>
            </div>
        </div>

        <!-- Transactions Table -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-900">Recent Transactions</h2>
            </div>

            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="bg-gray-100 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-receipt text-gray-400 text-4xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">No transactions yet</h3>
                <p class="text-gray-600 mb-6">Start tracking your finances by adding your first transaction</p>
                <button class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition-all duration-200">
                    <i class="fas fa-plus"></i>
                    <span>Add Transaction</span>
                </button>
            </div>

            <!-- Transactions Table (Example - will show when transactions exist) -->
            <!--
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Mar 15, 2024</td>
                            <td class="px-6 py-4 text-sm text-gray-900">Event Registration Fee</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Events</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Income
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-green-600 text-right">+$500.00</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-edit"></i></button>
                                <button class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            -->
        </div>
    </div>
</x-layout>
