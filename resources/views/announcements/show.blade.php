<x-layout>
    <div class="max-w-4xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <div>
                <a href="{{ route('announcements.index') }}" class="text-blue-600 hover:text-blue-800 flex items-center gap-2 mb-2">
                    <i class="fa-solid fa-arrow-left"></i>
                    Back to announcements
                </a>
                <h1 class="text-3xl font-bold text-gray-900 capitalize">{{ str_replace('-', ' ', $announcement) }}</h1>
                <p class="text-gray-600 mt-2">Details and context for this announcement.</p>
            </div>
            <a href="mailto:?subject={{ urlencode($announcement) }}&body={{ urlencode(route('announcements.show', $announcement)) }}" class="px-4 py-2 text-sm border border-gray-300 rounded-lg hover:bg-gray-50 text-gray-700 flex items-center gap-2">
                <i class="fa-solid fa-share"></i>
                Share
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md border border-gray-100 p-6 space-y-4">
            <p class="text-sm text-gray-500">Posted by Admin • Just now</p>
            <p class="text-gray-700 leading-relaxed">
                This is a placeholder announcement detail page. Hook this up to your announcement model/content as needed. The link is shareable and the back button returns you to the announcements list.
            </p>
            <div class="flex items-center gap-3 pt-4 border-t border-gray-200">
                <span class="inline-flex items-center px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Active</span>
                <span class="text-sm text-gray-500">Views: 245</span>
            </div>
        </div>
    </div>
</x-layout>


