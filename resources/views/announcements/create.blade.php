<x-layout>
    <div class="max-w-3xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <div>
                <a href="{{ route('announcements.index') }}" class="text-blue-600 hover:text-blue-800 flex items-center gap-2 mb-2">
                    <i class="fa-solid fa-arrow-left"></i>
                    Back to announcements
                </a>
                <h1 class="text-3xl font-bold text-gray-900">Create Announcement</h1>
                <p class="text-gray-600 mt-2">Draft and share a new update.</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md border border-gray-100 p-6">
            <form>
                <div class="space-y-5">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Announcement title">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Type</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option>General</option>
                            <option>Event</option>
                            <option>Recognition</option>
                            <option>Maintenance</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Content</label>
                        <textarea rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Write your announcement..."></textarea>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-3">
                    <a href="{{ route('announcements.index') }}" class="px-5 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors duration-200">Cancel</a>
                    <button type="button" class="px-5 py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition-colors duration-200 font-semibold flex items-center gap-2">
                        <i class="fa-solid fa-paper-plane"></i>
                        Publish
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>


