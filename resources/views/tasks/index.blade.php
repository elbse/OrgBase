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

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-blue-500">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-sm font-semibold text-gray-700 uppercase">To Do</h3>
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-1 rounded-full">5</span>
            </div>
            <div class="space-y-3">
                <div class="bg-gray-50 rounded-lg p-4 border border-gray-200 hover:shadow-md transition-shadow duration-200 cursor-pointer">
                    <div class="flex items-start justify-between mb-2">
                        <h4 class="text-sm font-semibold text-gray-900">Design new logo</h4>
                        <span class="px-2 py-1 text-xs font-semibold rounded bg-yellow-100 text-yellow-800">High</span>
                    </div>
                    <p class="text-xs text-gray-600 mb-3">Create a modern logo design for the organization</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 text-xs font-semibold">JD</span>
                            </div>
                            <span class="text-xs text-gray-600">John Doe</span>
                        </div>
                        <span class="text-xs text-gray-500">Due: Feb 25</span>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg p-4 border border-gray-200 hover:shadow-md transition-shadow duration-200 cursor-pointer">
                    <div class="flex items-start justify-between mb-2">
                        <h4 class="text-sm font-semibold text-gray-900">Update website</h4>
                        <span class="px-2 py-1 text-xs font-semibold rounded bg-blue-100 text-blue-800">Medium</span>
                    </div>
                    <p class="text-xs text-gray-600 mb-3">Refresh the organization's website content</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                <span class="text-green-600 text-xs font-semibold">JS</span>
                            </div>
                            <span class="text-xs text-gray-600">Jane Smith</span>
                        </div>
                        <span class="text-xs text-gray-500">Due: Mar 1</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-yellow-500">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-sm font-semibold text-gray-700 uppercase">In Progress</h3>
                <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2 py-1 rounded-full">3</span>
            </div>
            <div class="space-y-3">
                <div class="bg-gray-50 rounded-lg p-4 border border-gray-200 hover:shadow-md transition-shadow duration-200 cursor-pointer">
                    <div class="flex items-start justify-between mb-2">
                        <h4 class="text-sm font-semibold text-gray-900">Event planning</h4>
                        <span class="px-2 py-1 text-xs font-semibold rounded bg-red-100 text-red-800">Urgent</span>
                    </div>
                    <p class="text-xs text-gray-600 mb-3">Plan the annual conference event</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center">
                                <span class="text-purple-600 text-xs font-semibold">MJ</span>
                            </div>
                            <span class="text-xs text-gray-600">Mike Johnson</span>
                        </div>
                        <span class="text-xs text-gray-500">Due: Feb 20</span>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg p-4 border border-gray-200 hover:shadow-md transition-shadow duration-200 cursor-pointer">
                    <div class="flex items-start justify-between mb-2">
                        <h4 class="text-sm font-semibold text-gray-900">Budget review</h4>
                        <span class="px-2 py-1 text-xs font-semibold rounded bg-blue-100 text-blue-800">Medium</span>
                    </div>
                    <p class="text-xs text-gray-600 mb-3">Review Q1 budget allocations</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center">
                                <span class="text-orange-600 text-xs font-semibold">AB</span>
                            </div>
                            <span class="text-xs text-gray-600">Alice Brown</span>
                        </div>
                        <span class="text-xs text-gray-500">Due: Feb 28</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-purple-500">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-sm font-semibold text-gray-700 uppercase">Review</h3>
                <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2 py-1 rounded-full">2</span>
            </div>
            <div class="space-y-3">
                <div class="bg-gray-50 rounded-lg p-4 border border-gray-200 hover:shadow-md transition-shadow duration-200 cursor-pointer">
                    <div class="flex items-start justify-between mb-2">
                        <h4 class="text-sm font-semibold text-gray-900">Member handbook</h4>
                        <span class="px-2 py-1 text-xs font-semibold rounded bg-green-100 text-green-800">Low</span>
                    </div>
                    <p class="text-xs text-gray-600 mb-3">Review and approve updated member handbook</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 text-xs font-semibold">JD</span>
                            </div>
                            <span class="text-xs text-gray-600">John Doe</span>
                        </div>
                        <span class="text-xs text-gray-500">Due: Mar 5</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-green-500">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-sm font-semibold text-gray-700 uppercase">Done</h3>
                <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full">4</span>
            </div>
            <div class="space-y-3">
                <div class="bg-gray-50 rounded-lg p-4 border border-gray-200 opacity-75">
                    <div class="flex items-start justify-between mb-2">
                        <h4 class="text-sm font-semibold text-gray-900 line-through">Setup new server</h4>
                        <span class="px-2 py-1 text-xs font-semibold rounded bg-gray-100 text-gray-800">Done</span>
                    </div>
                    <p class="text-xs text-gray-600 mb-3 line-through">Configure and deploy new server infrastructure</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                <span class="text-green-600 text-xs font-semibold">JS</span>
                            </div>
                            <span class="text-xs text-gray-600">Jane Smith</span>
                        </div>
                        <span class="text-xs text-gray-500">Completed</span>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-lg p-4 border border-gray-200 opacity-75">
                    <div class="flex items-start justify-between mb-2">
                        <h4 class="text-sm font-semibold text-gray-900 line-through">Monthly report</h4>
                        <span class="px-2 py-1 text-xs font-semibold rounded bg-gray-100 text-gray-800">Done</span>
                    </div>
                    <p class="text-xs text-gray-600 mb-3 line-through">Generate and submit monthly activity report</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center">
                                <span class="text-purple-600 text-xs font-semibold">MJ</span>
                            </div>
                            <span class="text-xs text-gray-600">Mike Johnson</span>
                        </div>
                        <span class="text-xs text-gray-500">Completed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>