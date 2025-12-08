<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::with('uploader')->orderBy('created_at', 'desc')->get();
        return view('documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('documents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'file' => 'required|file|max:10240', // Max 10MB
            'type' => 'nullable|string|max:50',
            'description' => 'nullable|string',
            'status' => 'required|in:Active,Archived',
        ]);

        // Get or create a default organization
        $organization = Organization::first();
        if (!$organization) {
            $organization = Organization::create([]);
        }

        // Get the current user or use a default
        $user = Auth::user();
        if (!$user) {
            $user = User::first();
        }

        // Handle file upload
        $file = $request->file('file');
        $originalName = $file->getClientOriginalName();
        $sanitizedName = preg_replace('/[^a-zA-Z0-9._-]/', '_', pathinfo($originalName, PATHINFO_FILENAME));
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '_' . $sanitizedName . '.' . $extension;
        $filePath = $file->storeAs('documents', $fileName, 'public');

        // Get file type from extension if not provided
        $fileType = $validated['type'] ?? strtoupper($file->getClientOriginalExtension());

        // Format file size
        $fileSize = $this->formatFileSize($file->getSize());

        // Create document record
        Document::create([
            'name' => $validated['name'],
            'type' => $fileType,
            'file_path' => $filePath,
            'file_size' => $fileSize,
            'uploaded_by' => $user->id ?? null,
            'organization_id' => $organization->id,
            'status' => $validated['status'],
            'description' => $validated['description'] ?? null,
        ]);

        return redirect()->route('documents.index')
            ->with('success', 'Document uploaded successfully!');
    }

    /**
     * Format file size to human readable format.
     */
    private function formatFileSize($bytes)
    {
        if ($bytes >= 1073741824) {
            return number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            return number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            return number_format($bytes / 1024, 2) . ' KB';
        } else {
            return $bytes . ' bytes';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        $document->load('uploader');
        return view('documents.show', compact('document'));
    }

    /**
     * Download the specified document.
     */
    public function download(Document $document)
    {
        if (!Storage::disk('public')->exists($document->file_path)) {
            return redirect()->route('documents.index')
                ->with('error', 'File not found.');
        }

        return Storage::disk('public')->download($document->file_path, $document->name);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        // Delete the file from storage
        if (Storage::disk('public')->exists($document->file_path)) {
            Storage::disk('public')->delete($document->file_path);
        }

        // Delete the document record
        $document->delete();

        return redirect()->route('documents.index')
            ->with('success', 'Document deleted successfully.');
    }
}

