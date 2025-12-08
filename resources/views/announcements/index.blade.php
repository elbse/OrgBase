<x-layout>
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Announcements</h1>
            <p class="text-gray-600 mt-2">Share important updates and news with your organization.</p>
        </div>
        <a href="{{ route('announcements.create') }}" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition-colors duration-200 font-semibold flex items-center gap-2">
            <i class="fa-solid fa-plus"></i>
            Create Announcement
        </a>
    </div>

    <div class="space-y-6">
        <div class="bg-white rounded-lg shadow-md overflow-hidden border-l-4 border-blue-500 hover:shadow-xl transition-shadow duration-300">
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-bullhorn text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Important Meeting Scheduled</h3>
                            <p class="text-sm text-gray-500">Posted by Admin • 2 hours ago</p>
                        </div>
                    </div>
                    <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Active</span>
                </div>
                <p class="text-gray-700 mb-4">We have scheduled an important meeting for all members on February 25th at 3:00 PM. Please mark your calendars and prepare your agenda items.</p>
                <div class="flex items-center gap-4 pt-4 border-t border-gray-200">
                    <a href="{{ route('announcements.show', 'important-meeting-scheduled') }}" class="text-blue-600 hover:text-blue-800 text-sm font-semibold flex items-center gap-2">
                        <i class="fa-solid fa-eye"></i>
                        View Details
                    </a>
                    <a href="mailto:?subject=Important%20Meeting%20Scheduled&body={{ urlencode(route('announcements.show', 'important-meeting-scheduled')) }}" class="text-gray-600 hover:text-gray-800 text-sm font-semibold flex items-center gap-2">
                        <i class="fa-solid fa-share"></i>
                        Share
                    </a>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <i class="fa-solid fa-users"></i>
                        <span>245 views</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden border-l-4 border-green-500 hover:shadow-xl transition-shadow duration-300">
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-calendar-check text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Upcoming Event: Annual Gala</h3>
                            <p class="text-sm text-gray-500">Posted by Events Team • 1 day ago</p>
                        </div>
                    </div>
                    <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Event</span>
                </div>
                <p class="text-gray-700 mb-4">Join us for our annual gala event on March 15th! This year's theme is "Celebrating Excellence". Tickets are now available. Don't miss out on this special evening.</p>
                <div class="flex items-center gap-4 pt-4 border-t border-gray-200">
                    <a href="{{ route('announcements.show', 'upcoming-event-annual-gala') }}" class="text-green-600 hover:text-green-800 text-sm font-semibold flex items-center gap-2">
                        <i class="fa-solid fa-eye"></i>
                        View Details
                    </a>
                    <a href="mailto:?subject=Annual%20Gala&body={{ urlencode(route('announcements.show', 'upcoming-event-annual-gala')) }}" class="text-gray-600 hover:text-gray-800 text-sm font-semibold flex items-center gap-2">
                        <i class="fa-solid fa-share"></i>
                        Share
                    </a>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <i class="fa-solid fa-users"></i>
                        <span>189 views</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden border-l-4 border-purple-500 hover:shadow-xl transition-shadow duration-300">
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-trophy text-purple-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Congratulations to Our Award Winners</h3>
                            <p class="text-sm text-gray-500">Posted by Leadership • 3 days ago</p>
                        </div>
                    </div>
                    <span class="px-3 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">Recognition</span>
                </div>
                <p class="text-gray-700 mb-4">We're thrilled to announce this year's award winners! Join us in congratulating all the outstanding members who have made significant contributions to our organization.</p>
                <div class="flex items-center gap-4 pt-4 border-t border-gray-200">
                    <a href="{{ route('announcements.show', 'congratulations-award-winners') }}" class="text-purple-600 hover:text-purple-800 text-sm font-semibold flex items-center gap-2">
                        <i class="fa-solid fa-eye"></i>
                        View Details
                    </a>
                    <a href="mailto:?subject=Award%20Winners&body={{ urlencode(route('announcements.show', 'congratulations-award-winners')) }}" class="text-gray-600 hover:text-gray-800 text-sm font-semibold flex items-center gap-2">
                        <i class="fa-solid fa-share"></i>
                        Share
                    </a>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <i class="fa-solid fa-users"></i>
                        <span>312 views</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden border-l-4 border-gray-400 hover:shadow-xl transition-shadow duration-300 opacity-75">
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-info-circle text-gray-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">System Maintenance Notice</h3>
                            <p class="text-sm text-gray-500">Posted by IT Team • 1 week ago</p>
                        </div>
                    </div>
                    <span class="px-3 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">Archived</span>
                </div>
                <p class="text-gray-700 mb-4">Scheduled maintenance will be performed on January 20th from 2:00 AM to 4:00 AM. The system will be temporarily unavailable during this time.</p>
                <div class="flex items-center gap-4 pt-4 border-t border-gray-200">
                    <a href="{{ route('announcements.show', 'system-maintenance-notice') }}" class="text-gray-600 hover:text-gray-800 text-sm font-semibold flex items-center gap-2">
                        <i class="fa-solid fa-eye"></i>
                        View Details
                    </a>
                    <a href="mailto:?subject=System%20Maintenance%20Notice&body={{ urlencode(route('announcements.show', 'system-maintenance-notice')) }}" class="text-gray-600 hover:text-gray-800 text-sm font-semibold flex items-center gap-2">
                        <i class="fa-solid fa-share"></i>
                        Share
                    </a>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <i class="fa-solid fa-users"></i>
                        <span>156 views</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>