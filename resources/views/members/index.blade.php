<x-layout>
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Members</h1>
            <p class="text-gray-600 mt-2">Manage your organization members and their roles.</p>
        </div>
        <a href="{{route('members.create')}}" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition-colors duration-200 font-semibold flex items-center gap-2">
            <i class="fa-solid fa-plus"></i>
            Add Member
        </a>
    </div>

    @if(session('success'))
        <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            <div class="flex items-center gap-4">
                <div class="relative">
                    <input type="text" placeholder="Search members..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="fa-solid fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                    <option>All Roles</option>
                    <option>Officers</option>
                    <option>Member</option>
                    <option>Volunteer</option>
                </select>
            </div>
            <div class="flex gap-2">
                <button class="px-4 py-2 text-sm text-gray-600 hover:text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                    <i class="fa-solid fa-download"></i> Export
                </button>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Member</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Role</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Joined</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($members ?? [] as $member)
                        @php
                            $user = $member->user;
                            $name = $user->name ?? '';
                            $initials = strtoupper(substr($name, 0, 1) . (strlen($name) > 1 ? substr(strstr($name, ' ') ?: $name, 1, 1) : ''));
                            $colorClasses = [
                                ['bg-blue-100', 'text-blue-600'],
                                ['bg-green-100', 'text-green-600'],
                                ['bg-orange-100', 'text-orange-600'],
                                ['bg-purple-100', 'text-purple-600'],
                                ['bg-pink-100', 'text-pink-600'],
                                ['bg-indigo-100', 'text-indigo-600']
                            ];
                            $colorIndex = abs(crc32($name)) % count($colorClasses);
                            $avatarColor = $colorClasses[$colorIndex];
                        @endphp
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 {{ $avatarColor[0] }} rounded-full flex items-center justify-center">
                                        <span class="{{ $avatarColor[1] }} font-semibold">{{ $initials }}</span>
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">{{ $user->name ?? 'N/A' }}</div>
                                        @if($member->phone)
                                            <div class="text-sm text-gray-500">{{ $member->phone }}</div>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $user->email ?? 'N/A' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @php
                                    $roleColors = [
                                        'Admin' => 'bg-purple-100 text-purple-800',
                                        'Member' => 'bg-blue-100 text-blue-800',
                                        'Volunteer' => 'bg-yellow-100 text-yellow-800'
                                    ];
                                    $roleColor = $roleColors[$member->role] ?? 'bg-gray-100 text-gray-800';
                                @endphp
                                <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $roleColor }}">{{ $member->role }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @php
                                    $statusColor = $member->status === 'Active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800';
                                @endphp
                                <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $statusColor }}">{{ $member->status }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $member->created_at->format('M d, Y') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center gap-3">
                                    <a href="#" class="text-blue-600 hover:text-blue-900"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#" class="text-gray-600 hover:text-gray-900"><i class="fa-solid fa-edit"></i></a>
                                    <a href="#" class="text-red-600 hover:text-red-900"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-8 text-center text-gray-500">
                                <div class="flex flex-col items-center gap-2">
                                    <i class="fa-solid fa-users text-4xl text-gray-300"></i>
                                    <p class="text-lg font-medium">No members found</p>
                                    <p class="text-sm">Get started by adding your first member.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="bg-gray-50 px-6 py-4 border-t border-gray-200 flex justify-between items-center">
            <p class="text-sm text-gray-600">Showing {{ ($members ?? collect())->count() }} of {{ ($members ?? collect())->count() }} members</p>
            <div class="flex gap-2">
                <button class="px-4 py-2 text-sm text-gray-600 hover:text-gray-900 border border-gray-300 rounded-lg hover:bg-white transition-colors duration-200 disabled:opacity-50" disabled>
                    Previous
                </button>
                <button class="px-4 py-2 text-sm text-gray-600 hover:text-gray-900 border border-gray-300 rounded-lg hover:bg-white transition-colors duration-200 disabled:opacity-50" disabled>
                    Next
                </button>
            </div>
        </div>
    </div>
</x-layout>