<x-layout>
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Documents</h1>
            <p class="text-gray-600 mt-2">Manage your organization's documents and files.</p>
        </div>
        <button class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition-colors duration-200 font-semibold flex items-center gap-2">
            <i class="fa-solid fa-plus"></i>
            Add Document
        </button>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Document Name</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Uploaded By</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                    <i class="fa-solid fa-file-pdf text-red-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Annual Report 2024</div>
                                    <div class="text-sm text-gray-500">2.4 MB</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">PDF</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">John Doe</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Jan 15, 2024</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex items-center gap-3">
                                <a href="#" class="text-blue-600 hover:text-blue-900"><i class="fa-solid fa-download"></i></a>
                                <a href="#" class="text-gray-600 hover:text-gray-900"><i class="fa-solid fa-eye"></i></a>
                                <a href="#" class="text-red-600 hover:text-red-900"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fa-solid fa-file-word text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Meeting Minutes</div>
                                    <div class="text-sm text-gray-500">156 KB</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">DOCX</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Jane Smith</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Jan 12, 2024</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex items-center gap-3">
                                <a href="#" class="text-blue-600 hover:text-blue-900"><i class="fa-solid fa-download"></i></a>
                                <a href="#" class="text-gray-600 hover:text-gray-900"><i class="fa-solid fa-eye"></i></a>
                                <a href="#" class="text-red-600 hover:text-red-900"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
            <p class="text-sm text-gray-600 text-center">No more documents to display</p>
        </div>
    </div>
</x-layout>