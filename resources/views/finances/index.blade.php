<x-layout>
    <div class="flex flex-col gap-6 mb-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Finances</h1>
                <p class="text-gray-600 mt-2">Track and manage your organization's financial transactions.</p>
            </div>
            <a href="#add-transaction" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition-colors duration-200 font-semibold flex items-center gap-2 self-start md:self-auto">
                <i class="fa-solid fa-plus"></i>
                Add Transaction
            </a>
        </div>

        @if (session('success'))
            <div class="rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-800">
                <p class="font-semibold mb-2">Please fix the following:</p>
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div id="add-transaction" class="bg-white rounded-lg shadow-md border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-gray-900">Add a Transaction</h2>
                <span class="text-sm text-gray-500">All fields with * are required</span>
            </div>
            <form action="{{ route('finances.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @csrf
                <div class="flex flex-col">
                    <label for="date" class="text-sm font-medium text-gray-700 mb-1">Date *</label>
                    <input type="date" id="date" name="date" value="{{ old('date') }}" class="rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="flex flex-col">
                    <label for="description" class="text-sm font-medium text-gray-700 mb-1">Description *</label>
                    <input type="text" id="description" name="description" value="{{ old('description') }}" placeholder="e.g. Membership dues" class="rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="flex flex-col">
                    <label for="category" class="text-sm font-medium text-gray-700 mb-1">Category</label>
                    <input type="text" id="category" name="category" value="{{ old('category') }}" placeholder="e.g. Operations" class="rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="flex flex-col">
                    <label for="type" class="text-sm font-medium text-gray-700 mb-1">Type *</label>
                    <select id="type" name="type" class="rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        <option value="">Select type</option>
                        <option value="income" @selected(old('type') === 'income')>Income</option>
                        <option value="expense" @selected(old('type') === 'expense')>Expense</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="amount" class="text-sm font-medium text-gray-700 mb-1">Amount *</label>
                    <input type="number" step="0.01" id="amount" name="amount" value="{{ old('amount') }}" placeholder="0.00" class="rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="flex flex-col">
                    <label for="reference" class="text-sm font-medium text-gray-700 mb-1">Reference</label>
                    <input type="text" id="reference" name="reference" value="{{ old('reference') }}" placeholder="Optional reference" class="rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="flex flex-col md:col-span-2">
                    <label for="notes" class="text-sm font-medium text-gray-700 mb-1">Notes</label>
                    <textarea id="notes" name="notes" rows="3" placeholder="Additional details" class="rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">{{ old('notes') }}</textarea>
                </div>
                <div class="md:col-span-2 flex justify-end">
                    <button type="submit" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition-colors duration-200 font-semibold flex items-center gap-2">
                        <i class="fa-solid fa-check"></i>
                        Save Transaction
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 font-medium">Total Income</p>
                    <p class="text-2xl font-bold text-gray-900 mt-2">${{ number_format($income, 2) }}</p>
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
                    <p class="text-2xl font-bold text-gray-900 mt-2">${{ number_format($expenses, 2) }}</p>
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
                    <p class="text-2xl font-bold text-gray-900 mt-2">${{ number_format($net, 2) }}</p>
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
                    <p class="text-2xl font-bold text-gray-900 mt-2">${{ number_format($pending, 2) }}</p>
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
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Amount</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Reference</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($transactions as $transaction)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                {{ $transaction->date?->format('M d, Y') }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                {{ $transaction->description }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $transaction->type === 'income' ? 'bg-blue-100 text-blue-800' : 'bg-red-100 text-red-800' }}">
                                    {{ ucfirst($transaction->type) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                {{ $transaction->category ?? '—' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold {{ $transaction->type === 'income' ? 'text-green-600' : 'text-red-600' }}">
                                {{ $transaction->type === 'income' ? '+' : '-' }}${{ number_format($transaction->amount, 2) }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $transaction->reference ?? '—' }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-6 text-center text-sm text-gray-500">
                                No transactions yet. Add your first one above.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>