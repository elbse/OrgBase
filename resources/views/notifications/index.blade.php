<x-layout>
    <div class="max-w-5xl mx-auto">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Notification Center</h1>
                <p class="text-gray-600 mt-2">Review recent alerts and announcements.</p>
            </div>
            <button class="px-4 py-2 text-sm text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                Mark all as read
            </button>
        </div>

        <div class="bg-white rounded-lg shadow-md border border-gray-100 divide-y divide-gray-200">
            <div class="p-6 flex items-start gap-4">
                <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <div class="flex-1">
                    <p class="text-sm font-semibold text-gray-900">New announcement: Quarterly meeting</p>
                    <p class="text-sm text-gray-600">The leadership meeting is scheduled for next Monday at 10 AM.</p>
                    <p class="text-xs text-gray-400 mt-2">2 hours ago</p>
                </div>
            </div>
            <div class="p-6 flex items-start gap-4">
                <div class="w-10 h-10 bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                    <i class="fa-solid fa-user-plus"></i>
                </div>
                <div class="flex-1">
                    <p class="text-sm font-semibold text-gray-900">New member joined</p>
                    <p class="text-sm text-gray-600">Alex Johnson has been added as a Volunteer.</p>
                    <p class="text-xs text-gray-400 mt-2">1 day ago</p>
                </div>
            </div>
            <div class="p-6 flex items-start gap-4">
                <div class="w-10 h-10 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center">
                    <i class="fa-solid fa-file"></i>
                </div>
                <div class="flex-1">
                    <p class="text-sm font-semibold text-gray-900">Document approved</p>
                    <p class="text-sm text-gray-600">Budget_2024.xlsx has been approved.</p>
                    <p class="text-xs text-gray-400 mt-2">3 days ago</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>


