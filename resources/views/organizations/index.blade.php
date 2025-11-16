<x-layout>
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
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 border border-gray-200">
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-40 flex items-center justify-center">
                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center">
                    <i class="fa-solid fa-building text-blue-600 text-3xl"></i>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Tech Innovators</h3>
                <p class="text-gray-600 text-sm mb-4">A community of technology enthusiasts and innovators working together to create the future.</p>
                <div class="space-y-2 mb-4">
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-users text-blue-600"></i>
                        <span>245 Members</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-calendar text-blue-600"></i>
                        <span>Est. 2020</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-location-dot text-blue-600"></i>
                        <span>San Francisco, CA</span>
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
            <div class="bg-gradient-to-r from-green-500 to-green-600 h-40 flex items-center justify-center">
                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center">
                    <i class="fa-solid fa-leaf text-green-600 text-3xl"></i>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Green Earth Initiative</h3>
                <p class="text-gray-600 text-sm mb-4">Dedicated to environmental conservation and sustainable living practices.</p>
                <div class="space-y-2 mb-4">
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-users text-green-600"></i>
                        <span>189 Members</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-calendar text-green-600"></i>
                        <span>Est. 2018</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-location-dot text-green-600"></i>
                        <span>Portland, OR</span>
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

        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 border border-gray-200">
            <div class="bg-gradient-to-r from-purple-500 to-purple-600 h-40 flex items-center justify-center">
                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center">
                    <i class="fa-solid fa-heart text-purple-600 text-3xl"></i>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Community Care Network</h3>
                <p class="text-gray-600 text-sm mb-4">Supporting local communities through volunteer work and charitable initiatives.</p>
                <div class="space-y-2 mb-4">
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-users text-purple-600"></i>
                        <span>312 Members</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-calendar text-purple-600"></i>
                        <span>Est. 2015</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-location-dot text-purple-600"></i>
                        <span>Chicago, IL</span>
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
    </div>
</x-layout>