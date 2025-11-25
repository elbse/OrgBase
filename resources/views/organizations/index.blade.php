In<x-layout>
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Organizations</h1>
            <p class="text-gray-600 mt-2">Manage and view all organizations in your network.</p>
        </div>
        <button class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition-colors duration-200 font-semibold flex items-center gap-2">
            <i class="fa-solid fa-plus"></i>
            Create Organization
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <x-events-card
            title="Tech Innovators"
            description="A community of technology enthusiasts and innovators working together to create the future."
            icon="fa-solid fa-building"
            icon-class="text-blue-600 text-3xl"
            header-class="bg-linear-to-r from-blue-500 to-blue-600"
            header-height-class="h-40"
            header-icon-wrapper-class="w-20 h-20 bg-white rounded-full flex items-center justify-center"
            button-class="bg-blue-600 hover:bg-blue-700"
            :details="[
                ['icon' => 'fa-solid fa-users', 'class' => 'text-blue-600', 'text' => '245 Members'],
                ['icon' => 'fa-solid fa-calendar', 'class' => 'text-blue-600', 'text' => 'Est. 2020'],
                ['icon' => 'fa-solid fa-location-dot', 'class' => 'text-blue-600', 'text' => 'San Francisco, CA'],
            ]"
        />

        <x-events-card
            title="Green Earth Initiative"
            description="Dedicated to environmental conservation and sustainable living practices."
            icon="fa-solid fa-leaf"
            icon-class="text-green-600 text-3xl"
            header-class="bg-linear-to-r from-green-500 to-green-600"
            header-height-class="h-40"
            header-icon-wrapper-class="w-20 h-20 bg-white rounded-full flex items-center justify-center"
            button-class="bg-green-600 hover:bg-green-700"
            :details="[
                ['icon' => 'fa-solid fa-users', 'class' => 'text-green-600', 'text' => '189 Members'],
                ['icon' => 'fa-solid fa-calendar', 'class' => 'text-green-600', 'text' => 'Est. 2018'],
                ['icon' => 'fa-solid fa-location-dot', 'class' => 'text-green-600', 'text' => 'Portland, OR'],
            ]"
        />

        <x-events-card
            title="Community Care Network"
            description="Supporting local communities through volunteer work and charitable initiatives."
            icon="fa-solid fa-heart"
            icon-class="text-purple-600 text-3xl"
            header-class="bg-linear-to-r from-green-500 to-purple-600"
            header-height-class="h-40"
            header-icon-wrapper-class="w-20 h-20 bg-white rounded-full flex items-center justify-center"
            button-class="bg-purple-600 hover:bg-purple-700"
            :details="[
                ['icon' => 'fa-solid fa-users', 'class' => 'text-purple-600', 'text' => '312 Members'],
                ['icon' => 'fa-solid fa-calendar', 'class' => 'text-purple-600', 'text' => 'Est. 2015'],
                ['icon' => 'fa-solid fa-location-dot', 'class' => 'text-purple-600', 'text' => 'Chicago, IL'],
            ]"
        />

        <x-events-card
            title="Community Care Network"
            description="Supporting local communities through volunteer work and charitable initiatives."
            icon="fa-solid fa-heart"
            icon-class="text-purple-600 text-3xl"
            header-class="bg-linear-to-r from-purple-500 to-purple-600"
            header-height-class="h-40"
            header-icon-wrapper-class="w-20 h-20 bg-white rounded-full flex items-center justify-center"
            button-class="bg-purple-600 hover:bg-purple-700"
            :details="[
                ['icon' => 'fa-solid fa-users', 'class' => 'text-purple-600', 'text' => '312 Members'],
                ['icon' => 'fa-solid fa-calendar', 'class' => 'text-purple-600', 'text' => 'Est. 2015'],
                ['icon' => 'fa-solid fa-location-dot', 'class' => 'text-purple-600', 'text' => 'Chicago, IL'],
            ]"
        />

        <x-events-card
            title="Community Care Network"
            description="Supporting local communities through volunteer work and charitable initiatives."
            icon="fa-solid fa-heart"
            icon-class="text-purple-600 text-3xl"
            header-class="bg-linear-to-r from-green-500 to-purple-600"
            header-height-class="h-40"
            header-icon-wrapper-class="w-20 h-20 bg-white rounded-full flex items-center justify-center"
            button-class="bg-purple-600 hover:bg-purple-700"
            :details="[
                ['icon' => 'fa-solid fa-users', 'class' => 'text-purple-600', 'text' => '312 Members'],
                ['icon' => 'fa-solid fa-calendar', 'class' => 'text-purple-600', 'text' => 'Est. 2015'],
                ['icon' => 'fa-solid fa-location-dot', 'class' => 'text-purple-600', 'text' => 'Chicago, IL'],
            ]"
        />

        <x-events-card
            title="Care Network"
            description="Supporting local communities through volunteer work and charitable initiatives."
            icon="fa-solid fa-heart"
            icon-class="text-green-600 text-3xl"
            header-class="bg-linear-to-r from-green-500 to-green-600"
            header-height-class="h-40"
            header-icon-wrapper-class="w-20 h-20 bg-white rounded-full flex items-center justify-center"
            button-class="bg-purple-600 hover:bg-purple-700"
            :details="[
                ['icon' => 'fa-solid fa-users', 'class' => 'text-purple-600', 'text' => '312 Members'],
                ['icon' => 'fa-solid fa-calendar', 'class' => 'text-purple-600', 'text' => 'Est. 2015'],
                ['icon' => 'fa-solid fa-location-dot', 'class' => 'text-purple-600', 'text' => 'Chicago, IL'],
            ]"
        />
    </div>
</x-layout>