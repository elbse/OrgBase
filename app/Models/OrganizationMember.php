<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'organization_id',
        'role',
        'status',
        'phone',
    ];

    /**
     * Get the user that owns the organization member.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the organization that owns the member.
     */
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
