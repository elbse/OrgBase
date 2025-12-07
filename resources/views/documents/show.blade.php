<x-layout>
    <div class="max-w-4xl mx-auto">
        <div class="mb-8">
            <a href="{{route('documents.index')}}" class="text-blue-600 hover:text-blue-800 flex items-center gap-2 mb-4">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Back to Documents</span>
            </a>
            <h1 class="text-3xl font-bold text-gray-900">Document Details</h1>
        </div>

        <div class="bg-white rounded-lg shadow-md p-8">
            <div class="flex items-start gap-6 mb-6">
                @php
                    $type = strtoupper($document->type ?? 'FILE');
                    $typeIcons = [
                        'PDF' => ['fa-file-pdf', 'bg-red-100', 'text-red-600'],
                        'DOCX' => ['fa-file-word', 'bg-blue-100', 'text-blue-600'],
                        'DOC' => ['fa-file-word', 'bg-blue-100', 'text-blue-600'],
                        'XLSX' => ['fa-file-excel', 'bg-green-100', 'text-green-600'],
                        'XLS' => ['fa-file-excel', 'bg-green-100', 'text-green-600'],
                        'PPTX' => ['fa-file-powerpoint', 'bg-orange-100', 'text-orange-600'],
                        'PPT' => ['fa-file-powerpoint', 'bg-orange-100', 'text-orange-600'],
                    ];
                    $iconData = $typeIcons[$type] ?? ['fa-file', 'bg-gray-100', 'text-gray-600'];
                @endphp
                <div class="w-20 h-20 {{ $iconData[1] }} rounded-lg flex items-center justify-center">
                    <i class="fa-solid {{ $iconData[0] }} {{ $iconData[2] }} text-3xl"></i>
                </div>
                <div class="flex-1">
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">{{ $document->name }}</h2>
                    <div class="flex items-center gap-4 flex-wrap">
                        <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">{{ $type }}</span>
                        @php
                            $statusColors = [
                                'Active' => 'bg-green-100 text-green-800',
                                'Archived' => 'bg-yellow-100 text-yellow-800',
                                'Deleted' => 'bg-red-100 text-red-800'
                            ];
                            $statusColor = $statusColors[$document->status] ?? 'bg-gray-100 text-gray-800';
                        @endphp
                        <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $statusColor }}">{{ $document->status }}</span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Uploaded By</label>
                    <p class="text-gray-900">{{ $document->uploader->name ?? 'Unknown' }}</p>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">File Size</label>
                    <p class="text-gray-900">{{ $document->file_size ?? 'N/A' }}</p>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Upload Date</label>
                    <p class="text-gray-900">{{ $document->created_at->format('F d, Y') }}</p>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Last Updated</label>
                    <p class="text-gray-900">{{ $document->updated_at->format('F d, Y') }}</p>
                </div>
            </div>

            @if($document->description)
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                    <p class="text-gray-900">{{ $document->description }}</p>
                </div>
            @endif

            <div class="flex items-center gap-4 pt-6 border-t border-gray-200">
                <a href="{{ route('documents.download', $document) }}" class="px-6 py-3 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition-colors duration-200 font-semibold flex items-center gap-2">
                    <i class="fa-solid fa-download"></i>
                    Download Document
                </a>
                <form action="{{ route('documents.destroy', $document) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this document?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-6 py-3 border border-red-300 text-red-600 rounded-lg hover:bg-red-50 transition-colors duration-200 font-semibold flex items-center gap-2">
                        <i class="fa-solid fa-trash"></i>
                        Delete Document
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>

