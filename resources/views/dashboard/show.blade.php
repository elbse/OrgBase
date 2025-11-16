<x-layout>
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Welcome Back!</h1>
            <p class="text-gray-600 mt-2">Here's what's happening with your organization today.</p>
        </div>

        <div class="flex items-center gap-4">
            <a href="#" class="relative p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-full transition-colors duration-200">
                <i class="fa-solid fa-bell text-xl"></i>
                <span class="absolute top-0 right-0 w-3 h-3 bg-red-500 rounded-full border-2 border-white"></span>
            </a>
            <a href="#" class="p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-full transition-colors duration-200">
                <i class="fa-solid fa-user text-xl"></i>
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fa-solid fa-users text-blue-600 text-xl"></i>
                </div>
                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">+12%</span>
            </div>
            <h4 class="text-sm font-medium text-gray-600 mb-1">Total Members</h4>
            <p class="text-3xl font-bold text-gray-900">245</p>
            <p class="text-xs text-gray-500 mt-2">12 new this month</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-purple-500 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                    <i class="fa-solid fa-calendar-days text-purple-600 text-xl"></i>
                </div>
                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">3</span>
            </div>
            <h4 class="text-sm font-medium text-gray-600 mb-1">Upcoming Events</h4>
            <p class="text-3xl font-bold text-gray-900">8</p>
            <p class="text-xs text-gray-500 mt-2">3 this week</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <i class="fa-solid fa-bullhorn text-green-600 text-xl"></i>
                </div>
                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">New</span>
            </div>
            <h4 class="text-sm font-medium text-gray-600 mb-1">Announcements</h4>
            <p class="text-3xl font-bold text-gray-900">12</p>
            <p class="text-xs text-gray-500 mt-2">2 unread</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-orange-500 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                    <i class="fa-solid fa-tasks text-orange-600 text-xl"></i>
                </div>
                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">5</span>
            </div>
            <h4 class="text-sm font-medium text-gray-600 mb-1">Active Tasks</h4>
            <p class="text-3xl font-bold text-gray-900">24</p>
            <p class="text-xs text-gray-500 mt-2">5 urgent</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                <h2 class="text-lg font-semibold text-gray-900">Recent Activities</h2>
                <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium">View All</a>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-user-plus text-blue-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-900 font-medium">New member joined</p>
                            <p class="text-xs text-gray-500">John Doe joined the organization</p>
                            <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-calendar-plus text-purple-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-900 font-medium">Event created</p>
                            <p class="text-xs text-gray-500">Annual Conference scheduled for March 15</p>
                            <p class="text-xs text-gray-400 mt-1">5 hours ago</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-file-upload text-green-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-900 font-medium">Document uploaded</p>
                            <p class="text-xs text-gray-500">Annual Report 2024.pdf was uploaded</p>
                            <p class="text-xs text-gray-400 mt-1">1 day ago</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-check-circle text-orange-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-900 font-medium">Task completed</p>
                            <p class="text-xs text-gray-500">Monthly report task was completed</p>
                            <p class="text-xs text-gray-400 mt-1">2 days ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                <h2 class="text-lg font-semibold text-gray-900">Upcoming Events</h2>
                <a href="{{route('events.index')}}" class="text-sm text-blue-600 hover:text-blue-800 font-medium">View All</a>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 bg-purple-50 rounded-lg border border-purple-100">
                        <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center shrink-0">
                            <span class="text-white font-bold text-sm">15</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-sm font-semibold text-gray-900 mb-1">Annual Conference</h3>
                            <p class="text-xs text-gray-600 mb-2">Join us for our annual organization conference</p>
                            <div class="flex items-center gap-3 text-xs text-gray-500">
                                <span><i class="fa-solid fa-clock"></i> 9:00 AM - 5:00 PM</span>
                                <span><i class="fa-solid fa-location-dot"></i> Convention Center</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-blue-50 rounded-lg border border-blue-100">
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center shrink-0">
                            <span class="text-white font-bold text-sm">20</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-sm font-semibold text-gray-900 mb-1">Team Building</h3>
                            <p class="text-xs text-gray-600 mb-2">Monthly team building activity</p>
                            <div class="flex items-center gap-3 text-xs text-gray-500">
                                <span><i class="fa-solid fa-clock"></i> 2:00 PM - 6:00 PM</span>
                                <span><i class="fa-solid fa-location-dot"></i> Outdoor Park</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-green-50 rounded-lg border border-green-100">
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center shrink-0">
                            <span class="text-white font-bold text-sm">25</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-sm font-semibold text-gray-900 mb-1">Monthly Meeting</h3>
                            <p class="text-xs text-gray-600 mb-2">Regular monthly organization meeting</p>
                            <div class="flex items-center gap-3 text-xs text-gray-500">
                                <span><i class="fa-solid fa-clock"></i> 3:00 PM - 4:30 PM</span>
                                <span><i class="fa-solid fa-location-dot"></i> Conference Room</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                <h2 class="text-lg font-semibold text-gray-900">Quick Actions</h2>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <a href="{{route('members.index')}}" class="flex flex-col items-center justify-center p-6 bg-blue-50 rounded-lg border border-blue-100 hover:bg-blue-100 transition-colors duration-200 group">
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-200">
                            <i class="fa-solid fa-users text-white text-xl"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-900">Members</span>
                    </a>
                    <a href="{{route('events.index')}}" class="flex flex-col items-center justify-center p-6 bg-purple-50 rounded-lg border border-purple-100 hover:bg-purple-100 transition-colors duration-200 group">
                        <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-200">
                            <i class="fa-solid fa-calendar-days text-white text-xl"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-900">Events</span>
                    </a>
                    <a href="{{route('tasks.index')}}" class="flex flex-col items-center justify-center p-6 bg-orange-50 rounded-lg border border-orange-100 hover:bg-orange-100 transition-colors duration-200 group">
                        <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-200">
                            <i class="fa-solid fa-tasks text-white text-xl"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-900">Tasks</span>
                    </a>
                    <a href="{{route('documents.index')}}" class="flex flex-col items-center justify-center p-6 bg-red-50 rounded-lg border border-red-100 hover:bg-red-100 transition-colors duration-200 group">
                        <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-200">
                            <i class="fa-solid fa-file text-white text-xl"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-900">Documents</span>
                    </a>
                    <a href="{{route('finances.index')}}" class="flex flex-col items-center justify-center p-6 bg-green-50 rounded-lg border border-green-100 hover:bg-green-100 transition-colors duration-200 group">
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-200">
                            <i class="fa-solid fa-dollar-sign text-white text-xl"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-900">Finances</span>
                    </a>
                    <a href="{{route('announcements.index')}}" class="flex flex-col items-center justify-center p-6 bg-yellow-50 rounded-lg border border-yellow-100 hover:bg-yellow-100 transition-colors duration-200 group">
                        <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-200">
                            <i class="fa-solid fa-bullhorn text-white text-xl"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-900">Announcements</span>
                    </a>
                    <a href="{{route('organizations.index')}}" class="flex flex-col items-center justify-center p-6 bg-indigo-50 rounded-lg border border-indigo-100 hover:bg-indigo-100 transition-colors duration-200 group">
                        <div class="w-12 h-12 bg-indigo-500 rounded-lg flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-200">
                            <i class="fa-solid fa-building text-white text-xl"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-900">Organizations</span>
                    </a>
                    <a href="#" class="flex flex-col items-center justify-center p-6 bg-gray-50 rounded-lg border border-gray-100 hover:bg-gray-100 transition-colors duration-200 group">
                        <div class="w-12 h-12 bg-gray-500 rounded-lg flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-200">
                            <i class="fa-solid fa-chart-bar text-white text-xl"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-900">Reports</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900">Recent Announcements</h2>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="pb-4 border-b border-gray-200 last:border-0 last:pb-0">
                        <h3 class="text-sm font-semibold text-gray-900 mb-1">Important Meeting Scheduled</h3>
                        <p class="text-xs text-gray-600 mb-2">Meeting for all members on February 25th at 3:00 PM</p>
                        <p class="text-xs text-gray-400">2 hours ago</p>
                    </div>
                    <div class="pb-4 border-b border-gray-200 last:border-0 last:pb-0">
                        <h3 class="text-sm font-semibold text-gray-900 mb-1">Upcoming Event: Annual Gala</h3>
                        <p class="text-xs text-gray-600 mb-2">Join us for our annual gala event on March 15th</p>
                        <p class="text-xs text-gray-400">1 day ago</p>
                    </div>
                    <div class="pb-4 border-b border-gray-200 last:border-0 last:pb-0">
                        <h3 class="text-sm font-semibold text-gray-900 mb-1">Congratulations to Award Winners</h3>
                        <p class="text-xs text-gray-600 mb-2">Announcing this year's outstanding members</p>
                        <p class="text-xs text-gray-400">3 days ago</p>
                    </div>
                </div>
                <a href="{{route('announcements.index')}}" class="mt-4 block text-center text-sm text-blue-600 hover:text-blue-800 font-medium">
                    View All Announcements
                </a>
            </div>
        </div>
    </div>
</x-layout>