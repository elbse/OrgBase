@props([
    'icon' => 'fa-solid fa-calendar-days',
    'headerClass' => 'bg-linear-to-r from-purple-500 to-purple-600',
    'title',
    'statusLabel' => 'Upcoming',
    'statusClass' => 'bg-green-100 text-green-800',
    'description',
    'date',
    'time',
    'location',
    'buttonClass' => 'bg-purple-600 hover:bg-purple-700',
    'detailIconClass' => 'text-gray-500',
])

<div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 border border-gray-200">
    <div class="{{ $headerClass }} h-32 flex items-center justify-center">
        <i class="{{ $icon }} text-white text-4xl"></i>
    </div>
    <div class="p-6">
        <div class="flex items-center justify-between mb-2">
            <h3 class="text-xl font-bold text-gray-900">{{ $title }}</h3>
            <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $statusClass }}">{{ $statusLabel }}</span>
        </div>
        <p class="text-gray-600 text-sm mb-4">{{ $description }}</p>
        <div class="space-y-2 mb-4">
            <div class="flex items-center gap-2 text-sm text-gray-600">
                <i class="fa-solid fa-calendar {{ $detailIconClass }}"></i>
                <span>{{ $date }}</span>
            </div>
            <div class="flex items-center gap-2 text-sm text-gray-600">
                <i class="fa-solid fa-clock {{ $detailIconClass }}"></i>
                <span>{{ $time }}</span>
            </div>
            <div class="flex items-center gap-2 text-sm text-gray-600">
                <i class="fa-solid fa-location-dot {{ $detailIconClass }}"></i>
                <span>{{ $location }}</span>
            </div>
        </div>
        <div class="flex items-center gap-2 pt-4 border-t border-gray-200">
            <button class="flex-1 {{ $buttonClass }} text-white px-4 py-2 rounded-lg transition-colors duration-200 text-sm font-semibold">
                View Details
            </button>
            <button class="px-4 py-2 text-gray-600 hover:text-gray-900 transition-colors duration-200">
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </button>
        </div>
    </div>
</div>
