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

    @if(session('success'))
        <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    @if(session('error'))
        <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Document Name</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Uploaded By</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($documents ?? [] as $document)
                        @php
                            $type = strtoupper($document->type ?? 'FILE');
                            $typeIcons = [
                                'PDF' => ['fa-file-pdf', 'bg-red-100', 'text-red-600', 'bg-red-100', 'text-red-800'],
                                'DOCX' => ['fa-file-word', 'bg-blue-100', 'text-blue-600', 'bg-blue-100', 'text-blue-800'],
                                'DOC' => ['fa-file-word', 'bg-blue-100', 'text-blue-600', 'bg-blue-100', 'text-blue-800'],
                                'XLSX' => ['fa-file-excel', 'bg-green-100', 'text-green-600', 'bg-green-100', 'text-green-800'],
                                'XLS' => ['fa-file-excel', 'bg-green-100', 'text-green-600', 'bg-green-100', 'text-green-800'],
                                'PPTX' => ['fa-file-powerpoint', 'bg-orange-100', 'text-orange-600', 'bg-orange-100', 'text-orange-800'],
                                'PPT' => ['fa-file-powerpoint', 'bg-orange-100', 'text-orange-600', 'bg-orange-100', 'text-orange-800'],
                            ];
                            $iconData = $typeIcons[$type] ?? ['fa-file', 'bg-gray-100', 'text-gray-600', 'bg-gray-100', 'text-gray-800'];
                        @endphp
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 {{ $iconData[1] }} rounded-lg flex items-center justify-center">
                                        <i class="fa-solid {{ $iconData[0] }} {{ $iconData[2] }}"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">{{ $document->name }}</div>
                                        @if($document->file_size)
                                            <div class="text-sm text-gray-500">{{ $document->file_size }}</div>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $iconData[3] }} {{ $iconData[4] }}">{{ $type }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                {{ $document->uploader->name ?? 'Unknown' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @php
                                    $statusColors = [
                                        'Active' => 'bg-green-100 text-green-800',
                                        'Archived' => 'bg-yellow-100 text-yellow-800',
                                        'Deleted' => 'bg-red-100 text-red-800'
                                    ];
                                    $statusColor = $statusColors[$document->status] ?? 'bg-gray-100 text-gray-800';
                                @endphp
                                <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $statusColor }}">{{ $document->status }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                {{ $document->created_at->format('M d, Y') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center gap-3">
                                    <a href="{{ route('documents.download', $document) }}" class="text-blue-600 hover:text-blue-900" title="Download">
                                        <i class="fa-solid fa-download"></i>
                                    </a>
                                    <a href="{{ route('documents.show', $document) }}" class="text-gray-600 hover:text-gray-900" title="View">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <form action="{{ route('documents.destroy', $document) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this document?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" title="Delete">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-8 text-center text-gray-500">
                                <div class="flex flex-col items-center gap-2">
                                    <i class="fa-solid fa-file text-4xl text-gray-300"></i>
                                    <p class="text-lg font-medium">No documents found</p>
                                    <p class="text-sm">Get started by adding your first document.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if(($documents ?? collect())->count() > 0)
            <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
                <p class="text-sm text-gray-600 text-center">Showing {{ ($documents ?? collect())->count() }} document(s)</p>
            </div>
        @endif
    </div>
</x-layout>