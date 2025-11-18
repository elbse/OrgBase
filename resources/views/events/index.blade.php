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
        <x-events-card
            title="Annual Conference"
            description="Join us for our annual organization conference with keynote speakers and networking opportunities."
            icon="fa-solid fa-calendar-days"
            header-class="bg-linear-to-r from-purple-500 to-purple-600"
            status-label="Upcoming"
            status-class="bg-green-100 text-green-800"
            button-class="bg-purple-600 hover:bg-purple-700"
            detail-icon-class="text-purple-600"
            :details="[
                ['icon' => 'fa-solid fa-calendar', 'class' => 'text-purple-600', 'text' => 'March 15, 2024'],
                ['icon' => 'fa-solid fa-clock', 'class' => 'text-purple-600', 'text' => '9:00 AM - 5:00 PM'],
                ['icon' => 'fa-solid fa-location-dot', 'class' => 'text-purple-600', 'text' => 'Convention Center'],
            ]"
        />

        <x-events-card
            title="Team Building"
            description="Monthly team building activity to strengthen collaboration and team spirit."
            icon="fa-solid fa-users"
            header-class="bg-linear-to-r from-blue-500 to-blue-600"
            status-label="Ongoing"
            status-class="bg-blue-100 text-blue-800"
            button-class="bg-blue-600 hover:bg-blue-700"
            detail-icon-class="text-blue-600"
            :details="[
                ['icon' => 'fa-solid fa-calendar', 'class' => 'text-blue-600', 'text' => 'February 20, 2024'],
                ['icon' => 'fa-solid fa-clock', 'class' => 'text-blue-600', 'text' => '2:00 PM - 6:00 PM'],
                ['icon' => 'fa-solid fa-location-dot', 'class' => 'text-blue-600', 'text' => 'Outdoor Park'],
            ]"
        />

        <x-events-card
            title="Charity Gala"
            description="Annual charity gala event to raise funds for community initiatives."
            icon="fa-solid fa-gift"
            header-class="bg-linear-to-r from-green-500 to-green-600"
            status-label="Past"
            status-class="bg-gray-100 text-gray-800"
            button-class="bg-green-600 hover:bg-green-700"
            detail-icon-class="text-green-600"
            :details="[
                ['icon' => 'fa-solid fa-calendar', 'class' => 'text-green-600', 'text' => 'January 10, 2024'],
                ['icon' => 'fa-solid fa-clock', 'class' => 'text-green-600', 'text' => '7:00 PM - 11:00 PM'],
                ['icon' => 'fa-solid fa-location-dot', 'class' => 'text-green-600', 'text' => 'Grand Hotel'],
            ]"
        />
    </div>
</x-layout>
