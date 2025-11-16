<x-layout>
    <div class="space-y-6">
        <!-- Header Section -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Documents</h1>
                <p class="text-gray-600 mt-1">Manage your organization's documents and files</p>
            </div>
            <button class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition-all duration-200 hover:shadow-lg">
                <i class="fas fa-plus"></i>
                <span>Upload Document</span>
            </button>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Total Documents</p>
                        <p class="text-3xl font-bold text-gray-900 mt-2">0</p>
                    </div>
                    <div class="bg-blue-100 rounded-full p-4">
                        <i class="fas fa-file-alt text-blue-600 text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Storage Used</p>
                        <p class="text-3xl font-bold text-gray-900 mt-2">0 MB</p>
                    </div>
                    <div class="bg-green-100 rounded-full p-4">
                        <i class="fas fa-hdd text-green-600 text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Recent Uploads</p>
                        <p class="text-3xl font-bold text-gray-900 mt-2">0</p>
                    </div>
                    <div class="bg-purple-100 rounded-full p-4">
                        <i class="fas fa-clock text-purple-600 text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search and Filter Bar -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
            <div class="flex flex-col sm:flex-row gap-4">
                <div class="flex-1 relative">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <input type="text" placeholder="Search documents..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Categories</option>
                    <option>Meeting Notes</option>
                    <option>Financial Reports</option>
                    <option>Event Plans</option>
                    <option>Other</option>
                </select>
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>Sort by Date</option>
                    <option>Sort by Name</option>
                    <option>Sort by Size</option>
                </select>
            </div>
        </div>

        <!-- Documents Grid -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-semibold text-gray-900">All Documents</h2>
                <div class="flex gap-2">
                    <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                        <i class="fas fa-th-large text-gray-600"></i>
                    </button>
                    <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                        <i class="fas fa-list text-gray-600"></i>
                    </button>
                </div>
            </div>

            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="bg-gray-100 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-folder-open text-gray-400 text-4xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">No documents yet</h3>
                <p class="text-gray-600 mb-6">Get started by uploading your first document</p>
                <button class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition-all duration-200">
                    <i class="fas fa-upload"></i>
                    <span>Upload Document</span>
                </button>
            </div>

            <!-- Document Cards (Example - will show when documents exist) -->
            <!--
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow cursor-pointer">
                    <div class="flex items-start justify-between mb-3">
                        <div class="bg-blue-100 rounded-lg p-3">
                            <i class="fas fa-file-pdf text-blue-600 text-xl"></i>
                        </div>
                        <button class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-1">Document Name.pdf</h3>
                    <p class="text-sm text-gray-500 mb-2">2.5 MB</p>
                    <p class="text-xs text-gray-400">Uploaded 2 days ago</p>
                </div>
            </div>
            -->
        </div>
    </div>
</x-layout>
