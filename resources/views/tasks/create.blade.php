<x-layout>
    <div class="max-w-3xl mx-auto">
        <div class="mb-8">
            <a href="{{route('tasks.index')}}" class="text-blue-600 hover:text-blue-800 flex items-center gap-2 mb-4">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Back to Tasks</span>
            </a>
            <h1 class="text-3xl font-bold text-gray-900">Create New Task</h1>
            <p class="text-gray-600 mt-2">Add a new task to your organization's task list.</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-8">
            <form action="{{route('tasks.store')}}" method="POST">
                @csrf

                <div class="space-y-6">
                    <!-- Title -->
                    <div>
                        <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                            Task Title <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="title" 
                            name="title" 
                            value="{{old('title')}}"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror"
                            placeholder="Enter task title"
                        >
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">
                            Description
                        </label>
                        <textarea 
                            id="description" 
                            name="description" 
                            rows="4"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('description') border-red-500 @enderror"
                            placeholder="Enter task description"
                        >{{old('description')}}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                        @enderror
                    </div>

                    <!-- Status and Priority Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Status -->
                        <div>
                            <label for="status" class="block text-sm font-semibold text-gray-700 mb-2">
                                Status <span class="text-red-500">*</span>
                            </label>
                            <select 
                                id="status" 
                                name="status" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('status') border-red-500 @enderror"
                            >
                                <option value="todo" {{old('status') == 'todo' ? 'selected' : ''}}>To Do</option>
                                <option value="in_progress" {{old('status') == 'in_progress' ? 'selected' : ''}}>In Progress</option>
                                <option value="review" {{old('status') == 'review' ? 'selected' : ''}}>Review</option>
                                <option value="done" {{old('status') == 'done' ? 'selected' : ''}}>Done</option>
                            </select>
                            @error('status')
                                <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                            @enderror
                        </div>

                        <!-- Priority -->
                        <div>
                            <label for="priority" class="block text-sm font-semibold text-gray-700 mb-2">
                                Priority <span class="text-red-500">*</span>
                            </label>
                            <select 
                                id="priority" 
                                name="priority" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('priority') border-red-500 @enderror"
                            >
                                <option value="low" {{old('priority') == 'low' ? 'selected' : ''}}>Low</option>
                                <option value="medium" {{old('priority') == 'medium' ? 'selected' : ''}}>Medium</option>
                                <option value="high" {{old('priority') == 'high' ? 'selected' : ''}}>High</option>
                                <option value="urgent" {{old('priority') == 'urgent' ? 'selected' : ''}}>Urgent</option>
                            </select>
                            @error('priority')
                                <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Assigned To and Due Date Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Assigned To -->
                        <div>
                            <label for="assigned_to" class="block text-sm font-semibold text-gray-700 mb-2">
                                Assigned To
                            </label>
                            <input 
                                type="text" 
                                id="assigned_to" 
                                name="assigned_to" 
                                value="{{old('assigned_to')}}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('assigned_to') border-red-500 @enderror"
                                placeholder="Enter assignee name"
                            >
                            @error('assigned_to')
                                <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                            @enderror
                        </div>

                        <!-- Due Date -->
                        <div>
                            <label for="due_date" class="block text-sm font-semibold text-gray-700 mb-2">
                                Due Date
                            </label>
                            <input 
                                type="date" 
                                id="due_date" 
                                name="due_date" 
                                value="{{old('due_date')}}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('due_date') border-red-500 @enderror"
                            >
                            @error('due_date')
                                <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="mt-8 flex items-center justify-end gap-4 pt-6 border-t border-gray-200">
                    <a href="{{route('tasks.index')}}" class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors duration-200 font-semibold">
                        Cancel
                    </a>
                    <button type="submit" class="px-6 py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition-colors duration-200 font-semibold flex items-center gap-2">
                        <i class="fa-solid fa-plus"></i>
                        Create Task
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>

