<x-layout>
    <div class="max-w-3xl mx-auto">
        <div class="mb-8">
            <a href="{{route('members.index')}}" class="text-blue-600 hover:text-blue-800 flex items-center gap-2 mb-4">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Back to Members</span>
            </a>
            <h1 class="text-3xl font-bold text-gray-900">Add New Member</h1>
            <p class="text-gray-600 mt-2">Add a new member to your organization.</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-8">
            <form action="{{route('members.store')}}" method="POST">
                @csrf

                <div class="space-y-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{old('name')}}"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('name') border-red-500 @enderror"
                            placeholder="Enter member's full name"
                        >
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                        @enderror
                    </div>

                    <!-- Email and Phone Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                Email Address <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                value="{{old('email')}}"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('email') border-red-500 @enderror"
                                placeholder="Enter email address"
                            >
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                                Phone Number
                            </label>
                            <input 
                                type="text" 
                                id="phone" 
                                name="phone" 
                                value="{{old('phone')}}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('phone') border-red-500 @enderror"
                                placeholder="+1 (555) 123-4567"
                            >
                            @error('phone')
                                <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Role and Status Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Role -->
                        <div>
                            <label for="role" class="block text-sm font-semibold text-gray-700 mb-2">
                                Role <span class="text-red-500">*</span>
                            </label>
                            <select 
                                id="role" 
                                name="role" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('role') border-red-500 @enderror"
                            >
                                <option value="">Select a role</option>
                                <option value="Admin" {{old('role') == 'Admin' ? 'selected' : ''}}>Admin</option>
                                <option value="Member" {{old('role') == 'Member' ? 'selected' : ''}}>Member</option>
                                <option value="Volunteer" {{old('role') == 'Volunteer' ? 'selected' : ''}}>Volunteer</option>
                            </select>
                            @error('role')
                                <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                            @enderror
                        </div>

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
                                <option value="">Select status</option>
                                <option value="Active" {{old('status') == 'Active' ? 'selected' : ''}}>Active</option>
                                <option value="Inactive" {{old('status') == 'Inactive' ? 'selected' : ''}}>Inactive</option>
                            </select>
                            @error('status')
                                <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="mt-8 flex items-center justify-end gap-4 pt-6 border-t border-gray-200">
                    <a href="{{route('members.index')}}" class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors duration-200 font-semibold">
                        Cancel
                    </a>
                    <button type="submit" class="px-6 py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition-colors duration-200 font-semibold flex items-center gap-2">
                        <i class="fa-solid fa-plus"></i>
                        Add Member
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>

