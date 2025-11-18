@props([
    'icon' => 'fa-solid fa-calendar-days',
    'iconClass' => 'text-white text-4xl',
    'headerClass' => 'bg-linear-to-r from-purple-500 to-purple-600',
    'headerIconWrapperClass' => null,
    'headerHeightClass' => 'h-32',
    'title',
    'statusLabel' => null,
    'statusClass' => 'bg-green-100 text-green-800',
    'description' => '',
    'details' => [],
    'buttonLabel' => 'View Details',
    'buttonClass' => 'bg-purple-600 hover:bg-purple-700',
    'detailIconClass' => 'text-gray-500',
])

@php
    $normalizedDetails = array_map(function ($detail) use ($detailIconClass) {
        return [
            'icon' => $detail['icon'] ?? 'fa-solid fa-circle-info',
            'text' => $detail['text'] ?? '',
            'class' => $detail['class'] ?? $detailIconClass,
        ];
    }, $details);
@endphp

<div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 border border-gray-200">
    <div class="{{ $headerClass }} {{ $headerHeightClass }} flex items-center justify-center">
        @if($headerIconWrapperClass)
            <div class="{{ $headerIconWrapperClass }}">
                <i class="{{ $icon }} {{ $iconClass }}"></i>
            </div>
        @else
            <i class="{{ $icon }} {{ $iconClass }}"></i>
        @endif
    </div>
    <div class="p-6">
        <div class="flex items-center justify-between mb-2">
            <h3 class="text-xl font-bold text-gray-900">{{ $title }}</h3>
            @if($statusLabel)
                <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $statusClass }}">{{ $statusLabel }}</span>
            @endif
        </div>
        <p class="text-gray-600 text-sm mb-4">{{ $description }}</p>
        @if(count($normalizedDetails))
            <div class="space-y-2 mb-4">
                @foreach($normalizedDetails as $detail)
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="{{ $detail['icon'] }} {{ $detail['class'] }}"></i>
                        <span>{{ $detail['text'] }}</span>
                    </div>
                @endforeach
            </div>
        @endif
        <div class="flex items-center gap-2 pt-4 border-t border-gray-200">
            <button class="flex-1 {{ $buttonClass }} text-white px-4 py-2 rounded-lg transition-colors duration-200 text-sm font-semibold">
                {{ $buttonLabel }}
            </button>
            <button class="px-4 py-2 text-gray-600 hover:text-gray-900 transition-colors duration-200">
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </button>
        </div>
    </div>
</div>
