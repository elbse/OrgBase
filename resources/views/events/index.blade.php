<x-layout>
    <div class="space-y-6">
        <!-- Header Section -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Events</h1>
                <p class="text-gray-600 mt-1">Manage your organization events and activities</p>
            </div>
            <button class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition-all duration-200 hover:shadow-lg">
                <i class="fas fa-plus"></i>
                <span>Create Event</span>
            </button>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Upcoming</p>
                        <p class="text-3xl font-bold text-gray-900 mt-2">0</p>
                    </div>
                    <div class="bg-blue-100 rounded-full p-4">
                        <i class="fas fa-calendar-check text-blue-600 text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">This Month</p>
                        <p class="text-3xl font-bold text-gray-900 mt-2">0</p>
                    </div>
                    <div class="bg-green-100 rounded-full p-4">
                        <i class="fas fa-calendar-alt text-green-600 text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Past Events</p>
                        <p class="text-3xl font-bold text-gray-900 mt-2">0</p>
                    </div>
                    <div class="bg-gray-100 rounded-full p-4">
                        <i class="fas fa-history text-gray-600 text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Total</p>
                        <p class="text-3xl font-bold text-gray-900 mt-2">0</p>
                    </div>
                    <div class="bg-purple-100 rounded-full p-4">
                        <i class="fas fa-calendar text-purple-600 text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter and View Toggle -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
            <div class="flex flex-col sm:flex-row gap-4 items-center justify-between">
                <div class="flex flex-wrap gap-2">
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg font-medium">All</button>
                    <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-gray-200 transition-colors">Upcoming</button>
                    <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-gray-200 transition-colors">Past</button>
                    <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-gray-200 transition-colors">This Week</button>
                </div>
                <div class="flex gap-2">
                    <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                        <i class="fas fa-calendar text-gray-600"></i>
                    </button>
                    <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                        <i class="fas fa-list text-gray-600"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Events List -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-semibold text-gray-900">All Events</h2>
            </div>

            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="bg-gray-100 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-calendar-times text-gray-400 text-4xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">No events scheduled</h3>
                <p class="text-gray-600 mb-6">Create your first event to get started</p>
                <button class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition-all duration-200">
                    <i class="fas fa-plus"></i>
                    <span>Create Event</span>
                </button>
            </div>

            <!-- Event Cards (Example - will show when events exist) -->
            <!--
            <div class="space-y-4">
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-shrink-0">
                            <div class="bg-blue-100 rounded-lg p-4 text-center w-20">
                                <p class="text-2xl font-bold text-blue-600">15</p>
                                <p class="text-xs text-blue-600 font-medium">MAR</p>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-start justify-between mb-2">
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-1">Event Title</h3>
                                    <div class="flex items-center gap-4 text-sm text-gray-600">
                                        <span><i class="fas fa-clock mr-1"></i> 2:00 PM - 4:00 PM</span>
                                        <span><i class="fas fa-map-marker-alt mr-1"></i> Location</span>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                                        <i class="fas fa-edit text-gray-600"></i>
                                    </button>
                                    <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                                        <i class="fas fa-trash text-red-600"></i>
                                    </button>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-3">Event description goes here...</p>
                            <div class="flex items-center gap-4">
                                <span class="inline-flex items-center gap-1 px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">
                                    <i class="fas fa-users"></i>
                                    <span>0 attendees</span>
                                </span>
                                <span class="inline-flex items-center gap-1 px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Confirmed</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
        </div>
    </div>
</x-layout>
