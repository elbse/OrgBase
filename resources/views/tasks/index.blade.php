<x-layout>
    @if(session('success'))
        <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg flex items-center gap-2">
            <i class="fa-solid fa-check-circle"></i>
            <span>{{session('success')}}</span>
        </div>
    @endif

    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Tasks</h1>
            <p class="text-gray-600 mt-2">Manage projects and track progress across your organization.</p>
        </div>
        <a href="{{route('tasks.create')}}" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition-colors duration-200 font-semibold flex items-center gap-2">
            <i class="fa-solid fa-plus"></i>
            Create Task
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8" id="task-board">
        <!-- To Do Column -->
        <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-blue-500" 
             data-status="todo"
             ondrop="handleDrop(event)" 
             ondragover="handleDragOver(event)">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-sm font-semibold text-gray-700 uppercase">To Do</h3>
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-1 rounded-full" id="todo-count">
                    {{ $tasks->where('status', 'todo')->count() }}
                </span>
            </div>
            <div class="space-y-3 min-h-[200px]" id="todo-tasks">
                @foreach($tasks->where('status', 'todo') as $task)
                    @include('tasks.partials.task-card', ['task' => $task])
                @endforeach
            </div>
        </div>

        <!-- In Progress Column -->
        <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-yellow-500" 
             data-status="in_progress"
             ondrop="handleDrop(event)" 
             ondragover="handleDragOver(event)">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-sm font-semibold text-gray-700 uppercase">In Progress</h3>
                <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2 py-1 rounded-full" id="in-progress-count">
                    {{ $tasks->where('status', 'in_progress')->count() }}
                </span>
            </div>
            <div class="space-y-3 min-h-[200px]" id="in-progress-tasks">
                @foreach($tasks->where('status', 'in_progress') as $task)
                    @include('tasks.partials.task-card', ['task' => $task])
                @endforeach
            </div>
        </div>

        <!-- Review Column -->
        <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-purple-500" 
             data-status="review"
             ondrop="handleDrop(event)" 
             ondragover="handleDragOver(event)">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-sm font-semibold text-gray-700 uppercase">Review</h3>
                <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2 py-1 rounded-full" id="review-count">
                    {{ $tasks->where('status', 'review')->count() }}
                </span>
            </div>
            <div class="space-y-3 min-h-[200px]" id="review-tasks">
                @foreach($tasks->where('status', 'review') as $task)
                    @include('tasks.partials.task-card', ['task' => $task])
                @endforeach
            </div>
        </div>

        <!-- Done Column -->
        <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-green-500" 
             data-status="done"
             ondrop="handleDrop(event)" 
             ondragover="handleDragOver(event)">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-sm font-semibold text-gray-700 uppercase">Done</h3>
                <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full" id="done-count">
                    {{ $tasks->where('status', 'done')->count() }}
                </span>
            </div>
            <div class="space-y-3 min-h-[200px]" id="done-tasks">
                @foreach($tasks->where('status', 'done') as $task)
                    @include('tasks.partials.task-card', ['task' => $task])
                @endforeach
            </div>
        </div>
    </div>

    <!-- Task Detail Modal -->
    <div id="task-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 p-4" style="display: none;">
        <div class="bg-white rounded-lg shadow-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center">
                <h2 class="text-2xl font-bold text-gray-900" id="modal-title">Task Details</h2>
                <button onclick="closeTaskModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <i class="fa-solid fa-times text-2xl"></i>
                </button>
            </div>
            <div class="p-6">
                <div class="space-y-6">
                    <!-- Title -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
                        <p class="text-lg text-gray-900" id="modal-task-title"></p>
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                        <p class="text-gray-600 whitespace-pre-wrap" id="modal-task-description"></p>
                    </div>

                    <!-- Status and Priority -->
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                            <span id="modal-task-status" class="inline-block px-3 py-1 rounded-full text-sm font-semibold"></span>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Priority</label>
                            <span id="modal-task-priority" class="inline-block px-3 py-1 rounded-full text-sm font-semibold"></span>
                        </div>
                    </div>

                    <!-- Assigned To -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Assigned To</label>
                        <p class="text-gray-600" id="modal-task-assigned"></p>
                    </div>

                    <!-- Due Date -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Due Date</label>
                        <p class="text-gray-600" id="modal-task-due-date"></p>
                    </div>

                    <!-- Created At -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Created At</label>
                        <p class="text-gray-600" id="modal-task-created"></p>
                    </div>
                </div>
            </div>
            <div class="sticky bottom-0 bg-gray-50 border-t border-gray-200 px-6 py-4 flex justify-end">
                <button onclick="closeTaskModal()" class="bg-gray-600 text-white px-6 py-2 rounded-lg hover:bg-gray-700 transition-colors">
                    Close
                </button>
            </div>
        </div>
    </div>

    <script>
        let draggedTask = null;

        function handleDragStart(e) {
            draggedTask = e.target.closest('.task-card');
            e.dataTransfer.effectAllowed = 'move';
            e.dataTransfer.setData('text/html', draggedTask.outerHTML);
            draggedTask.style.opacity = '0.5';
        }

        function handleDragEnd(e) {
            if (draggedTask) {
                draggedTask.style.opacity = '1';
            }
        }

        function handleDragOver(e) {
            if (e.preventDefault) {
                e.preventDefault();
            }
            e.dataTransfer.dropEffect = 'move';
            return false;
        }

        function handleDrop(e) {
            if (e.stopPropagation) {
                e.stopPropagation();
            }

            const targetColumn = e.currentTarget;
            const newStatus = targetColumn.getAttribute('data-status');
            const taskId = draggedTask.getAttribute('data-task-id');
            const oldStatus = draggedTask.getAttribute('data-status');

            if (newStatus === oldStatus) {
                draggedTask.style.opacity = '1';
                return false;
            }

            // Update task status via AJAX
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
            fetch(`/tasks/${taskId}/status`, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                    status: newStatus
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Move task to new column
                    const targetContainer = targetColumn.querySelector(`#${newStatus.replace('_', '-')}-tasks`);
                    draggedTask.setAttribute('data-status', newStatus);
                    targetContainer.appendChild(draggedTask);
                    draggedTask.style.opacity = '1';

                    // Update counts
                    updateTaskCounts();

                    // Update task card styling for done status
                    if (newStatus === 'done') {
                        draggedTask.classList.add('opacity-75');
                        draggedTask.querySelectorAll('h4, p').forEach(el => el.classList.add('line-through'));
                    } else {
                        draggedTask.classList.remove('opacity-75');
                        draggedTask.querySelectorAll('h4, p').forEach(el => el.classList.remove('line-through'));
                    }
                } else {
                    alert('Failed to update task status');
                    draggedTask.style.opacity = '1';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while updating the task');
                draggedTask.style.opacity = '1';
            });

            return false;
        }

        function updateTaskCounts() {
            const statuses = ['todo', 'in_progress', 'review', 'done'];
            statuses.forEach(status => {
                const containerId = status.replace('_', '-') + '-tasks';
                const container = document.getElementById(containerId);
                const count = container ? container.querySelectorAll('.task-card').length : 0;
                const countElement = document.getElementById(status.replace('_', '-') + '-count');
                if (countElement) {
                    countElement.textContent = count;
                }
            });
        }

        async function viewTask(taskId) {
            try {
                const response = await fetch(`/tasks/${taskId}`);
                const task = await response.json();

                // Populate modal
                document.getElementById('modal-task-title').textContent = task.title || 'N/A';
                document.getElementById('modal-task-description').textContent = task.description || 'No description provided.';
                
                // Status badge
                const statusElement = document.getElementById('modal-task-status');
                const statusClasses = {
                    'todo': 'bg-blue-100 text-blue-800',
                    'in_progress': 'bg-yellow-100 text-yellow-800',
                    'review': 'bg-purple-100 text-purple-800',
                    'done': 'bg-green-100 text-green-800'
                };
                const statusLabels = {
                    'todo': 'To Do',
                    'in_progress': 'In Progress',
                    'review': 'Review',
                    'done': 'Done'
                };
                statusElement.textContent = statusLabels[task.status] || task.status;
                statusElement.className = `inline-block px-3 py-1 rounded-full text-sm font-semibold ${statusClasses[task.status] || 'bg-gray-100 text-gray-800'}`;

                // Priority badge
                const priorityElement = document.getElementById('modal-task-priority');
                const priorityClasses = {
                    'low': 'bg-green-100 text-green-800',
                    'medium': 'bg-blue-100 text-blue-800',
                    'high': 'bg-yellow-100 text-yellow-800',
                    'urgent': 'bg-red-100 text-red-800'
                };
                priorityElement.textContent = task.priority ? task.priority.charAt(0).toUpperCase() + task.priority.slice(1) : 'N/A';
                priorityElement.className = `inline-block px-3 py-1 rounded-full text-sm font-semibold ${priorityClasses[task.priority] || 'bg-gray-100 text-gray-800'}`;

                document.getElementById('modal-task-assigned').textContent = task.assigned_to || 'Unassigned';
                document.getElementById('modal-task-due-date').textContent = task.due_date ? new Date(task.due_date).toLocaleDateString() : 'No due date';
                document.getElementById('modal-task-created').textContent = task.created_at ? new Date(task.created_at).toLocaleString() : 'N/A';

                // Show modal
                const modal = document.getElementById('task-modal');
                modal.classList.remove('hidden');
                modal.style.display = 'flex';
                modal.classList.add('items-center', 'justify-center');
            } catch (error) {
                console.error('Error fetching task:', error);
                alert('Failed to load task details');
            }
        }

        function closeTaskModal() {
            const modal = document.getElementById('task-modal');
            modal.classList.add('hidden');
            modal.style.display = 'none';
            modal.classList.remove('items-center', 'justify-center');
        }

        // Close modal when clicking outside
        document.getElementById('task-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeTaskModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeTaskModal();
            }
        });
    </script>
</x-layout>
