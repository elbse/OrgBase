@php
    $priorityClasses = [
        'low' => 'bg-green-100 text-green-800',
        'medium' => 'bg-blue-100 text-blue-800',
        'high' => 'bg-yellow-100 text-yellow-800',
        'urgent' => 'bg-red-100 text-red-800'
    ];
    
    $priorityClass = $priorityClasses[$task->priority] ?? 'bg-gray-100 text-gray-800';
    
    $isDone = $task->status === 'done';
    
    // Get initials from assigned_to
    $initials = 'NA';
    if ($task->assigned_to) {
        $names = explode(' ', $task->assigned_to);
        if (count($names) >= 2) {
            $initials = strtoupper(substr($names[0], 0, 1) . substr($names[1], 0, 1));
        } else {
            $initials = strtoupper(substr($task->assigned_to, 0, 2));
        }
    }
    
    // Color for avatar based on name hash
    $colorClasses = [
        'bg-blue-100 text-blue-600',
        'bg-green-100 text-green-600',
        'bg-purple-100 text-purple-600',
        'bg-orange-100 text-orange-600',
        'bg-pink-100 text-pink-600',
        'bg-indigo-100 text-indigo-600'
    ];
    $colorIndex = $task->assigned_to ? crc32($task->assigned_to) % count($colorClasses) : 0;
    $avatarColorClass = $colorClasses[$colorIndex];
@endphp

<div class="task-card bg-gray-50 rounded-lg p-4 border border-gray-200 hover:shadow-md transition-shadow duration-200 cursor-move {{ $isDone ? 'opacity-75' : '' }}" 
     draggable="true"
     ondragstart="handleDragStart(event)"
     ondragend="handleDragEnd(event)"
     data-task-id="{{ $task->id }}"
     data-status="{{ $task->status }}">
    <div class="flex items-start justify-between mb-2">
        <h4 class="text-sm font-semibold text-gray-900 {{ $isDone ? 'line-through' : '' }}">{{ $task->title }}</h4>
        <span class="px-2 py-1 text-xs font-semibold rounded {{ $priorityClass }}">{{ ucfirst($task->priority) }}</span>
    </div>
    <p class="text-xs text-gray-600 mb-3 {{ $isDone ? 'line-through' : '' }}">
        {{ Str::limit($task->description ?? 'No description', 60) }}
    </p>
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
            @if($task->assigned_to)
                <div class="w-6 h-6 {{ $avatarColorClass }} rounded-full flex items-center justify-center">
                    <span class="text-xs font-semibold">{{ $initials }}</span>
                </div>
                <span class="text-xs text-gray-600">{{ $task->assigned_to }}</span>
            @else
                <span class="text-xs text-gray-400">Unassigned</span>
            @endif
        </div>
        <div class="flex items-center gap-2">
            @if($task->due_date)
                <span class="text-xs text-gray-500">
                    Due: {{ \Carbon\Carbon::parse($task->due_date)->format('M d') }}
                </span>
            @endif
            @if($isDone)
                <span class="text-xs text-gray-500">Completed</span>
            @endif
        </div>
    </div>
    <div class="mt-3 pt-3 border-t border-gray-200">
        <button onclick="viewTask({{ $task->id }})" class="w-full text-xs text-blue-600 hover:text-blue-800 font-semibold flex items-center justify-center gap-1">
            <i class="fa-solid fa-eye"></i>
            View Details
        </button>
    </div>
</div>

