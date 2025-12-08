<x-layout>
    <div class="max-w-4xl mx-auto">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Profile</h1>
                <p class="text-gray-600 mt-2">Your personal information and account details.</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md border border-gray-100 overflow-hidden">
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <p class="text-sm text-gray-500">Full Name</p>
                    <p class="text-lg font-semibold text-gray-900">{{ optional($user)->name ?? 'Guest User' }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Email</p>
                    <p class="text-lg font-semibold text-gray-900">{{ optional($user)->email ?? 'Not provided' }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Role</p>
                    <p class="text-lg font-semibold text-gray-900">{{ optional($user)->role ?? 'Member' }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Status</p>
                    <span class="inline-flex items-center px-3 py-1 text-sm font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                </div>
            </div>
        </div>
    </div>
</x-layout>


