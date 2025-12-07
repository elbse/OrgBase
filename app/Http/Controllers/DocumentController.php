<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if (!Storage::exists($document->file_path)) {
            return redirect()->route('documents.index')
                ->with('error', 'File not found.');
        }

        return Storage::download($document->file_path, $document->name);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        // Delete the file from storage
        if (Storage::exists($document->file_path)) {
            Storage::delete($document->file_path);
        }

        // Delete the document record
        $document->delete();

        return redirect()->route('documents.index')
            ->with('success', 'Document deleted successfully.');
    }
}

