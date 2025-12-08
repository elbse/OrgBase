<x-layout>
    <div class="max-w-3xl mx-auto">
        <div class="mb-8">
            <a href="{{route('documents.index')}}" class="text-blue-600 hover:text-blue-800 flex items-center gap-2 mb-4">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Back to Documents</span>
            </a>
            <h1 class="text-3xl font-bold text-gray-900">Upload New Document</h1>
            <p class="text-gray-600 mt-2">Upload a new document to your organization's document library.</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-8">
            <form action="{{route('documents.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="space-y-6">
                    <!-- Document Name -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                            Document Name <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{old('name')}}"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('name') border-red-500 @enderror"
                            placeholder="Enter document name"
                        >
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                        @enderror
                    </div>

                    <!-- File Upload -->
                    <div>
                        <label for="file" class="block text-sm font-semibold text-gray-700 mb-2">
                            Select File <span class="text-red-500">*</span>
                        </label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-blue-400 transition-colors duration-200">
                            <div class="space-y-1 text-center">
                                <i class="fa-solid fa-cloud-arrow-up text-4xl text-gray-400 mb-4"></i>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                        <span>Upload a file</span>
                                        <input 
                                            id="file" 
                                            name="file" 
                                            type="file" 
                                            required
                                            class="sr-only"
                                            accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.txt,.csv"
                                            onchange="updateFileName(this)"
                                        >
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PDF, DOC, DOCX, XLS, XLSX, PPT, PPTX, TXT, CSV (MAX. 10MB)</p>
                                <p id="fileName" class="text-sm text-gray-700 mt-2 font-medium"></p>
                            </div>
                        </div>
                        @error('file')
                            <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                        @enderror
                    </div>

                    <!-- Type and Status Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Type -->
                        <div>
                            <label for="type" class="block text-sm font-semibold text-gray-700 mb-2">
                                Document Type
                            </label>
                            <input 
                                type="text" 
                                id="type" 
                                name="type" 
                                value="{{old('type')}}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('type') border-red-500 @enderror"
                                placeholder="Auto-detected from file"
                                readonly
                            >
                            <p class="mt-1 text-xs text-gray-500">Will be auto-detected from file extension</p>
                            @error('type')
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
                                <option value="Archived" {{old('status') == 'Archived' ? 'selected' : ''}}>Archived</option>
                            </select>
                            @error('status')
                                <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                            @enderror
                        </div>
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
                            placeholder="Enter document description (optional)"
                        >{{old('description')}}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="mt-8 flex items-center justify-end gap-4 pt-6 border-t border-gray-200">
                    <a href="{{route('documents.index')}}" class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors duration-200 font-semibold">
                        Cancel
                    </a>
                    <button type="submit" class="px-6 py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition-colors duration-200 font-semibold flex items-center gap-2">
                        <i class="fa-solid fa-upload"></i>
                        Upload Document
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function updateFileName(input) {
            const fileName = input.files[0]?.name || '';
            const fileNameElement = document.getElementById('fileName');
            if (fileName) {
                fileNameElement.textContent = 'Selected: ' + fileName;
                // Auto-detect type from extension
                const extension = fileName.split('.').pop().toUpperCase();
                document.getElementById('type').value = extension;
            } else {
                fileNameElement.textContent = '';
            }
        }
    </script>
</x-layout>

