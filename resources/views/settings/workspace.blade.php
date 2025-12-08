<x-layout>
    <div class="max-w-4xl mx-auto">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Workspace Settings</h1>
                <p class="text-gray-600 mt-2">Manage preferences for your organization workspace.</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md border border-gray-100 divide-y divide-gray-200">
            <div class="p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-2">Notifications</h2>
                <p class="text-sm text-gray-600 mb-4">Control how you receive updates.</p>
                <div class="space-y-4">
                    <label class="flex items-center justify-between">
                        <span class="text-gray-700">Email updates</span>
                        <input type="checkbox" checked class="w-5 h-5 text-blue-600 rounded border-gray-300">
                    </label>
                    <label class="flex items-center justify-between">
                        <span class="text-gray-700">Push notifications</span>
                        <input type="checkbox" class="w-5 h-5 text-blue-600 rounded border-gray-300">
                    </label>
                </div>
            </div>
            <div class="p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-2">Workspace</h2>
                <p class="text-sm text-gray-600 mb-4">Basic workspace preferences.</p>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Time zone</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option>UTC</option>
                            <option>America/New_York</option>
                            <option>Europe/London</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Default language</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option>English</option>
                            <option>Spanish</option>
                            <option>French</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>


