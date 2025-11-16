<x-layout>
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Events</h1>
            <p class="text-gray-600 mt-2">Manage your organization events and activities.</p>
        </div>
        <button class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition-colors duration-200 font-semibold flex items-center gap-2">
            <i class="fa-solid fa-plus"></i>
            Add Event
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 border border-gray-200">
            <div class="bg-gradient-to-r from-purple-500 to-purple-600 h-32 flex items-center justify-center">
                <i class="fa-solid fa-calendar-days text-white text-4xl"></i>
            </div>
            <div class="p-6">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="text-xl font-bold text-gray-900">Annual Conference</h3>
                    <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Upcoming</span>
                </div>
                <p class="text-gray-600 text-sm mb-4">Join us for our annual organization conference with keynote speakers and networking opportunities.</p>
                <div class="space-y-2 mb-4">
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-calendar text-purple-600"></i>
                        <span>March 15, 2024</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-clock text-purple-600"></i>
                        <span>9:00 AM - 5:00 PM</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-location-dot text-purple-600"></i>
                        <span>Convention Center</span>
                    </div>
                </div>
                <div class="flex items-center gap-2 pt-4 border-t border-gray-200">
                    <button class="flex-1 bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors duration-200 text-sm font-semibold">
                        View Details
                    </button>
                    <button class="px-4 py-2 text-gray-600 hover:text-gray-900 transition-colors duration-200">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 border border-gray-200">
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-32 flex items-center justify-center">
                <i class="fa-solid fa-users text-white text-4xl"></i>
            </div>
            <div class="p-6">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="text-xl font-bold text-gray-900">Team Building</h3>
                    <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Ongoing</span>
                </div>
                <p class="text-gray-600 text-sm mb-4">Monthly team building activity to strengthen collaboration and team spirit.</p>
                <div class="space-y-2 mb-4">
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-calendar text-blue-600"></i>
                        <span>February 20, 2024</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-clock text-blue-600"></i>
                        <span>2:00 PM - 6:00 PM</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-location-dot text-blue-600"></i>
                        <span>Outdoor Park</span>
                    </div>
                </div>
                <div class="flex items-center gap-2 pt-4 border-t border-gray-200">
                    <button class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200 text-sm font-semibold">
                        View Details
                    </button>
                    <button class="px-4 py-2 text-gray-600 hover:text-gray-900 transition-colors duration-200">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 border border-gray-200">
            <div class="bg-gradient-to-r from-green-500 to-green-600 h-32 flex items-center justify-center">
                <i class="fa-solid fa-gift text-white text-4xl"></i>
            </div>
            <div class="p-6">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="text-xl font-bold text-gray-900">Charity Gala</h3>
                    <span class="px-3 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">Past</span>
                </div>
                <p class="text-gray-600 text-sm mb-4">Annual charity gala event to raise funds for community initiatives.</p>
                <div class="space-y-2 mb-4">
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-calendar text-green-600"></i>
                        <span>January 10, 2024</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-clock text-green-600"></i>
                        <span>7:00 PM - 11:00 PM</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-location-dot text-green-600"></i>
                        <span>Grand Hotel</span>
                    </div>
                </div>
                <div class="flex items-center gap-2 pt-4 border-t border-gray-200">
                    <button class="flex-1 bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors duration-200 text-sm font-semibold">
                        View Details
                    </button>
                    <button class="px-4 py-2 text-gray-600 hover:text-gray-900 transition-colors duration-200">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layout>
