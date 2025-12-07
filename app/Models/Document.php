<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'file_path',
        'file_size',
        'uploaded_by',
        'organization_id',
        'folder_id',
        'status',
        'description',
    ];

    /**
     * Get the user who uploaded the document.
     */
    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }

    /**
     * Get the organization that owns the document.
     */
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    /**
     * Get the folder that contains the document.
     */
    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }
}
