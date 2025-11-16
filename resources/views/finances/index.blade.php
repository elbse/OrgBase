<x-layout>
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Finances</h1>
            <p class="text-gray-600 mt-2">Track and manage your organization's financial transactions.</p>
        </div>
        <button class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition-colors duration-200 font-semibold flex items-center gap-2">
            <i class="fa-solid fa-plus"></i>
            Add Transaction
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 font-medium">Total Income</p>
                    <p class="text-2xl font-bold text-gray-900 mt-2">$45,230</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <i class="fa-solid fa-arrow-up text-green-600 text-xl"></i>
                </div>
            </div>
            <p class="text-xs text-green-600 mt-2">+12.5% from last month</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-red-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 font-medium">Total Expenses</p>
                    <p class="text-2xl font-bold text-gray-900 mt-2">$28,450</p>
                </div>
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                    <i class="fa-solid fa-arrow-down text-red-600 text-xl"></i>
                </div>
            </div>
            <p class="text-xs text-red-600 mt-2">+5.2% from last month</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 font-medium">Net Balance</p>
                    <p class="text-2xl font-bold text-gray-900 mt-2">$16,780</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fa-solid fa-wallet text-blue-600 text-xl"></i>
                </div>
            </div>
            <p class="text-xs text-blue-600 mt-2">Positive balance</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-purple-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 font-medium">Pending</p>
                    <p class="text-2xl font-bold text-gray-900 mt-2">$3,200</p>
                </div>
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                    <i class="fa-solid fa-clock text-purple-600 text-xl"></i>
                </div>
            </div>
            <p class="text-xs text-purple-600 mt-2">Awaiting approval</p>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            <h2 class="text-lg font-semibold text-gray-900">Recent Transactions</h2>
            <div class="flex gap-2">
                <button class="px-4 py-2 text-sm text-gray-600 hover:text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                    <i class="fa-solid fa-filter"></i> Filter
                </button>
                <button class="px-4 py-2 text-sm text-gray-600 hover:text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                    <i class="fa-solid fa-download"></i> Export
                </button>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Amount</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Jan 20, 2024</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Event Sponsorship</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Income</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Sponsorship</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-green-600">+$5,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex items-center gap-3">
                                <a href="#" class="text-blue-600 hover:text-blue-900"><i class="fa-solid fa-eye"></i></a>
                                <a href="#" class="text-gray-600 hover:text-gray-900"><i class="fa-solid fa-edit"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Jan 18, 2024</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Office Supplies</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Expense</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Supplies</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-red-600">-$450</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex items-center gap-3">
                                <a href="#" class="text-blue-600 hover:text-blue-900"><i class="fa-solid fa-eye"></i></a>
                                <a href="#" class="text-gray-600 hover:text-gray-900"><i class="fa-solid fa-edit"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Jan 15, 2024</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Membership Fees</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Income</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Membership</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-green-600">+$2,500</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex items-center gap-3">
                                <a href="#" class="text-blue-600 hover:text-blue-900"><i class="fa-solid fa-eye"></i></a>
                                <a href="#" class="text-gray-600 hover:text-gray-900"><i class="fa-solid fa-edit"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>