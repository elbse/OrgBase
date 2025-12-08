<x-layout>
    <div class="max-w-4xl mx-auto">
        <div class="mb-8 flex justify-between items-start">
            <div>
                <a href="{{ route('members.index') }}" class="text-blue-600 hover:text-blue-800 flex items-center gap-2 mb-4">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span>Back to Members</span>
                </a>
                <h1 class="text-3xl font-bold text-gray-900">{{ $member->user->name }}</h1>
                <p class="text-gray-600 mt-2">Member details and current status.</p>
            </div>
            <div class="flex gap-2">
                <a href="{{ route('members.edit', $member) }}" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors duration-200 flex items-center gap-2">
                    <i class="fa-solid fa-edit"></i>
                    Edit
                </a>
                <form action="{{ route('members.destroy', $member) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this member?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors duration-200 flex items-center gap-2">
                        <i class="fa-solid fa-trash"></i>
                        Delete
                    </button>
                </form>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md divide-y divide-gray-200">
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <p class="text-sm text-gray-500">Full Name</p>
                    <p class="text-lg font-semibold text-gray-900">{{ $member->user->name }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Email</p>
                    <p class="text-lg font-semibold text-gray-900">{{ $member->user->email }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Phone</p>
                    <p class="text-lg font-semibold text-gray-900">{{ $member->phone ?: 'N/A' }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Joined</p>
                    <p class="text-lg font-semibold text-gray-900">{{ $member->created_at->format('M d, Y') }}</p>
                </div>
            </div>
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <p class="text-sm text-gray-500">Role</p>
                    <span class="inline-flex items-center px-3 py-1 text-sm font-semibold rounded-full bg-blue-100 text-blue-800">{{ $member->role }}</span>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Status</p>
                    @php
                        $statusColor = $member->status === 'Active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800';
                    @endphp
                    <span class="inline-flex items-center px-3 py-1 text-sm font-semibold rounded-full {{ $statusColor }}">{{ $member->status }}</span>
                </div>
            </div>
        </div>
    </div>
</x-layout>


